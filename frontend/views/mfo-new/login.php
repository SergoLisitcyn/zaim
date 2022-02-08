<?php
use \yii\helpers\Url;
if(isset($data['seo']['login_title']) and !empty($data['seo']['login_title'])) {
    $this->title = $data['seo']['login_title'];
} else {
    $this->title = $model->name;
}
if(isset($data['seo']['login_description']) and !empty($data['seo']['login_description'])) {
    $this->registerMetaTag(['name' => 'description','content' => $data['seo']['login_description']]);
}
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
                <a href="/">Честное слово - займ онлайн в Казахстане</a>
            </li>
            <li>
                Личный кабинет
            </li>
        </ul>
    </div>
    <img class="main-title__img bank-main-title__img" src="/img/uncode-child/bg-sm.png" alt="">
</section>


<section class="content plr">
    <div class="content-wrap limit-width">
        <div class="content-row">
            <div class="content-box">
                <div class="content-info">
                    <ul	class="nav nav-tabs n-nav-tabs">
                        <li class="">
                            <a href="<?= Url::toRoute(['mfo-new/view', 'url' => $model->url]) ?>">
                                <span><?= $dataMenu['block_1'] ?></span>
                            </a>
                        </li>
                        <?php if($data['login']['lk']) :  ?>
                            <li class="active">
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
                            <?php if($data['seo']['login_h1']) :  ?>
                                <h1><?= $data['seo']['login_h1'] ?></h1>
                            <?php endif; ?>
                            <div class="blocks-content-text mt35">
                                <div class="content-text-items">
                                    <?php if($data['login']['phone']) :  ?>
                                    <div class="content-text-item">
                                        <div class="content-text-item-img">
                                            <img src="/img/svg-icons/mobile.svg" alt="<?= $dataMfo['mfo']['login']['phone'] ?>">
                                        </div>
                                        <span><?= $dataMfo['mfo']['login']['phone'] ?></span>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['login']['email']) :  ?>
                                    <div class="content-text-item">
                                        <div class="content-text-item-img">
                                            <img src="/img/svg-icons/mail.svg" alt="<?= $dataMfo['mfo']['login']['email'] ?>">
                                        </div>
                                        <span><?= $dataMfo['mfo']['login']['email'] ?></span>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['login']['inn']) :  ?>
                                    <div class="content-text-item">
                                        <div class="content-text-item-img">
                                            <img src="/img/svg-icons/inn.svg" alt="<?= $dataMfo['mfo']['login']['inn'] ?>">
                                        </div>
                                        <span><?= $dataMfo['mfo']['login']['inn'] ?></span>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if($data['login']['lk']) :  ?>
                            <a href="https://<?= $data['login']['lk'] ?>" class="content-main-info__button"><?= $dataMfo['mfo']['login']['lk'] ?></a>
                            <?php endif; ?>
                            <div class="content-main-info__content">
                                <?= $model->login_content ?>
                            </div>
                        </div>
                    </div>

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
                                <span	class="aside-list__date">01.11.2020</span>
                                <a href="#"	class="aside-list__title">5	необходимых условий	для погашения займа	через Kassa24</a>
                            </li>
                            <li>
                                <span	class="aside-list__date">24.10.2020</span>
                                <a href="#"
                                   class="aside-list__title">5	известных мифов об	онлайн займах без	процентов</a>
                            </li>
                            <li>
                                <span	class="aside-list__date">18.10.2020</span>
                                <a href="#"
                                   class="aside-list__title">7	простых шагов для	получения частного	займа без	предоплаты</a>
                            </li>
                        </ul>
                        <a href="#"	class="btn-yellow">Все	статьи</a>
                    </div>
                </div>
            </sidebar>
        </div>
    </div>
</section>
