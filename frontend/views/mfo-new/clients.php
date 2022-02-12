<?php
use \yii\helpers\Url;
use \frontend\widgets\MfoViewWidget;
if(isset($data['seo']['clients_title']) and !empty($data['seo']['clients_title'])) {
    $this->title = $data['seo']['clients_title'];
} else {
    $this->title = $model->name;
}
if(isset($data['seo']['clients_description']) and !empty($data['seo']['clients_description'])) {
    $this->registerMetaTag(['name' => 'description','content' => $data['seo']['clients_description']]);
}
?>
<section class="breadcrumbs plr">
    <div class="breadcrumbs-wrap limit-width">
        <ul class="breadcrumbs__items white-breadcrumbs__items">
            <li>
                <a href="/">Онлайн қарыздар</a>
            </li>
            <li>
                <a href="/">МФО</a>
            </li>
            <li>
                <a href="/"><?= $data['info']['name']?></a>
            </li>
            <li>
                Клиентская поддержка
            </li>
        </ul>
    </div>
    <img class="main-title__img bank-main-title__img" src="/img/uncode-child/bg-sm.png" alt="">
</section>


<section class="content plr">
    <div class="content-wrap limit-width">
        <div class="content-row">
            <div class="content-box mfo-content-box">
                <div class="content-info">
                    <!--  Навигация-->
                    <?= MfoViewWidget::widget(['type' => 'navigation','model' => $model,'data' => $data,'navigation' => 'clients']) ?>
                    <div class="content-main-info__content">
                        <?php if($data['clients']['rules']) : ?>
                        <div class="mfo-report">
                            <div class="mfo-report__block" style="margin-top: 0;">
                                <div class="mfo-report__col" style="align-items: center;">
                                    <h2 class="mfo-about-title info-subtitle"><?= $dataMfo['mfo']['clients']['rules'] ?></h2>
                                    <a href="//<?= $data['clients']['rules']?>" class="mfo-report__link" download target="_blank" rel="nofollow">
                                        <img class="lazyloaded" src="/img/mfo/pdf.png" data-src="/img/mfo/pdf.png" alt="PDF-файл" style="margin-left: 15px">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="mfo-socials">
                            <?php if($data['clients']['faq']) : ?>
                            <a href="//<?= $data['clients']['faq']?>" class="mfo-socials-link" target="_blank" rel="nofollow">
                                <h2 class="mfo-about-title info-subtitle"><?= $dataMfo['mfo']['clients']['faq'] ?></h2>
                            </a>
                            <?php endif; ?>
                            <div class="mfo-socials__block">
                                <?php if($data['clients']['request_call']) : ?>
                                <a href="#" class="mfo-socials__link">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/call.svg" data-src="/img/svg-icons/socials/call.svg" alt="Заказать звонок">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['online_chat']) : ?>
                                <a href="#" class="mfo-socials__link">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/chat.svg" data-src="/img/svg-icons/socials/chat.svg" alt="Онлайн чат">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['whatsApp']) : ?>
                                <a href="#" class="mfo-socials__link">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/whatsapp.svg" data-src="/img/svg-icons/socials/whatsapp.svg" alt="WhatsApp">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['viber']) : ?>
                                <a href="#" class="mfo-socials__link">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/viber.svg" data-src="/img/svg-icons/socials/viber.svg" alt="Viber">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['telegram']) : ?>
                                <a href="#" class="mfo-socials__link">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/telegram.svg" data-src="/img/svg-icons/socials/telegram.svg" alt="Telegram">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['email_consultation']) : ?>
                                <a href="#" class="mfo-socials__link">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/email.svg" data-src="/img/svg-icons/socials/email.svg" alt="Email для консультации">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['call_consultation']) : ?>
                                <a href="#" class="mfo-socials__link">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/consultation.svg" data-src="/img/svg-icons/socials/consultation.svg" alt="Позвонить для консультации">
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if($data['clients']['feedback']) : ?>
                        <div class="mfo-feedback">
                            <a href="//<?= $data['clients']['feedback'] ?>" class="mfo-feedback-link" rel="nofollow" target="_blank">
                                <h2 class="mfo-about-title info-subtitle"><?= $dataMfo['mfo']['clients']['feedback'] ?></h2>
                            </a>
                        </div>
                        <?php endif; ?>
                        <div class="mfo-socials">
                            <h2 class="mfo-about-title info-subtitle">Соцсети:</h2>
                            <div class="mfo-socials__block">
                                <?php if($data['clients']['facebook']) : ?>
                                <a href="//<?= $data['clients']['facebook'] ?>" class="mfo-socials__link" rel="nofollow" target="_blank">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/facebook.svg" data-src="/img/svg-icons/socials/facebook.svg" alt="Facebook">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['vk']) : ?>
                                <a href="//<?= $data['clients']['vk'] ?>" class="mfo-socials__link" rel="nofollow" target="_blank">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/vk.svg" data-src="/img/svg-icons/socials/vk.svg" alt="Vk">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['instagram']) : ?>
                                <a href="//<?= $data['clients']['instagram'] ?>" class="mfo-socials__link" rel="nofollow" target="_blank">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/instagram.svg" data-src="/img/svg-icons/socials/instagram.svg" alt="Instagram">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['twitter']) : ?>
                                <a href="//<?= $data['clients']['twitter'] ?>" class="mfo-socials__link" rel="nofollow" target="_blank">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/twitter.svg" data-src="/img/svg-icons/socials/twitter.svg" alt="Twitter">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['youtube']) : ?>
                                <a href="//<?= $data['clients']['youtube'] ?>" class="mfo-socials__link" rel="nofollow" target="_blank">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/youtube.svg" data-src="/img/svg-icons/socials/youtube.svg" alt="Youtube">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['odnoklasniki']) : ?>
                                <a href="//<?= $data['clients']['odnoklasniki'] ?>" class="mfo-socials__link" rel="nofollow" target="_blank">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/odnoklassniki.svg" data-src="/img/svg-icons/socials/odnoklassniki.svg" alt="Одноклассники">
                                </a>
                                <?php endif; ?>
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
