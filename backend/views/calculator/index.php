<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Настройка калькулятора';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calculator-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= \kartik\grid\GridView::widget([
        'pjax' => true,
        'dataProvider' => $dataProvider,
        'hover'=>true,
        'options' => [
            'style' => 'text-align:center',
        ],
        'summary' => false,
        'columns' => [
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'min_sum',
                'vAlign' => 'middle',
            ],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'max_sum',
                'vAlign' => 'middle',
            ],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'step_sum',
                'vAlign' => 'middle',
            ],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'min_srok',
                'vAlign' => 'middle',
            ],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'max_srok',
                'vAlign' => 'middle',
            ],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'step_srok',
                'vAlign' => 'middle',
            ],
        ],
    ]); ?>


</div>
