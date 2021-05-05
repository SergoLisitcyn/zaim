<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\MainPage */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Main Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="main-page-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'title',
            'sub_title',
            'description',
            'registration_text:ntext',
            'registration_item:ntext',
            'how_take_title',
            'how_take_text',
            'how_take_text_left',
            'how_take_text_right',
            'how_take_point_title',
            'how_take_point_text:ntext',
            'advantages_title',
            'advantages_text:ntext',
            'advantages_list_1:ntext',
            'advantages_list_2:ntext',
            'advantages_list_3:ntext',
            'advantages_list_4:ntext',
        ],
    ]) ?>

</div>
