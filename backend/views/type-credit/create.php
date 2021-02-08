<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TypeCredit */

$this->title = 'Создать Подфильтр';
$this->params['breadcrumbs'][] = ['label' => 'Подфильтры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-credit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
