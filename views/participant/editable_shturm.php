<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use app\models\Teams;


/* @var $this yii\web\View */
/* @var $searchModel app\models\ParticipantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Учасники ' . Yii::$app->request->get('zabig_number') . ' забігу Штурмовки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="participants-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'pjax' => true,
        'export' => false,
        'summary' => '',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
                'contentOptions'=>['id'=>'num-column'],],

            [
                'attribute' => 'last_name',
                'format' => 'text',
                'label' => 'Прізвище',
            ],
            [
                'attribute' => 'first_name',
                'format' => 'text',
                'label' => 'Ім\'я',
            ],
            [
                'attribute'=>'team_id',
                'width'=>'150px',
                'value'=>function ($model) {
                    $team = Teams::findOne(["team_id" => "{$model->team_id}"]);
                    return isset($team['team_name'])?$team['team_name']:'';
                },
                'label' => 'Команда',
            ],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'shturm_try_1',
                'format' => 'text',
                'label' => 'Спроба 1',
            ],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'shturm_try_2',
                'format' => 'text',
                'label' => 'Спроба 2',
            ],
            [
                'attribute' => 'shturm',
                'format' => 'text',
                'label' => 'Кращий час',
            ],
            [
                'attribute' => 'doroga_number',
                'format' => 'text',
                'label' => 'Номер доріжки',
            ],
        ],
    ]);

    if(isset($var)){
        echo "<pre>";
        var_dump($var);

    }
    ?>
</div>
