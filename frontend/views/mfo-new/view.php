<?php

use \yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\MfoNew */

if(isset($data['seo']['title']) and !empty($data['seo']['title'])) {
    $this->title = $data['seo']['title'];
} else {
    $this->title = $model->name;
}
if(isset($data['seo']['description']) and !empty($data['seo']['description'])) {
    $this->registerMetaTag(['name' => 'description','content' => $data['seo']['description']]);
}
\yii\web\YiiAsset::register($this);
?>
<section class="breadcrumbs plr">
    <div class="breadcrumbs-wrap limit-width">
        <ul class="breadcrumbs__items white-breadcrumbs__items">
            <li>
                <a href="/">Займы онлайн</a>
            </li>
            <li>
                <a href="/">МФО</a>
            </li>
            <li>
                Честное слово - займ онлайн в Казахстане
            </li>
        </ul>
    </div>
    <img class="main-title__img bank-main-title__img" src="img/uncode-child/bg-sm.png" alt="">
</section>
<section class="content plr">
    <div class="content-wrap limit-width">
        <div class="content-row">
            <div class="content-box mfo-content-box">
                <div class="content-info">
                    <ul	class="nav nav-tabs n-nav-tabs">
                        <li class="active">
                            <a href="<?= Url::toRoute(['mfo-new/view', 'url' => $model->url]) ?>">
                                <span><?= $dataMenu['block_1'] ?></span>
                            </a>
                        </li>
                        <?php if($data['login']['lk']) :  ?>
                        <li class="">
                            <a href="<?= Url::toRoute(['mfo-new/login', 'url' => $model->url]) ?>">
                                <span><?= $dataMenu['block_2'] ?></span>
                            </a>
                        </li>
                        <?php endif;  ?>
                        <li class="">
                            <a href="<?= Url::toRoute(['mfo-new/clients', 'url' => $model->url]) ?>">
                                <span><?= $dataMenu['block_3'] ?></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= Url::toRoute(['mfo-new/contacts', 'url' => $model->url]) ?>">
                                <span><?= $dataMenu['block_4'] ?></span>
                            </a>
                        </li>
                    </ul>
                    <div class="content-main-info">
                        <div class="content-main-info__item">
                            <?php if($data['seo']['h1']) :  ?>
                            <h1><?= $data['seo']['h1'] ?></h1>
                            <?php endif; ?>
                            <div class="mfo-head__rating">
                                <div class="rating">
                                    <div class="rating__stars" style="width:90%"></div>
                                    <div class="rating__val">4.8</div>
                                </div>
                            </div>
                            <div class="mfo-head__text">Перейти	на	официальный	сайт
                                <a href="#">4slovo.kz</a>
                            </div>
                        </div>
                        <div class="content-main-info__item">
                            <div class="mfo-head-logo">
                                <?php if($model->image) : ?>
                                <a href="#">
                                    <noscript>
                                        <img	src="/img/mfo/4slovo.png">
                                    </noscript>
                                    <img class="lazyloaded" src="/img/mfo/4slovo.png" data-src="/img/mfo/4slovo.png" alt="Честное слово">
                                </a>
                                <?php endif; ?>
                                <div class="mfo-head-approv">Одобрение:
                                    <span class="mfo-head-approv-value">54%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-main-info__content">
                        <div class="akciya-container">
                            <div class="akciya-container-item">
                                <div class="akciya-caption">Акция!
                                </div>
                                <div class="akciya-text">30 призов по 100 000 тенге от Zing!</div>
                            </div>
                            <div class="akciya-container-item">
                                <div class="akciya-date-wrap">
                                    <div class="akciya-date">1 ноября -  15 декабря
                                        <a href="#" class="akciya-btn">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mfo-about">
                            <h2 class="mfo-about-title info-subtitle">О	компании</h2>
                            <p class="mfo-about-text">
                                Онлайн-сервис «Честное слово» входит в пятерку крупнейших игроков микрокредитного рынка Казахстана, выдавая дистанционные микрокредиты без залога и справки о доходах. Клиентам доступна опция продления онлайн-займа или его досрочного погашения. В компании действует программа привилегий и предусмотрена возможность зарабатывать бонусы за приглашение друзей.
                            </p>
                            <div class="mfo-about__table">
                                <div class="mfo-about__columns">
                                    <?php if($data['info']['city']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['info']['city'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['info']['city'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['info']['international_company']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['info']['international_company'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['info']['international_company'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['info']['general_manager']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['info']['general_manager'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['info']['general_manager'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['info']['country_central_office']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['info']['country_central_office'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['info']['country_central_office'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['info']['city_central_office']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['info']['city_central_office'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['info']['city_central_office'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['info']['parent_company']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['info']['parent_company'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['info']['parent_company'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['info']['website']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['info']['website'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <a href="//<?= $data['info']['website'] ?>" target="_blank" rel="nofollow" class="mfo-about__col-right-link"><?= $data['info']['website'] ?></a>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['info']['entity']) :  ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['info']['entity'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['info']['entity'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="mfo-about__logos">
                                <h2 class="mfo-about-title info-subtitle" style="padding-bottom: 20px;">Членство в профессиональных объединениях:</h2>
                                <?php if($data['info']['amfok']) :  ?>
                                <noindex>
                                    <a href="//<?= $data['info']['amfok'] ?>" class="mfo-about__logos-link" rel="nofollow" target="_blank">
                                        <noscript>
                                            <img src="/img/mfo/logo_amfok.png" alt="Halyk Bank">
                                        </noscript>
                                        <img class="lazyloaded" src="/img/mfo/logo_amfok.png" data-src="/img/mfo/logo_amfok.png" alt="Ассоциация микрофинансовых организаций Казахстана">
                                    </a>
                                </noindex>
                                <?php endif; ?>
                                <?php if($data['info']['fintech']) :  ?>
                                <noindex>
                                    <a href="//<?= $data['info']['fintech'] ?>" class="mfo-about__logos-link" rel="nofollow" target="_blank">
                                        <noscript>
                                            <img src="/img/mfo/logo_kazfin.png" alt="Halyk Bank">
                                        </noscript>
                                        <img class="lazyloaded" src="/img/mfo/logo_kazfin.png" data-src="/img/mfo/logo_kazfin.png" alt="Объединение юридических лиц «Казахстанская Ассоциация ФинТех»">
                                    </a>
                                </noindex>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="mfo-license">
                            <h2 class="mfo-about-title info-subtitle"><?= $dataTag['license'] ?></h2>
                            <div class="mfo-license__block">
                                <div class="mfo-license__col">
                                    <?php if($data['license']['license_arrfr']) :  ?>
                                    <div class="mfo-license__text">
                                        <div class="mfo-license__col-left"><?= $dataMfo['mfo']['license']['license_arrfr'] ?></div>
                                        <div class="mfo-license__col-right"><?= $data['license']['license_arrfr'] ?></div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['license']['issue_date']) :  ?>
                                    <div class="mfo-license__text">
                                        <div class="mfo-license__col-left"><?= $dataMfo['mfo']['license']['issue_date'] ?></div>
                                        <div class="mfo-license__col-right"><?= $data['license']['issue_date'] ?></div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['license']['date_number_license']) :  ?>
                                    <div class="mfo-license__text">
                                        <div class="mfo-license__col-left"><?= $dataMfo['mfo']['license']['date_number_license'] ?></div>
                                        <div class="mfo-license__col-right"><?= $data['license']['date_number_license'] ?></div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <?php if($data['license']['link_license']) :  ?>
                                <div class="mfo-license__image">
                                    <img src="/img/mfo/license_mfo_page.jpg" data-src="/img/mfo/license_mfo_page.jpg" class="lazyload attachment-200x size-200x">
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if($data['financial_report']['report']) : ?>
                        <div class="mfo-report">
                            <h2 class="mfo-about-title info-subtitle"><?= $dataTag['fin'] ?></h2>
                            <div class="mfo-report__block">
                                <div class="mfo-report__col">
                                    <a href="//<?= $data['financial_report']['report'] ?>" class="mfo-report__link" target="_blank" download>
                                        <img class="lazyloaded" src="/img/mfo/pdf.png" data-src="/img/mfo/pdf.png" alt="PDF-файл">
                                    </a>
                                    <span class="mfo-report__year">Финансовый отчет за <?= $data['financial_report']['year'] ?>г <?= $data['info']['entity'] ?></span>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="mfo-signs">
                            <?php if($data['features']['credit_individuals'] == "+") : ?>
                            <div class="mfo-signs__box">
                                <div class="mfo-signs__image">
                                    <img class="lazyloaded" src="/img/svg-icons/signs/icon1.svg" data-src="/img/svg-icons/signs/icon1.svg" alt="Кредиты физическим лицам">
                                </div>
                                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['credit_individuals'] ?></div>
                            </div>
                            <?php endif; ?>
                            <?php if($data['features']['credit_legal'] == "+") : ?>
                            <div class="mfo-signs__box">
                                <div class="mfo-signs__image">
                                    <img class="lazyloaded" src="/img/svg-icons/signs/icon2.svg" data-src="/img/svg-icons/signs/icon2.svg" alt="Кредиты юридическим лицам">
                                </div>
                                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['credit_legal'] ?></div>
                            </div>
                            <?php endif; ?>
                            <?php if($data['features']['ip'] == "+") : ?>
                            <div class="mfo-signs__box">
                                <div class="mfo-signs__image">
                                    <img class="lazyloaded" src="/img/svg-icons/signs/icon3.svg" data-src="/img/svg-icons/signs/icon3.svg" alt="Кредит для ИП">
                                </div>
                                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['ip'] ?></div>
                            </div>
                            <?php endif; ?>
                            <?php if($data['features']['consumer'] == "+") : ?>
                            <div class="mfo-signs__box">
                                <div class="mfo-signs__image">
                                    <img class="lazyloaded" src="/img/svg-icons/signs/icon4.svg" data-src="/img/svg-icons/signs/icon4.svg" alt="Потребительские цели">
                                </div>
                                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['consumer'] ?></div>
                            </div>
                            <?php endif; ?>
                            <?php if($data['features']['fast_order'] == "+") : ?>
                            <div class="mfo-signs__box">
                                <div class="mfo-signs__image">
                                    <img class="lazyloaded" src="/img/svg-icons/signs/icon5.svg" data-src="/img/svg-icons/signs/icon5.svg" alt="Быстрый займ">
                                </div>
                                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['fast_order'] ?></div>
                            </div>
                            <?php endif; ?>
                            <?php if($data['features']['application_online'] == "+") : ?>
                            <div class="mfo-signs__box">
                                <div class="mfo-signs__image">
                                    <img class="lazyloaded" src="/img/svg-icons/signs/icon6.svg" data-src="/img/svg-icons/signs/icon6.svg" alt="Прием заявки онлайн">
                                </div>
                                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['application_online'] ?></div>
                            </div>
                            <?php endif; ?>
                            <?php if($data['features']['money_online'] == "+") : ?>
                            <div class="mfo-signs__box">
                                <div class="mfo-signs__image">
                                    <img class="lazyloaded" src="/img/svg-icons/signs/icon7.svg" data-src="/img/svg-icons/signs/icon7.svg" alt="Получение денег онлайн">
                                </div>
                                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['money_online'] ?></div>
                            </div>
                            <?php endif; ?>
                            <?php if($data['features']['without_collateral'] == "+") : ?>
                            <div class="mfo-signs__box">
                                <div class="mfo-signs__image">
                                    <img class="lazyloaded" src="/img/svg-icons/signs/icon8.svg" data-src="/img/svg-icons/signs/icon8.svg" alt="Без залога">
                                </div>
                                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['without_collateral'] ?></div>
                            </div>
                            <?php endif; ?>
                            <?php if($data['features']['car_deposit'] == "+") : ?>
                            <div class="mfo-signs__box">
                                <div class="mfo-signs__image">
                                    <img class="lazyloaded" src="/img/svg-icons/signs/icon9.svg" data-src="/img/svg-icons/signs/icon9.svg" alt="Залог авто">
                                </div>
                                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['car_deposit'] ?></div>
                            </div>
                            <?php endif; ?>
                            <?php if($data['features']['real_estate'] == "+") : ?>
                            <div class="mfo-signs__box">
                                <div class="mfo-signs__image">
                                    <img class="lazyloaded" src="/img/svg-icons/signs/icon10.svg" data-src="/img/svg-icons/signs/icon10.svg" alt="Залог недвижимости">
                                </div>
                                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['real_estate'] ?></div>
                            </div>
                            <?php endif; ?>
                            <?php if($data['features']['other'] == "+") : ?>
                            <div class="mfo-signs__box">
                                <div class="mfo-signs__image">
                                    <img class="lazyloaded" src="/img/svg-icons/signs/icon11.svg" data-src="/img/svg-icons/signs/icon11.svg" alt="Другие виды залога (земля, скот, техника, оборудование, гарантии третих лиц)">
                                </div>
                                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['other'] ?></div>
                            </div>
                            <?php endif; ?>
                            <?php if($data['features']['microloan'] == "+") : ?>
                            <div class="mfo-signs__box">
                                <div class="mfo-signs__image">
                                    <img class="lazyloaded" src="/img/svg-icons/signs/icon12.svg" data-src="/img/svg-icons/signs/icon12.svg" alt="Поручительство">
                                </div>
                                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['microloan'] ?></div>
                            </div>
                            <?php endif; ?>
                            <?php if($data['features']['entrepreneurial'] == "+") : ?>
                            <div class="mfo-signs__box">
                                <div class="mfo-signs__image">
                                    <img class="lazyloaded" src="/img/svg-icons/signs/icon13.svg" data-src="/img/svg-icons/signs/icon13.svg" alt="Предпринимательские цели /микрокредит для бизнеса">
                                </div>
                                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['entrepreneurial'] ?></div>
                            </div>
                            <?php endif; ?>
                            <?php if($data['features']['agricultural_purposes'] == "+") : ?>
                            <div class="mfo-signs__box">
                                <div class="mfo-signs__image">
                                    <img class="lazyloaded" src="/img/svg-icons/signs/icon14.svg" data-src="/img/svg-icons/signs/icon14.svg" alt="Сельскохозяйственные цели">
                                </div>
                                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['agricultural_purposes'] ?></div>
                            </div>
                            <?php endif; ?>
                            <?php if($data['features']['damu_micro'] == "+") : ?>
                            <div class="mfo-signs__box">
                                <div class="mfo-signs__image">
                                    <img class="lazyloaded" src="/img/svg-icons/signs/icon15.svg" data-src="/img/svg-icons/signs/icon15.svg" alt="Микрокредит по программе Даму-микро">
                                </div>
                                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['damu_micro'] ?></div>
                            </div>
                            <?php endif; ?>
                            <?php if($data['features']['microcredit_business'] == "+") : ?>
                            <div class="mfo-signs__box">
                                <div class="mfo-signs__image">
                                    <img class="lazyloaded" src="/img/svg-icons/signs/icon16.svg" data-src="/img/svg-icons/signs/icon16.svg" alt="Кредитнаая линия для бизнеса">
                                </div>
                                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['microcredit_business'] ?></div>
                            </div>
                            <?php endif; ?>
                            <?php if($data['features']['unsecured'] == "+") : ?>
                            <div class="mfo-signs__box">
                                <div class="mfo-signs__image">
                                    <img class="lazyloaded" src="/img/svg-icons/signs/icon17.svg" data-src="/img/svg-icons/signs/icon17.svg" alt="Беззалоговое кредитование, основанное на солидарной ответственности членов кредитной группы">
                                </div>
                                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['unsecured'] ?></div>
                            </div>
                            <?php endif; ?>
                            <?php if($data['features']['pensioners'] == "+") : ?>
                            <div class="mfo-signs__box">
                                <div class="mfo-signs__image">
                                    <img class="lazyloaded" src="/img/svg-icons/signs/icon18.svg" data-src="/img/svg-icons/signs/icon18.svg" alt="Займ для пенсионеров (пенсионное удостовернеие + выписка с карточного счета)">
                                </div>
                                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['pensioners'] ?></div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="mfo-about">
                            <h2 class="mfo-about-title info-subtitle"><?= $dataTag['uslovia_credit'] ?></h2>
                            <div class="mfo-about__table">
                                <div class="mfo-about__columns">
                                    <?php if($data['conditions']['min_amount']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['conditions']['min_amount'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['conditions']['min_amount'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['conditions']['max_amount']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['conditions']['max_amount'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['conditions']['max_amount'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['conditions']['min_term']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['conditions']['min_term'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['conditions']['min_term'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['conditions']['max_term']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['conditions']['max_term'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['conditions']['max_term'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['conditions']['max_overpayment']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['conditions']['max_overpayment'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['conditions']['max_overpayment'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['conditions']['amount_first_microcredit']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['conditions']['amount_first_microcredit'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['conditions']['amount_first_microcredit'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['conditions']['stack_min_first_microcredit']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['conditions']['stack_min_first_microcredit'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['conditions']['stack_min_first_microcredit'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['conditions']['stack_max_first_microcredit']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['conditions']['stack_max_first_microcredit'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['conditions']['stack_max_first_microcredit'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['conditions']['stack_min_repeat_microcredit']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['conditions']['stack_min_repeat_microcredit'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['conditions']['stack_min_repeat_microcredit'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['conditions']['stack_max_repeat_microcredit']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['conditions']['stack_max_repeat_microcredit'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['conditions']['stack_max_repeat_microcredit'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['conditions']['gesv_min']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['conditions']['gesv_min'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['conditions']['gesv_min'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['conditions']['gesv_max']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['conditions']['gesv_max'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['conditions']['gesv_max'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['conditions']['term_extension_service']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['conditions']['term_extension_service'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['conditions']['term_extension_service'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['conditions']['term_extension_service']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['conditions']['min_age'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['conditions']['min_age'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['conditions']['max_age']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['conditions']['max_age'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['conditions']['max_age'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="mfo-about__feature">
                                <h2 class="content-text-title info-subtitle"><?= $dataTag['osobenost'] ?></h2>
                                <div class="mfo-about__feature-images">
                                    <?php if($data['singularity']['new_customers']) : ?>
                                    <div class="mfo-about__feature-images-box">
                                        <div class="mfo-about__feature-image">
                                            <img src="/img/svg-icons/features/icon1.svg" alt="<?= $dataMfo['mfo']['singularity']['new_customers'] ?>">
                                        </div>
                                        <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['new_customers'] ?></p>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['singularity']['quick_online_application']) : ?>
                                    <div class="mfo-about__feature-images-box">
                                        <div class="mfo-about__feature-image">
                                            <img src="/img/svg-icons/features/icon2.svg" alt="<?= $dataMfo['mfo']['singularity']['quick_online_application'] ?>">
                                        </div>
                                        <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['quick_online_application'] ?></p>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['singularity']['round_the_clock']) : ?>
                                    <div class="mfo-about__feature-images-box">
                                        <div class="mfo-about__feature-image">
                                            <img src="/img/svg-icons/features/icon3.svg" alt="<?= $dataMfo['mfo']['singularity']['round_the_clock'] ?>">
                                        </div>
                                        <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['round_the_clock'] ?></p>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['singularity']['full_repayment']) : ?>
                                    <div class="mfo-about__feature-images-box">
                                        <div class="mfo-about__feature-image">
                                            <img src="/img/svg-icons/features/icon4.svg" alt="<?= $dataMfo['mfo']['singularity']['full_repayment'] ?>">
                                        </div>
                                        <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['full_repayment'] ?></p>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['singularity']['partial_repayment']) : ?>
                                    <div class="mfo-about__feature-images-box">
                                        <div class="mfo-about__feature-image">
                                            <img src="/img/svg-icons/features/icon5.svg" alt="<?= $dataMfo['mfo']['singularity']['partial_repayment'] ?>">
                                        </div>
                                        <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['partial_repayment'] ?></p>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['singularity']['license_arrfr']) : ?>
                                    <div class="mfo-about__feature-images-box">
                                        <div class="mfo-about__feature-image">
                                            <img src="/img/svg-icons/features/icon6.svg" alt="<?= $dataMfo['mfo']['singularity']['license_arrfr'] ?>">
                                        </div>
                                        <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['license_arrfr'] ?></p>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['singularity']['identity_card']) : ?>
                                    <div class="mfo-about__feature-images-box">
                                        <div class="mfo-about__feature-image">
                                            <img src="/img/svg-icons/features/icon7.svg" alt="<?= $dataMfo['mfo']['singularity']['identity_card'] ?>">
                                        </div>
                                        <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['identity_card'] ?></p>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['singularity']['microcredit_without_collateral']) : ?>
                                    <div class="mfo-about__feature-images-box">
                                        <div class="mfo-about__feature-image">
                                            <img src="/img/svg-icons/features/icon8.svg" alt="<?= $dataMfo['mfo']['singularity']['microcredit_without_collateral'] ?>">
                                        </div>
                                        <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['microcredit_without_collateral'] ?></p>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['singularity']['microcredit_without_guarantee']) : ?>
                                    <div class="mfo-about__feature-images-box">
                                        <div class="mfo-about__feature-image">
                                            <img src="/img/svg-icons/features/icon9.svg" alt="<?= $dataMfo['mfo']['singularity']['microcredit_without_guarantee'] ?>">
                                        </div>
                                        <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['microcredit_without_guarantee'] ?></p>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['singularity']['written']) : ?>
                                    <div class="mfo-about__feature-images-box">
                                        <div class="mfo-about__feature-image">
                                            <img src="/img/svg-icons/features/icon10.svg" alt="<?= $dataMfo['mfo']['singularity']['written'] ?>">
                                        </div>
                                        <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['written'] ?></p>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['singularity']['territory_kz']) : ?>
                                    <div class="mfo-about__feature-images-box">
                                        <div class="mfo-about__feature-image">
                                            <img src="/img/svg-icons/features/icon11.svg" alt="<?= $dataMfo['mfo']['singularity']['territory_kz'] ?>">
                                        </div>
                                        <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['territory_kz'] ?></p>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['singularity']['loyal']) : ?>
                                    <div class="mfo-about__feature-images-box">
                                        <div class="mfo-about__feature-image">
                                            <img src="/img/svg-icons/features/icon12.svg" alt="<?= $dataMfo['mfo']['singularity']['loyal'] ?>">
                                        </div>
                                        <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['loyal'] ?></p>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['singularity']['biometric']) : ?>
                                    <div class="mfo-about__feature-images-box">
                                        <div class="mfo-about__feature-image">
                                            <img src="/img/svg-icons/features/icon13.svg" alt="<?= $dataMfo['mfo']['singularity']['biometric'] ?>">
                                        </div>
                                        <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['biometric'] ?></p>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['singularity']['calculates']) : ?>
                                    <div class="mfo-about__feature-images-box">
                                        <div class="mfo-about__feature-image">
                                            <img src="/img/svg-icons/features/icon14.svg" alt="<?= $dataMfo['mfo']['singularity']['calculates'] ?>">
                                        </div>
                                        <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['calculates'] ?></p>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="content-text blocks-content-text">
                            <h2 class="content-text-title info-subtitle"><?= $dataTag['sposob_poluch'] ?></h2>
                            <div class="content-text-items">
                                <?php if($data['sposob_get']['bank_card']) : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img">
                                        <img src="/img/svg-icons/card1.svg" data-src="/img/svg-icons/card1.svg" alt="<?= $dataMfo['mfo']['sposob_get']['bank_card'] ?>">
                                    </div>
                                    <span><?= $dataMfo['mfo']['sposob_get']['bank_card'] ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['sposob_get']['iban']) : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img">
                                        <img src="/img/svg-icons/card2.svg" data-src="/img/svg-icons/card2.svg" alt="<?= $dataMfo['mfo']['sposob_get']['iban'] ?>">
                                    </div>
                                    <span><?= $dataMfo['mfo']['sposob_get']['iban'] ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['sposob_get']['exceptions']) : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img">
                                        <img src="/img/svg-icons/exceptions.svg" data-src="/img/svg-icons/exceptions.svg" alt="<?= $dataMfo['mfo']['sposob_get']['exceptions'] ?>">
                                    </div>
                                    <span><?= $dataMfo['mfo']['sposob_get']['exceptions'] ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['sposob_get']['kazpost']) : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img w100">
                                        <img src="/img/svg-icons/kazpost.svg" data-src="/img/svg-icons/kazpost.svg" alt="<?= $dataMfo['mfo']['sposob_get']['kazpost'] ?>">
                                    </div>
                                    <span><?= $dataMfo['mfo']['sposob_get']['kazpost'] ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['sposob_get']['cash']) : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img">
                                        <img src="/img/svg-icons/cash.svg" data-src="/img/svg-icons/cash.svg" alt="<?= $dataMfo['mfo']['sposob_get']['cash'] ?>">
                                    </div>
                                    <span><?= $dataMfo['mfo']['sposob_get']['cash'] ?></span>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="content-text blocks-content-text">
                            <h2 class="content-text-title info-subtitle"><?= $dataTag['sposob_pogash'] ?></h2>
                            <div class="content-text-items">
                                <?php if($data['sposob_repayment']['online_bank_card']) : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img">
                                        <img src="/img/svg-icons/repayment/pay.svg" data-src="/img/svg-icons/repayment/pay.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['online_bank_card'] ?>">
                                    </div>
                                    <span><?= $dataMfo['mfo']['sposob_repayment']['online_bank_card'] ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['sposob_repayment']['bank_transfer']) : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img">
                                        <img src="/img/svg-icons/repayment/transfer.svg" data-src="/img/svg-icons/repayment/transfer.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['bank_transfer'] ?>">
                                    </div>
                                    <span><?= $dataMfo['mfo']['sposob_repayment']['bank_transfer'] ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['sposob_repayment']['kazpost']) : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img w100">
                                        <img src="/img/svg-icons/repayment/kazpochta.svg" data-src="/img/svg-icons/repayment/kazpochta.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['kazpost'] ?>">
                                    </div>
                                    <span><?= $dataMfo['mfo']['sposob_repayment']['kazpost'] ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['sposob_repayment']['qiwi_terminals']) : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img w100">
                                        <img src="/img/svg-icons/repayment/qiwi-t.svg" data-src="/img/svg-icons/repayment/qiwi-t.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['qiwi_terminals'] ?>">
                                    </div>
                                    <span><?= $dataMfo['mfo']['sposob_repayment']['qiwi_terminals'] ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['sposob_repayment']['kassa24_terminals']) : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img">
                                        <img src="/img/svg-icons/repayment/kassa24.png" data-src="/img/svg-icons/repayment/kassa24.png" alt="<?= $dataMfo['mfo']['sposob_repayment']['kassa24_terminals'] ?>">
                                    </div>
                                    <span><?= $dataMfo['mfo']['sposob_repayment']['kassa24_terminals'] ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['sposob_repayment']['qiwi_wallet']) : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img w100">
                                        <img src="/img/svg-icons/repayment/qiwi-w.svg" data-src="/img/svg-icons/repayment/qiwi-w.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['qiwi_wallet'] ?>">
                                    </div>
                                    <span><?= $dataMfo['mfo']['sposob_repayment']['qiwi_wallet'] ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['sposob_repayment']['cyberplat']) : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img">
                                        <img src="/img/svg-icons/repayment/cyberplat.png" data-src="/img/svg-icons/repayment/cyberplat.png" alt="<?= $dataMfo['mfo']['sposob_repayment']['cyberplat'] ?>">
                                    </div>
                                    <span><?= $dataMfo['mfo']['sposob_repayment']['cyberplat'] ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['sposob_repayment']['office']) : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img">
                                        <img src="/img/svg-icons/repayment/in-office.svg" data-src="/img/svg-icons/repayment/in-office.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['office'] ?>">
                                    </div>
                                    <span><?= $dataMfo['mfo']['sposob_repayment']['office'] ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['sposob_repayment']['jysan']) : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img w100">
                                        <img src="/img/svg-icons/repayment/heartland-bank.jpg" data-src="/img/svg-icons/repayment/heartland-bank.jpg" alt="<?= $dataMfo['mfo']['sposob_repayment']['jysan'] ?>">
                                    </div>
                                    <span><?= $dataMfo['mfo']['sposob_repayment']['jysan'] ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['sposob_repayment']['halyk_bank']) : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img w100">
                                        <img src="/img/svg-icons/repayment/halyk-bank.svg" data-src="/img/svg-icons/repayment/halyk-bank.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['halyk_bank'] ?>">
                                    </div>
                                    <span><?= $dataMfo['mfo']['sposob_repayment']['halyk_bank'] ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['sposob_repayment']['kassa24_lk']) : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img">
                                        <img src="/img/svg-icons/repayment/personal-cash.png" data-src="/img/svg-icons/repayment/personal-cash.png" alt="<?= $dataMfo['mfo']['sposob_repayment']['kassa24_lk'] ?>">
                                    </div>
                                    <span><?= $dataMfo['mfo']['sposob_repayment']['kassa24_lk'] ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['sposob_repayment']['homebank']) : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img">
                                        <img src="/img/svg-icons/repayment/internet-banking.png" data-src="/img/svg-icons/repayment/internet-banking.png" alt="<?= $dataMfo['mfo']['sposob_repayment']['homebank'] ?>">
                                    </div>
                                    <span><?= $dataMfo['mfo']['sposob_repayment']['homebank'] ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['sposob_repayment']['qr_code']) : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img">
                                        <img src="/img/svg-icons/repayment/qr-code.svg" data-src="/img/svg-icons/repayment/qr-code.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['qr_code'] ?>">
                                    </div>
                                    <span><?= $dataMfo['mfo']['sposob_repayment']['qr_code'] ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['sposob_repayment']['mobile_halyk_bank']) : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img">
                                        <img src="/img/svg-icons/repayment/app-halyk-bank.png" data-src="/img/svg-icons/repayment/app-halyk-bank.png" alt="<?= $dataMfo['mfo']['sposob_repayment']['mobile_halyk_bank'] ?>">
                                    </div>
                                    <span><?= $dataMfo['mfo']['sposob_repayment']['mobile_halyk_bank'] ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['sposob_repayment']['plus24']) : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img">
                                        <img src="/img/svg-icons/repayment/app-plus24.png" data-src="/img/svg-icons/repayment/app-plus24.png" alt="<?= $dataMfo['mfo']['sposob_repayment']['plus24'] ?>">
                                    </div>
                                    <span><?= $dataMfo['mfo']['sposob_repayment']['plus24'] ?></span>
                                </div>
                                <?php endif; ?>
                                <?php if($data['sposob_repayment']['money_market']) : ?>
                                <div class="content-text-item">
                                    <div class="content-text-item-img">
                                        <img src="/img/svg-icons/repayment/money-market.png" data-src="/img/svg-icons/repayment/money-market.png" alt="<?= $dataMfo['mfo']['sposob_repayment']['money_market'] ?>">
                                    </div>
                                    <span><?= $dataMfo['mfo']['sposob_repayment']['money_market'] ?></span>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="mfo-about">
                            <h2 class="mfo-about-title info-subtitle"><?= $dataTag['requisites'] ?></h2>
                            <div class="mfo-about__table">
                                <div class="mfo-about__columns">
                                    <?php if($data['requisites']['bin']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['requisites']['bin'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['requisites']['bin'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['requisites']['full_legal_name_ru']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['requisites']['full_legal_name_ru'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['requisites']['full_legal_name_ru'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['requisites']['full_legal_name_kz']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['requisites']['full_legal_name_kz'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['requisites']['full_legal_name_kz'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['requisites']['full_legal_name_en']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['requisites']['full_legal_name_en'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['requisites']['full_legal_name_en'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['requisites']['legal_address']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['requisites']['legal_address'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['requisites']['legal_address'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['requisites']['index']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['requisites']['index'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['requisites']['index'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['requisites']['date_registration']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['requisites']['date_registration'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['requisites']['date_registration'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['requisites']['kbe']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['requisites']['kbe'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['requisites']['kbe'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['requisites']['iik']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['requisites']['iik'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['requisites']['iik'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['requisites']['bank']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['requisites']['bank'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['requisites']['bank'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['requisites']['bik']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['requisites']['bik'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['requisites']['bik'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['requisites']['knp']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['requisites']['knp'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['requisites']['knp'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['requisites']['tax']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['requisites']['tax'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['requisites']['tax'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['requisites']['rnn']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['requisites']['rnn'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['requisites']['rnn'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['requisites']['okpo']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['requisites']['okpo'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['requisites']['okpo'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['requisites']['kato']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['requisites']['kato'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['requisites']['kato'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['requisites']['oked']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['requisites']['oked'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['requisites']['oked'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
<!--                                    <div class="mfo-about__col">-->
<!--                                        <div class="mfo-about__col-left">-->
<!--                                            КРП-->
<!--                                        </div>-->
<!--                                        <div class="mfo-about__col-right"></div>-->
<!--                                    </div>-->
                                </div>
                            </div>
                        </div>

                        <div class="mfo-money">
                            <a href="#" class="mfo-money-btn content-text-button">Получить деньги</a>
                        </div>

                        <div class="article-contacts">
                            <div class="article-contacts__inner">
                                <div class="feedback-form article-contacts__form">
                                    <div class="feedback-form__title">Задать вопрос	представителю	компании Честное слово - микрокредит онлайн в Казахстане</div>
                                    <form>
                                        <div class="feedback-form__fields">
                                            <div class="feedback-form__group feedback-form__group--sm">
                                                <select name="question">
                                                    <option disabled="" selected="">Выберите	категорию	вопроса</option>
                                                    <option>Получение займа</option>
                                                    <option>Погашение займа</option>
                                                    <option>Предложение	сотрудничества</option>
                                                    <option>Другие вопросы</option>
                                                </select>
                                            </div>
                                            <div class="feedback-form__group feedback-form__group--sm">
                                                <input type="text" name="surname" value="" size="40" placeholder="Фамилия">
                                            </div>
                                            <div class="feedback-form__group feedback-form__group--sm">
                                                <input type="text" name="name" value="" size="40" placeholder="Имя">
                                            </div>
                                            <div class="feedback-form__group feedback-form__group--sm">
                                                <input type="text" name="name" value="" size="40" placeholder="Отчество">
                                                <div class="control-check-muted">
                                                    <input type="checkbox" name="no-patronymic[]" value="У меня нет отчества">
                                                    <span>У меня нет	отчества</span>
                                                </div>
                                            </div>
                                            <div class="feedback-form__group feedback-form__group--sm">
                                                <input type="email" name="mail" value="" size="40" placeholder="E-mail">
                                            </div>
                                            <div class="feedback-form__group feedback-form__group--sm">
                                                <input type="tel" name="mobile" value="" size="40" class="tel" placeholder="+7 (___) ___-__-__">
                                            </div>
                                            <div class="feedback-form__group feedback-form__group--sm">
                                                <input type="text" name="subject" value="" size="40" placeholder="Тема обращения">
                                            </div>
                                            <div class="feedback-form__group">
                                                <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Пожалуйста, опишите Ваш вопрос максимально подробно"></textarea>
                                            </div>
                                            <div class="feedback-form__group feedback-form__group--submit">
                                                <input type="submit" value="Отправить" class="wpcf7-form-control wpcf7-submit"><br><br>
                                                <span class="i_agree">Нажимая кнопку «Отправить», Вы даёте согласие на <a class="i_agree-link" href="#" target="_blank">обработку персональных данных</a> и получение рекламных сообщений в SMS и Email.</span>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="application_results_success">
                                        <div class="credit-results-success">
                                            <div class="credit-results-success__head">Спасибо за	обращение!
                                            </div>
                                            <div class="credit-results-success__text">Проверьте,	пожалуйста,	Вашу почту –	мы отправили	уведомление	о статусе	заявки.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mfo-offer-recom">
                            <h3 class="mfo-offer-recom-title">Похожие	предложения</h3>
                            <div class="mfo-offer-recom-container">
                                <div class="firstloan">
                                    <div class="firstloan-col">
                                        <div class="offer-logo">
                                            <a href="#">
                                                <noscript>
                                                    <img	src="/img/2016/08/moneyman.png">
                                                </noscript>
                                                <img class=" ls-is-cached lazyloaded" src="/img/2016/08/moneyman.png" data-src="/img/2016/08/moneyman.png">
                                            </a>
                                        </div>
                                        <div class="mfo_card_info_rating_data">
                                            <div class="rating__stars" style="width:82%">
                                            </div>
                                            <div class="rating__val">4.4</div>
                                        </div>
                                    </div>
                                    <div class="firstloan-col">
                                        <div class="offer-row-col">Срок/дней</div>
                                        <div class="offer-col">5	- 31</div>
                                    </div>
                                    <div class="firstloan-col">
                                        <div class="offer-row-col">Макс.сумма/<br>тенге</div>
                                        <div class="offer-col">75 000</div>
                                    </div>
                                    <div class="firstloan-col">
                                        <div class="offer-row-col">Ставка в	день</div>
                                        <div class="offer-col">от 0,01 %</div>
                                    </div>
                                    <div class="firstloan-col">
                                        <div class="offer-row-col">Одобрение:</div>
                                        <div class="offer-col">74%</div>
                                    </div>
                                    <div class="firstloan-col">
                                        <div class="offer-card-wrap">
                                            <a href="#" class="offers-card-btn">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mfo-offer-recom-container">
                                <div class="firstloan">
                                    <div class="firstloan-col">
                                        <div class="offer-logo">
                                            <a href="#">
                                                <noscript>
                                                    <img	src="/img/2018/12/koke.png">
                                                </noscript>
                                                <img class=" ls-is-cached lazyloaded" src="/img/2018/12/koke.png" data-src="/img/2018/12/koke.png">
                                            </a>
                                        </div>
                                        <div class="mfo_card_info_rating_data">
                                            <div class="rating__stars" style="width:61%">
                                            </div>
                                            <div class="rating__val">3.1</div>
                                        </div>
                                    </div>
                                    <div class="firstloan-col">
                                        <div class="offer-row-col">Срок/дней</div>
                                        <div class="offer-col">5	- 30</div>
                                    </div>
                                    <div class="firstloan-col">
                                        <div class="offer-row-col">Макс.сумма/<br>тенге</div>
                                        <div class="offer-col">135 000</div>
                                    </div>
                                    <div class="firstloan-col">
                                        <div class="offer-row-col">Ставка в	день</div>
                                        <div class="offer-col">0,1 %</div>
                                    </div>
                                    <div class="firstloan-col">
                                        <div class="offer-row-col">Одобрение:</div>
                                        <div class="offer-col">85%</div>
                                    </div>
                                    <div class="firstloan-col">
                                        <div class="offer-card-wrap">
                                            <a href="#" class="offers-card-btn">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mfo-offer-recom-container">
                                <div class="firstloan">
                                    <div class="firstloan-col">
                                        <div class="offer-logo">
                                            <a href="#">
                                                <noscript>
                                                    <img	src="/img/2016/08/zaymer.png">
                                                </noscript>
                                                <img class=" ls-is-cached lazyloaded" src="/img/2016/08/zaymer.png" data-src="/img/2016/08/zaymer.png">
                                            </a>
                                        </div>
                                        <div class="mfo_card_info_rating_data">
                                            <div class="rating__stars" style="width:87%">
                                            </div>
                                            <div class="rating__val">4.6</div>
                                        </div>
                                    </div>
                                    <div class="firstloan-col">
                                        <div class="offer-row-col">Срок/дней</div>
                                        <div class="offer-col">30</div>
                                    </div>
                                    <div class="firstloan-col">
                                        <div class="offer-row-col">Макс.сумма/<br>тенге</div>
                                        <div class="offer-col">138 000</div>
                                    </div>
                                    <div class="firstloan-col">
                                        <div class="offer-row-col">Ставка в	день</div>
                                        <div class="offer-col">от 0,01 %</div>
                                    </div>
                                    <div class="firstloan-col">
                                        <div class="offer-row-col">Одобрение:</div>
                                        <div class="offer-col">75%</div>
                                    </div>
                                    <div class="firstloan-col">
                                        <div class="offer-card-wrap">
                                            <a href="#" class="offers-card-btn">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mfo-about__video">
                            <!-- <h3 class="mfo-about__video-title">Как получить деньги в	Creditplus.kz</h3> -->
                            <div class="yt-video">
                                <iframe width="805" height="460" src="https://www.youtube.com/embed/zi3Oag3_7s0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="content-reviews">
                    <h2 class="content-reviews-title">Отзывы о Честное слово - займ онлайн в Казахстане</h2>
                    <div class="content-reviews-item">
                        <div class="rr_review_name">Злата</div>
                        <span class="rr_date">13.08.2020</span>
                        <div class="content-reviews-rating">
                            <div class="rating">
                                <span class="rating__caption">Простота	получения</span>
                                <div class="rating__stars rating__stars--sm" style="width:100%">
                                </div>
                                <div class="rating__val">5</div>
                            </div>
                            <div class="rating">
                                <span class="rating__caption">Скорость	выдачи</span>
                                <div class="rating__stars rating__stars--sm" style="width:100%">
                                </div>
                                <div class="rating__val">5</div>
                            </div>
                            <div class="rating">
                                <span class="rating__caption">Служба	поддержки</span>
                                <div class="rating__stars rating__stars--sm" style="width:100%">
                                </div>
                                <div class="rating__val">5</div>
                            </div>
                        </div>
                        <p class="content-reviews-text">Меня	привлекла простота	обращения сюда. Никаких	странных вопросов в	анкете, к тому же заявку	ты заполняешь сам прямо	из дома. Деньги сразу на	карту приходят. Никаких	проблем не возникает,	если в срок отдаешь. Уже	не первый раз обращаюсь	сюда.</p>
                        <div class="content-reviews-plus">
                            <span>Плюсы:</span>
                            <span>Просто и	быстро.</span>
                        </div>
                        <div class="content-reviews-minus">
                            <span>Минусы:</span>
                            <span>Нет, если все	внимательно	делать.</span>
                        </div>
                    </div>
                    <div class="content-reviews-item">
                        <div class="rr_review_name">Сергей</div>
                        <span class="rr_date">29.07.2020</span>
                        <div class="content-reviews-rating">
                            <div class="rating">
                                <span class="rating__caption">Простота	получения</span>
                                <div class="rating__stars rating__stars--sm" style="width:100%">
                                </div>
                                <div class="rating__val">5</div>
                            </div>
                            <div class="rating">
                                <span class="rating__caption">Скорость	выдачи</span>
                                <div class="rating__stars rating__stars--sm" style="width:100%">
                                </div>
                                <div class="rating__val">5</div>
                            </div>
                            <div class="rating">
                                <span class="rating__caption">Служба	поддержки</span>
                                <div class="rating__stars rating__stars--sm" style="width:61%">
                                </div>
                                <div class="rating__val">3</div>
                            </div>
                        </div>
                        <p class="content-reviews-text">О сервисе остались только хорошие впечатления. Мне выдали деньги через полчаса и даже не спросили, куда я собираюсь их потратить. Правда, возникли некоторые сложности при возврате долга, потому что платёж нужно отправлять через банк заранее, а меня никто не предупредил, что в противном случае может возникнуть просрочка.</p>
                        <div class="content-reviews-plus">
                            <span>Плюсы:</span>
                            <span>нецелевое использование займа, оперативное оформление.</span>
                        </div>
                        <div class="content-reviews-minus">
                            <span>Минусы:</span>
                            <span>нет хорошей обратной связи с клиентами.</span>
                        </div>
                    </div>
                    <form class="review-form">
                        <div class="content-reviews-rating">
                            <div class="rating">
                                <div class="rating-row">
                                    <span class="rating__caption">Простота	получения</span>
                                    <div class="rr_stars_container">
                                        <span class="rr_star glyphicon glyphicon-star-empty" data-id="rEasy" data-rate="1"></span>
                                        <span class="rr_star glyphicon glyphicon-star-empty" data-id="rEasy" data-rate="2"></span>
                                        <span class="rr_star glyphicon glyphicon-star-empty" data-id="rEasy" data-rate="3"></span>
                                        <span class="rr_star glyphicon glyphicon-star-empty" data-id="rEasy" data-rate="4"></span>
                                        <span class="rr_star glyphicon glyphicon-star-empty" data-id="rEasy" data-rate="5"></span>
                                    </div>
                                </div>
                                <span class="form-err"></span>
                            </div>
                            <div class="rating">
                                <div class="rating-row">
                                    <span class="rating__caption">Скорость выдачи</span>
                                    <div class="rr_stars_container">
                                        <span class="rr_star glyphicon glyphicon-star-empty" data-id="rEasy" data-rate="1"></span>
                                        <span class="rr_star glyphicon glyphicon-star-empty" data-id="rEasy" data-rate="2"></span>
                                        <span class="rr_star glyphicon glyphicon-star-empty" data-id="rEasy" data-rate="3"></span>
                                        <span class="rr_star glyphicon glyphicon-star-empty" data-id="rEasy" data-rate="4"></span>
                                        <span class="rr_star glyphicon glyphicon-star-empty" data-id="rEasy" data-rate="5"></span>
                                    </div>
                                </div>
                                <span class="form-err"></span>
                            </div>
                            <div class="rating">
                                <div class="rating-row">
                                    <span class="rating__caption">Служба поддержки</span>
                                    <div class="rr_stars_container">
                                        <span class="rr_star glyphicon glyphicon-star-empty" data-id="rEasy" data-rate="1"></span>
                                        <span class="rr_star glyphicon glyphicon-star-empty" data-id="rEasy" data-rate="2"></span>
                                        <span class="rr_star glyphicon glyphicon-star-empty" data-id="rEasy" data-rate="3"></span>
                                        <span class="rr_star glyphicon glyphicon-star-empty" data-id="rEasy" data-rate="4"></span>
                                        <span class="rr_star glyphicon glyphicon-star-empty" data-id="rEasy" data-rate="5"></span>
                                    </div>
                                </div>
                                <span class="form-err"></span>
                            </div>
                        </div>
                        <div class="review-form__textarea-wrap">
                            <textarea class="textarea-review" placeholder="Оставьте свой отзыв" name="rText"></textarea>
                            <textarea class="textarea-plus" placeholder="Плюсы компании" name="rPlus"></textarea>
                            <span class="form-err"></span>
                            <textarea class="textarea-minus" placeholder="Минусы компании" name="rMinus"></textarea>
                            <span class="form-err"></span>
                        </div>
                        <div class="review-form__bottom">
                            <div class="review-form__input">
                                <input type="text" placeholder="Имя" name="rName" value="">
                                <span class="form-err"></span>
                            </div>
                            <div class="review-form__input">
                                <input type="text" placeholder="E-mail">
                                <span class="form-err"></span>
                            </div>
                            <div class="review-form__btn">
                                <button type="submit" class="review-form__btn">Опубликовать отзыв</button>
                                <span class="form-err"></span>
                            </div>
                        </div>
                    </form>
                    <a href="creditplus-reviews.html" class="content-reviews-btn">Смотреть все отзывы о Честное слово - займ онлайн в Казахстане</a>
                </div>
            </div>

            <sidebar class="content-sidebar">
                <div class="mfo_card">
                    <div class="mfo_card__title">Рейтинг	компании</div>
                    <div class="mfo_card__info ">
                        <div class="mfo_card__rating">
                            <div class="rating">
                                <div class="rating__stars"	style="width:96%"></div>
                                <div	class="rating__val">4.8</div>
                                <div	class="rating__vote">6</div>
                            </div>
                        </div>
                        <div class="aside-rating">
                            <div class="aside-rating-col">
                                <div class="aside-rating-title">Простота	получения</div>
                                <div	class="rating">
                                    <div class="rating__stars"	style="width:96%"></div>
                                    <div	class="rating__val">4.8</div>
                                </div>
                            </div>
                            <div class="aside-rating-col">
                                <div class="aside-rating-title">Скорость<br />выдачи</div>
                                <div	class="rating">
                                    <div class="rating__stars"	style="width:100%"></div>
                                    <div	class="rating__val">5.0</div>
                                </div>
                            </div>
                            <div class="aside-rating-col">
                                <div class="aside-rating-title">Служба поддержки</div>
                                <div	class="rating">
                                    <div class="rating__stars"	style="width:93%"></div>
                                    <div	class="rating__val">4.7</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mfo_card">
                    <div class="mfo_card__title">Подать	заявку</div>
                    <div class="mfo_card__info">
                        <div class="mfo_card__text">Не	смогли выбрать компанию?	Оставьте заявку и мы	подберем для Вас наиболее	выгодные займы!</div>
                        <a href="#">
                            <div	class="mfo_card_button">Подробнее</div>
                        </a>
                    </div>
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
                                        <img	src="img2016/08/moneyman.png">
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
                <div class="mfo_card">
                    <div class="mfo_card__title">Полезные материалы</div>
                    <div class="mfo_card__info">
                        <ul class="aside-list">
                            <li>
                                <span	class="aside-list__date">29.11.2020</span>
                                <a href="#"	class="aside-list__title">Многодетные семьи в ВКО будут исключены из очереди на жилье</a>
                            </li>
                            <li>
                                <span	class="aside-list__date">22.11.2020</span>
                                <a href="#"
                                   class="aside-list__title">Дорожная карта занятости работает: 207 тысяч жителей Казахстана нашли работу</a>
                            </li>
                            <li>
                                <span	class="aside-list__date">15.11.2020</span>
                                <a href="#"
                                   class="aside-list__title">Власти Казахстана проверят подозрительные денежные интернет-переводы на причастность к наркобизнесу</a>
                            </li>
                        </ul>
                        <a href="#"	class="btn-yellow">Все	статьи</a>
                    </div>
                </div>
            </sidebar>
        </div>
    </div>
</section>
