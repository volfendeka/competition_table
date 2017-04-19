<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ParticipantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Особисті результати';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="participants-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => '',
        'beforeHeader'=>[
            [
                'columns'=>[
                    ['content'=>'', 'options'=>['colspan'=>3, 'class'=>'text-center warning']],
                    ['content'=>'Штурмова', 'options'=>['colspan'=>2, 'class'=>'text-center warning']],
                    ['content'=>'100 метрів', 'options'=>['colspan'=>2, 'class'=>'text-center warning']],
                    ['content'=>'Двоборство', 'options'=>['colspan'=>2, 'class'=>'text-center warning']],
                ],
            ]
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
                'contentOptions'=>['id'=>'num-column'],],

            //'participant_id',
            //'team_id',

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
