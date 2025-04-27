<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ReviewSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Отзывы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="review-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать отзыв', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= Html::beginForm(['review/checkbox-delete'],'post');?>
    <?= Html::submitButton('Удалить выбранные', ['class' => 'btn btn-danger mt-3 mb-3','data-confirm' => Yii::t('yii', 'Вы уверены, что хотите удалить данные записи? Восстановить их будет нельзя.'),]);?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= \kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\CheckboxColumn'],
            [
                'label' => 'МФО',
                'value' => function ($model) {
                    $mfoName = \common\models\Mfo::findOne($model->cat_id);
                    $result = $mfoName->mfo_name;

                    return $result;
                },
            ],
            'body:ntext',
            'name_client',
            'date',
            [
                'label' => 'Статус',
                'value' => function ($model) {
                    $result = '';
                    if($model->status == 0){
                        $result .= 'Ожидает проверки';
                    } elseif($model->status == 1) {
                        $result .= 'Опубликован';
                    } else {
                        $result .= 'Неопубликован';
                    }
                    return $result;
                },
            ],
            [
                'label' => 'Действия',
                'format' => 'raw',
                'options' => ['width' => '200'],
                'value' => function ($model, $index, $jobList) {
                    return Html::tag('a', 'Редактировать', ['href' => \yii\helpers\Url::toRoute(['review/update', 'id' => $index]), 'class' => 'btn btn-success', 'style' => 'font-weight: 100;margin-right:10px'])
                        .Html::tag('a', 'Удалить', ['href' => \yii\helpers\Url::toRoute(['review/delete', 'id' => $index]), 'data-method' => 'post', 'data-confirm' => 'Вы точно хотите удалить?', 'class' => 'btn btn-order btn-danger', 'style' => 'font-weight: 100']);
                },
            ],
        ],
    ]); ?>


</div>
