<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TeamsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Командні результати (командні види)';
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
        <h2 class="centered">Результати (командні види)</h2>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => '',
        'beforeHeader'=>[
            [
                'columns'=>[
                    ['content'=>'', 'options'=>['colspan'=>2, 'class'=>'text-center warning']],
                    ['content'=>'Висувна', 'options'=>['colspan'=>2, 'class'=>'text-center warning']],
                    ['content'=>'Естафета', 'options'=>['colspan'=>2, 'class'=>'text-center warning']],
                    ['content'=>'Бойове', 'options'=>['colspan'=>2, 'class'=>'text-center warning']],
                ],
            ]
        ],
        'columns' => [

            ['class' => 'kartik\grid\SerialColumn',
                'contentOptions'=>['id'=>'num-column'],
            ],

            [
                'attribute' => 'team_name',
                'format' => 'text',
                'label' => 'Назва команди',
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
