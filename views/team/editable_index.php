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

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pjax' => true,
        'export' => false,
        'summary' => '',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
                'contentOptions'=>['id'=>'num-column'],
            ],
            [
                'attribute' => 'team_name',
                'format' => 'text',
                'label' => 'Назва команди',
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
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'tru_kolinna',
                'format' => 'text',
                'label' => 'Висувна',
            ],

        ],
    ]);

    if(isset($var)){
        echo "<pre>";
        var_dump($var);
    }

    ?>
</div>
