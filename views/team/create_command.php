<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $team_model app\models\Teams */
/* @var $participant_model app\models\Participants */
/* @var $form yii\widgets\ActiveForm */

$cookies = Yii::$app->request->cookies;
$team_id = $cookies->getValue('team_id');

$this->title = 'Створити учасникa '.$number;
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<?php
    $form = ActiveForm::begin();
?>
<?= $form->field($participant, 'first_name')->textInput(['maxlength' => true, 'value' => ''])->label('Ім\'я');?>
<?= $form->field($participant, 'last_name')->textInput(['maxlength' => true, 'value' => ''])->label('Прізвище');?>
<?= $form->field($participant, 'age')->textInput(['maxlength' => true, 'value' => ''])->label('Вік');?>
<?= $form->field($participant, 'team_id')->hiddenInput(['value'=> $team_id])->label('');?>
<?= Html::submitButton('Створити', ['class' =>'btn btn-success']); ?>

<?php
    ActiveForm::end();
?>