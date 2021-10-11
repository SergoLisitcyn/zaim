<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use \kartik\file\FileInput;
use \yii\helpers\Url;
use \kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Articles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articles-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype'=>'multipart/form-data'],
    ]);
    ?>

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
                <?php if($model->preview_image) :?>
                    <div>
                        <img src="<?=$model->preview_image ?>" class="img_slider_view" alt="Image" style="height: 100px">
                        <?= Html::a('X', ['/articles/deleteimg', 'id' => $model->id], ['class' => 'btn_port_del']) ?>
                    </div>
                <?php else:?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?= $form->field($model, 'content')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 300,
            'formatting' => ['p', 'blockquote', 'h2', 'h1'],
            'imageUpload' => Url::to(['/articles/save-redactor-img','sub'=>'content']),
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

    <?= $form->field($model, 'date_publish')->widget(DatePicker::className(),['pluginOptions' => [
        'autoclose'=>true,
        'format' => 'dd.mm.yyyy'
    ]])->label('Дата публикации') ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true])->hint('например rozygrysh-shesti-ajfonov-ot-turbomoney') ?>

    <?= $form->field($model, 'title_seo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
