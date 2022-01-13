<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Banks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banks-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group field-mfo-logo_file">
        <label class="control-label col-sm-4" for="mfo-logo_file"></label>
        <div class="col-sm-8">
            <?php if($model->image) : ?>
                <img src="<?= $model->image ?>" class="img_slider_view" alt="Image" style="height: 100px">
            <?php else: ?>
                <b>Логотип отсутствует</b>
            <?php endif; ?>
        </div>
    </div>

    <?php
    echo $form->field($model, 'mainfile')->widget(\kartik\file\FileInput::classname(), [
        'options' => [
            'accept' => 'image/*',
            'multiple' => false
        ],
        'pluginOptions' => [
            'showPreview' => false,
            'showRemove' => true,
            'showUpload' => false
        ]
    ]);
    ?>
    <?= $form->field($model, 'desc')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'url')->textInput() ?>
    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([
        '1' => 'Активен',
        '0' => 'Неактивен'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
