<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Sale */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Sales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sale-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'mfo_id',
            'name',
            'content:ntext',
            'srok_ot',
            'srok_do',
            'url:url',
            'sort',
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
