<?php
//
//use \yii\helpers\Url;
//use frontend\widgets\GridCatalog;
//
//
//$this->title = 'Mfo News';
//?>
<!--<div>-->
<!--    --><?php //echo GridCatalog::widget(['output' => $mfo,'mfoNew' => true]); ?>
<!--</div>-->
<?php
use common\models\Mfo;
use \yii\helpers\Url;
if($tag){
    $this->title = $tag.' – smartzaim.kz';
}

?>
<section class="breadcrumbs plr">
    <div class="breadcrumbs-wrap limit-width">
        <ul class="breadcrumbs__items">
            <li>
                <a href="/reestr-mfo">МҚҰ тізілімі</a>
            </li>
            <?php if($tag) :?>
            <li>
                <?= $tag ?>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</section>
<section class="content reestr plr">
    <div class="content-wrap limit-width">
        <div class="content-row">
            <div class="content-box">
                <div class="content-info">
                    <div class="content-main-info">
                        <div class="content-main-info__item">
                            <?php if($tag) :?>
                                    <h1 style="text-align: center"><?= $tag ?></h1>
                            <?php endif; ?>
                            <div class="content-main-info__content">
                                <div class="reestr-article__list bank-offers-horizontal">
                                    <?php foreach ($mfoAll as $mfo) :
                                        $data = unserialize($mfo->data_kz);
                                        ?>

                                        <div class="reestr-item">
                                            <div class="reestr-item__logo">
                                                <?php if($mfo->logo) : ?>
                                                    <img src="<?= $mfo->logo ?>" alt="">
                                                <?php else: ?>
                                                    <div class="reestr-item__status">
                                                        <img src="/img/logo.jpg">
<!--                                                        Қолданыстағы-->
                                                    </div>
                                                <?php endif; ?>
                                            </div>

                                            <div class="reestr-item__content">
                                                <?php if(isset($data['seo']['h1'])) : ?>
                                                    <div class="reestr-item__title"><?= $data['seo']['h1'] ?></div>
                                                <?php endif; ?>
                                                <div class="reestr-item__box">
                                                    <div class="reestr-item__descr">
                                                        <div class="reestr-item__descr-left">
                                                            <?php if(isset($data['info']['entity'])) : ?>
                                                                <div class="reestr-item__descr-item">
                                                                    <div class="reestr-item__descr-title"><?= $dataMfo['mfo']['info']['entity'] ?></div>
                                                                    <div class="reestr-item__descr-text"><?= $data['info']['entity'] ?></div>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if(isset($data['license']['license_arrfr'])) : ?>
                                                                <div class="reestr-item__descr-item">
                                                                    <div class="reestr-item__descr-title">Лицензия АРРФР:</div>
                                                                    <div class="reestr-item__descr-text"><?= $data['license']['license_arrfr'] ?></div>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if(isset($data['license']['issue_date'])) : ?>
                                                                <div class="reestr-item__descr-item">
                                                                    <div class="reestr-item__descr-title"><?= $dataMfo['mfo']['license']['issue_date'] ?></div>
                                                                    <div class="reestr-item__descr-text"><?= $data['license']['issue_date'] ?></div>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if(isset($data['requisites']['bin'])) : ?>
                                                                <div class="reestr-item__descr-item">
                                                                    <div class="reestr-item__descr-title"><?= $dataMfo['mfo']['requisites']['bin'] ?></div>
                                                                    <div class="reestr-item__descr-text"><?= $data['requisites']['bin'] ?></div>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if(isset($data['requisites']['legal_address'])) : ?>
                                                                <div class="reestr-item__descr-item">
                                                                    <div class="reestr-item__descr-title"><?= $dataMfo['mfo']['requisites']['legal_address'] ?></div>
                                                                    <div class="reestr-item__descr-text"><?= $data['requisites']['legal_address'] ?></div>
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="reestr-item__descr-right">
                                                            <?php if(isset($data['contacts']['phone_1']) && $data['contacts']['phone_1']) :?>
                                                                <div class="reestr-item__descr-item">
                                                                    <div class="reestr-item__descr-title"><?= $dataMfo['mfo']['contacts']['phone_1'] ?></div>
                                                                    <div class="reestr-item__descr-text">
                                                                        <a class="reestr-item__descr-link" href="tel:<?= $data['contacts']['phone_1'] ?>"><?= $data['contacts']['phone_1'] ?></a>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if($mfo->link_offer && $mfo->status != Mfo::STATUS_DEACTIVATED_LINK) : ?>
                                                                <div class="reestr-item__descr-item">
                                                                    <div class="reestr-item__descr-title"><?= $dataMfo['mfo']['info']['website'] ?></div>
                                                                    <div class="reestr-item__descr-text">
                                                                        <a class="reestr-item__descr-link" href="<?= $mfo->link_offer ?>" rel="nofollow" target="_blank"><?= $mfo->website?></a>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if(isset($data['contacts']['email_1']) && $data['contacts']['email_1']) :?>
                                                                <div class="reestr-item__descr-item">
                                                                    <div class="reestr-item__descr-title"><?= $dataMfo['mfo']['contacts']['email_1'] ?></div>
                                                                    <div class="reestr-item__descr-text">
                                                                        <a class="reestr-item__descr-link" href="mailto:<?= $data['contacts']['email_1'] ?>"><?= $data['contacts']['email_1'] ?></a>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if(isset($data['contacts']['whatsApp']) && $data['contacts']['whatsApp']) :?>
                                                                <div class="reestr-item__descr-item">
                                                                    <div class="reestr-item__descr-title"><?= $dataMfo['mfo']['contacts']['whatsApp'] ?></div>
                                                                    <div class="reestr-item__descr-text">
                                                                        <a class="reestr-item__descr-link" href="https://wa.me/<?= $data['contacts']['whatsApp'] ?>" target="_blank" rel="nofollow">
                                                                            <?= $data['contacts']['whatsApp'] ?>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="reestr-item__btn">
                                                                <a href="<?= Url::toRoute(['mfo-new/view', 'url' => $mfo->url]) ?>" class="btn-orange">Подробнее</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <sidebar class="content-sidebar">
                <div class="mfo_card">
                    <form	class="subscribtion_form subscribtion_form-second">
                        <div	class="aside-subscribe-text">Вы хотите первыми узнавать	<br> о специальных	предложениях <br> и акциях?</div>
                        <div	class="email_sidebar_container">
                            <div	class="subscribe-sidebar-item subscribe-sidebar-item--input-email">
                                <input	class="subscribe-sidebar-item__control subscribe-sidebar-item__control--input-email"	placeholder="Email"	type="text"	name="email"	value=""></div>
                            <div	class="subscribe-sidebar-item subscribe-sidebar-item--btn-submit">
                                <input	class="subscribe-sidebar-item__btn subscribe-sidebar-item__btn--btn-submit"	type="submit"	value="Подписаться">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mfo_card">
                    <div class="mfo_card__title">Рейтинг	заемщиков</div>
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
                                        <div	class="aside-rating-mfo__rev">Отзывы:	177</div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="aside-rating-mfo-col">
                            <div class="aside-rating-mfo-item">
                                <a	href="#">
                                    <noscript>
                                        <img	src="/img2016/08/moneyman.png">
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
                                        <div	class="aside-rating-mfo__rev">Отзывы:	41</div>
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
                                        <div	class="aside-rating-mfo__rev">Отзывы:	30</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mfo_card__info">
                        <a href="#">
                            <div	class="mfo_card_button">Подобрать другой займ</div>
                        </a>
                    </div>
                </div>
            </sidebar>
        </div>
    </div>
</section>
