<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ReviewSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="review-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cat_id') ?>

    <?= $form->field($model, 'body') ?>

    <?= $form->field($model, 'plus') ?>

    <?= $form->field($model, 'minus') ?>

    <?php // echo $form->field($model, 'prostota') ?>

    <?php // echo $form->field($model, 'speed') ?>

    <?php // echo $form->field($model, 'support') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'name_client') ?>

    <?php // echo $form->field($model, 'otvet_review') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
