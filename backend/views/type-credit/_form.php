<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use yii\helpers\ArrayHelper;
use common\models\Filters;

/* @var $this yii\web\View */
/* @var $model common\models\TypeCredit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="type-credit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?=  $form->field($model, 'parent_id', [
        'options' =>
            ['id' => 'type-credit-parent_id', 'class' => 'form-group']
    ])->dropDownList(
        ArrayHelper::map(Filters::find()->all(), 'id', 'name'),
        ['prompt' => 'Выбрать категорию фильтра']
    );
    ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'calc_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'calc_get_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'content')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200,
            'formatting' => ['p', 'blockquote', 'h2', 'h1'],
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

    <?= $form->field($model, 'title_seo')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

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
