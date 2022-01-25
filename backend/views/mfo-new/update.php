<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MfoNew */

$this->title = 'Update Mfo New: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Mfo News', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mfo-new-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
