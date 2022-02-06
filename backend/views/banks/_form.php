<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use \yii\helpers\Url;

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

    <div class="form-group field-mfo-logo_file">
        <div class="col-sm-12">
            <?php if($model->ustav) : ?>
                <a href="<?= $model->ustav ?>"  target="_blank" class="mfo-img_slider_view-right-link">Cсылка на устав</a>
            <?php else: ?>
                <b>Устав отсутствует</b>
            <?php endif; ?>
        </div>
    </div>
    <?php
    echo $form->field($model, 'ustavfile')->widget(\kartik\file\FileInput::classname(), [
        'options' => [
            'multiple' => false
        ],
        'pluginOptions' => [
            'showPreview' => false,
            'showRemove' => true,
            'showUpload' => false
        ]
    ]);
    ?>

    <h1>Русский текст</h1>
    <?= $form->field($model, 'content')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 300,
            'formatting' => ['p', 'blockquote', 'h2', 'h1'],
            'imageUpload' => Url::to(['/banks/save-redactor-img','sub'=>'content']),
            'attributes' => [
                [
                    'attribute' => 'text',
                    'format' => 'html'
                ]
            ],
            'plugins' => [
                'clips',
                'fullscreen'
            ]

        ]
    ])?>
    <?= $form->field($model, 'desc')->textarea(['rows' => 6]) ?>

    <h1>Казахский текст</h1>
    <?= $form->field($model, 'content_kz')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 300,
            'formatting' => ['p', 'blockquote', 'h2', 'h1'],
            'imageUpload' => Url::to(['/banks/save-redactor-img','sub'=>'content']),
            'attributes' => [
                [
                    'attribute' => 'text',
                    'format' => 'html'
                ]
            ],
            'plugins' => [
                'clips',
                'fullscreen'
            ]

        ]
    ])?>
    <?= $form->field($model, 'desc_kz')->textarea(['rows' => 6]) ?>
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
