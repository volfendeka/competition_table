<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TeamsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teams-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'team_id') ?>

    <?= $form->field($model, 'team_name') ?>

    <?= $form->field($model, 'estafeta') ?>

    <?= $form->field($model, 'boyove') ?>

    <?= $form->field($model, 'shturm') ?>

    <?php // echo $form->field($model, 'sto_metriv') ?>

    <?php // echo $form->field($model, 'dvoborstvo') ?>

    <?php // echo $form->field($model, 'tru_kolinna') ?>

    <?php // echo $form->field($model, 'result') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
