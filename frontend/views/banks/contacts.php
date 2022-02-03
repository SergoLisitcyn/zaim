<?php
use \yii\helpers\Url;
use kartik\rating\StarRating;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

if(isset($data['contacts']['title']) and !empty($data['contacts']['title'])) {
    $this->title = $data['contacts']['title'];
} else {
    $this->title = $model->name;
}
if(isset($data['contacts']['description']) and !empty($data['contacts']['description'])) {
    $this->registerMetaTag(['name' => 'description','content' => $data['contacts']['description']]);
}
?>
<section class="breadcrumbs plr">
    <div class="breadcrumbs-wrap limit-width">
        <ul class="breadcrumbs__items white-breadcrumbs__items">
            <li>
                <a href="/banks">Банки</a>
            </li>
            <li>
                <a href="<?= Url::toRoute(['banks/view', 'url' => $model->url]) ?>"><?= $model->name ?></a>
            </li>
            <li>
                Контакты
            </li>
        </ul>
    </div>
    <img class="main-title__img bank-main-title__img" src="/img/uncode-child/bg-sm.png" alt="">
</section>


<section class="content plr">
    <div class="content-wrap limit-width">
        <div class="content-row">
            <div class="content-box">
                <div class="content-info bank-content-info">
                    <ul class="nav nav-tabs nav-tabs n-nav-tabs">
                        <li class="">
                            <a href="<?= Url::toRoute(['banks/view', 'url' => $model->url]) ?>">
                                <span><?= $dataMenu['block_1'] ?></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= Url::toRoute(['banks/finance', 'url' => $model->url]) ?>">
                                <?php if($version == 'RU') : ?>
                                    <span><?= $dataMenu['block_2'] ?></span>
                                <?php else: ?>
                                    <span>Финансовые показатели</span>
                                <?php endif; ?>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= Url::toRoute(['banks/requisites', 'url' => $model->url]) ?>">
                                <span><?= $dataMenu['block_3'] ?></span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?= Url::toRoute(['banks/contacts', 'url' => $model->url]) ?>">
                                <span><?= $dataMenu['block_4'] ?></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= Url::toRoute(['banks/reviews', 'url' => $model->url]) ?>">
                                <span>Отзывы</span>
                            </a>
                        </li>
                    </ul>
                    <div class="content-main-info__content">
                        <?php if($data['contacts']['h1']) :  ?>
                            <h1 style="color: #000;text-align: left;font-weight: 400;font-size: 36px;line-height: 43px;font-family: 'Open Sans', sans-serif;padding: 10px 35px 0;">
                            <?= $data['contacts']['h1'] ?>
                        </h1>
                        <?php endif; ?>
                        <div class="mfo-about bank-mfo-about bank-contacts-mfo-about">
                            <div class="mfo-about__table">
                                <div class="mfo-about__columns">
                                    <?php if($data['contacts']['mailing_address']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataBank['banks']['contacts']['mailing_address'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['contacts']['mailing_address'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['contacts']['phone_individuals']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataBank['banks']['contacts']['phone_individuals'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['contacts']['phone_individuals'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['contacts']['phone_legal']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataBank['banks']['contacts']['phone_legal'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['contacts']['phone_legal'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['contacts']['phone_city_1']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataBank['banks']['contacts']['phone_city_1'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['contacts']['phone_city_1'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['contacts']['email']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataBank['banks']['contacts']['email'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <a href="mailto:<?= $data['contacts']['email'] ?>"><?= $data['contacts']['email'] ?></a>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php if($data['contacts']['maps']) :  ?>
                        <div class="bank-maps">
                            <?= $data['contacts']['maps'] ?>
                        </div>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="content-reviews bank-content-reviews">
                    <h2 class="content-reviews-title"><?= $model->name?> туралы пікірлер</h2>
                    <?php if($reviews) : ?>
                        <?php foreach ($reviews as $review) : ?>
                            <div class="content-reviews-item">
                                <div class="rr_review_name"><?= $review['name_client'] ?></div>
                                <span class="rr_date"><?php echo date('d.m.Y',strtotime($review['date'])) ?></span>
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
                    <?php endif; ?>
                    <?php if( Yii::$app->session->hasFlash('successMfoView') ): ?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <?php echo Yii::$app->session->getFlash('successMfoView'); ?>
                        </div>
                    <?php endif;?>
                    <?php
                    $action = '/banks/'.$model->url.'/contacts';
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
                    <input type="hidden" id="review-bank_id" name="BankReview[bank_id]" value="<?= $model->id ?>"/>
                    <input type="hidden" name="BankReview[date]" value="<?php echo date('d.m.Y') ?>"/>
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
                    <a href="/banks/<?= $model->url ?>/reviews" class="content-reviews-btn"><?= $model->name?> туралы барлық пікірлерді қараңыз</a>
                </div>
            </div>

            <sidebar class="content-sidebar">
                <div class="mfo_card">
                    <div class="mfo_card__title">Компанияның рейтингі</div>
                    <div class="mfo_card__info ">
                        <div class="mfo_card__rating">
                            <div class="rating">
                                <div class="rating__stars"	style="width:96%"></div>
                                <div	class="rating__val">4.8</div>
                                <div	class="rating__vote">6</div>
                            </div>
                        </div>
                        <div class="aside-rating">
                            <div class="aside-rating-col">
                                <div class="aside-rating-title">Алу қарапайымдылығы</div>
                                <div	class="rating">
                                    <div class="rating__stars"	style="width:96%"></div>
                                    <div	class="rating__val">4.8</div>
                                </div>
                            </div>
                            <div class="aside-rating-col">
                                <div class="aside-rating-title">Беру <br />жылдамдығы</div>
                                <div	class="rating">
                                    <div class="rating__stars"	style="width:100%"></div>
                                    <div	class="rating__val">5.0</div>
                                </div>
                            </div>
                            <div class="aside-rating-col">
                                <div class="aside-rating-title">Қолдау қызметі</div>
                                <div	class="rating">
                                    <div class="rating__stars"	style="width:93%"></div>
                                    <div	class="rating__val">4.7</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mfo_card">
                    <div class="mfo_card__title">Өтінім беру</div>
                    <div class="mfo_card__info">
                        <div class="mfo_card__text">Компанияны таңдай алмадыңыз ба? Өтінім қалдырыңыз, біз Сіз үшін мейлінше пайдалы қарыз түрлерін іріктеп таңдап береміз!</div>
                        <a href="https://smartzaim.kz/zayavka-na-zajm/?utm_source=kz.smartzaim.kz">
                            <div class="mfo_card_button">Нақтырақ</div>
                        </a>
                    </div>
                </div>
                <div class="mfo_card">
                    <div class="mfo_card__title">Қарыз алушылар рейтингі</div>
                    <div	class="aside-rating aside-rating-mfo">
                        <div class="aside-rating-mfo-col">
                            <div class="aside-rating-mfo-item">
                                <a	href="#">
                                    <noscript>
                                        <img src="/img/2016/08/4slovo-e1550510710120.png">
                                    </noscript>
                                    <img	class="lazyload"	src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20%20%22%3E%3C/svg%3E'	data-src="/img/2016/08/4slovo-e1550510710120.png"	style="width: 110px;">
                                </a>
                            </div>
                            <div class="aside-rating-mfo-item">
                                <a	href="#">
                                    <div	class="rating rating-wraps">
                                        <div class="rating-box">
                                            <div class="rating__stars"	style="width:87%"></div>
                                            <div	class="rating__val">4.4</div>
                                        </div>
                                        <div	class="aside-rating-mfo__rev">Пікірлер:	177</div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="aside-rating-mfo-col">
                            <div class="aside-rating-mfo-item">
                                <a	href="http://moneyman.kz/secure/registration?partner=smartzaimkz&utm_source=smartzaim&utm_medium=affiliate">
                                    <noscript>
                                        <img	src="img2016/08/moneyman.png">
                                    </noscript>
                                    <img	class="lazyload"	src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20%20%22%3E%3C/svg%3E'	data-src="/img/2016/08/moneyman.png"	style="width: 110px;">
                                </a>
                            </div>
                            <div class="aside-rating-mfo-item">
                                <a	href="#">
                                    <div	class="rating rating-wraps">
                                        <div class="rating-box">
                                            <div class="rating__stars"	style="width:87%"></div>
                                            <div	class="rating__val">4.6</div>
                                        </div>
                                        <div	class="aside-rating-mfo__rev">Пікірлер:	41</div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="aside-rating-mfo-col">
                            <div class="aside-rating-mfo-item">
                                <a	href="#">
                                    <noscript>
                                        <img	src="/img/2018/01/tengokz_300x140_0.png">
                                    </noscript>
                                    <img	class="lazyload"	src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20%20%22%3E%3C/svg%3E'	data-src="/img/2018/01/tengokz_300x140_0.png">
                                </a>
                            </div>
                            <div class="aside-rating-mfo-item">
                                <a	href="#">
                                    <div	class="rating rating-wraps">
                                        <div class="rating-box">
                                            <div class="rating__stars"	style="width:87%"></div>
                                            <div	class="rating__val">3.6</div>
                                        </div>
                                        <div	class="aside-rating-mfo__rev">Пікірлер:	30</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mfo_card__info">
                        <a href="/">
                            <div	class="mfo_card_button">Басқа қарызды таңдау</div>
                        </a>
                    </div>
                </div>
                <!--                                --><?php //echo \frontend\widgets\ArticlesNews::widget() ?>

            </sidebar>
        </div>
    </div>
</section>