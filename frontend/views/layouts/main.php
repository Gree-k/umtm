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
    <div class="logo">
        logo
    </div>
    <div class="button-container">
        <span class="button  js-open-promote_material  ">Создать рекламу </span>
        <span class="button js-open-reports">Отчеты</span>
        <span class="button">На лабиринт</span>
        <span class="button">Еще что-то</span>
    </div>
    <div class="user">
        user
    </div>
</div>
    <div id="promote_material" >
        <div class="header ">
            <div class="content " style="width: 200px; height: 50px ;bottom: 0; top: auto ; left: 20%; background-color: green; cursor: pointer">

            </div>
        </div>
    </div>
    <div id="reports">

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
