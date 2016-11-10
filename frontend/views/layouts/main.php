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

<div class="wrap" >
<div class="header">
    <div class="logo">
        logo
    </div>
    <div class="menu">
        <ul>
            <li class="js-open-promote_material active ">Создать рекламу</li><!--
            --><li class="js-open-reports">Отчеты</li><!--
            --><li>На лабиринт</li><!--
            --><li>Еще что-то</li>
        </ul>
    </div>
    <div class="user">
        user
    </div>
</div>
    <div id="promote_material" >
        <div class="header ">

        </div>
        <div class="main"  >
            <div class="box wp30 ptb80"></div>
            <div class="box wp30 ptb80"></div>
            <div class="box wp30 ptb80"></div>
            <div class="box wp30 ptb80"></div>
            <div class="box wp30 ptb80"></div>
            <div class="box wp30 ptb80"></div>
        </div>
    </div>
    <div id="reports">
        <div class="box"><div class="content">213</div></div>
        <div class="box"><div class="content">213</div></div>
        <div class="box"><div class="content">213</div></div>
        <div class="box"><div class="content">213</div></div>
        <div class="box"><div class="content">213</div></div>
        <div class="box"><div class="content">213</div></div>
    </div>
    <div class="container" style="overflow: hidden">
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
