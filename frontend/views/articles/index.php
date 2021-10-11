<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ArticlesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles';
?>
    <section class="breadcrumbs plr">
        <div class="breadcrumbs-wrap limit-width">
            <ul class="breadcrumbs__items">
                <li>
                    <a href="/">Онлайн қарыздар</a>
                </li>
                <li>
                    Пайдалы материалдар
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
                                <h1>📰 Пайдалы материалдар</h1>
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
                                <div class="aktsii-list__container">
                                    <?php foreach ($articles as $article) :?>
                                        <div class="aktsii-list__item">
                                            <div class="aktsii-item">
                                                <a href="<?= \yii\helpers\Url::toRoute(['articles/view', 'url' => $article->url]) ?>" class="aktsii-item__link">
                                                    <div class="aktsii-item__img-wrap">
                                                        <a href="<?= \yii\helpers\Url::toRoute(['articles/view', 'url' => $article->url]) ?>">
                                                            <img src="<?= $article->preview_image ?>" data-lazy-type="image" data-lazy-src="<?= $article->preview_image ?>" alt="<?= $article->name ?>" class="lazy aktsii-item__img lazy-loaded">
                                                        </a>
                                                        <noscript>
                                                            <img src="<?= $article->preview_image ?>" alt="" class="aktsii-item__img">
                                                        </noscript>
                                                    </div>
                                                    <a href="<?= \yii\helpers\Url::toRoute(['articles/list', 'url' => $article->url]) ?>">
                                                        <h3 class="aktsii-item__title"><?= $article->name ?></h3>
                                                    </a>
                                                </a>
                                                <div class="aktsii-item__date"><?= date('m.d.Y',strtotime($article->date_publish)) ?></div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
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
                            <a href="#">Честное слово туралы нақтырақ</a>
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
                                    <div class="mfo_card_info_time_label">Мерзімге:</div>
                                    <div class="mfo_card_info_time_data">5 – 45 дней</div>
                                </div>
                                <div class="mfo_card_info_sum">
                                    <div class="mfo_card_info_sum_label">Сомасы (тнг):</div>
                                    <div class="mfo_card_info_sum_data">5 000 – 138 000</div>
                                </div>
                                <div class="mfo_card_info_rate">
                                    <div class="mfo_card_info_rate_label">Мөлшерлемесі:</div>
                                    <div class="mfo_card_info_rate_data">от 0,67% в день</div>
                                </div>
                                <div class="mfo_card_info_approval">
                                    <div class="mfo_card_info_approval_label">Мақұлдау:</div>
                                    <div class="mfo_card_info_approval_data">81%</div>
                                </div>
                                <div class="mfo_card_info_accept">
                                    <div class="mfo_card_info_accept_label">Қарау:</div>
                                    <div class="mfo_card_info_accept_data">5 минут</div>
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
                        <div class="text_main_subscribe_container">ҚАРЫЗҒА<br>ӨТІНІМ РЕСІМДЕУ</div>
                        <div class="email_sidebar_container">
                            <div class="text_item_subscribe_container">Уақыт жоғалтпайсыз!<br><br>Барлық МҚҰ бір өтінім<br><br>Ең тиімді ұсыныс алу</div>
                            <div class="subscribe-sidebar-item subscribe-sidebar-item--btn-submit">
                                <form action="https://smartzaim.kz/zayavka-na-zajm/?utm_source=kz.smartzaim.kz">
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