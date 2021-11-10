<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Author */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="author-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-6" style="padding-left: 0">
                <?php
                echo $form->field($model, 'mainfile')->widget(FileInput::classname(), [
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
            </div>
            <div class="col-xs-6">
                <?php if($model->image) :?>
                    <div>
                        <img src="<?=$model->image ?>" class="img_slider_view" alt="Image" style="height: 100px">
                        <?= Html::a('X', ['/author/deleteimg', 'id' => $model->id], ['class' => 'btn_port_del']) ?>
                    </div>
                <?php else:?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?= $form->field($model, 'description')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'status')->dropDownList([
        '1' => 'Активен',
        '0' => 'Неактивен'
    ]) ?>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
