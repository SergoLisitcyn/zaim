<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Filters */

$this->title = 'Создать Фильтр';
$this->params['breadcrumbs'][] = ['label' => 'Фильтры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filters-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
