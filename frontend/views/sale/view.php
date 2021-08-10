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
                <a href="#">Акции</a>
            </li>
            <li>
                Первый микрокредит в Dengiclick без переплат!
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
                            <h1><?= $model->name?></h1>
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
                                <a href="#" class="aktsii-article__img">
                                    <img class="lazy lazy-loaded" src="<?= $model->image?>" data-lazy-type="image" data-lazy-src="<?= $model->image?>" alt="Акция Dengiclick" width="600" height="270">
                                    <noscript>
                                        <img class="size-medium wp-image-374 aligncenter" src="<?= $model->image?>" alt="Акция Dengiclick" width="600" height="270" />
                                    </noscript>
                                </a>
                                <?= $model->content ?>
                                <a href="#" class="articles_button">Участвовать в	акции</a>
                                <div class="aktsii-article__box">
                                    <h3>Похожие предложения</h3>
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
                                            <a href="aktsii.html">Барлық акциялар</a>
                                        </div>
                                    </div>
                                    <div class="aktsii-article__share">
                                        <a href="#" class="articles_button">Ақшаны алу</a>
                                        <div class="aktsii-article__share-buttons">
                                            <p class="aktsii-article__share-title">Поделиться в соц.сетях:</p>
                                            <div class="aktsii-article__share-links">
                                                <script type="text/javascript">(function() {
                                                        if (window.pluso)if (typeof window.pluso.start == "function") return;
                                                        if (window.ifpluso==undefined) { window.ifpluso = 1;
                                                            var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                                                            s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                                                            s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                                                            var h=d[g]('body')[0];
                                                            h.appendChild(s);
                                                        }})();</script>
                                                <div class="pluso" data-background="transparent" data-options="big,round,line,horizontal,nocounter,theme=08" data-services="facebook,vkontakte,google"></div>
                                            </div>
                                        </div>
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
                                <div class="mfo_card_info_time_label">На срок:</div>
                                <div class="mfo_card_info_time_data"><?= $mfo->srok ?></div>
                            </div>
                            <div class="mfo_card_info_sum">
                                <div class="mfo_card_info_sum_label"> Сумма (тнг):</div>
                                <div class="mfo_card_info_sum_data"><?= $mfo->sum ?></div>
                            </div>
                            <div class="mfo_card_info_rate">
                                <div class="mfo_card_info_rate_label">Ставка:</div>
                                <div class="mfo_card_info_rate_data"><?= $mfo->stavka ?></div>
                            </div>
                            <div class="mfo_card_info_approval">
                                <div class="mfo_card_info_approval_label">Мақұлдау:</div>
                                <div class="mfo_card_info_approval_data"><?= $mfo->odobrenie ?> %</div>
                            </div>
                            <div class="mfo_card_info_accept">
                                <div class="mfo_card_info_accept_label">Рассмотрение:</div>
                                <div class="mfo_card_info_accept_data"><?= $mfo->rasmotrenie ?> </div>
                            </div>
                            <div class="mfo_card_info_ways">
                                <div class="mfo_card_info_ways_label">Получить:</div>
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
                    <div class="text_main_subscribe_container">Оформить<br>заявку на займ</div>
                    <div class="email_sidebar_container">
                        <div class="text_item_subscribe_container">Без потери времени!<br><br>Одна заявка во все МФО<br><br>Получите самое выгодное предложение</div>
                        <div class="subscribe-sidebar-item subscribe-sidebar-item--btn-submit">
                            <form>
                                <input class="subscribe-sidebar-item__btn subscribe-sidebar-item__btn--btn-submit" type="submit" value="ПОДАТЬ ЗАЯВКУ">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="mfo_card">
                    <form	class="subscribtion_form subscribtion_form-second">
                        <div	class="aside-subscribe-text">Вы хотите первыми узнавать	<br> о специальных	предложениях <br> и акциях?</div>
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
