<?php
use \yii\helpers\Url;
?>
<div class="mfo-signs">
    <?php if($data['features']['credit_individuals'] == "+") : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'credit_individuals']) ?>">
        <div class="mfo-signs__box">
            <div class="mfo-signs__image">
                <img class="lazyloaded" src="/img/svg-icons/signs/icon1.svg" data-src="/img/svg-icons/signs/icon1.svg" alt="Кредиты физическим лицам">
            </div>
            <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['credit_individuals'] ?></div>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['features']['credit_legal'] == "+") : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'credit_legal']) ?>">
        <div class="mfo-signs__box">
            <div class="mfo-signs__image">
                <img class="lazyloaded" src="/img/svg-icons/signs/icon2.svg" data-src="/img/svg-icons/signs/icon2.svg" alt="Кредиты юридическим лицам">
            </div>
            <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['credit_legal'] ?></div>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['features']['ip'] == "+") : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'ip']) ?>">
        <div class="mfo-signs__box">
            <div class="mfo-signs__image">
                <img class="lazyloaded" src="/img/svg-icons/signs/icon3.svg" data-src="/img/svg-icons/signs/icon3.svg" alt="Кредит для ИП">
            </div>
            <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['ip'] ?></div>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['features']['consumer'] == "+") : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'consumer']) ?>">
        <div class="mfo-signs__box">
            <div class="mfo-signs__image">
                <img class="lazyloaded" src="/img/svg-icons/signs/icon4.svg" data-src="/img/svg-icons/signs/icon4.svg" alt="Потребительские цели">
            </div>
            <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['consumer'] ?></div>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['features']['fast_order'] == "+") : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'fast_order']) ?>">
        <div class="mfo-signs__box">
            <div class="mfo-signs__image">
                <img class="lazyloaded" src="/img/svg-icons/signs/icon5.svg" data-src="/img/svg-icons/signs/icon5.svg" alt="Быстрый займ">
            </div>
            <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['fast_order'] ?></div>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['features']['application_online'] == "+") : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'application_online']) ?>">
        <div class="mfo-signs__box">
            <div class="mfo-signs__image">
                <img class="lazyloaded" src="/img/svg-icons/signs/icon6.svg" data-src="/img/svg-icons/signs/icon6.svg" alt="Прием заявки онлайн">
            </div>
            <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['application_online'] ?></div>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['features']['money_online'] == "+") : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'money_online']) ?>">
        <div class="mfo-signs__box">
            <div class="mfo-signs__image">
                <img class="lazyloaded" src="/img/svg-icons/signs/icon7.svg" data-src="/img/svg-icons/signs/icon7.svg" alt="Получение денег онлайн">
            </div>
            <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['money_online'] ?></div>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['features']['without_collateral'] == "+") : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'without_collateral']) ?>">
        <div class="mfo-signs__box">
            <div class="mfo-signs__image">
                <img class="lazyloaded" src="/img/svg-icons/signs/icon8.svg" data-src="/img/svg-icons/signs/icon8.svg" alt="Без залога">
            </div>
            <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['without_collateral'] ?></div>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['features']['car_deposit'] == "+") : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'car_deposit']) ?>">
        <div class="mfo-signs__box">
            <div class="mfo-signs__image">
                <img class="lazyloaded" src="/img/svg-icons/signs/icon9.svg" data-src="/img/svg-icons/signs/icon9.svg" alt="Залог авто">
            </div>
            <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['car_deposit'] ?></div>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['features']['real_estate'] == "+") : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'real_estate']) ?>">
        <div class="mfo-signs__box">
            <div class="mfo-signs__image">
                <img class="lazyloaded" src="/img/svg-icons/signs/icon10.svg" data-src="/img/svg-icons/signs/icon10.svg" alt="Залог недвижимости">
            </div>
            <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['real_estate'] ?></div>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['features']['other'] == "+") : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'other']) ?>">
        <div class="mfo-signs__box">
            <div class="mfo-signs__image">
                <img class="lazyloaded" src="/img/svg-icons/signs/icon11.svg" data-src="/img/svg-icons/signs/icon11.svg" alt="Другие виды залога (земля, скот, техника, оборудование, гарантии третих лиц)">
            </div>
            <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['other'] ?></div>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['features']['microloan'] == "+") : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'microloan']) ?>">
        <div class="mfo-signs__box">
            <div class="mfo-signs__image">
                <img class="lazyloaded" src="/img/svg-icons/signs/icon12.svg" data-src="/img/svg-icons/signs/icon12.svg" alt="Поручительство">
            </div>
            <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['microloan'] ?></div>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['features']['entrepreneurial'] == "+") : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'entrepreneurial']) ?>">
        <div class="mfo-signs__box">
            <div class="mfo-signs__image">
                <img class="lazyloaded" src="/img/svg-icons/signs/icon13.svg" data-src="/img/svg-icons/signs/icon13.svg" alt="Предпринимательские цели /микрокредит для бизнеса">
            </div>
            <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['entrepreneurial'] ?></div>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['features']['agricultural_purposes'] == "+") : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'agricultural_purposes']) ?>">
        <div class="mfo-signs__box">
            <div class="mfo-signs__image">
                <img class="lazyloaded" src="/img/svg-icons/signs/icon14.svg" data-src="/img/svg-icons/signs/icon14.svg" alt="Сельскохозяйственные цели">
            </div>
            <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['agricultural_purposes'] ?></div>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['features']['damu_micro'] == "+") : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'damu_micro']) ?>">
        <div class="mfo-signs__box">
            <div class="mfo-signs__image">
                <img class="lazyloaded" src="/img/svg-icons/signs/icon15.svg" data-src="/img/svg-icons/signs/icon15.svg" alt="Микрокредит по программе Даму-микро">
            </div>
            <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['damu_micro'] ?></div>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['features']['microcredit_business'] == "+") : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'microcredit_business']) ?>">
        <div class="mfo-signs__box">
            <div class="mfo-signs__image">
                <img class="lazyloaded" src="/img/svg-icons/signs/icon16.svg" data-src="/img/svg-icons/signs/icon16.svg" alt="Кредитнаая линия для бизнеса">
            </div>
            <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['microcredit_business'] ?></div>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['features']['unsecured'] == "+") : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'unsecured']) ?>">
        <div class="mfo-signs__box">
            <div class="mfo-signs__image">
                <img class="lazyloaded" src="/img/svg-icons/signs/icon17.svg" data-src="/img/svg-icons/signs/icon17.svg" alt="Беззалоговое кредитование, основанное на солидарной ответственности членов кредитной группы">
            </div>
            <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['unsecured'] ?></div>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['features']['pensioners'] == "+") : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'features', 'filter' => 'pensioners']) ?>">
        <div class="mfo-signs__box">
            <div class="mfo-signs__image">
                <img class="lazyloaded" src="/img/svg-icons/signs/icon18.svg" data-src="/img/svg-icons/signs/icon18.svg" alt="Займ для пенсионеров (пенсионное удостовернеие + выписка с карточного счета)">
            </div>
            <div class="mfo-signs__text"><?= $dataMfo['mfo']['features']['pensioners'] ?></div>
        </div>
    </a>
    <?php endif; ?>
</div>