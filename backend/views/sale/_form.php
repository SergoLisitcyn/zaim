<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use \kartik\file\FileInput;
use \common\models\Mfo;
use \yii\helpers\ArrayHelper;
use \yii\helpers\Url;
use \kartik\date\DatePicker;
use \kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model common\models\Sale */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jobs-box">
    <div class="content">
    <?php $form = ActiveForm::begin([
        'options' => ['enctype'=>'multipart/form-data'],
    ]);
    ?>


    <?php echo $form->field($model, 'mfo_id',['options'=>['class'=>'col-xs-12','style'=>'padding-left:0']])->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Mfo::find()->all(),'id','mfo_name'),
            'language' => 'ru',
            'options' => ['placeholder' => 'Выбрать МФО ...'],
            'pluginOptions' => ['allowClear' => true],
    ]); ?>

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
                        <?= Html::a('X', ['/sale/deleteimg', 'id' => $model->id], ['class' => 'btn_port_del']) ?>
                    </div>
                <?php else:?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'srok_ot')->widget(DatePicker::className(),['pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd 00:00:00'
    ]])->label('Срок от') ?>

    <?= $form->field($model, 'srok_do')->widget(DatePicker::className(),['pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd 00:00:00'
    ]])->label('Срок до') ?>


    <?= $form->field($model, 'url')->textInput(['maxlength' => true])->hint('например rozygrysh-shesti-ajfonov-ot-turbomoney') ?>
    <?= $form->field($model, 'partner_link')->textInput(['maxlength' => true])->hint('например https://dengiclick.kz/?utm_source=smartzaimkz') ?>
        <?= $form->field($model, 'title_seo')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([
        '1' => 'Активен',
        '0' => 'Неактивен'
    ]) ?>
        <?= $form->field($model, 'content')->widget(Widget::className(), [
            'settings' => [
                'lang' => 'ru',
                'minHeight' => 300,
                'formatting' => ['p', 'blockquote', 'h2', 'h1'],
                'imageUpload' => Url::to(['/sale/save-redactor-img','sub'=>'content']),
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

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>
