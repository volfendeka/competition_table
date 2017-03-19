<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TeamsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Команди';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teams-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Створити команду', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => '',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
                'contentOptions'=>['id'=>'num-column'],],

            //'team_id',
            [
                'attribute' => 'team_name',
                'format' => 'text',
                'label' => 'Назва команди',
            ],
            [
                'attribute' => 'estafeta',
                'format' => 'text',
                'label' => 'Естафета 4*100',
            ],
            [
                'attribute' => 'boyove',
                'format' => 'text',
                'label' => 'Бойове',
            ],
            [
                'attribute' => 'tru_kolinna',
                'format' => 'text',
                'label' => 'Висувна',
            ],
            [
                'attribute' => 'shturm',
                'format' => 'text',
                'label' => 'Штурмовка',
            ],
            [
                'attribute' => 'sto_metriv',
                'format' => 'text',
                'label' => '100 метрів',
            ],
            [
                'attribute' => 'dvoborstvo',
                'format' => 'text',
                'label' => 'Двоборство',
            ],
            [
                'attribute' => 'result',
                'format' => 'text',
                'label' => 'Результат',
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'width:70px']
            ],
        ],
    ]);

    if(isset($var)){
        echo "<pre>";
        var_dump($var);
    }

    ?>
</div>
