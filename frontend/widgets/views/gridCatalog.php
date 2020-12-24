<?php
use \yii\helpers\Url;
?>
<section class="offers plr">
    <div class="offers-wrap limit-width">
        <div class="offers__items">
            <?php foreach ($mfoAll as $mfo) : ?>
            <div class="mfo_card">
                <?php if($mfo->akcii == 1) : ?>
                    <div class="mfo_achieve promo">Акция</div>
                <?php endif; ?>
                <div class="mfo_card_company">
                    <a href="<?= Url::toRoute(['mfo/view', 'url' => $mfo->url]) ?>">
                        <img src="<?= $mfo->logo; ?>" alt="<?= $mfo->mfo_name ?>">
                    </a>
                </div>
                <div class="mfo_card_compare">
                    <a href="#" data-mfo="creditplus" data-title="<?= $mfo->mfo_name ?>">Сравнить</a>
                </div>
                <div class="mfo_card_info_link">
                    <div class="line_mfo">
                        <div>
                            <span class="text_unit">Сумма займа</span>
                            <span class="zaym_result">50000</span>
                            <span class="text_unit_small">тнг</span>
                        </div>
                        <div>
                            <span class="text_unit">Комиссия <b class="kom_dni">7</b> дн</span>
                            <span class="zaym_com">35</span>
                            <span class="text_unit_small">тнг</span>
                        </div>
                        <div>
                            <span class="text_unit">К выплате</span>
                            <span class="zaym_vipl">50035</span>
                            <span class="text_unit_small">тнг</span>
                        </div>
                    </div>
                </div>
                <div class="mfo_card_info">
                    <div class="mfo_card_info_inner">
                        <div class="mfo_card_info_rating">
                            <div class="mfo_card_info_rating_label">Рейтинг:</div>
                            <div class="mfo_card_info_rating_data">
                                <div class="rating__stars" style="width:96%"></div>
                                <div class="rating__val"><?= $mfo->rating ?></div>
                            </div>
                        </div>
                        <div class="mfo_card_info_time">
                            <div class="mfo_card_info_time_label">На срок:</div>
                            <div class="mfo_card_info_time_data"><?= $mfo->srok ?></div>
                        </div>
                        <div class="mfo_card_info_sum">
                            <div class="mfo_card_info_sum_label">Сумма (тнг):</div>
                            <div class="mfo_card_info_sum_data"><?= $mfo->sum ?></div>
                        </div>
                        <div class="mfo_card_info_rate">
                            <div class="mfo_card_info_rate_label">Ставка:</div>
                            <div class="mfo_card_info_rate_data"><?= $mfo->stavka ?></div>
                        </div>
                        <div class="mfo_card_info_approval">
                            <div class="mfo_card_info_approval_label">Одобрение:</div>
                            <div class="mfo_card_info_approval_data"><?= $mfo->odobrenie ?>%</div>
                        </div>
                        <div class="mfo_card_info_accept">
                            <div class="mfo_card_info_accept_label">Рассмотрение:</div>
                            <div class="mfo_card_info_accept_data"><?= $mfo->rasmotrenie ?></div>
                        </div>
                        <div class="mfo_card_info_ways">
                            <div class="mfo_card_info_ways_label">Получить:</div>
                            <div class="mfo_card_info_ways_data">
                                <noscript>
                                    <img src="img/2016/08/all.png" alt="all">
                                </noscript>
                                <img class="lazyload" src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20%20%22%3E%3C/svg%3E' data-src="img/2016/08/all.png" alt="all">
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="mfo_card_button">Получить деньги</div>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
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
        </div>
        <div class="offers__btn">
            <a href="rating.html">Показать все МФО</a>
        </div>
    </div>
</section>
