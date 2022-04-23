<?php
use \yii\helpers\Url;
?>

<div class="mfo-signs" style="background-color: #fff;padding: 30px 10px;">
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'credit_individuals']) ?>">
            <div class="mfo-signs__box">
                <div class="mfo-signs__image">
                    <img class="lazyloaded" src="/img/svg-icons/signs/icon1.svg" data-src="/img/svg-icons/signs/icon1.svg" alt="Кредиты физическим лицам">
                </div>
                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['credit_individuals'] ?></div>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'credit_legal']) ?>">
            <div class="mfo-signs__box">
                <div class="mfo-signs__image">
                    <img class="lazyloaded" src="/img/svg-icons/signs/icon2.svg" data-src="/img/svg-icons/signs/icon2.svg" alt="Кредиты юридическим лицам">
                </div>
                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['credit_legal'] ?></div>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'ip']) ?>">
            <div class="mfo-signs__box">
                <div class="mfo-signs__image">
                    <img class="lazyloaded" src="/img/svg-icons/signs/icon3.svg" data-src="/img/svg-icons/signs/icon3.svg" alt="Кредит для ИП">
                </div>
                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['ip'] ?></div>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'consumer']) ?>">
            <div class="mfo-signs__box">
                <div class="mfo-signs__image">
                    <img class="lazyloaded" src="/img/svg-icons/signs/icon4.svg" data-src="/img/svg-icons/signs/icon4.svg" alt="Потребительские цели">
                </div>
                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['consumer'] ?></div>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'fast_order']) ?>">
            <div class="mfo-signs__box">
                <div class="mfo-signs__image">
                    <img class="lazyloaded" src="/img/svg-icons/signs/icon5.svg" data-src="/img/svg-icons/signs/icon5.svg" alt="Быстрый займ">
                </div>
                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['fast_order'] ?></div>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'application_online']) ?>">
            <div class="mfo-signs__box">
                <div class="mfo-signs__image">
                    <img class="lazyloaded" src="/img/svg-icons/signs/icon6.svg" data-src="/img/svg-icons/signs/icon6.svg" alt="Прием заявки онлайн">
                </div>
                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['application_online'] ?></div>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'money_online']) ?>">
            <div class="mfo-signs__box">
                <div class="mfo-signs__image">
                    <img class="lazyloaded" src="/img/svg-icons/signs/icon7.svg" data-src="/img/svg-icons/signs/icon7.svg" alt="Получение денег онлайн">
                </div>
                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['money_online'] ?></div>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'without_collateral']) ?>">
            <div class="mfo-signs__box">
                <div class="mfo-signs__image">
                    <img class="lazyloaded" src="/img/svg-icons/signs/icon8.svg" data-src="/img/svg-icons/signs/icon8.svg" alt="Без залога">
                </div>
                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['without_collateral'] ?></div>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'car_deposit']) ?>">
            <div class="mfo-signs__box">
                <div class="mfo-signs__image">
                    <img class="lazyloaded" src="/img/svg-icons/signs/icon9.svg" data-src="/img/svg-icons/signs/icon9.svg" alt="Залог авто">
                </div>
                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['car_deposit'] ?></div>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'real_estate']) ?>">
            <div class="mfo-signs__box">
                <div class="mfo-signs__image">
                    <img class="lazyloaded" src="/img/svg-icons/signs/icon10.svg" data-src="/img/svg-icons/signs/icon10.svg" alt="Залог недвижимости">
                </div>
                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['real_estate'] ?></div>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'other']) ?>">
            <div class="mfo-signs__box">
                <div class="mfo-signs__image">
                    <img class="lazyloaded" src="/img/svg-icons/signs/icon11.svg" data-src="/img/svg-icons/signs/icon11.svg" alt="Другие виды залога (земля, скот, техника, оборудование, гарантии третих лиц)">
                </div>
                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['other'] ?></div>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'microloan']) ?>">
            <div class="mfo-signs__box">
                <div class="mfo-signs__image">
                    <img class="lazyloaded" src="/img/svg-icons/signs/icon12.svg" data-src="/img/svg-icons/signs/icon12.svg" alt="Поручительство">
                </div>
                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['microloan'] ?></div>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'entrepreneurial']) ?>">
            <div class="mfo-signs__box">
                <div class="mfo-signs__image">
                    <img class="lazyloaded" src="/img/svg-icons/signs/icon13.svg" data-src="/img/svg-icons/signs/icon13.svg" alt="Предпринимательские цели /микрокредит для бизнеса">
                </div>
                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['entrepreneurial'] ?></div>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'agricultural_purposes']) ?>">
            <div class="mfo-signs__box">
                <div class="mfo-signs__image">
                    <img class="lazyloaded" src="/img/svg-icons/signs/icon14.svg" data-src="/img/svg-icons/signs/icon14.svg" alt="Сельскохозяйственные цели">
                </div>
                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['agricultural_purposes'] ?></div>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'damu_micro']) ?>">
            <div class="mfo-signs__box">
                <div class="mfo-signs__image">
                    <img class="lazyloaded" src="/img/svg-icons/signs/icon15.svg" data-src="/img/svg-icons/signs/icon15.svg" alt="Микрокредит по программе Даму-микро">
                </div>
                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['damu_micro'] ?></div>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'microcredit_business']) ?>">
            <div class="mfo-signs__box">
                <div class="mfo-signs__image">
                    <img class="lazyloaded" src="/img/svg-icons/signs/icon16.svg" data-src="/img/svg-icons/signs/icon16.svg" alt="Кредитнаая линия для бизнеса">
                </div>
                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['microcredit_business'] ?></div>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'unsecured']) ?>">
            <div class="mfo-signs__box">
                <div class="mfo-signs__image">
                    <img class="lazyloaded" src="/img/svg-icons/signs/icon17.svg" data-src="/img/svg-icons/signs/icon17.svg" alt="Беззалоговое кредитование, основанное на солидарной ответственности членов кредитной группы">
                </div>
                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['unsecured'] ?></div>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'pensioners']) ?>">
            <div class="mfo-signs__box">
                <div class="mfo-signs__image">
                    <img class="lazyloaded" src="/img/svg-icons/signs/icon18.svg" data-src="/img/svg-icons/signs/icon18.svg" alt="Займ для пенсионеров (пенсионное удостовернеие + выписка с карточного счета)">
                </div>
                <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['pensioners'] ?></div>
            </div>
        </a>
