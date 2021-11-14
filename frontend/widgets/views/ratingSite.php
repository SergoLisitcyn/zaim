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
                     'showClear' => false,
                     'showCaption' => false,
                     'filledStar' => '<i class="fa fa-star mr-star-full"></i>',
                     'emptyStar' => '<i class="fa fa-star-o mr-star-empty"></i>',
                    ]
                ]);
            ?>
        </p>
        <?= Html::submitButton('<span>OK</span>', ['class' => 'save-rating']) ?>
        <?php ActiveForm::end(); ?>
        <?php if( Yii::$app->session->hasFlash('successRating') ): ?>
            <div class="alert alert-success alert-dismissible" role="alert" id="successRating" style="width: 20%;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo Yii::$app->session->getFlash('successRating'); ?>
            </div>
        <?php endif;?>
        <span class="ratings-result">
            <span class="mr-star-rating">
                <?php if($countRating > 0 && $countRating < 1.5) : ?>
					<i class="fa fa-star mr-star-full"></i>
                    <i class="fa fa-star-o mr-star-empty"></i>
                    <i class="fa fa-star-o mr-star-empty"></i>
                    <i class="fa fa-star-o mr-star-empty"></i>
                    <i class="fa fa-star-o mr-star-empty"></i>
                    <i class="fa fa-star-o mr-star-empty"></i>
                <?php endif; ?>
                <?php if($countRating > 1.5 && $countRating < 2.5) : ?>
                    <i class="fa fa-star mr-star-full"></i>
                    <i class="fa fa-star mr-star-full"></i>
                    <i class="fa fa-star-o mr-star-empty"></i>
                    <i class="fa fa-star-o mr-star-empty"></i>
                    <i class="fa fa-star-o mr-star-empty"></i>
                <?php endif; ?>
                <?php if($countRating > 2.5 && $countRating < 3.5) : ?>
                    <i class="fa fa-star mr-star-full"></i>
                    <i class="fa fa-star mr-star-full"></i>
                    <i class="fa fa-star mr-star-full"></i>
                    <i class="fa fa-star-o mr-star-empty"></i>
                    <i class="fa fa-star-o mr-star-empty"></i>
                <?php endif; ?>
                <?php if($countRating > 3.5 && $countRating < 4.5) : ?>
                    <i class="fa fa-star mr-star-full"></i>
                    <i class="fa fa-star mr-star-full"></i>
                    <i class="fa fa-star mr-star-full"></i>
                    <i class="fa fa-star mr-star-full"></i>
                    <i class="fa fa-star-o mr-star-empty"></i>
                <?php endif; ?>
                <?php if($countRating > 4.5) : ?>
                    <i class="fa fa-star mr-star-full"></i>
                    <i class="fa fa-star mr-star-full"></i>
                    <i class="fa fa-star mr-star-full"></i>
                    <i class="fa fa-star mr-star-full"></i>
                    <i class="fa fa-star mr-star-full"></i>
                <?php endif; ?>
<!--							<i class="fa fa-star-half-o mr-star-half"></i>-->
			</span>
            <span class="star-result">
                <span><?= $countRating ?></span>/<span>5</span>(<span ><?= $count ?></span>)
            </span>
        </span>
    </div>
</section>