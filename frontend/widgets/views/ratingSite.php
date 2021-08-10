<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\RatingSite */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \kartik\rating\StarRating;
?>
<section class="ratings">
    <div class="ratings-wrap">
        <?php $form = ActiveForm::begin(
            [
                'options' => [
                    'class' => 'ratings-form'
                ]
            ]
        ); ?>
        <p class="ratings-item">
            <label class="ratings__description">Біздің сайтымызды бағалаңыз:</label>
            <?php
            echo $form->field($model, 'rating')->label(false)->widget(StarRating::classname(), [
                 'pluginOptions' => [
                     'theme' => 'krajee-uni',
                     'filledStar' => '&#x2605;',
                     'emptyStar' => '&#x2606;',
                     'showClear' => false,
                     'showCaption' => false,

                    ]
                ]);
            ?>
        </p>
        <?= Html::submitButton('OK', ['class' => 'save-rating', 'name' => 'button']) ?>
        <?php ActiveForm::end(); ?>

        <span class="ratings-result">
            <span class="mr-star-rating">
                <?php
                echo StarRating::widget([
                    'name' => 'rating_21',
                    'value' => $countRating,
                    'pluginOptions' => [
                        'readonly' => true,
                        'showClear' => false,
                        'showCaption' => false,
                    ],
                ]);
                ?>
            </span>
            <span class="star-result">
                <span><?= $countRating ?></span>/<span>5</span>(<span ><?= $count ?></span>)
            </span>
        </span>
    </div>
</section>