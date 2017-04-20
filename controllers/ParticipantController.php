<?php
namespace app\controllers;

use app\models\Teams;
use Yii;
use app\models\Participants;
use app\models\ParticipantSearch;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;
/**
 * ParticipantController implements the CRUD actions for Participants model.
 */
class ParticipantController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' =>[
                'class' => AccessControl::className(),
                'only' => ['create', 'index',
                    'event',
                    'generate_zabigu',
                    'add_where_zero'
                ],
                'rules' => [
                    [
                        'actions' => [
                            'view_start',
                            'view_shturm_results',
                            'view_sto_metriv_results',
                            'view_dvoborstvo_results',
                            'view_participants_by_team',
                            'view_participants_by_zabig',
                            'get_result_shturm',
                            'get_result_sto_metriv',
                            'get_result_dvoborstvo',
                            'get_results',
                        ],
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
     * Lists all Participants models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ParticipantSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single Participants model.
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
     * Creates a new Participants model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id = false)
    {
        $model = new Participants();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->participant_id]);
        } else {
            $teams = $model->getTeam_id_paire();
            return $this->render('create', [
                'model' => $model,
                'teams' => $teams,
                'team_id' => $id
            ]);
        }
    }
    /**
     * Updates an existing Participants model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->participant_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    /**
     * Deletes an existing Participants model.
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
     * Finds the Participants model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Participants the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Participants::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionView_participants_by_team($id){
        $searchModel = new ParticipantSearch();
        $dataProvider = $searchModel->search(['ParticipantSearch' => ['team_id' => $id]]);
        $team = Teams::findOne(['team_id' => $id]);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'team_name' => !empty($team['team_name'])?$team['team_name']:'',
            'team_id' => !empty($team['team_id'])?$team['team_id']:'',
        ]);
    }
    public function actionView_participants_for_team(){
        $cookies = Yii::$app->request->cookies;
        $team_id = $cookies->getValue('team_id', 0);
        $participant_model = new Participants();
        $amount = $participant_model->getParticipantsAmount($team_id);
        $searchModel = new ParticipantSearch();
        $dataProvider = $searchModel->search(['ParticipantSearch' => ['team_id' => $team_id]]);
        $team = Teams::findOne(['team_id' => $team_id]);
        return $this->render('guest_index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'team_name' => !empty($team['team_name'])?$team['team_name']:'',
            'team_id' => !empty($team['team_id'])?$team['team_id']:'',
            'amount' => $amount,
        ]);
    }
    public function actionView_participants_by_zabig($vud, $zabig_number){
        $zabig = $vud.'_zabig';
        $view_file = 'editable_'.$vud;
        $searchModel = new ParticipantSearch();
        $dataProvider = $searchModel->search(['ParticipantSearch' => [$zabig => $zabig_number]]);
        if(Yii::$app->request->post('hasEditable')){
            $participant_id = Yii::$app->request->post('editableKey');
            $participant = Participants::findOne($participant_id);
            $out = Json::encode(['output' =>  '', 'message' => '']);
            $post = [];
            $posted = current($_POST['Participants']);
            $post['Participants'] = $posted;
            if($participant->load($post)){
                $participant->save();
                if(isset($posted['sto_metriv_try_1'])){
                    $output = $posted['sto_metriv_try_1'];
                }elseif (isset($posted['sto_metriv_try_2'])) {
                    $output = $posted['sto_metriv_try_2'];
                }elseif (isset($posted['shturm_try_1'])) {
                    $output = $posted['shturm_try_1'];
                }elseif (isset($posted['shturm_try_2'])) {
                    $output = $posted['shturm_try_2'];
                }else{
                    $output = '';
                }
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
    public function actionGet_results(){
        $team_model = new Teams();
        $team_model->getTeamsTimes('shturm');
        $team_model->getTeamsTimes('sto_metriv');
        $team_model->getTeamsTimes('dvoborstvo');
        $team_model->setResult(['estafeta', 'boyove', 'shturm', 'sto_metriv', 'dvoborstvo', 'tru_kolinna'], 'team');
        $team_model->getPlaces();
        $team_model->setFinalResult('result','team', 'estafeta');
        return $this->redirect(['team/view_results']);
    }
    public function actionGet_result_shturm(){
        $team_model = new Teams();
        $team_model->getTeamsTimes('shturm');
        $team_model->setResult(['shturm'], 'participant');

        return $this->redirect(['team/view_results']);
    }
    public function actionGet_result_sto_metriv(){
        $team_model = new Teams();
        $team_model->getTeamsTimes('sto_metriv');
        $team_model->setResult(['sto_metriv'], 'participant');

        return $this->redirect(['team/view_results']);
    }
    public function actionGet_result_dvoborstvo(){
        $participant_model = new Participants();
        $participant_model->getDvoborstvo();
        $team_model = new Teams();
        $team_model->setResult(['sto_metriv', 'shturm', 'dvoborstvo'], 'participant');

        return $this->redirect(['team/view_results']);
    }
    public function actionView_results(){
        $searchModel = new ParticipantSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('result', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionView_shturm_results(){
        $searchModel = new ParticipantSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('shturm_result', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionView_sto_metriv_results(){
        $searchModel = new ParticipantSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('sto_metriv_result', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionView_dvoborstvo_results(){
        $searchModel = new ParticipantSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('dvoborstvo_result', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionGenerate_zabigu(){
        $model = new Participants();
        $model->saveParticipantsZabigu($model->generateParticipantsZabigu());
        $model->saveTeamsZabigu($model->generateTeamsZabigu());
        return $this->redirect(['view_start?title=1']);
    }
    public function actionView_start($title){
        $searchModel = new ParticipantSearch();
        $dataProvider = new ActiveDataProvider([
            'query' => Participants::find(),
            'sort' => ['defaultOrder' => [
                'shturm_zabig' => SORT_ASC,
                'doroga_number' => SORT_ASC,
            ]]
        ]);

        $model = new Participants();
        $title_vud = $model->getTitleVud($title);
        $title = $model->getTitle($title);
        return $this->render('start_participants', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'title' => $title,
            'title_vud' => $title_vud,
        ]);
    }
    public function actionAdd_where_zero(){
        $model = new Participants();
        $model->addTimeToZeroes('shturm');
        $model->addTimeToZeroes('sto_metriv');
        return $this->redirect(['view_results']);
    }
}