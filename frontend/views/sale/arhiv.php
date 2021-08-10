<?php

use \frontend\widgets\SaleCatalog;
use \frontend\widgets\Rating;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Архив акций';
?>
<section class="breadcrumbs plr">
    <div class="breadcrumbs-wrap limit-width">
        <ul class="breadcrumbs__items">
            <li>
                <a href="/">Онлайн қарыздар</a>
            </li>
            <li>
                Архив акций
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
                            <h1>📰 Архив акций</h1>
                            <div class="email_container">
                                <div	class="text_top_subscribe_container">Подпишитесь на рассылку	и первыми узнавайте<br>	об акциях и специальных	предложениях</div>
                                <div class="subscribe-top-item-wrap">
                                    <div	class="subscribe-top-item subscribe-top-item--input-email">
                                        <input	class="subscribe-top-item__control subscribe-top-item__control--input-email"	placeholder="Email"	type="text"	name="email"	value=""></div>
                                    <div	class="subscribe-top-item subscribe-top-item--btn-submit">
                                        <input	class="subscribe-top-item__btn subscribe-top-item__btn--btn-submit"	type="submit"	value="Подписаться">
                                    </div>
                                </div>
                            </div>
                            <div class="aktsii-list__container">
                                <?php foreach ($sales as $sale) :?>
                                <div class="aktsii-list__item">
                                    <div class="aktsii-item">
                                        <a href="<?= \yii\helpers\Url::toRoute(['sale/list', 'url' => $sale->url]) ?>" class="aktsii-item__link">
                                            <div class="aktsii-item__img-wrap">
                                                <img src="<?= $sale->image ?>" data-lazy-type="image" data-lazy-src="<?= $sale->image ?>" alt="" class="lazy aktsii-item__img lazy-loaded">
                                                <noscript>
                                                    <img src="<?= $sale->image ?>" alt="" class="aktsii-item__img">
                                                </noscript>
                                            </div>
                                            <h3 class="aktsii-item__title"><?= $sale->name ?></h3>
                                        </a>
                                        <div class="aktsii-item__date">с <?= date('m.d.Y',strtotime($sale->srok_ot)) ?> по <?= date('m.d.Y',strtotime($sale->srok_do)) ?></div>
                                        <a href="<?= \yii\helpers\Url::toRoute(['sale/list', 'url' => $sale->url]) ?>" class="aktsii-item__more">Нақтырақ</a>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="aktsii-arhiv">
                                <a href="aktsii">Акции></a>
                            </div>
                            <ul class="pagination">
                                <li>
                                    <a href="#" class="page-numbers current">1</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <sidebar class="content-sidebar">
                <div class="mfo_card">
                    <div class="mfo_card_company">
                        <a href="#">
                            <noscript>
                                <img src="img/2016/08/4slovo-e1550510710120.png" alt="Честное слово – микрокредит онлайн в Казахстане">
                            </noscript>
                            <img class=" ls-is-cached lazyloaded" src="img/2016/08/4slovo-e1550510710120.png" data-src="img/2016/08/4slovo-e1550510710120.png" alt="Честное слово – микрокредит онлайн в Казахстане">
                        </a>
                    </div>
                    <div class="mfo_card_compare">
                        <a href="#" data-mfo="4slovo" data-title="Честное слово – микрокредит онлайн в Казахстане">Салыстыру</a>
                    </div>
                    <div class="mfo_card_info_link">
                        <a href="#">Подробнее о Честном слове</a>
                    </div>
                    <div class="mfo_card_info">
                        <div class="mfo_card_info_inner">
                            <div class="mfo_card_info_rating">
                                <div class="mfo_card_info_rating_label">Рейтинг:</div>
                                <div class="mfo_card_info_rating_data">
                                    <div class="rating__stars" style="width:92%">
                                    </div>
                                    <div class="rating__val">4.6</div>
                                </div>
                            </div>
                            <div class="mfo_card_info_time">
                                <div class="mfo_card_info_time_label">На срок:</div>
                                <div class="mfo_card_info_time_data">5 – 45 дней</div>
                            </div>
                            <div class="mfo_card_info_sum">
                                <div class="mfo_card_info_sum_label">Сумма (тнг):</div>
                                <div class="mfo_card_info_sum_data">5 000 – 138 000</div>
                            </div>
                            <div class="mfo_card_info_rate">
                                <div class="mfo_card_info_rate_label">Ставка:</div>
                                <div class="mfo_card_info_rate_data">от 0,67% в день</div>
                            </div>
                            <div class="mfo_card_info_approval">
                                <div class="mfo_card_info_approval_label">Мақұлдау:</div>
                                <div class="mfo_card_info_approval_data">81%</div>
                            </div>
                            <div class="mfo_card_info_accept">
                                <div class="mfo_card_info_accept_label">Рассмотрение:</div>
                                <div class="mfo_card_info_accept_data">5 минут</div>
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
                                <input	class="subscribe-sidebar-item__btn subscribe-sidebar-item__btn--btn-submit"	type="submit"	value="Подписаться">
                            </div>
                        </div>
                    </form>
                </div>
            </sidebar>
        </div>
    </div>
</section>
<?= Rating::widget(); ?>
