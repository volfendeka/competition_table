<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Participants */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="participants-form">

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

    <?php
    if(!Yii::$app->user->isGuest){
        echo $form->field($model, 'team_id')->textInput();

        echo $form->field($model, 'first_name')->textInput(['maxlength' => true])->label('Ім\'я');

        echo $form->field($model, 'last_name')->textInput(['maxlength' => true])->label('Прізвище');

        echo $form->field($model, 'age')->textInput()->label('Вік');

        echo $form->field($model, 'shturm_try_1')->textInput()->label('Штурмовка спроба 1');

        echo $form->field($model, 'shturm_try_2')->textInput()->label('Штурмовка спроба 2');

        echo $form->field($model, 'shturm')->textInput()->label('Штурмовка');

        echo $form->field($model, 'shturm_zabig')->textInput()->label('Штурмовка забіг');

        echo $form->field($model, 'sto_metriv_try_1')->textInput()->label('100 метрів спроба 1');

        echo $form->field($model, 'sto_metriv_try_2')->textInput()->label('100 метрів спроба 2');

        echo $form->field($model, 'sto_metriv')->textInput()->label('100 метрів');

        echo $form->field($model, 'sto_metriv_zabig')->textInput()->label('100 метрів забіг');

        echo $form->field($model, 'doroga_number')->label('Номер доріжки');

        echo $form->field($model, 'shturm_result')->textInput()->label('Штурм Результат');

        echo $form->field($model, 'sto_metriv_result')->textInput()->label('100 Результат');

        echo $form->field($model, 'dvoborstvo')->textInput()->label('Двоборство');

        echo $form->field($model, 'dvoborstvo_result')->textInput()->label('Двоб Результат');
    }else {
        echo $form->field($model, 'first_name')->textInput(['maxlength' => true])->label('Ім\'я');

        echo $form->field($model, 'last_name')->textInput(['maxlength' => true])->label('Прізвище');

        echo $form->field($model, 'age')->textInput()->label('Вік');
    }
    ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Створити' : 'Обновити', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

