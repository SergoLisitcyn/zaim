<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Review */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Отзывы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="review-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы точно хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'cat_id',
            'body:ntext',
            'plus:ntext',
            'minus:ntext',
            'prostota',
            'speed',
            'support',
            'email:email',
            'name_client',
            'otvet_review:ntext',
            'date',
            [
                'label' => 'Статус',
                'format' => 'raw',
                'value' => function ($model) {
                    if($model->status == 1){
                        $result = 'Активен';
                    } else {
                        $result = 'Неактивен';
                    }
                    return $result;
                }
            ]
        ],
    ]) ?>

</div>
