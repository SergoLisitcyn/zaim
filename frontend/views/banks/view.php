<?php

use \yii\helpers\Url;
use kartik\rating\StarRating;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Banks */

$this->title = $model->name;
$data = unserialize($model->data);
\yii\web\YiiAsset::register($this);
?>
<section class="breadcrumbs plr">
    <div class="breadcrumbs-wrap limit-width">
        <ul class="breadcrumbs__items white-breadcrumbs__items">
            <li>
                <a href="/banks">Банки</a>
            </li>
            <li>
                <?= $model->name ?>
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
                        <li class="active">
                            <a href="<?= Url::toRoute(['banks/view', 'url' => $model->url]) ?>">
                                <span>О банке</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= Url::toRoute(['banks/finance', 'url' => $model->url]) ?>">
                                <span>Финансовые показатели</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= Url::toRoute(['banks/requisites', 'url' => $model->url]) ?>">
                                <span>Реквизиты и коды</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= Url::toRoute(['banks/contacts', 'url' => $model->url]) ?>">
                                <span>Контакты</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= Url::toRoute(['banks/reviews', 'url' => $model->url]) ?>">
                                <span>Отзывы</span>
                            </a>
                        </li>
                    </ul>
                    <div class="content-main-info bank-content-main-info">
                        <div class="content-main-info__item">
                            <h1><?= $model->name ?></h1>
                            <div class="mfo-head__rating">
                                <div class="rating">
                                    <div class="rating__stars" style="width:90%"></div>
                                    <div class="rating__val">4.8</div>
                                </div>
                            </div>
                        </div>
                        <div class="content-main-info__item">
                            <div class="mfo-head-logo">
                                <?php if($model->image) : ?>
                                <a href="#">
                                    <noscript>
                                        <img src="<?= $model->image ?>" alt="<?= $model->name ?>">
                                    </noscript>
                                    <img class="lazyloaded" src="<?= $model->image ?>" data-src="<?= $model->image ?>" alt="<?= $model->name ?>">
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="content-main-info__content">
                        <div class="mfo-about">
                            <h2 class="mfo-about-title info-subtitle">О банке</h2>
                            <p class="mfo-about-text">
                                <?= $model->desc ?>
                            </p>
                            <div class="mfo-about__table">
                                <div class="mfo-about__columns">
                                    <?php if($data['info']['city']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            Город:
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['info']['city'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['info']['year_foundation']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            Год основания:
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['info']['year_foundation'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['info']['license_number']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            Номер лицензии Агентства Республики Казахстан по регулированию и развитию финансового рынкам, №:
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['info']['license_number'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['info']['license_data']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            Дата полчения лицензии Агентства Республики Казахстан по регулированию и развитию финансового рынкам, №:
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['info']['license_data'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['info']['chairman']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            Председатель правления:
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['info']['chairman'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['info']['corporate_name_rus']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            Полное фирменное наименование на русском языке:
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['info']['corporate_name_rus'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['info']['corporate_name_kz']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            Полное название на казахском языке:
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['info']['corporate_name_kz'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['info']['corporate_name_eng']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            Название на английском языке:
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['info']['corporate_name_eng'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['info']['short_name']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            Сокращенное название:
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['info']['short_name'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['info']['url']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            URL:
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <noindex>
                                            <a href="https://<?= $data['info']['url'] ?>" target="_blank" class="mfo-about__col-right-link">
                                                <?= $data['info']['url'] ?>
                                            </a>
                                            </noindex>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['info']['controll_shareholder']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            Контролирующий акционер:
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['info']['controll_shareholder'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['info']['url']) :  ?>
                                        <div class="mfo-about__col">
                                            <div class="mfo-about__col-left">
                                                Устав:
                                            </div>
                                            <div class="mfo-about__col-right">
                                                <a href="<?= $model->ustav ?>"  target="_blank" class="mfo-about__col-right-link">Устав</a>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="content-text blocks-content-text">
                            <h2 class="content-text-title info-subtitle">Услуги банка:</h2>
                            <div class="content-text-items">
                                <?php if($data['services']['credit_card'] == "+") : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img">
                                        <img src="/img/banks/services-1.png" data-src="/img/banks/services-1.png" alt="Крединые карты">
                                    </div>
                                    <span>Крединые карты</span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['services']['credit_cash'] == "+") : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img">
                                        <img src="/img/banks/services-2.png" data-src="/img/banks/services-2.png" alt="Кредит наличными">
                                    </div>
                                    <span>Кредит наличными</span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['services']['credit_auto'] == "+") : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img">
                                        <img src="/img/banks/services-3.png" data-src="/img/banks/services-3.png" alt="Автокредит">
                                    </div>
                                    <span>Автокредит</span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['services']['ipoteka'] == "+") : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img">
                                        <img src="/img/banks/services-4.png" data-src="/img/banks/services-4.png" alt="Ипотека">
                                    </div>
                                    <span>Ипотека</span>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="rating-text bank-rating-text">
                            <h2 class="rating-text-title info-subtitle">Рейтинги:</h2>
                            <div class="rating-text-columns">
                                <?php if($data['rating']['sp_rating']) : ?>
                                <div class="rating-text-col">
                                    <div class="rating-text-col-left">Рейтинг S&P:</div>
                                    <div class="rating-text-col-right"><?= $data['rating']['sp_rating'] ?></div>
                                </div>
                                <?php endif; ?>
                                <?php if($data['rating']['sp_prediction']) : ?>
                                <div class="rating-text-col">
                                    <div class="rating-text-col-left">Прогноз:</div>
                                    <div class="rating-text-col-right"><?= $data['rating']['sp_prediction'] ?></div>
                                </div>
                                <?php endif; ?>
                                <?php if($data['rating']['fitch_rating']) : ?>
                                <div class="rating-text-col">
                                    <div class="rating-text-col-left">Рейтинг Fitch:</div>
                                    <div class="rating-text-col-right"><?= $data['rating']['fitch_rating'] ?></div>
                                </div>
                                <?php endif; ?>
                                <?php if($data['rating']['fitch_prediction']) : ?>
                                <div class="rating-text-col">
                                    <div class="rating-text-col-left">Прогноз:</div>
                                    <div class="rating-text-col-right"><?= $data['rating']['fitch_prediction'] ?></div>
                                </div>
                                <?php endif; ?>
                                <?php if($data['rating']['moodys_rating']) : ?>
                                <div class="rating-text-col">
                                    <div class="rating-text-col-left">Рейтинг Moody’s:</div>
                                    <div class="rating-text-col-right"><?= $data['rating']['moodys_rating'] ?></div>
                                </div>
                                <?php endif; ?>
                                <?php if($data['rating']['moodys_prediction']) : ?>
                                <div class="rating-text-col">
                                    <div class="rating-text-col-left">Прогноз:</div>
                                    <div class="rating-text-col-right"><?= $data['rating']['moodys_prediction'] ?></div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
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
                    $action = '/banks/'.$model->url;
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