</div>
<h2 class="content-text-title info-subtitle"><?= $dataTag['osobenost'] ?></h2>
<div class="mfo-about__feature-images">
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'new_customers']) ?>">
            <div class="mfo-about__feature-images-box">
                <div class="mfo-about__feature-image">
                    <img src="/img/svg-icons/features/icon1.svg" alt="<?= $dataMfo['mfo']['singularity']['new_customers'] ?>">
                </div>
                <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['new_customers'] ?></p>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'quick_online_application']) ?>">
            <div class="mfo-about__feature-images-box">
                <div class="mfo-about__feature-image">
                    <img src="/img/svg-icons/features/icon2.svg" alt="<?= $dataMfo['mfo']['singularity']['quick_online_application'] ?>">
                </div>
                <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['quick_online_application'] ?></p>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'round_the_clock']) ?>">
            <div class="mfo-about__feature-images-box">
                <div class="mfo-about__feature-image">
                    <img src="/img/svg-icons/features/icon3.svg" alt="<?= $dataMfo['mfo']['singularity']['round_the_clock'] ?>">
                </div>
                <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['round_the_clock'] ?></p>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'full_repayment']) ?>">
            <div class="mfo-about__feature-images-box">
                <div class="mfo-about__feature-image">
                    <img src="/img/svg-icons/features/icon4.svg" alt="<?= $dataMfo['mfo']['singularity']['full_repayment'] ?>">
                </div>
                <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['full_repayment'] ?></p>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'partial_repayment']) ?>">
            <div class="mfo-about__feature-images-box">
                <div class="mfo-about__feature-image">
                    <img src="/img/svg-icons/features/icon5.svg" alt="<?= $dataMfo['mfo']['singularity']['partial_repayment'] ?>">
                </div>
                <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['partial_repayment'] ?></p>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'license_arrfr']) ?>">
            <div class="mfo-about__feature-images-box">
                <div class="mfo-about__feature-image">
                    <img src="/img/svg-icons/features/icon6.svg" alt="<?= $dataMfo['mfo']['singularity']['license_arrfr'] ?>">
                </div>
                <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['license_arrfr'] ?></p>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'identity_card']) ?>">
            <div class="mfo-about__feature-images-box">
                <div class="mfo-about__feature-image">
                    <img src="/img/svg-icons/features/icon7.svg" alt="<?= $dataMfo['mfo']['singularity']['identity_card'] ?>">
                </div>
                <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['identity_card'] ?></p>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'microcredit_without_collateral']) ?>">
            <div class="mfo-about__feature-images-box">
                <div class="mfo-about__feature-image">
                    <img src="/img/svg-icons/features/icon8.svg" alt="<?= $dataMfo['mfo']['singularity']['microcredit_without_collateral'] ?>">
                </div>
                <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['microcredit_without_collateral'] ?></p>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'microcredit_without_guarantee']) ?>">
            <div class="mfo-about__feature-images-box">
                <div class="mfo-about__feature-image">
                    <img src="/img/svg-icons/features/icon9.svg" alt="<?= $dataMfo['mfo']['singularity']['microcredit_without_guarantee'] ?>">
                </div>
                <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['microcredit_without_guarantee'] ?></p>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'written']) ?>">
            <div class="mfo-about__feature-images-box">
                <div class="mfo-about__feature-image">
                    <img src="/img/svg-icons/features/icon10.svg" alt="<?= $dataMfo['mfo']['singularity']['written'] ?>">
                </div>
                <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['written'] ?></p>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'territory_kz']) ?>">
            <div class="mfo-about__feature-images-box">
                <div class="mfo-about__feature-image">
                    <img src="/img/svg-icons/features/icon11.svg" alt="<?= $dataMfo['mfo']['singularity']['territory_kz'] ?>">
                </div>
                <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['territory_kz'] ?></p>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'loyal']) ?>">
            <div class="mfo-about__feature-images-box">
                <div class="mfo-about__feature-image">
                    <img src="/img/svg-icons/features/icon12.svg" alt="<?= $dataMfo['mfo']['singularity']['loyal'] ?>">
                </div>
                <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['loyal'] ?></p>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'biometric']) ?>">
            <div class="mfo-about__feature-images-box">
                <div class="mfo-about__feature-image">
                    <img src="/img/svg-icons/features/icon13.svg" alt="<?= $dataMfo['mfo']['singularity']['biometric'] ?>">
                </div>
                <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['biometric'] ?></p>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'calculates']) ?>">
            <div class="mfo-about__feature-images-box">
                <div class="mfo-about__feature-image">
                    <img src="/img/svg-icons/features/icon14.svg" alt="<?= $dataMfo['mfo']['singularity']['calculates'] ?>">
                </div>
                <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['calculates'] ?></p>
            </div>
        </a>
