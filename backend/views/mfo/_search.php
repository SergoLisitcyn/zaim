<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mfo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'mfo_name') ?>

    <?= $form->field($model, 'rating') ?>

    <?= $form->field($model, 'srok') ?>

    <?= $form->field($model, 'sum') ?>

    <?php // echo $form->field($model, 'stavka') ?>

    <?php // echo $form->field($model, 'odobrenie') ?>

    <?php // echo $form->field($model, 'rasmotrenie') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'logo') ?>

    <?php // echo $form->field($model, 'video') ?>

    <?php // echo $form->field($model, 'rekvisit') ?>

    <?php // echo $form->field($model, 'akcii') ?>

    <?php // echo $form->field($model, 'home_page') ?>

    <?php // echo $form->field($model, 'link_offer') ?>

    <?php // echo $form->field($model, 'about_company') ?>

    <?php // echo $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'keywords') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
