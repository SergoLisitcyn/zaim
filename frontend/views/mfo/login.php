<?php
use \yii\helpers\Url;
?>
<section class="breadcrumbs plr">
    <div class="breadcrumbs-wrap limit-width">
        <ul class="breadcrumbs__items">
            <li>
                <a href="/">Займы онлайн</a>
            </li>
            <li>
                <a href="<?= Url::toRoute(['mfo/view', 'url' => $model->url]) ?>"><?= $model->mfo_name?></a>
            </li>
            <li>
                Личный кабинет
            </li>
        </ul>
    </div>
    <img class="main-title__img" src="img/uncode-child/bg-sm.png" alt="">
</section>


<section class="content plr">
    <div class="content-wrap limit-width">
        <div class="content-row">
            <div class="content-box">
                <div class="content-info">
                    <ul	class="nav nav-tabs">
                        <li>
                            <a href="<?= Url::toRoute(['mfo/view', 'url' => $model->url]) ?>">
                                <span>О	компании</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?= Url::toRoute(['mfo/login', 'url' => $model->url]) ?>">
                                <span>Личный	кабинет</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $model->url]) ?>">
                                <span>Отзывы ( <span	class="rr-reviews-count">6</span> )</span>
                            </a>
                        </li>
                        <li	class="add_to_compare">
                            <a data-mfo="creditplus"	data-title="CreditPlus"	href="#">
                                <span>Сравнить</span>
                            </a>
                        </li>
                    </ul>
                    <div class="content-main-info">
                        <div class="content-main-info__item">
                            <h1>Личный кабинет <?= $model->mfo_name?></h1>
                            <a href class="content-main-info__button">Войти в личный кабинет</a>
                            <div class="content-main-info__content">
                                <p class="content-main-info__text">
                                    Возможно ли все время иметь под рукой финансовую поддержку, не обращаясь в банк и не прибегая к помощи близких? Да, это вполне реально, если получить доступ в личный кабинет CreditPlus.kz. Сервис предлагает потребителям лояльные условия и всегда приходит на помощь в сложных финансовых ситуациях. На официальном сайте компании можно взять в долг до 130 тысяч тенге на банковскую карту в день обращения на любые цели.
                                </p>
                                <p class="content-main-info__text">
                                    Чтобы зарегистрироваться в сервисе, понадобится только удостоверение личности, мобильный телефон и интернет. Когда вы станете одним из клиентов CreditPlus.kz, вам откроется вход в личный кабинет и вы получите возможность обращаться за микрокредитом в любое время дня и ночи.
                                </p>
                                <h3 class="content-main-info__subtitle">Как пройти регистрацию в CreditPlus.kz</h3>
                                <p class="content-main-info__text">
                                    CreditPlus.kz — современный и безопасный сервис, доступный всем гражданам Казахстана. В отличие от кредитования в банке, при оформлении микрокредита в этой МФО не требуется огромный пакет документов, включающий в себя справки о зарплате. Чтобы подать заявку на получение денег в долг, клиенту организации нужно самостоятельно заполнить небольшую анкету, предоставив самые важные данные. Процедура регистрации максимально простая и быстрая, а средства перечисляются на банковскую карту клиента в первые минуты после подписания договора.
                                </p>
                                <h3 class="content-main-info__subtitle">Как именно проходит процесс подачи заявки в CreditPlus.kz на получение микрокредита?</h3>
                                <div class="content-main-info__box">
                                    <ol class="content-main-info__list">
                                        <li>
                                            <p>Зайдите на главную страницу официального сайта компании, где размещен специальный калькулятор вычисления переплаты. Передвигая бегунки, обозначьте, какую сумму и на какой срок вы желаете получить. Выбрав параметры микрокредита, вы сразу увидите дату погашения и величину совокупной платы. Если условия вас устраивают, щёлкните на кнопку «Получить микрокредит».
                                            </p>
                                            <noscript>
                                                <img	class="content-main-info__img"	src="img/2020/07/creditplus-step-1.png"	alt=""	width="955"height="717" />
                                            </noscript>
                                            <img class="content-main-info__img lazyloaded" src="img/2020/07/creditplus-step-1.png" data-src="img/2020/07/creditplus-step-1.png" alt="" width="955" height="717">
                                        </li>
                                        <li>
                                            <p>Предоставьте основные данные: фамилию, имя, отчество, номер мобильного телефона. Придумайте пароль, чтобы в дальнейшем выполнять вход в личный кабинет. Комбинация должна состоять из латинских букв и цифр. Ознакомьтесь с «Правилами предоставления микрокредитов», дайте согласие на их применение. Кликните на кнопку «Продолжить».
                                            </p>
                                            <noscript>
                                                <img	class="content-main-info__img"	src="img/2020/07/creditplus-step-2.png"	alt=""	width="955"height="717" />
                                            </noscript>
                                            <img class="content-main-info__img lazyloaded" src="img/2020/07/creditplus-step-2.png" data-src="img/2020/07/creditplus-step-2.png" alt="" width="955" height="717">
                                        </li>
                                        <li>
                                            <p>Подтвердите номер телефона. Понадобится в открывшемся окне ввести код, отправленный в СМС. Сообщение не приходит — кликните на «Выслать код повторно».
                                            </p>
                                            <noscript>
                                                <img	class="content-main-info__img"	src="img/2020/07/creditplus-step-3.png"	alt=""	width="955"height="717" />
                                            </noscript>
                                            <img class="content-main-info__img lazyloaded" src="img/2020/07/creditplus-step-3.png" data-src="img/2020/07/creditplus-step-3.png" alt="" width="955" height="717">
                                        </li>
                                        <li>
                                            <p>Укажите свой ИИН и реквизиты удостоверения личности — номер документа, орган и дату выдачи. Введите адрес действующей электронной почты.
                                            </p>
                                            <noscript>
                                                <img	class="content-main-info__img"	src="img/2020/07/creditplus-step-4.png"	alt=""	width="955"height="717" />
                                            </noscript>
                                            <img class="content-main-info__img lazyloaded" src="img/2020/07/creditplus-step-4.png" data-src="img/2020/07/creditplus-step-4.png" alt="" width="955" height="717">
                                        </li>
                                        <li>
                                            <p>Укажите точный адрес по прописке (область, город или населенный пункт, улицу, дом, квартиру, домашний телефон — при наличии). Обозначьте место фактического проживания, если оно отличается от адреса по прописке.
                                            </p>
                                            <noscript>
                                                <img	class="content-main-info__img"	src="img/2020/07/creditplus-step-5.png"	alt=""	width="955"height="717" />
                                            </noscript>
                                            <img class="content-main-info__img lazyloaded" src="img/2020/07/creditplus-step-5.png" data-src="img/2020/07/creditplus-step-5.png" alt="" width="955" height="717">
                                        </li>
                                        <li>
                                            <p>Укажите семейное положение и количество несовершеннолетних детей. Предоставьте персональные данные вашего контактного лица (Ф.И.О., степень родства, мобильный телефон). Через этого человека компания будет сообщать вам важные сведения, когда дозвониться до вас по указанным в заявке телефонам не удастся. Обратите внимание, что контактное лицо не является поручителем.
                                            </p>
                                            <noscript>
                                                <img	class="content-main-info__img"	src="img/2020/07/creditplus-step-6.png"	alt=""	width="955"height="717" />
                                            </noscript>
                                            <img class="content-main-info__img lazyloaded" src="img/2020/07/creditplus-step-6.png" data-src="img/2020/07/creditplus-step-6.png" alt="" width="955" height="717">
                                        </li>
                                        <li>
                                            <p>После того, как система закончит проверку ваших персональных данных, ознакомьтесь с предложением, которое автоматически сформирует сервис. Изучите условия оферты: сумму и срок микрокредита, сколько придется вернуть. На этом этапе можно изменить параметры получения денег (если вас что-то не устроит) и ввести промокод. Далее укажите номер IBAN (банковского счёта) для зачисления денег. Кликните на кнопку «Подать заявку на микрокредит».
                                            </p>
                                            <noscript>
                                                <img	class="content-main-info__img"	src="img/2020/07/creditplus-step-7.png"	alt=""	width="955"height="717" />
                                            </noscript>
                                            <img class="content-main-info__img lazyloaded" src="img/2020/07/creditplus-step-7.png" data-src="img/2020/07/creditplus-step-7.png" alt="" width="955" height="717">
                                        </li>
                                    </ol>
                                    <p class="content-main-info__text">
                                        Теперь вы получите не только деньги в CreditPlus.kz на какие угодно цели, но и возможность входить в личный кабинет и контролировать состояние микрокредита в удобное время суток. Через свой персональный аккаунт будет удобно уточнять в режиме онлайн размер платежа, дату погашения задолженности, реквизиты компании и другие важные для правильного обслуживания микрокредитов моменты. Здесь можно подать заявку на пролонгацию договора или же досрочное погашение ссуды.
                                    </p>
                                    <h3 class="content-main-info__subtitle">Важная информация для клиентов компании</h3>
                                    <p class="content-main-info__text">
                                        Важно понимать, что оформление любых микрокредитов — ответственный шаг, к которому стоит подойти обдуманно. Даже когда дополнительные финансы требуются очень срочно, постарайтесь заполнить заявку без лишней суеты. Советуем ознакомиться с параметрами кредитования, действующими в компании. Стоит обратить внимание на значение процентной ставки, размер обязательного платежа, дату внесения денежных средств в счёт оплаты долга, правила пролонгации договора. Так у вас получится заключить выгодную сделку, а значит, справиться с финансовыми проблемами и не испортить кредитную историю.
                                    </p>
                                    <p class="content-main-info__text">
                                        Обращение в CreditPlus.kz — отличный способ решить денежный вопрос, когда вам недоступен банковский кредит, а дополнительные средства понадобились срочно. Кредитная организация выдает микрокредиты день в день без залога и поручителей.
                                    </p>
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
                    <div	class="mfo_achieve promo">Акция</div>
                    <div class="mfo_card_company">
                        <div class="mfo_card__title">Предложение creditplus.kz</div>
                    </div>
                    <div class="mfo_card_info mfo_card_info_col">
                        <div	class="mfo_card_info_inner">
                            <div	class="mfo_card_info_time">
                                <div	class="mfo_card_info_time_label">На срок:</div>
                                <div	class="mfo_card_info_time_data">7 - 30 дней</div>
                            </div>
                            <div	class="mfo_card_info_sum">
                                <div	class="mfo_card_info_sum_label">Сумма (тнг):</div>
                                <div	class="mfo_card_info_sum_data">10 000 - 130 000</div>
                            </div>
                            <div	class="mfo_card_info_rate">
                                <div	class="mfo_card_info_rate_label">Ставка:</div>
                                <div	class="mfo_card_info_rate_data">от 0,01 %</div>
                            </div>
                            <div	class="mfo_card_info_accept">
                                <div	class="mfo_card_info_accept_label">Рассмотрение:</div>
                                <div	class="mfo_card_info_accept_data">7 минут</div>
                            </div>
                            <div	class="mfo_card_info_ways">
                                <div	class="mfo_card_info_ways_label">Получить:</div>
                                <div	class="mfo_card_info_ways_data">
                                    <noscript>
                                        <img	style="height: 20px;"	src="img/2016/08/all.png">
                                    </noscript>
                                    <img	class="lazyload"	style="height: 20px;"	src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20%20%22%3E%3C/svg%3E'	data-src="img/2016/08/all.png">
                                </div>
                            </div>
                        </div>
                        <noindex>
                            <a href="#">
                                <div	class="mfo_card_button">Получить деньги</div>
                            </a>
                        </noindex>
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
                                        <img	src="img/2016/08/4slovo-e1550510710120.png">
                                    </noscript>
                                    <img	class="lazyload"	src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20%20%22%3E%3C/svg%3E'	data-src="img/2016/08/4slovo-e1550510710120.png"	style="width: 110px;">
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
                                    <img	class="lazyload"	src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20%20%22%3E%3C/svg%3E'	data-src="img/2016/08/moneyman.png"	style="width: 110px;">
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
                                        <img	src="img/2018/01/tengokz_300x140_0.png">
                                    </noscript>
                                    <img	class="lazyload"	src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20%20%22%3E%3C/svg%3E'	data-src="img/2018/01/tengokz_300x140_0.png">
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
                    <form	class="subscribtion_form">
                        <div	class="aside-subscribe-text">Вы хотите первыми узнавать	<br> о специальных	предложениях <br> и акциях?</div>
                        <div	class="email_sidebar_container">
                            <div	class="subscribe-sidebar-item subscribe-sidebar-item--input-email">
                                <input	class="subscribe-sidebar-item__control subscribe-sidebar-item__control--input-email"	placeholder="Email"	type="text"	name="email"	value=""></div>
                            <div	class="subscribe-sidebar-item subscribe-sidebar-item--btn-submit">
                                <input	class="subscribe-sidebar-item__btn subscribe-sidebar-item__btn--btn-submit"	type="submit"	value="Подписаться">
                            </div>
                        </div>
                    </form>
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
                <div class="mfo_card">
                    <div class="mfo_card__title">Свежие	новости</div>
                    <div class="mfo_card__info">
                        <ul class="aside-list">
                            <li>
                                <span	class="aside-list__date">29.11.2020</span>
                                <a href="#"	class="aside-list__title">Многодетные семьи в ВКО будут исключены из очереди на жилье</a>
                            </li>
                            <li>
                                <span	class="aside-list__date">22.11.2020</span>
                                <a href="#"	class="aside-list__title">Дорожная карта занятости работает: 207 тысяч жителей Казахстана нашли работу</a>
                            </li>
                            <li>
                                <span	class="aside-list__date">15.11.2020</span>
                                <a href="#"	class="aside-list__title">Власти Казахстана проверят подозрительные денежные интернет-переводы на причастность к наркобизнесу</a>
                            </li>
                        </ul>
                        <a href="#" target="_blank"	rel="nofollow">
                            <div	class="mfo_card_button">Все новости</div>
                        </a>
                    </div>
                </div>
            </sidebar>
        </div>
    </div>
</section>
