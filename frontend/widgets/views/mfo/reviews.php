<?php
use kartik\rating\StarRating;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<div class="content-reviews">
    <h2 class="content-reviews-title"><?= $model->mfo_name ?> туралы пікірлер</h2>
    <?php if($reviews) : ?>
        <?php foreach ($reviews as $review) : ?>
            <div class="content-reviews-item">
                <div class="rr_review_name"><?= $review['name_client'] ?></div>
                <span class="rr_date"><?= $review['date'] ?></span>
                <div class="content-reviews-rating">
                    <div class="rating">
                        <span class="rating__caption">Алу қарапайымдылығы</span>
                        <div class="rating__stars rating__stars--sm" style="width:100%">
                        </div>
                        <div class="rating__val">5</div>
                    </div>
                    <div class="rating">
                        <span class="rating__caption">Беру жылдамдығы</span>
                        <div class="rating__stars rating__stars--sm" style="width:100%">
                        </div>
                        <div class="rating__val">5</div>
                    </div>
                    <div class="rating">
                        <span class="rating__caption">Қолдау көрсету қызметі</span>
                        <div class="rating__stars rating__stars--sm" style="width:100%">
                        </div>
                        <div class="rating__val">5</div>
                    </div>
                </div>
                <p class="content-reviews-text"><?= $review['body'] ?></p>
                <div class="content-reviews-plus">
                    <span>Плюсы:</span>
                    <span><?= $review['plus'] ?></span>
                </div>
                <div class="content-reviews-minus">
                    <span>Минусы:</span>
                    <span><?= $review['minus'] ?></span>
                </div>
            </div>
        <?php endforeach; ?>
        <?php if( Yii::$app->session->hasFlash('successMfoView') ): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo Yii::$app->session->getFlash('successMfoView'); ?>
            </div>
        <?php endif;?>
    <?php endif; ?>
    <?php
    $form = ActiveForm::begin(
        [
            'action' =>[$action],
            'options' => [
                'class' => 'review-form',
                'id' => 'review'
            ]
        ]
    ); ?>
    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
    <input type="hidden" id="review-cat_id" name="Review[cat_id]" value="<?= $model->id ?>"/>
    <input type="hidden" name="Review[date]" value="<?php echo date('d.m.Y') ?>"/>
    <div class="content-reviews-rating">
        <div class="rating">
            <div class="rating-row">
                <span class="rating__caption">Алу қарапайымдылығы</span>
                <div class="rr_stars_container">
                    <?php
                    echo $form->field($reviewsModel, 'prostota')->label(false)->widget(StarRating::classname(), [
                        'pluginOptions' => [
                            'theme' => 'krajee-uni',
                            'showClear' => false,
                            'showCaption' => false,
                            'step' => 1,
                            'filledStar' => '<span class="rr_star glyphicon glyphicon-star" style="font-size: 14px;"></span>',
                            'emptyStar' => '<span class="rr_star glyphicon glyphicon-star-empty" style="font-size: 14px;"></span>',
                        ]
                    ]);
                    ?>
                </div>
            </div>
        </div>
        <div class="rating">
            <div class="rating-row">
                <span class="rating__caption">Скорость выдачи</span>
                <div class="rr_stars_container">
                    <?php
                    echo $form->field($reviewsModel, 'speed')->label(false)->widget(StarRating::classname(), [
                        'pluginOptions' => [
                            'theme' => 'krajee-uni',
                            'showClear' => false,
                            'showCaption' => false,
                            'step' => 1,
                            'filledStar' => '<span class="rr_star glyphicon glyphicon-star" style="font-size: 14px;"></span>',
                            'emptyStar' => '<span class="rr_star glyphicon glyphicon-star-empty" style="font-size: 14px;"></span>',
                        ]
                    ]);
                    ?>
                </div>
            </div>
        </div>
        <div class="rating">
            <div class="rating-row">
                <span class="rating__caption">Служба поддержки</span>
                <div class="rr_stars_container">
                    <?php
                    echo $form->field($reviewsModel, 'support')->label(false)->widget(StarRating::classname(), [
                        'pluginOptions' => [
                            'theme' => 'krajee-uni',
                            'showClear' => false,
                            'showCaption' => false,
                            'step' => 1,
                            'filledStar' => '<span class="rr_star glyphicon glyphicon-star" style="font-size: 14px;"></span>',
                            'emptyStar' => '<span class="rr_star glyphicon glyphicon-star-empty" style="font-size: 14px;"></span>',
                        ]
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="review-form__textarea-wrap">
        <?= $form->field($reviewsModel, 'body')->textarea(['class' => 'textarea-review','placeholder' => "Өз пікіріңізді қалдырыңыз"])->label(false) ?>
        <?= $form->field($reviewsModel, 'plus')->textarea(['class' => 'textarea-plus','placeholder' => "Компанияның артықшылықтары"])->label(false) ?>
        <?= $form->field($reviewsModel, 'minus')->textarea(['class' => 'textarea-minus','placeholder' => "Компанияның кемшіліктері"])->label(false) ?>
    </div>
    <div class="review-form__bottom">
        <div class="review-form__input">
            <?= $form->field($reviewsModel, 'name_client')->textInput(['class' => 'review-form__input','placeholder' => "Атыңыз"])->label(false) ?>
        </div>
        <div class="review-form__input">
            <?= $form->field($reviewsModel, 'email')->textInput(['class' => 'review-form__input','placeholder' => "E-mail"])->label(false) ?>
        </div>
        <div class="review-form__btn">
            <?= Html::submitButton('Пікірді жариялау', ['class' => 'review-form__btn']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
    <a href="/mfo/<?= $model->url ?>/reviews" class="content-reviews-btn"><?= $model->mfo_name?> туралы барлық пікірлерді қараңыз</a>
</div>