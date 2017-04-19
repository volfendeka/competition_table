<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TeamsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Командні результати (особисті види)';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teams-index">

    <div>
        <h3 class="centered"><?php
            echo "<p>Чемпіонат </p>";
            echo "<p>з пожежно-прикладного спорту </p>";
            echo "<p>в Тернопільській області</p>";
            ?>
        </h3>
        <h2 class="centered">Підсумковий</h2>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => '',
        'panel'=>['type'=>'', 'heading'=>''],
        'beforeHeader'=>[
            [
                'columns'=>[
                    ['content'=>'', 'options'=>['colspan'=>3, 'class'=>'text-center warning']],
                    ['content'=>'100 метрів', 'options'=>['colspan'=>2, 'class'=>'text-center warning']],
                    ['content'=>'Штурмова', 'options'=>['colspan'=>2, 'class'=>'text-center warning']],
                    ['content'=>'Двоборство', 'options'=>['colspan'=>2, 'class'=>'text-center warning']],
                    ['content'=>'Висувна', 'options'=>['colspan'=>2, 'class'=>'text-center warning']],
                    ['content'=>'Естафета', 'options'=>['colspan'=>2, 'class'=>'text-center warning']],
                    ['content'=>'Бойове', 'options'=>['colspan'=>2, 'class'=>'text-center warning']],
                ],
            ]
        ],
        'columns' => [

            [
                'attribute' => 'result_result',
                'format' => 'text',
                'label' => 'Місце',
            ],

            [
                'attribute' => 'team_name',
                'format' => 'text',
                'label' => 'Команда',
            ],
            [
                'attribute' => 'result',
                'format' => 'text',
                'label' => 'Бали',
            ],

            [
                'attribute' => 'sto_metriv',
                'format' => 'text',
                'label' => 'Час',
            ],
            [
                'attribute' => 'sto_metriv_result',
                'format' => 'text',
                'label' => 'Місце',
            ],
            [
                'attribute' => 'shturm',
                'format' => 'text',
                'label' => 'Час',
            ],
            [
                'attribute' => 'shturm_result',
                'format' => 'text',
                'label' => 'Місце',
            ],
            [
                'attribute' => 'dvoborstvo',
                'format' => 'text',
                'label' => 'Час',
            ],
            [
                'attribute' => 'dvoborstvo_result',
                'format' => 'text',
                'label' => 'Місце',
            ],
            [
                'attribute' => 'tru_kolinna',
                'format' => 'text',
                'label' => 'Час',
            ],
            [
                'attribute' => 'tru_kolinna_result',
                'format' => 'text',
                'label' => 'Місце',
            ],
            [
                'attribute' => 'estafeta',
                'format' => 'text',
                'label' => 'Час',
            ],
            [
                'attribute' => 'estafeta_result',
                'format' => 'text',
                'label' => 'Місце',
            ],
            [
                'attribute' => 'boyove',
                'format' => 'text',
                'label' => 'Час',
            ],
            [
                'attribute' => 'boyove_result',
                'format' => 'text',
                'label' => 'Місце',
            ],
        ],
    ]);

    if(isset($var)){
        echo "<pre>";
        var_dump($var);
    }

    ?>
</div>
