<?php

namespace app\controllers;

use app\models\Participants;
use Yii;
use app\models\Teams;
use app\models\TeamsSearch;
use yii\db\Connection;
use yii\db\Query;
use yii\web\Controller;
use yii\helpers\Json;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Cookie;
use yii\filters\AccessControl;

/**
 * TeamController implements the CRUD actions for Teams model.
 */
class TeamController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' =>[
                'class' => AccessControl::className(),
                'only' => ['update', 'index', 'event',
                    'edit_teams',
                    'view_start',
                    'view_personal_results',
                    'view_team_results',

                ],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ]
                ]
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Teams models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TeamsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Teams model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Teams model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $team_model = new Teams();
        $participant_model = new Participants();

        if ($team_model->load(Yii::$app->request->post()) && $team_model->save()) {
            $cookies = Yii::$app->response->cookies;
            $cookies->add(new Cookie([
                'name' => 'team_id',
                'value' => $team_model->team_id,
            ]));

            return $this->redirect(['team/create_command', [
                'team_model' => $team_model,
                'participant_model' => $participant_model,
            ]]);
        } else {
            return $this->render('create', [
                'model' => $team_model,
            ]);
        }
    }

    public function actionCreate_command()
    {

        $team_model = new Teams();
        $participant_model = new Participants();

        $cookies = Yii::$app->request->cookies;
        $team_id = $cookies->getValue('team_id', 1);
        $number = $participant_model->getParticipantsAmount($team_id);

        if($number >= Participants::$participants_amount+1){
            return $this->redirect(['participant/view_participants_for_team/']);
        }
        if($participant_model->load(Yii::$app->request->post()) && $participant_model->save()){
            return $this->redirect(['team/create_command', [
                'team_model' => $team_model,
                'participant' => $participant_model,
            ]]);
        } else {
            return $this->render('create_command', [
                'team_model' => $team_model,
                'participant' => $participant_model,
                'number' => $number ?? ''
            ]);
        }
    }

    /**
     * Updates an existing Teams model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->team_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Teams model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        

        return $this->redirect(Yii::$app->request->referrer);
    }

    /**
     * Finds the Teams model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Teams the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Teams::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


    public function actionEdit_teams(){

        $searchModel = new TeamsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        if(Yii::$app->request->post('hasEditable')){
            $team_id = Yii::$app->request->post('editableKey');
            $team = Teams::findOne($team_id);

            $out = Json::encode(['output' =>  '', 'message' => '']);
            $post = [];
            $posted = current($_POST['Teams']);
            $post['Teams'] = $posted;

            if($team->load($post)){
                $team->save();
                $output = 'обновлено';
                $out = Json::encode(['output' =>  $output, 'message' => '']);
            }
            echo $out;
            return;
        }

        return $this->render('editable_index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView_results(){
        $searchModel = new TeamsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('result', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView_personal_results(){
        $searchModel = new TeamsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('personal_result', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView_team_results(){
        $searchModel = new TeamsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('team_result', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionView_general_results(){
        $searchModel = new TeamsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('general_result', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView_start(){
        $searchModel = new TeamsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('start_team', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView_teams_by_zabig($zabig_number){
        $zabig = 'team_zabig';
        $view_file = 'editable_index';
        $searchModel = new TeamsSearch();
        $dataProvider = $searchModel->search(['TeamsSearch' => [$zabig => $zabig_number]]);
        if(Yii::$app->request->post('hasEditable')){
            $team_id = Yii::$app->request->post('editableKey');
            $team = Teams::findOne($team_id);
            $out = Json::encode(['output' =>  '', 'message' => '']);
            $post = [];
            $posted = current($_POST['Teams']);
            $post['Teams'] = $posted;
            if($team->load($post)){
                $team->save();
                $output = 'обновлено';
                $out = Json::encode(['output' =>  $output, 'message' => '']);
            }
            echo $out;
            return;
        }
        return $this->render($view_file, [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}
