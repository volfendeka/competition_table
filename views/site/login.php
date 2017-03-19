<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Authorization';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="my-form-title"><h2><?= Html::encode($this->title) ?></h2></div>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Login:') ?>

                <?= $form->field($model, 'password')->passwordInput()->label('Password:') ?>

                <div class="form-group">
                    <?= Html::submitButton('Login', [
                        'class' => 'btn btn-primary',
                        'name' => 'login-button',
                        'id' => 'my-btn-login',
                    ]) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
