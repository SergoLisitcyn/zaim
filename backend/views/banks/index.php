<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BanksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Банки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banks-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= Html::a('Запустить обновление', ['sheet'], [
        'class' => 'btn btn-primary',
        'data' => [
            'confirm' => 'Вы точно хотите запустить обновление?',
            'method' => 'post',
        ],
    ]) ?>

    <?= \kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'options' => ['width' => '10'],
            ],

            'name',
            [
                'label' => 'Ссылка на банк',
                'format' => 'raw',
                'hAlign' => 'center',
                'value' => function ($model) {
                    if($model->url){
                        return Html::tag('a', Yii::$app->params['siteUrl'].'banks/'.$model->url, ['href' => (Yii::$app->params['siteUrl'].'banks/'.$model->url)]);
                    } else {
                        return '';
                    }

                },
            ],
            [
                'label' => 'Изображение',
                'format' => 'raw',
                'hAlign' => 'center',
                'value' => function ($model) {
                    if($model->image){
                        return Html::img($model->image,['style' => 'height: 50px;']);
                    } else {
                        return '';
                    }

                },
            ],
            [
                'label' => 'Статус',
                'value' => function ($model) {
                    $result = '';
                    if($model->status == 1){
                        $result .= 'Активен';
                    } else {
                        $result .= 'Неактивен';
                    }

                    return $result;
                },
            ],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'sort',
                'hAlign' => 'center',
                'filter' => false,
                'value' => function($model){ return $model->sort; },
            ],

            [
                'label' => 'Действия',
                'format' => 'raw',
                'options' => ['width' => '200'],
                'value' => function ($model, $index, $jobList) {
                    return Html::tag('a', 'Редактировать', ['href' => \yii\helpers\Url::toRoute(['banks/update', 'id' => $index]), 'class' => 'btn btn-success', 'style' => 'font-weight: 100;margin-right:10px']);
                },
            ],
        ],
    ]); ?>


</div>
