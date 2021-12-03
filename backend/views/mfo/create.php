<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mfo */

$this->title = 'Создать МФО';
$this->params['breadcrumbs'][] = ['label' => 'МФО', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mfo-create" style="margin-top: 20px;">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
