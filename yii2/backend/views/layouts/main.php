<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => Html::img('@web/images/log.png', ['class' => 'logo-navbar-index', 'style' => 'width: 196px; height: 70px;position:absolute;top:-20px;']),
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-fixed-top',
                'style' => 'background-color: rgb(0, 86, 120); border-color: rgb(0, 86, 120)',
            ],
        ]);
/*        $menuItems = [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
        ];
*/        if (Yii::$app->user->isGuest) {
        /*$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];*/
        /*$menuItems[] = ['label' => 'Iniciar sesión', 'url' => ['/site/login']];*/
        $menuItems[] = ['label' => '']; 
    } else {
        $menuItems[] = '<li>'
        . Html::beginForm(['/site/logout'], 'post')
        . Html::submitButton(
            '<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Cerrar sesión (' . Yii::$app->user->identity->username . ')',

            ['class' => 'btn btn-link logout' , 'style' => 'color: aliceblue;']
        )
        . Html::endForm()
        . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,

    ]);
    NavBar::end();
    ?> 

    <div class="container">

        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>


<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Todos los derechos reservados <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
