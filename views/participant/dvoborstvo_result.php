<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ParticipantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Особисті результати Двоборство';
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
        <h2 class="centered">
            <?php
            echo "<p>Протокол </p>";
            ?>
        </h2>
        <h5 class="centered">
            <?php
            echo "<p>Двоборство</p>";
            ?>
        </h5>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => '',
        'panel'=>['type'=>'', 'heading'=>''],
        'columns' => [
            [
                'attribute' => 'dvoborstvo_result',
                'format' => 'text',
                'label' => 'Місце',
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
                'attribute' => 'shturm',
                'format' => 'text',
                'label' => 'Кращий штурмовка',
            ],
            [
                'attribute' => 'sto_metriv',
                'format' => 'text',
                'label' => 'Кращий 100 метрів',
            ],
            [
                'attribute' => 'dvoborstvo',
                'format' => 'text',
                'label' => 'Сумарний час',
            ],
            ['class' => 'yii\grid\ActionColumn'],

        ],
    ]);

    if(isset($var)){
        echo "<pre>";
        var_dump($var);

    }
    ?>
</div>
