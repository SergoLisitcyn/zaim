<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mfo */

$this->title = 'Обновить МФО: ' . $model->mfo_name;
$this->params['breadcrumbs'][] = ['label' => 'МФО', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mfo_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="mfo-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
