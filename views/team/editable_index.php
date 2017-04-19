<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TeamsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Команди';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teams-index">

    <h1><?php
        $zabigu = Yii::$app->request->get('zabig_number');
        if(isset($zabigu)){
            echo $this->title = 'Команди ' . Yii::$app->request->get('zabig_number') . '-го забігу';
        }else{
            echo $this->title = 'Команди ';
        }
        ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pjax' => true,
        'export' => false,
        'summary' => '',
        'columns' => [
            [
                'attribute' => 'doroga_number',
                'format' => 'text',
                'label' => 'Доріжка',
            ],
            [
                'attribute' => 'team_name',
                'format' => 'text',
                'label' => 'Назва команди',
            ],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'tru_kolinna_1',
                'format' => 'text',
                'label' => 'Висувна спроба 1',
            ],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'tru_kolinna_2',
                'format' => 'text',
                'label' => 'Висувна спроба 2',
            ],
            [
                'attribute' => 'tru_kolinna',
                'format' => 'text',
                'label' => 'Висувна кращий',
            ],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'estafeta',
                'format' => 'text',
                'label' => 'Естафета 4*100',
            ],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'boyove',
                'format' => 'text',
                'label' => 'Бойове',
            ],

        ],
    ]);

    if(isset($var)){
        echo "<pre>";
        var_dump($var);
    }

    ?>
</div>
