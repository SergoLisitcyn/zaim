<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Review */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="review-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cat_id')->textInput() ?>

    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'plus')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'minus')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'prostota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'speed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'support')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_client')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'otvet_review')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([
        '0' => 'Ожидает проверки',
        '1' => 'Опубликовать',
        '2' => 'Неопубликовывать'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
