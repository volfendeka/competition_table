<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Participants;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ParticipantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$team_id = isset($team_id)?$team_id:'';
$team_name = isset($team_name)?$team_name:'';
$this->title = 'Учасники команди '. $team_name;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="participants-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?php if(Yii::$app->user->isGuest && $amount < Participants::$participants_amount) {
            echo Html::a('Додати учасника', ["/participant/create/$team_id"], ['class' => 'btn btn-success']);
        }
        ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => '',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
                'contentOptions'=>['id'=>'num-column'],],

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
                'attribute' => 'age',
                'format' => 'text',
                'label' => 'Вік',
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'width:70px']
            ],
        ],
    ]);
    ?>
</div>
