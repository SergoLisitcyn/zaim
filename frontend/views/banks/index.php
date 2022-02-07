<?php

use yii\helpers\Html;
use \yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Реестр банков Республики Казахстан';
$this->registerMetaTag(['name' => 'description','content' => 'Банковская система Казахстана. Информации о местных и иностранных банках второго уровня Республики Казахстан.']);
?>
<section class="breadcrumbs plr">
    <div class="breadcrumbs-wrap limit-width">
        <ul class="breadcrumbs__items white-breadcrumbs__items">
            <li>
                Банки Казахстана
            </li>
        </ul>
    </div>
</section>

<section class="offers plr bank-offers bank-offers-horizontal">
    <div class="offers-wrap limit-width">
        <div class="offers__items">
            <?php foreach ($banks as $bank) :
                if($version == 'RU'){
                    $data = unserialize($bank->data);
                    $desc = $bank->desc;
                } else {
                    $data = unserialize($bank->data_kz);
                    $desc = $bank->desc_kz;
                }
                ?>

            <div class="mfo_card">
                <div class="mfo_card_company">
                    <?php if($bank->image) : ?>
                    <a href="<?= Url::toRoute(['banks/view', 'url' => $bank->url]) ?>">
                        <noscript>
                            <img src="<?= $bank->image ?>" alt="<?= $data['info']['name'] ?>">
                        </noscript>
                        <img class="lazyload" src="<?= $bank->image ?>" alt="<?= $data['info']['name'] ?>">
                    </a>
                    <?php endif; ?>
                </div>
                <div class="mfo_card_box">
                    <div class="mfo_card_company-name">
                        <a href="<?= Url::toRoute(['banks/view', 'url' => $bank->url]) ?>"><?= $data['info']['name'] ?></a>
                    </div>
                    <div class="mfo_card_info_rating">
                        <div class="mfo_card_info_rating_data">
                            <div class="rating__stars" style="width:92%">
                            </div>
                            <div class="rating__val">4.8</div>
                        </div>
                    </div>
                    <div class="mfo_card_info_reviews">
                        <a href="banks/<?= $bank->url ?>/reviews" class="mfo_card_info_link" style="text-decoration: underline">Отзывы (0)</a>
                    </div>
                </div>
                <div class="mfo_card_info_links">
                    <?php if($data['services']['credit_card'] == "+") :
                        $nameCredit = 'Кредит карталары';
                        if($version == 'RU') $nameCredit = 'Кредитные карты';
                        ?>

                    <div class="mfo_card_info_links-col">
                        <div class="mfo_card_info_links-col-text">
                            <span class="mfo_card_info_link"><?= $nameCredit ?></span>
                        </div>
                        <div class="mfo_card_info_links-col-icons" style="margin-left:15px">
                            <noscript>
                                <img src="img/banks/icon-card.png" alt="Иконка карты">
                            </noscript>
                            <img class="lazyload" src="img/banks/icon-card.png" alt="Иконка карты">
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($data['services']['credit_cash'] == "+") :
                        $nameCash = 'Қолма-қол ақша кредиті';
                        if($version == 'RU') $nameCash = 'Кредитные наличными';
                        ?>
                    <div class="mfo_card_info_links-col">
                        <div class="mfo_card_info_links-col-text">
                            <span class="mfo_card_info_link"><?= $nameCash ?></span>
                        </div>
                        <div class="mfo_card_info_links-col-icons" style="margin-left:15px">
                            <noscript>
                                <img src="img/banks/icon-money.png" alt="Иконка купюр">
                            </noscript>
                            <img class="lazyload" src="img/banks/icon-money.png" alt="Иконка купюр">
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($data['services']['credit_auto'] == "+") :
                        $nameAuto = 'Автокредит';
                        if($version == 'RU') $nameAuto = 'Автокредиты';
                        ?>
                    <div class="mfo_card_info_links-col">
                        <div class="mfo_card_info_links-col-text">
                            <span class="mfo_card_info_link">Автокредиты</span>
                        </div>
                        <div class="mfo_card_info_links-col-icons" style="margin-left:15px">
                            <noscript>
                                <img src="img/banks/icon-auto.png" alt="Иконка автомобиля">
                            </noscript>
                            <img class="lazyload" src="img/banks/icon-auto.png" alt="Иконка автомобиля">
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($data['services']['ipoteka'] == "+") : ?>
                    <div class="mfo_card_info_links-col">
                        <div class="mfo_card_info_links-col-text">
                            <span class="mfo_card_info_link">Ипотека</span>
                        </div>
                        <div class="mfo_card_info_links-col-icons" style="margin-left:15px">
                            <noscript>
                                <img src="img/banks/icon-mortgage.png" alt="Иконка ипотеки">
                            </noscript>
                            <img class="lazyload" src="img/banks/icon-mortgage.png" alt="Иконка ипотеки">
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="mfo_card_info_about">
                    <p class="mfo_card_info_about_text"><?= $desc ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
