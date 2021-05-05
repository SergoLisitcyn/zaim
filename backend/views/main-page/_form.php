<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MainPage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="main-page-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-xs-12">
            <h2 class="bold uppercase">1. Заголовок вверх</h2>

            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'sub_title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h2 class="bold uppercase">2. Оформление кредита в банке</h2>

            <?= $form->field($model, 'registration_text')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'registration_item')->textarea(['rows' => 6]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h2 class="bold uppercase">3. Как взять займ в день обращения</h2>

            <?= $form->field($model, 'how_take_title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'how_take_text')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'how_take_text_left')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'how_take_text_right')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h2 class="bold uppercase">4. Как взять микрозаймзайм в день обращения</h2>
            <?= $form->field($model, 'how_take_point_title')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'how_take_point_text')->textarea(['rows' => 6]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h2 class="bold uppercase">5. Преимущества</h2>
            <?= $form->field($model, 'advantages_title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'advantages_text')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'advantages_list_1')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'advantages_list_2')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'advantages_list_3')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'advantages_list_4')->textarea(['rows' => 6]) ?>
        </div>
    </div>



    <div class="form-group">
        <?= Html::submitButton('Созранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
