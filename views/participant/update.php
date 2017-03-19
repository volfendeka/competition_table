<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Participants */

$this->title = 'Обновити: ' . !Yii::$app->user->isGuest ?? $model->participant_id;

$this->params['breadcrumbs'][] = ['label' => 'Participants', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->participant_id, 'url' => ['view', 'id' => $model->participant_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="participants-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('update_form', [
        'model' => $model,
    ]) ?>

</div>
