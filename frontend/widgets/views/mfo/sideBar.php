<?php
use common\models\Mfo;
use frontend\widgets\ArticlesNews;
use \yii\helpers\Url;
$starRate = (100 * $model->rating) / 5;
?>
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
            <?php if($model->link_offer && $model->status != Mfo::STATUS_DEACTIVATED_LINK) :?>
            <noindex>
                <a href="<?= $model->link_offer ?>" target="_blank">
                    <div class="mfo_card_button">Ақшаны алу</div>
                </a>
            </noindex>
            <?php endif; ?>
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
            <?php foreach ($rating as $item ) : ?>
            <div class="aside-rating-mfo-col">
                <div class="aside-rating-mfo-item">
                    <a	href="<?= Url::toRoute(['mfo-new/view', 'url' => $item->url]) ?>">
                        <noscript>
                            <img	src="<?= $item->logo; ?>">
                        </noscript>
                        <img	class="lazyload"	src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20%20%22%3E%3C/svg%3E'	data-src="<?= $item->logo; ?>"	style="width: 110px;">
                    </a>
                </div>
                <div class="aside-rating-mfo-item">
                    <a	href="<?= Url::toRoute(['mfo-new/view', 'url' => $item->url]) ?>">
                        <div	class="rating rating-wraps">
                            <div class="rating-box">
                                <div class="rating__stars"	style="width:87%"></div>
                                <div	class="rating__val"><?= $item->rating ?></div>
                            </div>
<!--                            <div	class="aside-rating-mfo__rev">Нақтырақ:	177</div>-->
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="mfo_card__info">
            <a href="/">
                <div class="mfo_card_button">Басқа қарызды таңдау</div>
            </a>
        </div>
    </div>
<!--    <div class="mfo_card">-->
<!--        <form	class="subscribtion_form" action="--><?php //= $action ?><!--" method="post">-->
<!--            <input type="hidden" name="_csrf" value="--><?php //=Yii::$app->request->getCsrfToken()?><!--" />-->
<!--            <div	class="aside-subscribe-text">Арнайы ұсыныстар мен акциялар <br>туралы бірінші білгіңіз <br> келе ме?</div>-->
<!--            <div	class="email_sidebar_container">-->
<!--                <div	class="subscribe-sidebar-item subscribe-sidebar-item--input-email">-->
<!--                    <input	class="subscribe-sidebar-item__control subscribe-sidebar-item__control--input-email"	placeholder="Email"	type="text"	name="email_unisender"	value=""></div>-->
<!--                <div	class="subscribe-sidebar-item subscribe-sidebar-item--btn-submit">-->
<!--                    <input	class="subscribe-sidebar-item__btn subscribe-sidebar-item__btn--btn-submit"	type="submit"	value="Қол қою">-->
<!--                </div>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
    <?php echo ArticlesNews::widget() ?>
</sidebar>