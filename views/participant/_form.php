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

    <?= $form->field($model, 'team_id')->dropDownList(!empty($teams)?$teams:[], ['options' => ["$team_id"=>['selected'=>true]], 'prompt' => ' -- Виберіть команду --'])->label('Команда') ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true])->label('Ім\'я') ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true])->label('Прізвище') ?>

    <?= $form->field($model, 'age')->textInput()->label('Вік') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Створити' : 'Обновити', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

