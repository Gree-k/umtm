<?php

/* @var $this yii\web\View */

use yii\grid\DataColumn;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
$id = $_GET['id'];
?>

<div class="round asd">40</div>


<!--aweawe-->
<!--<ul class="list">-->
<!--    <li class="--><? //= empty($id)? 'active':''?><!--">--><?php //echo Html::a('Все', Url::current(['id'=>null]), ['class' => empty($id)? 'active':''])?><!--</li>-->
<!--    <li>--><?php //echo Html::a('Новички', Url::current(['id'=>1]))?><!--</li>-->
<!--    <li>--><?php //echo Html::a('Постоянные', Url::current(['id'=>2]))?><!--</li>-->
<!--</ul>-->
<?php
//echo Html::ul([
//    Html::a('Все', Url::current(['id'=>null])),
//    Html::a('Новички', Url::current(['id'=>1])),
//    Html::a('Постоянные', Url::current(['id'=>2]))
//], ['class' => 'list']);
echo \yii\grid\GridView::widget([
    'dataProvider' => $provider,

    'layout' => "{summary}\n{items}\n<div style='text-align: center'>{pager}</div>",
    'summary' => "Показано {begin, number}-{end, number} из {totalCount, number}",
//    'pager' => [
//        'firstPageLabel' => 'first',
//        'lastPageLabel' => 'last',
//        'prevPageLabel' => 'previous',
//        'nextPageLabel' => 'next',
//    ],
    'tableOptions' => ['class' => 'table js-table', 'id' => ''],
//    'rowOptions' => ['style' => '],
    'rowOptions' => function ($model, $key, $index, $grid) {
        return [
            'data-id' => $model->id,
            'class' => 'qwe'
        ];
    },
    'columns' => [
        'title',
        'text',
        [
            'label' => 'create date',
            'attribute' => 'create_date',
            'value' => function ($model, $_key, $_index, $_column) {
                    return   Yii::$app->formatter->asDatetime($model->create_date, 'php: d-m-Y')  ;
                }
        ],
        'id',
        [
            'headerOptions' => ['class' => 'js-filter-buyer buyer', 'id' => ''],
            'header' => 'Use' . ($id == 2 ? ': Постоянные' : ($id == 1 ? ': Новички' : '')) .
                Html::ul([
                    'Все' => null,
                    'Новички' => 1,
                    'Постоянные' => 2,
                ], [
                    'item' => function ($item, $index) use ($id) {
                        return Html::tag(
                            'li',
                            Html::a($index, Url::current(['id' => $item])),
                            ['class' => $item == $id ? 'active' : '']
                        );
                    },
                    'class' => 'list',
                    'id' => 'filter-buyer'
                ])
            ,
            'attribute' => 'user.id'
            ,
            'format' => ['html'],
            'value' => 'user.name',
        ],
    ]
]);

var_dump($provider->getPagination()->links['next']);
$next = $provider->getPagination()->links['next'];
?>
<?php if(!empty($next)):?>
<div style="text-align: center">
    <a id="next" href="<?= $provider->getPagination()->links['next'] ?>" >yot10</a>
</div>
<?php endif; ?>

<!--<div class="site-about">-->
<!--    <h1>--><? //= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--    <p>This is the About page. You may modify the following file to customize its content:</p>-->
<!---->
<!--    <code>--><? //= __FILE__ ?><!--</code>-->
<!--</div>-->
