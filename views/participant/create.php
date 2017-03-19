<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Participants */

$team_id = isset($team_id)?$team_id:'';

$this->title = 'Додати учасника';
$this->params['breadcrumbs'][] = ['label' => 'Participants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="participants-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'teams' => $teams,
        'team_id' => $team_id
    ]) ?>

</div>
