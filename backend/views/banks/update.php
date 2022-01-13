<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Banks */

$this->title = 'Обновить: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Банки', 'url' => ['index']];
?>
<div class="banks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
