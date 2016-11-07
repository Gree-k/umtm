<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\widgets\Menu;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        .dropdown:hover > .dropdown-menu {
            display: block;
        }

    </style>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
<div class="header">
    <div class="content js-open-slide" style="width: 200px; height: 50px ;top:10%; left: 20%; background-color: #0f74a8; cursor: pointer">

    </div>
</div>
    <div class="slide js-slide">
        <div style="width: 100%; height: 100px; background-color: darkblue;position: absolute;  top: 0px">
            <div class="content  " style="width: 200px; height: 50px ;bottom: 0; top: auto ; left: 20%; background-color: green; cursor: pointer">

            </div>
        </div>
    </div>
    <div class="container">
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
