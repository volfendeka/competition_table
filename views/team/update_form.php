<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Teams */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teams-form">

    <?php $form = ActiveForm::begin([
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
            'horizontalCssClasses' => [
                'label' => 'control-label col-xs-4',
                'offset' => '',
                'wrapper' => 'input-group-sm col-xs-4',
                'error' => '',
                'hint' => '',
            ],
        ],
    ]); ?>

    <?= $form->field($model, 'team_name')->textInput(['maxlength' => true])->label('Команда') ?>

    <?php echo  $form->field($model, 'estafeta')->textInput()->label('Естафета час') ?>

    <?php echo  $form->field($model, 'estafeta_result')->textInput()->label('Естафета місце') ?>

    <?php echo  $form->field($model, 'boyove')->textInput()->label('Бойове час') ?>

    <?php echo  $form->field($model, 'boyove_result')->textInput()->label('Бойове місце') ?>

    <?php echo  $form->field($model, 'shturm')->textInput()->label('Штурмовка час') ?>

    <?php echo  $form->field($model, 'shturm_result')->textInput()->label('Штурмовка місце') ?>

    <?php echo  $form->field($model, 'sto_metriv')->textInput()->label('100 метрів час') ?>

    <?php echo  $form->field($model, 'sto_metriv_result')->textInput()->label('100 метрів місце') ?>

    <?php echo  $form->field($model, 'dvoborstvo')->textInput()->label('Двоборство час') ?>

    <?php echo  $form->field($model, 'dvoborstvo_result')->textInput()->label('Двоборство місце') ?>

    <?php echo  $form->field($model, 'tru_kolinna')->textInput()->label('Висувна час') ?>

    <?php echo  $form->field($model, 'tru_kolinna_result')->textInput()->label('Висувна місце') ?>

    <?php echo  $form->field($model, 'team_zabig')->textInput()->label('Забіг') ?>

    <?php echo  $form->field($model, 'doroga_number')->textInput()->label('Доріжка') ?>

    <?php echo  $form->field($model, 'result')->textInput()->label('Очки') ?>

    <?php echo  $form->field($model, 'result_result')->textInput()->label('Місце') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Створити' : 'Обновити', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
