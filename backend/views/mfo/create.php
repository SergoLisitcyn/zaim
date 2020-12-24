<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mfo */

$this->title = 'Create Mfo';
$this->params['breadcrumbs'][] = ['label' => 'Mfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->mfo_name;
?>
<div class="mfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
