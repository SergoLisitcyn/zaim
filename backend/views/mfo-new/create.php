<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MfoNew */

$this->title = 'Create Mfo New';
$this->params['breadcrumbs'][] = ['label' => 'Mfo News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mfo-new-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
