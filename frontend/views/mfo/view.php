<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use \yii\helpers\Url;
use kartik\rating\StarRating;
/* @var $this yii\web\View */
/* @var $model common\models\Mfo */

$this->title = $model->title;
\yii\web\YiiAsset::register($this);
?>
<section class="breadcrumbs plr">
    <div class="breadcrumbs-wrap limit-width">
        <ul class="breadcrumbs__items">
            <li>
                <a href="/">Займы онлайн</a>
            </li>
            <li>
                <?= $this->title ?>
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
                        <li class="active">
                            <a href="<?= Url::toRoute(['mfo/view', 'url' => $model->url]) ?>">
                                <span>О	компании</span>
                            </a>
                        </li>
                        <li class="">
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
                            <h1><?= $model->mfo_name?></h1>
                            <div class="mfo-head__rating">
                                <div class="rating">
                                    <?php
                                    echo StarRating::widget([
                                        'name' => 'rating_21',
                                        'value' => $model->rating,
                                        'pluginOptions' => [
                                            'readonly' => true,
                                            'showClear' => false,
                                            'showCaption' => false,
                                        ],
                                    ]);
                                    ?>
<!--                                    <div class="rating__stars" style="width:90%"></div>-->
                                    <div class="rating__val"><?= $model->rating?></div>
                                </div>
                            </div>
                            <div class="mfo-head__text">Перейти	на	официальный	сайт
                                <a href="#"><?= $model->website?></a>
                            </div>
                        </div>
                        <div class="content-main-info__item">
                            <div class="mfo-head-logo">
                                <a href="#">
                                    <img src="<?= $model->logo?>">
                                </a>
                                <div class="mfo-head-approv">Одобрение:
                                    <span class="mfo-head-approv-value"><?= $model->odobrenie?>%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-main-info__content">
                        <div class="akciya-container">
                            <div class="akciya-container-item">
                                <div class="akciya-caption">Акция!
                                </div>
                                <div class="akciya-text">Оформите	микрокредит в Creditplus.kz и	получите подарок!</div>
                            </div>
                            <div class="akciya-container-item">
                                <div class="akciya-date-wrap">
                                    <div class="akciya-date">08.10.2020 - 15.01.2021
                                        <a href="#" class="akciya-btn">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mfo-about">
                            <h2 class="mfo-about-title">О	компании</h2>
                            <p class="mfo-about-text">
                                <?= $model->about_company ?>
                            </p>
                        </div>
                        <div class="mfo-stat-container">
                            <div class="firstloan">
                                <div class="firstloan-col">
                                    <div class="offer-row-col">Срок/дней</div>
                                    <div class="offer-col"><?= $model->srok_new_client?></div>
                                </div>
                                <div class="firstloan-col">
                                    <div class="offer-row-col">Макс.сумма/<br>тенге</div>
                                    <div class="offer-col"><?= $model->sum_new_client?></div>
                                </div>
                                <div class="firstloan-col">
                                    <div class="offer-row-col">Ставка в	день</div>
                                    <div class="offer-col"><?= $model->stavka_new_client?></div>
                                </div>
                                <div class="firstloan-col">
                                    <div class="offer-row-col">Одобрение:</div>
                                    <div class="offer-col"><?= $model->odobrenie_new_client?>%</div>
                                </div>
                                <div class="firstloan-col">
                                    <div class="offer-row-col">Рассмотрение/<br>минут</div>
                                    <div class="offer-col"><?= $model->rasmotrenie_new_client?></div>
                                </div>
                                <div class="firstloan-col">
                                    <div class="offer-row-col">Получение:</div>
                                    <div class="offer-col">
                                        <noscript>
                                            <img	src="/img/2016/08/all.png">
                                        </noscript>
                                        <img class="lazyloaded" src="/img/2016/08/all.png" data-src="/img/2016/08/all.png">
                                    </div>
                                </div>
                            </div>
                            <div class="mfo-footer">
                                <div class="mfo-footer-item">
                                    <div class="mfo-card-compare mfo_card_compare">
                                        <a data-mfo="creditplus" data-title="CreditPlus" href="#">Сравнить</a>
                                    </div>
                                </div>
                                <a class="mfo-footer mfo-show-rule" href="#" >Показать	условия для	существующих	клиентов</a>
                                <a class="mfo-footer-item mfo-card-btn" href="#" >Получить деньги</a>
                            </div>
                            <div class="conexist">
                                <div class="firstloan">
                                    <div class="firstloan-col">
                                        <div class="offer-row-col">Срок/дней</div>
                                        <div class="offer-col"><?= $model->srok_for_client ?></div>
                                    </div>
                                    <div class="firstloan-col">
                                        <div class="offer-row-col">Макс.сумма/<br>тенге</div>
                                        <div class="offer-col"><?= $model->sum_for_client ?></div>
                                    </div>
                                    <div class="firstloan-col">
                                        <div class="offer-row-col">Ставка в	день</div>
                                        <div class="offer-col"><?= $model->stavka_for_client ?></div>
                                    </div>
                                    <div class="firstloan-col">
                                        <div class="offer-row-col">Одобрение:</div>
                                        <div class="offer-col"><?= $model->odobrenie_for_client ?>%</div>
                                    </div>
                                    <div class="firstloan-col">
                                        <div class="offer-row-col">Рассмотрение/<br>минут</div>
                                        <div class="offer-col"><?= $model->rasmotrenie_for_client ?></div>
                                    </div>
                                    <div class="firstloan-col">
                                        <div class="offer-row-col">Получение:</div>
                                        <div class="offer-col">
                                            <noscript>
                                                <img	src="img/2016/08/all.png">
                                            </noscript>
                                            <img class="lazyloaded" src="img/2016/08/all.png" data-src="img/2016/08/all.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-text">
                            <?= $model->content ?>
                            <a href="#" class="mfo-money-btn content-text-button">Получить деньги</a>
                        </div>
                        <div class="article-contacts">
                            <div class="article-contacts__inner">
                                <div class="feedback-form article-contacts__form">
                                    <div class="feedback-form__title">Задать вопрос	представителю	компании <?= $model->mfo_name?></div>
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
                        <div class="contactdetails">
                            <div	class="contactdetails-item details-requisites">
                                <h3 class="contactdetails-title">Реквизиты сервиса	"CreditPlus":</h3>
                                <ul class="contactdetails-list">
                                    <?= $model->rekvisit ?>
                                </ul>
                            </div>
                            <div	class="contactdetails-item details-contact">
                                <h3 class="contactdetails-title">Контактная информация</h3>
                                <div	class="contact-wrap">
                                    <div	class="contact-phone">Телефон:</div>
                                    <div	class="contact-phone-field"><?= $model->phone?></div>
                                    <div	class="contact-email">E-mail:</div>
                                    <div	class="contact-email-field">
                                        <a href="#" class="email"><?= $model->email?></a>
                                    </div>
                                    <div	class="contact-site">Cайт:
                                        <a class="contact-site-link"	href="#"><?= $model->website?></a>
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
                                                    <img	src="img/2016/08/moneyman.png">
                                                </noscript>
                                                <img class=" ls-is-cached lazyloaded" src="img/2016/08/moneyman.png" data-src="img/2016/08/moneyman.png">
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
                                                    <img	src="img/2018/12/koke.png">
                                                </noscript>
                                                <img class=" ls-is-cached lazyloaded" src="img/2018/12/koke.png" data-src="img/2018/12/koke.png">
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
                                                    <img	src="img/2016/08/zaymer.png">
                                                </noscript>
                                                <img class=" ls-is-cached lazyloaded" src="img/2016/08/zaymer.png" data-src="img/2016/08/zaymer.png">
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
                            <h3 class="mfo-about__video-title">Как получить деньги в <?= $model->mfo_name?></h3>
                            <div class="yt-video">
                                <iframe width="805" height="460" src="<?= $model->video?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="content-reviews">
                    <h2 class="content-reviews-title">Отзывы о <?= $model->mfo_name?></h2>
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
                    <a href="creditplus-reviews.html" class="content-reviews-btn">Смотреть все отзывы о CreditPlus</a>
                </div>
            </div>

            <sidebar class="content-sidebar">
                <div class="mfo_card">
                    <div class="mfo_card__title">Рейтинг компании</div>
                    <div class="mfo_card__info ">
                        <div class="mfo_card__rating">
                            <div class="rating">
                                <?php
                                echo StarRating::widget([
                                    'name' => 'rating_21',
                                    'value' => $model->rating,
                                    'pluginOptions' => [
                                        'readonly' => true,
                                        'showClear' => false,
                                        'showCaption' => false,
                                    ],
                                ]);
                                ?>
                                <div	class="rating__val"><?= $model->rating?></div>
                                <div	class="rating__vote">6</div>
                            </div>
                        </div>
                        <div class="aside-rating">
                            <div class="aside-rating-col">
                                <div class="aside-rating-title">Простота	получения</div>
                                <div	class="rating">
                                    <?php
                                    echo StarRating::widget([
                                        'name' => 'rating_21',
                                        'value' => $model->rating,
                                        'pluginOptions' => [
                                            'readonly' => true,
                                            'showClear' => false,
                                            'showCaption' => false,
                                        ],
                                    ]);
                                    ?>
                                    <div	class="rating__val">4.8</div>
                                </div>
                            </div>
                            <div class="aside-rating-col">
                                <div class="aside-rating-title">Скорость<br />выдачи</div>
                                <div	class="rating">
                                    <?php
                                    echo StarRating::widget([
                                        'name' => 'rating_21',
                                        'value' => $model->rating,
                                        'pluginOptions' => [
                                            'readonly' => true,
                                            'showClear' => false,
                                            'showCaption' => false,
                                        ],
                                    ]);
                                    ?>
                                    <div	class="rating__val">5.0</div>
                                </div>
                            </div>
                            <div class="aside-rating-col">
                                <div class="aside-rating-title">Служба поддержки</div>
                                <div	class="rating">
                                    <?php
                                    echo StarRating::widget([
                                        'name' => 'rating_21',
                                        'value' => $model->rating,
                                        'pluginOptions' => [
                                            'readonly' => true,
                                            'showClear' => false,
                                            'showCaption' => false,
                                        ],
                                    ]);
                                    ?>
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
                                <div	class="mfo_card_info_time_data"><?= $model->srok?></div>
                            </div>
                            <div	class="mfo_card_info_sum">
                                <div	class="mfo_card_info_sum_label">Сумма (тнг):</div>
                                <div	class="mfo_card_info_sum_data"><?= $model->sum?></div>
                            </div>
                            <div	class="mfo_card_info_rate">
                                <div	class="mfo_card_info_rate_label">Ставка:</div>
                                <div	class="mfo_card_info_rate_data"><?= $model->stavka?></div>
                            </div>
                            <div	class="mfo_card_info_accept">
                                <div	class="mfo_card_info_accept_label">Рассмотрение:</div>
                                <div	class="mfo_card_info_accept_data"><?= $model->rasmotrenie?></div>
                            </div>
                            <div	class="mfo_card_info_ways">
                                <div	class="mfo_card_info_ways_label">Получить:</div>
                                <div	class="mfo_card_info_ways_data">
                                    <noscript>
                                        <img style="height: 20px;"	src="/img/2016/08/all.png">
                                    </noscript>
                                    <img	class="lazyload"	style="height: 20px;"	src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20%20%22%3E%3C/svg%3E'	data-src="/img/2016/08/all.png">
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
                <div class="mfo_card">
                    <div class="mfo_card__title">Свежие	новости</div>
                    <div class="mfo_card__info">
                        <ul class="aside-list">
                            <li>
                                <span	class="aside-list__date">15.11.2020</span>
                                <a href="#"	class="aside-list__title">Власти	Казахстана проверят	подозрительные	денежные	интернет-переводы на	причастность к	наркобизнесу</a>
                            </li>
                            <li>
                                <span	class="aside-list__date">08.11.2020</span>
                                <a href="#"	class="aside-list__title">Moneyman	появился	уполномоченный по	правам клиентов</a>
                            </li>
                            <li>
                                <span	class="aside-list__date">01.11.2020</span>
                                <a href="#"	class="aside-list__title">Средняя	заработная плата	казахстанских	докторов вырастет до	561 000 тенге к 2023	году</a>
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

