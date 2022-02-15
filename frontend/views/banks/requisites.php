<?php
use \yii\helpers\Url;
use kartik\rating\StarRating;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
if(isset($data['requisites']['title']) and !empty($data['requisites']['title'])) {
    $this->title = $data['requisites']['title'];
} else {
    $this->title = $model->name;
}
if(isset($data['requisites']['description']) and !empty($data['requisites']['description'])) {
    $this->registerMetaTag(['name' => 'description','content' => $data['requisites']['description']]);
}
?>
<section class="breadcrumbs plr">
    <div class="breadcrumbs-wrap limit-width">
        <ul class="breadcrumbs__items white-breadcrumbs__items">
            <li>
                <?php if($version == 'RU') : ?>
                    <a href="/banks">Банки</a>
                <?php else: ?>
                    <a href="/banks">Банкi</a>
                <?php endif; ?>
            </li>
            <li>
                <a href="<?= Url::toRoute(['banks/view', 'url' => $model->url]) ?>"><?= $data['info']['name'] ?></a>
            </li>
            <li>
                <?= $dataMenu['block_3'] ?>
            </li>
        </ul>
    </div>
    <img class="main-title__img bank-main-title__img" src="img/uncode-child/bg-sm.png" alt="">
</section>


<section class="content plr">
    <div class="content-wrap limit-width">
        <div class="content-row">
            <div class="content-box">
                <div class="content-info bank-content-info">
                    <ul class="nav nav-tabs-mfo" style="padding: 0">
                        <li class="">
                            <a href="<?= Url::toRoute(['banks/view', 'url' => $model->url]) ?>">
                                <span><?= $dataMenu['block_1'] ?></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= Url::toRoute(['banks/finance', 'url' => $model->url]) ?>">
                                <span><?= $dataMenu['block_2'] ?></span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?= Url::toRoute(['banks/requisites', 'url' => $model->url]) ?>">
                                <span><?= $dataMenu['block_3'] ?></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= Url::toRoute(['banks/contacts', 'url' => $model->url]) ?>">
                                <span><?= $dataMenu['block_4'] ?></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= Url::toRoute(['banks/reviews', 'url' => $model->url]) ?>">
                                <?php if($version == 'RU') : ?>
                                    <span>Отзывы</span>
                                <?php else: ?>
                                    <span>Пікірлер</span>
                                <?php endif; ?>
                            </a>
                        </li>
                    </ul>
                    <?php if($data['requisites']['h1']) :  ?>
                    <div class="content-main-info bank-content-main-info">
                        <div class="content-main-info__item content-main-info__item_pad">
                            <h1><?= $data['requisites']['h1'] ?></h1>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="content-main-info__content">
                        <div class="mfo-about bank-mfo-about bank-requisites-mfo-about">
                            <div class="mfo-about__table">
                                <div class="mfo-about__columns">
                                    <?php if($data['requisites']['bin']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataBank['banks']['requisites']['bin'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['requisites']['bin'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['requisites']['bik_swift']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataBank['banks']['requisites']['bik_swift'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['requisites']['bik_swift'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['requisites']['uumo']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataBank['banks']['requisites']['uumo'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['requisites']['uumo'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['requisites']['vat_registration_certificate']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataBank['banks']['requisites']['vat_registration_certificate'] ?>
                                        </div>
                                        <div class="mfo-about__col-right"><?= $data['requisites']['vat_registration_certificate'] ?></div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['codes']['okpo']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataBank['banks']['codes']['okpo'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['codes']['okpo'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['codes']['lei']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataBank['banks']['codes']['lei'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['codes']['lei'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['codes']['sic']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataBank['banks']['codes']['sic'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['codes']['sic'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['codes']['reuters']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataBank['banks']['codes']['reuters'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['codes']['reuters'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
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