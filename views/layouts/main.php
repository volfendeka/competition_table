<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Teams;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    if (Yii::$app->user->isGuest) {
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Створити команду', 'url' => ['/team/create']],
                ['label' => 'Login', 'url' => ['site/login'],],
            ]
        ]);
    }else {
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Створити', 'url' => ['/team/create'],],
                ['label' => 'Стартові протоколи',
                    'items' => [
                        ['label' => 'Штурмовка', 'url' => ['/participant/view_start?title=1']],
                        ['label' => '100 метрів', 'url' => ['/participant/view_start?title=2']],
                        ['label' => 'Команди', 'url' => ['/team/view_start?sort=team_zabig']],
                    ],
                ],
                ['label' => 'Розрахувати',
                    'items' => [
                        ['label' => 'Забіги', 'url' => ['/participant/generate_zabigu']],
                        ['label' => 'Штурмовка', 'url' => ['/participant/get_result_shturm']],
                        ['label' => '100 метрів', 'url' => ['/participant/get_result_sto_metriv']],
                        ['label' => 'Двоборство', 'url' => ['/participant/get_result_dvoborstvo']],
                        ['label' => 'Командні', 'url' => ['/participant/get_results']],
                        ['label' => 'Додати секунди де ноль', 'url' => ['/participant/add_where_zero']],
                    ],
                ],
                ['label' => 'Результати',
                    'items' => [
                        ['label' => 'Особисті',
                            'url' => ['/participant/view_results'],
                            'items' => [
                                ['label' => 'Штурмовка', 'url' => ['/participant/view_shturm_results']],
                                ['label' => '100 метрів', 'url' => ['/participant/view_sto_metriv_results']],
                                ['label' => 'Двоборство', 'url' => ['/participant/view_dvoborstvo_results']],
                            ],
                        ],
                        ['label' => 'Командні',
                            'url' => ['/team/view_results'],
                            'items' => [
                                ['label' => 'Особисті види', 'url' => ['/team/view_personal_results']],
                                ['label' => 'Командні види', 'url' => ['/team/view_team_results']],
                            ],
                        ],
                    ],
                ],
                ['label' => 'Всі',
                    'items' => [
                        ['label' => 'Учасники', 'url' => ['/participant']],
                        ['label' => 'Команди', 'url' => ['/team']],
                    ],
                ],
                ['label' => 'Команди',
                    'items' => Teams::getTeams(),
                ],
                ['label' => 'Штурм забіг №:',
                    'items' =>
                        Teams::getZabigu('shturm'),
                ],
                ['label' => '100 забіг №:',
                    'items' =>
                        Teams::getZabigu('sto_metriv'),
                ],
                ['label' => 'Командні види', 'url' => ['/team/edit_teams']],
                ['label' => 'Logout', 'url' => ['/site/logout'],],
            ],
        ]);
    }
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            //'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?php

        ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
