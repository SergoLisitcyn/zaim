<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Sale */

$this->title = 'Page-to-page';
$this->params['breadcrumbs'][] = ['label' => 'Page-to-page', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sale-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Запустить обновление', ['sheet'], [
            'class' => 'btn btn-primary',
            'data' => [
                'confirm' => 'Вы точно хотите запустить обновление?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>
