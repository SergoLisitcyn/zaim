<?php
use common\models\TypeCredit;
?>
<ul class="header-nav__list" id="headerNavAccordion" data-max-w="959">
    <?php foreach ($filters as $filter): ?>
    <?php $typeCredits = TypeCredit::find()->where(['parent_id'=> $filter->id])->all(); ?>
    <li class="header-nav__item">
        <a class="header-nav__link js-header-nav-accordion-toggle"><?= $filter->name?></a>
        <div class="header-nav__drop collapse js-header-nav-accordion-collapse">
            <ul class="header-nav__list-l2">
                <?php foreach ($typeCredits as $typeCredit): ?>
                <li class="header-nav__item-l2">
                    <a href="/<?= $typeCredit->url?>" class="header-nav__link-l2"><?= $typeCredit->name?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </li>
    <?php endforeach; ?>
<!--    <li class="header-nav__item">-->
<!--        <a class="header-nav__link js-header-nav-accordion-toggle">Способ получения</a>-->
<!--        <div class="header-nav__drop collapse js-header-nav-accordion-collapse">-->
<!--            <ul class="header-nav__list-l2">-->
<!--                <li class="header-nav__item-l2">-->
<!--                    <a href="#" class="header-nav__link-l2">Онлайн займ на карту</a>-->
<!--                </li>-->
<!--                <li class="header-nav__item-l2">-->
<!--                    <a href="#" class="header-nav__link-l2">Онлайн займ на-->
<!--                        банковский счет</a>-->
<!--                </li>-->
<!--                <li class="header-nav__item-l2">-->
<!--                    <a href="#" class="header-nav__link-l2">Деньги на счет Казпочты</a>-->
<!--                </li>-->
<!--                <li class="header-nav__item-l2">-->
<!--                    <a href="#" class="header-nav__link-l2">Займ наличными</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </li>-->
<!--    <li class="header-nav__item">-->
<!--        <a class="header-nav__link js-header-nav-accordion-toggle">Способ погашения</a>-->
<!--        <div class="header-nav__drop collapse js-header-nav-accordion-collapse">-->
<!--            <ul class="header-nav__list-l2">-->
<!--                <li class="header-nav__item-l2">-->
<!--                    <a	href="#" class="header-nav__link-l2">Банковская карта</a>-->
<!--                </li>-->
<!--                <li class="header-nav__item-l2">-->
<!--                    <a href="#" class="header-nav__link-l2">Банковский перевод</a>-->
<!--                </li>-->
<!--                <li class="header-nav__item-l2">-->
<!--                    <a href="#" class="header-nav__link-l2">CyberPlat</a>-->
<!--                </li>-->
<!--                <li class="header-nav__item-l2">-->
<!--                    <a href="#" class="header-nav__link-l2">QIWI</a>-->
<!--                </li>-->
<!--                <li class="header-nav__item-l2">-->
<!--                    <a href="#" class="header-nav__link-l2">Kassa24</a>-->
<!--                </li>-->
<!--                <li class="header-nav__item-l2">-->
<!--                    <a href="#" class="header-nav__link-l2">Наличными в кассе-->
<!--                        банка</a>-->
<!--                </li>-->
<!--                <li class="header-nav__item-l2">-->
<!--                    <a href="#" class="header-nav__link-l2">Наличными в АО-->
<!--                        «Казпочта»</a>-->
<!--                </li>-->
<!--                <li class="header-nav__item-l2">-->
<!--                    <a href="#" class="header-nav__link-l2">Наличными в офисе-->
<!--                        компании</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </li>-->
<!--    <li class="header-nav__item">-->
<!--        <a class="header-nav__link js-header-nav-accordion-toggle">Тип занятости</a>-->
<!--        <div class="header-nav__drop collapse js-header-nav-accordion-collapse">-->
<!--            <ul class="header-nav__list-l2">-->
<!--                <li class="header-nav__item-l2">-->
<!--                    <a href="#" class="header-nav__link-l2">Работающий</a>-->
<!--                </li>-->
<!--                <li class="header-nav__item-l2">-->
<!--                    <a href="#" class="header-nav__link-l2">Безработный</a>-->
<!--                </li>-->
<!--                <li class="header-nav__item-l2">-->
<!--                    <a href="#" class="header-nav__link-l2">Студент</a>-->
<!--                </li>-->
<!--                <li class="header-nav__item-l2">-->
<!--                    <a href="#" class="header-nav__link-l2">Онлайн займы пенсионерам</a>-->
<!--                </li>-->
<!--                <li class="header-nav__item-l2">-->
<!--                    <a href="#" class="header-nav__link-l2">Онлайн займы с 18 лет</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </li>-->
<!--    <li class="header-nav__item">-->
<!--        <a class="header-nav__link js-header-nav-accordion-toggle">Срок займа</a>-->
<!--        <div class="header-nav__drop collapse js-header-nav-accordion-collapse">-->
<!--            <ul class="header-nav__list-l2">-->
<!--                <li class="header-nav__item-l2">-->
<!--                    <a href="#" class="header-nav__link-l2">Займ на неделю</a>-->
<!--                </li>-->
<!--                <li class="header-nav__item-l2">-->
<!--                    <a href="#" class="header-nav__link-l2">Займ на 30 дней</a>-->
<!--                </li>-->
<!--                <li class="header-nav__item-l2">-->
<!--                    <a href="#" class="header-nav__link-l2">Займ на 60 дней</a>-->
<!--                </li>-->
<!--                <li class="header-nav__item-l2">-->
<!--                    <a href="#" class="header-nav__link-l2">Займ на 90 дней</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </li>-->
</ul>