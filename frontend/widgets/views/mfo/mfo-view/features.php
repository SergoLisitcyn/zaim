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