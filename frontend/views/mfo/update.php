<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mfo */

$this->title = 'Update Mfo: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Mfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mfo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
