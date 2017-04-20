<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use app\models\Teams;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ParticipantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Стартовий протокол команд';
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
            <h2 class="centered">Стартовий протокол (командні види)</h2>
        </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => '',
        'panel' => ['type' => '', 'heading' => ''],
        'columns' => [

            [
                'attribute'=>'team_zabig',
                'width'=>'150px',
                'value'=>function ($model) {
                    return $model->team_zabig;
                },
                'group'=>true,
                'label' => 'Забіг',
            ],
            [
                'attribute'=>'doroga_number',
                'width'=>'50px',
                'value'=>function ($model) {
                    return $model->doroga_number;
                },
                'label' => 'Доріжка',
            ],

            [
                'attribute' => 'team_name',
                'format' => 'text',
                'label' => 'Команда',
            ],

            [
                'attribute' => 'estafeta',
                'format' => 'text',
                'label' => 'Естафета',
                'value'=>function ($model) {
                    return '';
                },
            ],
            [
                'attribute' => 'boyove',
                'format' => 'text',
                'label' => 'Бойове',
                'value'=>function ($model) {
                    return '';
                },
            ],
            [
                'attribute' => 'tru_kolinna',
                'format' => 'text',
                'label' => 'Висувна',
                'value'=>function ($model) {
                    return '';
                },
            ],

        ],
    ]);
    ?>
</div>