<section class="ratings">
    <div class="ratings-wrap">
        <form class="ratings-form">
            <p class="ratings-item">
                <label class="ratings__description">Оцените наш сайт:</label>
                <span class="mr-star-rating mr-star-rating-select">
							<i title="1" class="fa fa-star-o mr-star-empty index-1-rating-item-1-1"></i>
							<i title="2" class="fa fa-star-o mr-star-empty index-2-rating-item-1-1"></i>
							<i title="3" class="fa fa-star-o mr-star-empty index-3-rating-item-1-1"></i>
							<i title="4" class="fa fa-star-o mr-star-empty index-4-rating-item-1-1"></i>
							<i title="5" class="fa fa-star-o mr-star-empty index-5-rating-item-1-1"></i>
						</span>
            </p>
            <input type="button" class="save-rating" value="OK">
        </form>
        <span class="ratings-result">
					<span class="mr-star-rating">
						<i class="fa fa-star mr-star-full"></i>
						<i class="fa fa-star mr-star-full"></i>
						<i class="fa fa-star mr-star-full"></i>
						<i class="fa fa-star mr-star-full"></i>
						<i class="fa fa-star-half-o mr-star-half"></i>
					</span>
					<span class="star-result">
						<span>4.38</span>/<span>5</span>(<span >2665</span>)
					</span>
				</span>
    </div>
</section>
