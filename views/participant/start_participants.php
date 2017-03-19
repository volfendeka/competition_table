<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use app\models\Teams;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ParticipantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$title = isset($title)?$title:'';
$this->title = $title;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="participants-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'summary' => '',
        'columns' => [
            /*
            ['class' => 'yii\grid\SerialColumn',
                'contentOptions'=>['id'=>'num-column'],
            ],
*/
            //'participant_id',
            //'team_id',

            [
                'attribute'=>'shturm_zabig',
                'width'=>'150px',
                'value'=>function ($model, $key, $index, $widget) {
                    return $model->shturm_zabig;
                },
                'group'=>true,
                'label' => 'Забіг',
            ],
            [
                'attribute'=>'doroga_number',
                'width'=>'50px',
                'value'=>function ($model, $key, $index, $widget) {
                    return $model->doroga_number;
                },
                'label' => 'Доріжка',
            ],

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
                'width'=>'250px',
                'value'=>function ($model, $key, $index, $widget) {
                    $team = Teams::findOne(["team_id" => "{$model->team_id}"]);
                    return isset($team['team_name'])?$team['team_name']:'';
                },
                'label' => 'Команда',
            ],
            /*
            [
                'attribute' => 'shturm_result',
                'format' => 'text',
                'label' => 'Штурм Результат',
            ],
            [
                'attribute' => 'sto_metriv_result',
                'format' => 'text',
                'label' => '100 Результат',
            ],
            [
                'attribute' => 'dvoborstvo_result',
                'format' => 'text',
                'label' => 'Двоб Результат',
            ],
            [
                'attribute' => 'sto_metriv_zabig',
                'format' => 'text',
                'label' => '100 забіг№',
            ],

            ['class' => 'yii\grid\ActionColumn'],
             */
        ],
    ]);

    if(isset($var)){
        echo "<pre>";
        var_dump($var);

    }
    ?>
</div>
