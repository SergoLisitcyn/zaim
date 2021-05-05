<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MainPageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="main-page-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'sub_title') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'registration_text') ?>

    <?php // echo $form->field($model, 'registration_item') ?>

    <?php // echo $form->field($model, 'how_take_title') ?>

    <?php // echo $form->field($model, 'how_take_text') ?>

    <?php // echo $form->field($model, 'how_take_text_left') ?>

    <?php // echo $form->field($model, 'how_take_text_right') ?>

    <?php // echo $form->field($model, 'how_take_point_title') ?>

    <?php // echo $form->field($model, 'how_take_point_text') ?>

    <?php // echo $form->field($model, 'advantages_title') ?>

    <?php // echo $form->field($model, 'advantages_text') ?>

    <?php // echo $form->field($model, 'advantages_list_1') ?>

    <?php // echo $form->field($model, 'advantages_list_2') ?>

    <?php // echo $form->field($model, 'advantages_list_3') ?>

    <?php // echo $form->field($model, 'advantages_list_4') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
