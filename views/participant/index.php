<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ParticipantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$team_id = isset($team_id)?$team_id:'';
$team_name = isset($team_name)?$team_name:'';
$this->title = 'Учасники команди '. $team_name;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="participants-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Додати учасника', ["/participant/create/$team_id"], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => '',
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
                'label' => 'Штурмовка',
            ],
            [
                'attribute' => 'shturm_zabig',
                'format' => 'text',
                'label' => 'забіг№',
            ],
            [
                'attribute' => 'sto_metriv',
                'format' => 'text',
                'label' => '100 метрів',
            ],
            [
                'attribute' => 'sto_metriv_zabig',
                'format' => 'text',
                'label' => 'забіг№',
            ],
            [
                'attribute' => 'dvoborstvo',
                'format' => 'text',
                'label' => 'Двоборство',
            ],
            [
                'attribute' => 'doroga_number',
                'format' => 'text',
                'label' => 'Номер доріжки',
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'width:70px']
            ],
        ],
    ]);
    ?>
</div>
