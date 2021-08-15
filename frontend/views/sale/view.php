<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use \frontend\widgets\Rating;

/* @var $this yii\web\View */
/* @var $model common\models\Sale */

$this->title = $model->name;
\yii\web\YiiAsset::register($this);
?>
<section class="breadcrumbs plr">
    <div class="breadcrumbs-wrap limit-width">
        <ul class="breadcrumbs__items">
            <li>
                <a href="/">Онлайн қарыздар</a>
            </li>
            <li>
                <a href="#">Акциялар</a>
            </li>
            <li>
                <?= $model->name ?>
            </li>
        </ul>
    </div>
    <img class="main-title__img" src="img/uncode-child/bg-sm.png" alt="">
</section>


<section class="content plr">
    <div class="content-wrap limit-width">
        <div class="content-row">
            <div class="content-box">
                <div class="content-info">
                    <div class="content-main-info">
                        <div class="content-main-info__item">
                            <h1><?= $model->name ?></h1>
                            <div class="aktsii-article__dates">
                                <i></i><span><?= date("d.m.Y", strtotime($model->srok_ot)) ?> - <?= date("d.m.Y", strtotime($model->srok_do)) ?></span>
                            </div>
                            <div class="email_container">
                                <div class="text_top_subscribe_container">Сілтемеге жазылыңыз және акциялар мен арнайы<br> ұсыныстар туралы алғашқылардың бірі болып біліңіз</div>
                                <div class="subscribe-top-item-wrap">
                                    <div	class="subscribe-top-item subscribe-top-item--input-email">
                                        <input	class="subscribe-top-item__control subscribe-top-item__control--input-email"	placeholder="Email"	type="text"	name="email"	value=""></div>
                                    <div	class="subscribe-top-item subscribe-top-item--btn-submit">
                                        <input	class="subscribe-top-item__btn subscribe-top-item__btn--btn-submit"	type="submit"	value="Қол қою">
                                    </div>
                                </div>
                            </div>
                            <div class="aktsii-article__content">
                                <a href="<?= $model->partner_link?>"  target="_blank" class="aktsii-article__img">
                                    <img class="lazy lazy-loaded" src="<?= $model->image?>" data-lazy-type="image" data-lazy-src="<?= $model->image?>" alt="Акция Dengiclick" width="600" height="270">
                                    <noscript>
                                        <img class="size-medium wp-image-374 aligncenter" src="<?= $model->image?>" alt="Акция Dengiclick" width="600" height="270" />
                                    </noscript>
                                </a>
                                <?= $model->content ?>
                                <a href="<?= $model->partner_link?>" target="_blank" class="articles_button">Акцияға қатысу</a>
                                <div class="aktsii-article__box">
                                    <h3>Ұқсас ұсыныстар</h3>
                                    <div class="aktsii-article__box-inner">
                                        <div class="aktsii-article__box-offers">
                                            <a href="#" title="Оформите микрокредит в Creditplus.kz и получите подарок!">
                                                <noscript>
                                                    <img src="<?= $model->image?>" alt="акции" />
                                                </noscript>
                                                <img class=" lazyloaded" src="<?= $model->image?>" data-src="<?= $model->image?>" alt="акции">
                                                <span> Оформите микрокредит в
															Creditplus.kz и получите подарок! </span>
                                            </a>
                                            <a href="#" title="Первый микрокредит в Zaimer.kz без переплат!">
                                                <noscript>
                                                    <img src="img/2020/10/zaimer-pervy-mikrokredt-bez-pereplat-150x150.jpg"	alt="акции" />
                                                </noscript>
                                                <img class=" lazyloaded" src="img/2020/10/zaimer-pervy-mikrokredt-bez-pereplat-150x150.jpg" data-src="img/2020/10/zaimer-pervy-mikrokredt-bez-pereplat-150x150.jpg" alt="акции">
                                                <span> Первый микрокредит в	Zaimer.kz без переплат! </span>
                                            </a>
                                            <a href="#" title="Получи деньги в Tengo.kz и выиграй квартиру или технику для дома!">
                                                <noscript>
                                                    <img	src="img/2020/10/vyigraj-kvartiru-ili-tehniku-dlya-doma-150x150.jpg"	alt="акции" />
                                                </noscript>
                                                <img class=" lazyloaded" src="img/2020/10/vyigraj-kvartiru-ili-tehniku-dlya-doma-150x150.jpg" data-src="img/2020/10/vyigraj-kvartiru-ili-tehniku-dlya-doma-150x150.jpg" alt="акции">
                                                <span> Получи деньги в Tengo.kz и	выиграй квартиру или технику для дома! </span>
                                            </a>
                                        </div>
                                        <div class="aktsii-article__btn">
                                            <a href="#">Барлық акциялар</a>
                                        </div>
                                    </div>
                                    <div class="aktsii-article__share">
                                        <a href="#" class="articles_button">Ақшаны алу</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <sidebar class="content-sidebar">
                <div class="mfo_card">
                    <div class="mfo_achieve promo">Акция</div>
                    <div class="mfo_card_company">
                        <a href="#">
                            <noscript>
                                <img src="<?= $mfo->logo?>" alt="ДеньгиClick">
                            </noscript>
                            <img class=" ls-is-cached lazyloaded" src="<?= $mfo->logo?>" data-src="<?= $mfo->logo?>" alt="ДеньгиClick">
                        </a>
                    </div>
                    <div class="mfo_card_compare">
                        <a href="<?= $mfo->mfo_name ?>" data-mfo="dengiclick" data-title="ДеньгиClick">Салыстыру</a>
                    </div>
                    <div class="mfo_card_info_link">
                        <a href="#">Нақтырақ о <?= $mfo->mfo_name ?></a>
                    </div>
                    <div class="mfo_card_info">
                        <div class="mfo_card_info_inner">
                            <div class="mfo_card_info_rating">
                                <div class="mfo_card_info_rating_label">Рейтинг:</div>
                                <div class="mfo_card_info_rating_data">
                                    <div class="rating__stars" style="width:91%">
                                    </div>
                                    <div class="rating__val"><?= $mfo->rating ?></div>
                                </div>
                            </div>
                            <div class="mfo_card_info_time">
                                <div class="mfo_card_info_time_label">Мерзімге:</div>
                                <div class="mfo_card_info_time_data"><?= $mfo->srok ?></div>
                            </div>
                            <div class="mfo_card_info_sum">
                                <div class="mfo_card_info_sum_label"> Сомасы (тнг):</div>
                                <div class="mfo_card_info_sum_data"><?= $mfo->sum ?></div>
                            </div>
                            <div class="mfo_card_info_rate">
                                <div class="mfo_card_info_rate_label">Мөлшерлемесі:</div>
                                <div class="mfo_card_info_rate_data"><?= $mfo->stavka ?></div>
                            </div>
                            <div class="mfo_card_info_approval">
                                <div class="mfo_card_info_approval_label">Мақұлдау:</div>
                                <div class="mfo_card_info_approval_data"><?= $mfo->odobrenie ?> %</div>
                            </div>
                            <div class="mfo_card_info_accept">
                                <div class="mfo_card_info_accept_label">Қарау:</div>
                                <div class="mfo_card_info_accept_data"><?= $mfo->rasmotrenie ?> </div>
                            </div>
                            <div class="mfo_card_info_ways">
                                <div class="mfo_card_info_ways_label">Алу:</div>
                                <div class="mfo_card_info_ways_data">
                                    <noscript>
                                        <img src="img/2016/08/all.png" alt="all">
                                    </noscript>
                                    <img class=" ls-is-cached lazyloaded" src="img/2016/08/all.png" data-src="img/2016/08/all.png" alt="all">
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="mfo_card_button">Ақшаны алу</div>
                        </a>
                    </div>
                </div>
                <div class="subscribe_main">
                    <div class="text_main_subscribe_container">ҚАРЫЗҒА<br> ӨТІНІМ РЕСІМДЕУ</div>
                    <div class="email_sidebar_container">
                        <div class="text_item_subscribe_container">Уақыт жоғалтпайсыз!<br><br>Барлық МҚҰ бір өтінім<br><br>Ең тиімді ұсыныс алу</div>
                        <div class="subscribe-sidebar-item subscribe-sidebar-item--btn-submit">
                            <form>
                                <input class="subscribe-sidebar-item__btn subscribe-sidebar-item__btn--btn-submit" type="submit" value="Өтінім беру">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="mfo_card">
                    <form	class="subscribtion_form subscribtion_form-second">
                        <div	class="aside-subscribe-text">Арнайы ұсыныстар мен акциялар <br>туралы бірінші білгіңіз <br> келе ме?</div>
                        <div	class="email_sidebar_container">
                            <div	class="subscribe-sidebar-item subscribe-sidebar-item--input-email">
                                <input	class="subscribe-sidebar-item__control subscribe-sidebar-item__control--input-email"	placeholder="Email"	type="text"	name="email"	value=""></div>
                            <div	class="subscribe-sidebar-item subscribe-sidebar-item--btn-submit">
                                <input	class="subscribe-sidebar-item__btn subscribe-sidebar-item__btn--btn-submit"	type="submit"	value="Қол қою">
                            </div>
                        </div>
                    </form>
                </div>
            </sidebar>
        </div>
    </div>
</section>

<?= Rating::widget(); ?>
