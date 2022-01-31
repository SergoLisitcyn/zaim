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
                                <p class="content-main-info__text">
                                    Когда нет возможности оформить кредит в банке, а деньги требуются уже сегодня, всегда выручат онлайн-микрокредиты. Используя личный кабинет «Честное слово», можно за 15 минут взять в долг необходимую сумму, не тратя время на очереди, долгие проверки и сбор документов. С персональным аккаунтом на сайте онлайн-сервиса легко в один клик проверить состояние ссуды, уточнить сумму и дату погашения, выбрать удобный способ перечисления платежа, а также воспользоваться дополнительными услугами компании.
                                </p>
                                <h3 class="content-main-info__subtitle">Как получить личный кабинет в «Честном слове»</h3>
                                <p class="content-main-info__text">
                                    Стать клиентом сервиса и получить доступ к персональному кабинету можно, зарегистрировавшись на сайте «Честного слова» и оформив первый микрокредит. Для этого:
                                </p>
                                <div class="content-main-info__box">
                                    <ol class="content-main-info__list">
                                        <li>
                                            <p>при помощи кредитного калькулятора определитесь с суммой и сроком онлайн-микрокредита и нажмите на «Получить деньги онлайн»;
                                            </p>
                                        </li>
                                        <li>
                                            <p>заполните форму регистрации на сайте, указав персональные данные и контакты;</p>
                                            <noscript>
                                                <img	class="content-main-info__img"	src="/img/mfo/lk/4slovo-step1.jpg"	alt=""	width="955" height="717" />
                                            </noscript>
                                            <img class="content-main-info__img lazyloaded" src="/img/mfo/lk/4slovo-step1.jpg" data-src="/img/mfo/lk/4slovo-step1.jpg" alt="" width="955"  height="717">
                                        </li>
                                        <li>
                                            <p>в открывшейся странице подтвердите правильность номера мобильного телефона, введя в соответствующее поле код, который получите в SMS-сообщении;
                                            </p>
                                            <noscript>
                                                <img	class="content-main-info__img"	src="/img/mfo/lk/4slovo-step2.jpg"	alt=""	width="955" height="717" />
                                            </noscript>
                                            <img class="content-main-info__img lazyloaded" src="/img/mfo/lk/4slovo-step2.jpg" data-src="/img/mfo/lk/4slovo-step2.jpg" alt="" width="955"  height="717">
                                        </li>
                                        <li>
                                            <p>заполните анкету клиента, указав данные удостоверения личности и адрес проживания;
                                            </p>
                                            <noscript>
                                                <img	class="content-main-info__img"	src="/img/mfo/lk/4slovo-step3.jpg"	alt=""	width="955" height="717" />
                                            </noscript>
                                            <img class="content-main-info__img lazyloaded" src="/img/mfo/lk/4slovo-step3.jpg" data-src="/img/mfo/lk/4slovo-step3.jpg" alt="" width="955"  height="717">
                                        </li>
                                        <li>
                                            <p>введите уточняющие данные: сведения о доходе, наличии кредитной карты, образовании, семейном положении и т.д.;</p>
                                            <noscript>
                                                <img	class="content-main-info__img"	src="/img/mfo/lk/4slovo-step4.jpg"	alt=""	width="955" height="717" />
                                            </noscript>
                                            <img class="content-main-info__img lazyloaded" src="/img/mfo/lk/4slovo-step4.jpg" data-src="/img/mfo/lk/4slovo-step4.jpg" alt="" width="955"  height="717">
                                        </li>
                                        <li>
                                            <p>выберите способ получения средств: на платежную карту или банковский счет;</p>
                                            <noscript>
                                                <img	class="content-main-info__img"	src="/img/mfo/lk/4slovo-step5.jpg"	alt=""	width="955" height="717" />
                                            </noscript>
                                            <img class="content-main-info__img lazyloaded" src="/img/mfo/lk/4slovo-step5.jpg" data-src="/img/mfo/lk/4slovo-step5.jpg" alt="" width="955"  height="717">
                                        </li>
                                        <li>
                                            <p>укажите реквизиты для перевода денег;</p>
                                            <noscript>
                                                <img	class="content-main-info__img"	src="/img/mfo/lk/4slovo-step6.jpg"	alt=""	width="955" height="717" />
                                            </noscript>
                                            <img class="content-main-info__img lazyloaded" src="/img/mfo/lk/4slovo-step6.jpg" data-src="/img/mfo/lk/4slovo-step6.jpg" alt="" width="955"  height="717">
                                        </li>
                                        <li>
                                            <p>при получении микрокредита на банковскую карту загрузите фото «пластика»;</p>
                                        </li>
                                        <li>
                                            <p>подпишите договор кредитования через код подтверждения, который также придет на ваш мобильный телефон.</p>
                                            <noscript>
                                                <img	class="content-main-info__img"	src="/img/mfo/lk/4slovo-step7.jpg"	alt=""	width="955" height="717" />
                                            </noscript>
                                            <img class="content-main-info__img lazyloaded" src="/img/mfo/lk/4slovo-step7.jpg" data-src="/img/mfo/lk/4slovo-step7.jpg" alt="" width="955"  height="717">
                                            <noscript>
                                                <img	class="content-main-info__img"	src="/img/mfo/lk/4slovo-step8.jpg"	alt=""	width="955" height="717" />
                                            </noscript>
                                            <img class="content-main-info__img lazyloaded" src="/img/mfo/lk/4slovo-step8.jpg" data-src="/img/mfo/lk/4slovo-step8.jpg" alt="" width="955"  height="717">
                                        </li>
                                    </ol>
                                    <p class="content-main-info__text">
                                        После этого автоматическая система рассмотрит заявку и в случае положительного решения клиент получит денежный перевод выбранным способом, а также доступ к личному кабинету.
                                    </p>
                                    <p class="content-main-info__text">
                                        <strong>Важно!</strong> Перед тем как отправить заявку на микрокредит, обязательно изучите условия кредитования, которые опубликованы в соответствующем разделе сайта. Подписывайте договор, только если вас устраивает, срок, сумма и ставка по ссуде, а также правила обслуживания дистанционного микрокредита.
                                    </p>
                                    <p class="content-main-info__text">
                                        В кредитной заявке указывайте только правдивую информацию. Телефоны и адреса клиента должны быть актуальными, а сведения о размере дохода и месте работы - точными. Кредиторы в Казахстане используют современные технологии проверки данных, поэтому быстро определяют анкеты с признаками мошенничества и отклоняют их.
                                    </p>
                                    <p class="content-main-info__text">
                                        Чтобы не получить отказ, также важно указать правильные реквизиты для перечисления средств. Перед отправкой заявки на проверку внимательно просмотрите номер банковского счета или карты: в случае ошибки компания не сможет перевести деньги и микрокредит будет аннулирован.
                                    </p>
                                    <h3 class="content-main-info__subtitle">Как оформить ссуду через персональный аккаунт</h3>
                                    <p class="content-main-info__text">
                                        Чтобы взять микрокредит повторно, не придется заполнять долгую форму. Просто выполните вход в свой кабинет на сайте сервиса после чего:
                                    </p>
                                    <ol class="content-main-info__list">
                                        <li>
                                            <p>выберите размер ссуды и период кредитования, воспользовавшись калькулятором;</p>
                                            <noscript>
                                                <img	class="content-main-info__img"	src="/img/mfo/lk/4slovo-step9.jpg"	alt=""	width="955" height="717" />
                                            </noscript>
                                            <img class="content-main-info__img lazyloaded" src="/img/mfo/lk/4slovo-step9.jpg" data-src="/img/mfo/lk/4slovo-step9.jpg" alt="" width="955"  height="717">
                                        </li>
                                        <li>
                                            <p>в нижней части страницы поставьте галочку в пункте согласия с условиями предоставления микрокредита и нажмите на «Получить деньги онлайн»;</p>
                                            <noscript>
                                                <img	class="content-main-info__img"	src="/img/mfo/lk/4slovo-step10.jpg"	alt=""	width="955" height="717" />
                                            </noscript>
                                            <img class="content-main-info__img lazyloaded" src="/img/mfo/lk/4slovo-step10.jpg" data-src="/img/mfo/lk/4slovo-step10.jpg" alt="" width="955"  height="717">
                                        </li>
                                        <li>
                                            <p>на открывшейся странице найдите поле для ввода кода подтверждения и укажите в нем комбинацию, которую получите в SMS-сообщении: так вы заключите договор.</p>
                                            <noscript>
                                                <img	class="content-main-info__img"	src="/img/mfo/lk/4slovo-step11.jpg"	alt=""	width="955" height="717" />
                                            </noscript>
                                            <img class="content-main-info__img lazyloaded" src="/img/mfo/lk/4slovo-step11.jpg" data-src="/img/mfo/lk/4slovo-step11.jpg" alt="" width="955"  height="717">
                                            <noscript>
                                                <img	class="content-main-info__img"	src="/img/mfo/lk/4slovo-step12.jpg"	alt=""	width="955" height="717" />
                                            </noscript>
                                            <img class="content-main-info__img lazyloaded" src="/img/mfo/lk/4slovo-step12.jpg" data-src="/img/mfo/lk/4slovo-step12.jpg" alt="" width="955"  height="717">
                                        </li>
                                    </ol>
                                    <h3 class="content-main-info__subtitle">Что дает клиентам персональный кабинет</h3>
                                    <p class="content-main-info__text">
                                        Тем, кто получил микрокредит в сервисе «Честное слово», личный аккаунт дает много дополнительных возможностей. Среди преимуществ его наличия:
                                    </p>
                                    <ul class="content-main-info__list-disc">
                                        <li>
                                            <p><strong>Высокая скорость оформления онлайн-микрокредитов:</strong> в персональном кабинете сохраняется информацию о клиенте, поэтому при повторной подаче заявки она сразу отображается в анкете. В результате время получения ссуды сокращается практически вдвое.</p>
                                        </li>
                                        <li>
                                            <p><strong>Контроль над состоянием микрокредита:</strong> авторизовавшись на сайте «Честного слова», можно отслеживать статус  заявки, процесс отправки средств на банковскую карту или счет, уточнять, закрылась ли ссуда после внесения платежа и т.д.</p>
                                        </li>
                                        <li>
                                            <p><strong>Участие в бонусной программе:</strong> у клиентов, которые прошли регистрацию в сервисе, есть возможность стать участниками бонусной программы. В этом случае в их личном кабинете будет открыть специальный счет, на который компания будет зачислять баллы за привлечение новых клиентов.</p>
                                        </li>
                                        <li>
                                            <p><strong>Быстрое досрочное погашение:</strong> в персональном аккаунте легко оформить досрочный возврат ссуды. Автоматическая система сразу пересчитает проценты и сумму платы.</p>
                                        </li>
                                    </ul>
                                    <p class="content-main-info__text">
                                        Обращаясь в «Честное слово», личный кабинет становится полезным помощником в контроле над кредитным обязательством и обслуживании ссуды.</p>
                                    <h3 class="content-main-info__subtitle">Условия кредитования в «Честном слове»</h3>
                                    <p class="content-main-info__text">Микрокредит от «Честного слова» – это оптимальная возможность срочно взять деньги в долг для клиентов с разной зарплатой, кредитной историей, финансовыми возможностями и опытом работы. Компания кредитует граждан Казахстана в возрасте от 18 до 75 лет, поэтому  средства одинаково доступны и пенсионерам, и студентам, и другим категориям клиентов.</p>
                                    <p class="content-main-info__text">Наименьшая сумма, которую можно получить в сервисе, составляет 5 000 тенге. Максимальный размер микрокредита зависит от количества обращений клиента: при первой подаче заявки он составляет 35 000 тенге, а при повторных оформлениях он может повыситься до 138 000 тенге. Это также касается и процентов по дистанционному микрокредиту. Новые клиенты берут средства от 0,67 % в день, но при последующих оформлениях онлайн-микрокредита ставка снижается.</p>
                                </div>
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
