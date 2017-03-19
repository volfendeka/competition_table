<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Participants */

$this->title = "Перегляд:". !Yii::$app->user->isGuest ?? $model->participant_id;
$this->params['breadcrumbs'][] = ['label' => 'Participants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="participants-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редагувати', ['update', 'id' => $model->participant_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Видалити', ['delete', 'id' => $model->participant_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php
        if(!Yii::$app->user->isGuest){
            echo DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'participant_id',
                    'team_id',
                    'first_name',
                    'last_name',
                    'age',
                    'shturm_try_1',
                    'shturm_try_2',
                    'shturm',
                    'shturm_zabig',
                    'sto_metriv_try_1',
                    'sto_metriv_try_2',
                    'sto_metriv',
                    'sto_metriv_zabig',
                    'dvoborstvo',
                    'doroga_number',
                    'shturm_result',
                    'sto_metriv_result',
                    'dvoborstvo_result',
                ],
            ]);
        }else{
            echo DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'first_name',
                    'last_name',
                    'age',
                ],
            ]);
        }
    ?>

</div>