</div>
<div class="content-text blocks-content-text" style="padding: 0 10px;">
        <h2 class="content-text-title info-subtitle"><?= $dataTag['sposob_poluch'] ?></h2>
<div class="content-text-items">
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_get', 'filter' => 'bank_card']) ?>">
            <div class="content-text-item">
                <div class="content-text-item-img">
                    <img src="/img/svg-icons/card1.svg" data-src="/img/svg-icons/card1.svg" alt="<?= $dataMfo['mfo']['sposob_get']['bank_card'] ?>">
                </div>
                <span><?= $dataMfo['mfo']['sposob_get']['bank_card'] ?></span>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_get', 'filter' => 'iban']) ?>">
            <div class="content-text-item">
                <div class="content-text-item-img">
                    <img src="/img/svg-icons/card2.svg" data-src="/img/svg-icons/card2.svg" alt="<?= $dataMfo['mfo']['sposob_get']['iban'] ?>">
                </div>
                <span><?= $dataMfo['mfo']['sposob_get']['iban'] ?></span>
            </div>
        </a>

    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_get', 'filter' => 'kazpost']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img w100">
                    <img src="/img/svg-icons/kazpost.svg" data-src="/img/svg-icons/kazpost.svg" alt="<?= $dataMfo['mfo']['sposob_get']['kazpost'] ?>">
                </div>
                <span><?= $dataMfo['mfo']['sposob_get']['kazpost'] ?></span>
            </div>
        </a>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_get', 'filter' => 'exceptions']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img">
                <img src="/img/svg-icons/exceptions.svg" data-src="/img/svg-icons/exceptions.svg" alt="<?= $dataMfo['mfo']['sposob_get']['exceptions'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_get']['exceptions'] ?></span>
        </div>
    </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_get', 'filter' => 'cash']) ?>">
            <div class="content-text-item">
                <div class="content-text-item-img">
                    <img src="/img/svg-icons/cash.svg" data-src="/img/svg-icons/cash.svg" alt="<?= $dataMfo['mfo']['sposob_get']['cash'] ?>">
                </div>
                <span><?= $dataMfo['mfo']['sposob_get']['cash'] ?></span>
            </div>
        </a>
