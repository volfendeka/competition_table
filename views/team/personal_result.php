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

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => '',
        'beforeHeader'=>[
            [
                'columns'=>[
                    ['content'=>'', 'options'=>['colspan'=>2, 'class'=>'text-center warning']],
                    ['content'=>'100 метрів', 'options'=>['colspan'=>2, 'class'=>'text-center warning']],
                    ['content'=>'Штурмова', 'options'=>['colspan'=>2, 'class'=>'text-center warning']],
                    ['content'=>'Двоборство', 'options'=>['colspan'=>2, 'class'=>'text-center warning']],
                ],
            ]
        ],
        'columns' => [

            //'team_id',

            ['class' => 'kartik\grid\SerialColumn',
                'contentOptions'=>['id'=>'num-column'],
            ],

            [
                'attribute' => 'team_name',
                'format' => 'text',
                'label' => 'Назва команди',
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
        ],
    ]);

    if(isset($var)){
        echo "<pre>";
        var_dump($var);
    }

    ?>
</div>
