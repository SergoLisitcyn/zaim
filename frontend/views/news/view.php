<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use \frontend\widgets\Rating;

/* @var $this yii\web\View */
/* @var $model common\models\News */

$this->title = $model->name;

if (isset($model->title_seo) && !empty($model->title)) $this->title = $model->title_seo;
if (isset($model->description) && !empty($model->description)) $this->registerMetaTag(['name' => 'description', 'content' => $model->description]);

\yii\web\YiiAsset::register($this);
?>
<section class="breadcrumbs plr">
    <div class="breadcrumbs-wrap limit-width">
        <ul class="breadcrumbs__items">
            <li>
                <a href="/">Онлайн қарыздар</a>
            </li>
            <li>
                <a href="/news">Соңғы жаңалықтар</a>
            </li>
            <li>
                <?= $model->name ?>
            </li>
        </ul>
    </div>
</section>


<section class="content plr">
    <div class="content-wrap limit-width">
        <div class="content-row">
            <div class="content-box">
                <div class="content-info">
                    <div class="content-main-info">
                        <div class="content-main-info__item" style="padding: 0">
                            <h1 style="text-align: center;color: #146696!important;font-family: inherit;font-weight: 700;margin: 0 40px 25px;"><?= $model->name ?></h1>
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
                            <div class="aktsii-article__content articles_news">
                                <?= $model->content ?>
                                <div class="aktsii-article__box">
                                    <h3>Ұқсас ұсыныстар</h3>
                                    <div class="aktsii-article__box-inner">
                                        <div class="aktsii-article__box-offers">
                                            <?php foreach ($newsRandom as $random) : ?>
                                                <a href="<?= \yii\helpers\Url::toRoute(['news/view', 'url' => $random->url]) ?>" title="<?= $random->name?>">
                                                    <noscript>
                                                        <img src="<?= $random->images?>" alt="<?= $random->name?>" />
                                                    </noscript>
                                                    <img class=" lazyloaded" src="<?= $random->images?>" data-src="<?= $random->images?>" alt="<?= $random->name?>">
                                                    <span> <?= $random->name?> </span>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                        <div class="aktsii-article__btn">
                                            <a href="/news">Барлық жаңалықтар</a>
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
<!--                    <div class="mfo_card_compare">-->
<!--                        <a href="--><?php //echo $mfo->mfo_name ?><!--" data-mfo="dengiclick" data-title="ДеньгиClick">Салыстыру</a>-->
<!--                    </div>-->
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
                                        <img src="/img/2016/08/all.png" alt="all">
                                    </noscript>
                                    <img class=" ls-is-cached lazyloaded" src="/img/2016/08/all.png" data-src="/img/2016/08/all.png" alt="all">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="subscribe_main">
                    <div class="text_main_subscribe_container">ҚАРЫЗҒА<br> ӨТІНІМ РЕСІМДЕУ</div>
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

<?= Rating::widget(); ?>
