<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Sale */

$this->title = 'Создать Акцию';
$this->params['breadcrumbs'][] = ['label' => 'Акции', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sale-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
