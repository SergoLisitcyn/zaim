<?php

use yii\helpers\Html;
use \yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Banks';
?>
<section class="breadcrumbs plr">
    <div class="breadcrumbs-wrap limit-width">
        <ul class="breadcrumbs__items white-breadcrumbs__items">
            <li>
                Банки
            </li>
        </ul>
    </div>
    <img class="main-title__img bank-main-title__img" src="img/uncode-child/bg-sm.png" alt="">
</section>

<section class="offers plr bank-offers">
    <div class="offers-wrap limit-width">
        <div class="offers__items">
            <?php foreach ($banks as $bank) : ?>
            <div class="mfo_card">
                <div class="mfo_card_company">
                    <a href="<?= Url::toRoute(['banks/view', 'url' => $bank->url]) ?>">
                        <noscript>
                            <img src="<?= $bank->image ?>" alt="<?= $bank->name ?>">
                        </noscript>
                        <img class="lazyload" src="<?= $bank->image ?>" alt="<?= $bank->name ?>">
                    </a>
                </div>
                <div class="mfo_card_company-name">
                    <a href="#"><?= $bank->name ?></a>
                </div>
                <div class="mfo_card_info_rating">
                    <div class="mfo_card_info_rating_label">Рейтинг:</div>
                    <div class="mfo_card_info_rating_data">
                        <div class="rating__stars" style="width:92%">
                        </div>
                        <div class="rating__val">4.8</div>
                    </div>
                </div>
                <div class="mfo_card_info_reviews">
                    <a href="#" class="mfo_card_info_link">Отзывы (125)</a>
                </div>
                <div class="mfo_card_info_links">
                    <?php if($bank->data['services']['credit_card'] == "+") : ?>
                    <div class="mfo_card_info_links-col">
                        <div class="mfo_card_info_links-col-text">
                            <a href="#" class="mfo_card_info_link">Кредитные карты</a>
                        </div>
                        <div class="mfo_card_info_links-col-icons">
                            <noscript>
                                <img src="img/banks/icon-card.png" alt="Иконка карты">
                            </noscript>
                            <img class="lazyload" src="img/banks/icon-card.png" alt="Иконка карты">
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($bank->data['services']['credit_cash'] == "+") : ?>
                    <div class="mfo_card_info_links-col">
                        <div class="mfo_card_info_links-col-text">
                            <a href="#" class="mfo_card_info_link">Кредит наличными</a>
                        </div>
                        <div class="mfo_card_info_links-col-icons">
                            <noscript>
                                <img src="img/banks/icon-money.png" alt="Иконка купюр">
                            </noscript>
                            <img class="lazyload" src="img/banks/icon-money.png" alt="Иконка купюр">
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($bank->data['services']['credit_auto'] == "+") : ?>
                    <div class="mfo_card_info_links-col">
                        <div class="mfo_card_info_links-col-text">
                            <a href="#" class="mfo_card_info_link">Автокредиты</a>
                        </div>
                        <div class="mfo_card_info_links-col-icons">
                            <noscript>
                                <img src="img/banks/icon-auto.png" alt="Иконка автомобиля">
                            </noscript>
                            <img class="lazyload" src="img/banks/icon-auto.png" alt="Иконка автомобиля">
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($bank->data['services']['ipoteka'] == "+") : ?>
                    <div class="mfo_card_info_links-col">
                        <div class="mfo_card_info_links-col-text">
                            <a href="#" class="mfo_card_info_link">Ипотека</a>
                        </div>
                        <div class="mfo_card_info_links-col-icons">
                            <noscript>
                                <img src="img/banks/icon-mortgage.png" alt="Иконка ипотеки">
                            </noscript>
                            <img class="lazyload" src="img/banks/icon-mortgage.png" alt="Иконка ипотеки">
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="mfo_card_info_about">
                    <p class="mfo_card_info_about_text">АО «Народный Банк Казахстана» — крупнейший универсальный коммерческий банк Республики Казахстан, успешно работающий на благо своих клиентов уже более 97 лет.</p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
