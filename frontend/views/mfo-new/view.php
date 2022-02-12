<?php

use \yii\helpers\Url;
use \frontend\widgets\MfoViewWidget;
/* @var $this yii\web\View */
/* @var $model common\models\MfoNew */

if(isset($data['seo']['title']) and !empty($data['seo']['title'])) {
    $this->title = $data['seo']['title'];
} else {
    $this->title = $model->name;
}
if(isset($data['seo']['description']) and !empty($data['seo']['description'])) {
    $this->registerMetaTag(['name' => 'description','content' => $data['seo']['description']]);
}
\yii\web\YiiAsset::register($this);
?>
<section class="breadcrumbs plr">
    <div class="breadcrumbs-wrap limit-width">
        <ul class="breadcrumbs__items white-breadcrumbs__items">
            <li>
                <a href="/">Онлайн қарыздар</a>
            </li>
            <li>
                <?= $data['info']['name']?>
            </li>
        </ul>
    </div>
    <img class="main-title__img bank-main-title__img" src="img/uncode-child/bg-sm.png" alt="">
</section>
<section class="content plr">
    <div class="content-wrap limit-width">
        <div class="content-row">
            <div class="content-box mfo-content-box">
                <div class="content-info">
                    <!--  Навигация-->
                    <?= MfoViewWidget::widget(['type' => 'navigation','model' => $model,'data' => $data,'navigation' => 'view']) ?>

                    <div class="content-main-info">
                        <div class="content-main-info__item">
                            <?php if($data['seo']['h1']) :  ?>
                            <h1><?= $data['seo']['h1'] ?></h1>
                            <?php endif; ?>
                            <div class="mfo-head__rating">
                                <div class="rating">
                                    <?php $starRate = (100 *  $model->rating)/5;?>
                                    <div class="rating__stars" style="width:<?= $starRate?>%"></div>
                                    <div class="rating__val"><?= $model->rating?></div>
                                </div>
                            </div>
                            <div class="mfo-head__text">Ресми сайтқа өту
                                <a href="<?= $model->link_offer ?>" target="_blank"><?= $model->website?></a>
                            </div>
                        </div>
                        <div class="content-main-info__item">
                            <div class="mfo-head-logo">
                                <?php if($model->logo) : ?>
                                    <a href="<?= $model->link_offer ?>">
                                        <noscript>
                                            <img	src="<?= $model->logo?>">
                                        </noscript>
                                        <img class="lazyloaded" src="<?= $model->logo?>" data-src="<?= $model->logo?>" alt="<?= $model->mfo_name?>">
                                    </a>
                                <?php endif; ?>
                                <div class="mfo-head-approv">Мақұлдау:
                                    <span class="mfo-head-approv-value"><?= $model->odobrenie?>%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-main-info__content">
                        <?php if($sale) : ?>
                            <div class="akciya-container">
                                <div class="akciya-container-item">
                                    <div class="akciya-caption">Акция!
                                    </div>
                                    <div class="akciya-text"><?= $sale->name?></div>
                                </div>
                                <div class="akciya-container-item">
                                    <div class="akciya-date-wrap">
                                        <div class="akciya-date"><?= date('d.m.Y',strtotime($sale->srok_ot)) ?> - <?= date('d.m.Y',strtotime($sale->srok_do)) ?>
                                            <a href="<?= \yii\helpers\Url::toRoute(['sale/list', 'url' => $sale->url]) ?>" class="akciya-btn">Нақтырақ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="mfo-about">
                            <h2 class="mfo-about-title info-subtitle">Компания туралы</h2>
                            <!--   О компании -->
                            <div class="mfo-about-text">
                                <?= $model->about_company ?>
                            </div>
                        </div>
                        <!--   Условия для существующих клиентов-->
                        <?= MfoViewWidget::widget(['type' => 'conditions-customers','model' => $model,'data' => $data]) ?>
                        <div class="mfo-about">
                            <!--    Контент  -->
                            <div class="content-text" style="padding: 0">
                                <?= $model->content ?>
                            </div>

                            <!--   Основная информация -->
                            <?= MfoViewWidget::widget(['type' => 'main-info','model' => $model,'data' => $data]) ?>

                            <!--   Членство в профессиональных объединениях -->
                            <?= MfoViewWidget::widget(['type' => 'associations','model' => $model,'data' => $data]) ?>
                        </div>

                        <!--   Лицензия -->
                        <div class="mfo-license">
                            <h2 class="mfo-about-title info-subtitle"><?= $dataTag['license'] ?></h2>
                            <?= MfoViewWidget::widget(['type' => 'license','model' => $model,'data' => $data]) ?>
                        </div>

                        <?php if($data['financial_report']['report']) : ?>
                        <div class="mfo-report">
                            <h2 class="mfo-about-title info-subtitle"><?= $dataTag['fin'] ?></h2>
                            <div class="mfo-report__block">
                                <div class="mfo-report__col">
                                    <a href="//<?= $data['financial_report']['report'] ?>" class="mfo-report__link" target="_blank" download>
                                        <img class="lazyloaded" src="/img/mfo/pdf.png" data-src="/img/mfo/pdf.png" alt="PDF-файл">
                                    </a>
                                    <span class="mfo-report__year">Финансовый отчет за <?= $data['financial_report']['year'] ?>г <?= $data['info']['entity'] ?></span>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!--   Разделы/признаки -->
                        <?= MfoViewWidget::widget(['type' => 'features','model' => $model,'data' => $data]) ?>

                        <div class="mfo-about">
                            <!--   Условия микрокредитования -->
                            <h2 class="mfo-about-title info-subtitle"><?= $dataTag['uslovia_credit'] ?></h2>
                            <?= MfoViewWidget::widget(['type' => 'uslovia','model' => $model,'data' => $data]) ?>


                            <!--   Особенность-->
                            <div class="mfo-about__feature">
                                <h2 class="content-text-title info-subtitle"><?= $dataTag['osobenost'] ?></h2>
                                <?= MfoViewWidget::widget(['type' => 'osobenost','model' => $model,'data' => $data]) ?>
                            </div>
                        </div>

                        <!--      Способы получения-->
                        <div class="content-text blocks-content-text">
                            <h2 class="content-text-title info-subtitle"><?= $dataTag['sposob_poluch'] ?></h2>
                            <?= MfoViewWidget::widget(['type' => 'sposob_poluch','model' => $model,'data' => $data]) ?>
                        </div>

                        <!--      Способы погашения  -->
                        <div class="content-text blocks-content-text">
                            <h2 class="content-text-title info-subtitle"><?= $dataTag['sposob_pogash'] ?></h2>
                            <?= MfoViewWidget::widget(['type' => 'sposob_pogash','model' => $model,'data' => $data]) ?>
                        </div>

                        <!--      Реквизиты  -->
                        <div class="mfo-about">
                            <h2 class="mfo-about-title info-subtitle"><?= $dataTag['requisites'] ?></h2>
                            <?= MfoViewWidget::widget(['type' => 'requisites','model' => $model,'data' => $data]) ?>
                        </div>

                        <div class="mfo-money">
                            <a href="<?= $model->link_offer ?>" class="mfo-money-btn content-text-button" target="_blank">Ақшаны алу</a>
                        </div>

                        <?= MfoViewWidget::widget(['type' => 'offer-recom']) ?>
                        <?php if($model->video) : ?>
                            <div class="mfo-about__video">
                                <h3 class="mfo-about__video-title"><?= $model->mfo_name?> ақшаны қалай алуға болады</h3>
                                <div class="yt-video">
                                    <iframe width="805" height="460" src="<?= $model->video?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
                <!--  Раздел отзывы -->
                <?= MfoViewWidget::widget(['type' => 'reviews','model' => $model,'data' => $data,'reviews' => $reviews, 'reviewsModel' => $reviewsModel]) ?>
            </div>

            <sidebar class="content-sidebar">
                <div class="mfo_card">
                    <div class="mfo_card__title">Компанияның рейтингі</div>
                    <div class="mfo_card__info ">
                        <div class="mfo_card__rating">
                            <div class="rating">
                                <div class="rating__stars" style="width:<?= $starRate ?>%"></div>
                                <div class="rating__val"><?= $model->rating ?></div>
                                <div class="rating__vote">6</div>
                            </div>
                        </div>
                        <div class="aside-rating">
                            <div class="aside-rating-col">
                                <div class="aside-rating-title">Алу қарапайымдылығы</div>
                                <div class="rating">
                                    <div class="rating__stars" style="width:<?= $starRate ?>%"></div>
                                    <div class="rating__val"><?= $model->rating ?></div>
                                </div>
                            </div>
                            <div class="aside-rating-col">
                                <div class="aside-rating-title">Беру <br />жылдамдығы</div>
                                <div class="rating">
                                    <div class="rating__stars" style="width:100%"></div>
                                    <div class="rating__val">5.0</div>
                                </div>
                            </div>
                            <div class="aside-rating-col">
                                <div class="aside-rating-title">Қолдау қызметі</div>
                                <div class="rating">
                                    <div class="rating__stars" style="width:90%"></div>
                                    <div class="rating__val">4.7</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mfo_card">
                    <div	class="mfo_achieve promo">Акция</div>
                    <div class="mfo_card_company">
                        <div class="mfo_card__title"><?= $model->website?> ұсынысы</div>
                    </div>
                    <div class="mfo_card_info mfo_card_info_col">
                        <div	class="mfo_card_info_inner">
                            <div	class="mfo_card_info_time">
                                <div	class="mfo_card_info_time_label">Мерзімге:</div>
                                <div	class="mfo_card_info_time_data"><?= $model->srok?></div>
                            </div>
                            <div	class="mfo_card_info_sum">
                                <div	class="mfo_card_info_sum_label">Сомасы (тнг):</div>
                                <div	class="mfo_card_info_sum_data"><?= $model->sum?></div>
                            </div>
                            <div	class="mfo_card_info_rate">
                                <div	class="mfo_card_info_rate_label">Мөлшерлемесі:</div>
                                <div	class="mfo_card_info_rate_data"><?= $model->stavka?></div>
                            </div>
                            <div	class="mfo_card_info_accept">
                                <div	class="mfo_card_info_accept_label">Қарау:</div>
                                <div	class="mfo_card_info_accept_data"><?= $model->rasmotrenie?></div>
                            </div>
                            <div	class="mfo_card_info_ways">
                                <div	class="mfo_card_info_ways_label">Алу:</div>
                                <div	class="mfo_card_info_ways_data">
                                    <noscript>
                                        <img style="height: 20px;"	src="/img/2016/08/all.png">
                                    </noscript>
                                    <img	class="lazyload"	style="height: 20px;"	src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20%20%22%3E%3C/svg%3E'	data-src="/img/2016/08/all.png">
                                </div>
                            </div>
                        </div>
                        <noindex>
                            <a href="<?= $model->link_offer ?>" target="_blank">
                                <div class="mfo_card_button">Ақшаны алу</div>
                            </a>
                        </noindex>
                    </div>
                </div>
                <div class="mfo_card">
                    <div class="mfo_card__title">Өтінім беру</div>
                    <div class="mfo_card__info">
                        <div class="mfo_card__text">Компанияны таңдай алмадыңыз ба? Өтінім қалдырыңыз, біз Сіз үшін мейлінше пайдалы қарыз түрлерін іріктеп таңдап береміз!</div>
                        <a href="https://smartzaim.kz/zayavka-na-zajm/?utm_source=kz.smartzaim.kz">
                            <div	class="mfo_card_button">Нақтырақ</div>
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
                                        <img	src="/img/2016/08/4slovo-e1550510710120.png">
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
                                        <div	class="aside-rating-mfo__rev">Нақтырақ:	177</div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="aside-rating-mfo-col">
                            <div class="aside-rating-mfo-item">
                                <a	href="#">
                                    <noscript>
                                        <img	src="img2016/08/moneyman.png">
                                    </noscript>
                                    <img	class="lazyload"	src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20%20%22%3E%3C/svg%3E'	data-src="/img/2016/08/moneyman.png"	style="width: 110px;">
                                </a>
                            </div>
                            <div class="aside-rating-mfo-item">
                                <a	href="#">
                                    <div class="rating rating-wraps">
                                        <div class="rating-box">
                                            <div class="rating__stars"	style="width:87%"></div>
                                            <div class="rating__val">4.6</div>
                                        </div>
                                        <div class="aside-rating-mfo__rev">Нақтырақ:	41</div>
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
                                        <div	class="aside-rating-mfo__rev">Нақтырақ:	30</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mfo_card__info">
                        <a href="/">
                            <div class="mfo_card_button">Басқа қарызды таңдау</div>
                        </a>
                    </div>
                </div>
                <div class="mfo_card">
                    <form	class="subscribtion_form" action="/mfo/<?= $model->url ?>" method="post">
                        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                        <div	class="aside-subscribe-text">Арнайы ұсыныстар мен акциялар <br>туралы бірінші білгіңіз <br> келе ме?</div>
                        <div	class="email_sidebar_container">
                            <div	class="subscribe-sidebar-item subscribe-sidebar-item--input-email">
                                <input	class="subscribe-sidebar-item__control subscribe-sidebar-item__control--input-email"	placeholder="Email"	type="text"	name="email_unisender"	value=""></div>
                            <div	class="subscribe-sidebar-item subscribe-sidebar-item--btn-submit">
                                <input	class="subscribe-sidebar-item__btn subscribe-sidebar-item__btn--btn-submit"	type="submit"	value="Қол қою">
                            </div>
                        </div>
                    </form>
                </div>
                <!--                --><?php //echo \frontend\widgets\ArticlesNews::widget() ?>
            </sidebar>
        </div>
    </div>
</section>
