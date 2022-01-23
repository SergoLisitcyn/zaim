<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \yii\helpers\ArrayHelper;
use \common\models\Banks;

/* @var $this yii\web\View */
/* @var $model common\models\BankReview */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bank-review-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=  $form->field($model, 'bank_id', [
        'options' =>
            ['id' => 'bank-review-bank_id', 'class' => 'form-group']
    ])->dropDownList(
        ArrayHelper::map(Banks::find()->all(), 'id', 'name'),
        ['prompt' => 'Выбрать Банк']
    );
    ?>

    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'plus')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'minus')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'prostota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'speed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'support')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_client')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'otvet_review')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date')->widget(\kartik\date\DatePicker::className(),['pluginOptions' => [
        'autoclose'=>true,
        'format' => 'dd.mm.yyyy'
    ]])->label('Дата публикации') ?>

    <?= $form->field($model, 'status')->dropDownList([
        '0' => 'Ожидает проверки',
        '1' => 'Опубликовать',
        '2' => 'Неопубликовывать'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