</div>
</div>


<div class="content-text blocks-content-text" style="padding: 0 10px;">
    <h2 class="content-text-title info-subtitle"><?= $dataTag['sposob_pogash'] ?></h2>
<div class="content-text-items">
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'online_bank_card']) ?>">
            <div class="content-text-item">
                <div class="content-text-item-img">
                    <img src="/img/svg-icons/repayment/pay.svg" data-src="/img/svg-icons/repayment/pay.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['online_bank_card'] ?>">
                </div>
                <span><?= $dataMfo['mfo']['sposob_repayment']['online_bank_card'] ?></span>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'bank_transfer']) ?>">
            <div class="content-text-item">
                <div class="content-text-item-img">
                    <img src="/img/svg-icons/repayment/transfer.svg" data-src="/img/svg-icons/repayment/transfer.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['bank_transfer'] ?>">
                </div>
                <span><?= $dataMfo['mfo']['sposob_repayment']['bank_transfer'] ?></span>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'kazpost']) ?>">
            <div class="content-text-item">
                <div class="content-text-item-img w100">
                    <img src="/img/svg-icons/repayment/kazpochta.svg" data-src="/img/svg-icons/repayment/kazpochta.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['kazpost'] ?>">
                </div>
                <span><?= $dataMfo['mfo']['sposob_repayment']['kazpost'] ?></span>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'qiwi_terminals']) ?>">
            <div class="content-text-item">
                <div class="content-text-item-img w100">
                    <img src="/img/svg-icons/repayment/qiwi-t.svg" data-src="/img/svg-icons/repayment/qiwi-t.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['qiwi_terminals'] ?>">
                </div>
                <span><?= $dataMfo['mfo']['sposob_repayment']['qiwi_terminals'] ?></span>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'kassa24_terminals']) ?>">
            <div class="content-text-item">
                <div class="content-text-item-img">
                    <img src="/img/svg-icons/repayment/kassa24.png" data-src="/img/svg-icons/repayment/kassa24.png" alt="<?= $dataMfo['mfo']['sposob_repayment']['kassa24_terminals'] ?>">
                </div>
                <span><?= $dataMfo['mfo']['sposob_repayment']['kassa24_terminals'] ?></span>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'qiwi_wallet']) ?>">
            <div class="content-text-item">
                <div class="content-text-item-img w100">
                    <img src="/img/svg-icons/repayment/qiwi-w.svg" data-src="/img/svg-icons/repayment/qiwi-w.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['qiwi_wallet'] ?>">
                </div>
                <span><?= $dataMfo['mfo']['sposob_repayment']['qiwi_wallet'] ?></span>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'cyberplat']) ?>">
            <div class="content-text-item">
                <div class="content-text-item-img">
                    <img src="/img/svg-icons/repayment/cyberplat.png" data-src="/img/svg-icons/repayment/cyberplat.png" alt="<?= $dataMfo['mfo']['sposob_repayment']['cyberplat'] ?>">
                </div>
                <span><?= $dataMfo['mfo']['sposob_repayment']['cyberplat'] ?></span>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'office']) ?>">
            <div class="content-text-item">
                <div class="content-text-item-img">
                    <img src="/img/svg-icons/repayment/in-office.svg" data-src="/img/svg-icons/repayment/in-office.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['office'] ?>">
                </div>
                <span><?= $dataMfo['mfo']['sposob_repayment']['office'] ?></span>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'jysan']) ?>">
            <div class="content-text-item">
                <div class="content-text-item-img w100">
                    <img src="/img/svg-icons/repayment/heartland-bank.jpg" data-src="/img/svg-icons/repayment/heartland-bank.jpg" alt="<?= $dataMfo['mfo']['sposob_repayment']['jysan'] ?>">
                </div>
                <span><?= $dataMfo['mfo']['sposob_repayment']['jysan'] ?></span>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'halyk_bank']) ?>">
            <div class="content-text-item">
                <div class="content-text-item-img w100">
                    <img src="/img/svg-icons/repayment/halyk-bank.svg" data-src="/img/svg-icons/repayment/halyk-bank.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['halyk_bank'] ?>">
                </div>
                <span><?= $dataMfo['mfo']['sposob_repayment']['halyk_bank'] ?></span>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'kassa24_lk']) ?>">
            <div class="content-text-item">
                <div class="content-text-item-img">
                    <img src="/img/svg-icons/repayment/personal-cash.png" data-src="/img/svg-icons/repayment/personal-cash.png" alt="<?= $dataMfo['mfo']['sposob_repayment']['kassa24_lk'] ?>">
                </div>
                <span><?= $dataMfo['mfo']['sposob_repayment']['kassa24_lk'] ?></span>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'homebank']) ?>">
            <div class="content-text-item">
                <div class="content-text-item-img">
                    <img src="/img/svg-icons/repayment/internet-banking.png" data-src="/img/svg-icons/repayment/internet-banking.png" alt="<?= $dataMfo['mfo']['sposob_repayment']['homebank'] ?>">
                </div>
                <span><?= $dataMfo['mfo']['sposob_repayment']['homebank'] ?></span>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'qr_code']) ?>">
            <div class="content-text-item">
                <div class="content-text-item-img">
                    <img src="/img/svg-icons/repayment/qr-code.svg" data-src="/img/svg-icons/repayment/qr-code.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['qr_code'] ?>">
                </div>
                <span><?= $dataMfo['mfo']['sposob_repayment']['qr_code'] ?></span>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'mobile_halyk_bank']) ?>">
            <div class="content-text-item">
                <div class="content-text-item-img">
                    <img src="/img/svg-icons/repayment/app-halyk-bank.png" data-src="/img/svg-icons/repayment/app-halyk-bank.png" alt="<?= $dataMfo['mfo']['sposob_repayment']['mobile_halyk_bank'] ?>">
                </div>
                <span><?= $dataMfo['mfo']['sposob_repayment']['mobile_halyk_bank'] ?></span>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'plus24']) ?>">
            <div class="content-text-item">
                <div class="content-text-item-img">
                    <img src="/img/svg-icons/repayment/app-plus24.png" data-src="/img/svg-icons/repayment/app-plus24.png" alt="<?= $dataMfo['mfo']['sposob_repayment']['plus24'] ?>">
                </div>
                <span><?= $dataMfo['mfo']['sposob_repayment']['plus24'] ?></span>
            </div>
        </a>
        <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'money_market']) ?>">
            <div class="content-text-item">
                <div class="content-text-item-img">
                    <img src="/img/svg-icons/repayment/money-market.png" data-src="/img/svg-icons/repayment/money-market.png" alt="<?= $dataMfo['mfo']['sposob_repayment']['money_market'] ?>">
                </div>
                <span><?= $dataMfo['mfo']['sposob_repayment']['money_market'] ?></span>
            </div>
        </a>
</div>
</div>