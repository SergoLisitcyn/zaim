<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Mfo */

$this->title = $model->mfo_name;
$this->params['breadcrumbs'][] = ['label' => 'Mfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mfo-view">

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
            'mfo_name',
            'rating',
            'srok',
            'sum',
            'stavka',
            'odobrenie',
            'rasmotrenie',
            'phone',
            'email:email',
            'website',
            'logo',
            'video',
            'rekvisit:ntext',
            'akcii',
            'home_page',
            'link_offer',
            'about_company:ntext',
            'content:ntext',
            'title',
            'description',
            'keywords',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
