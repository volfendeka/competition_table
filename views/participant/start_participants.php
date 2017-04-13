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
    <div>
        <h3 class="centered"><?php
            echo "<p>Чемпіонат </p>";
            echo "<p>з пожежно-прикладного спорту </p>";
            echo "<p>в Тернопільській області</p>";
            ?>
        </h3>
        <h1 class="centered"><?php
            echo Html::encode($this->title);
            ?>
        </h1>
        <h6 class="right_title">
            <?php
            echo $title_vud;
            ?>
        </h6>
    </div>


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
        ],
    ]);

    if(isset($var)){
        echo "<pre>";
        var_dump($var);

    }
    ?>
</div>
