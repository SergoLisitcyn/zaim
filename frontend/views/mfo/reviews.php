<?php

use \yii\helpers\Url;
use \yii\web\YiiAsset;
/* @var $this yii\web\View */
/* @var $model common\models\Mfo */

YiiAsset::register($this);
?>
<section class="breadcrumbs plr">
    <div class="breadcrumbs-wrap limit-width">
        <ul class="breadcrumbs__items">
            <li>
                <a href="/">Онлайн қарыздар</a>
            </li>
            <li>
                <a href="<?= Url::toRoute(['mfo/view', 'url' => $mfo->url]) ?>"><?= $mfo->mfo_name ?></a>
            </li>
            <li>
                Пікірлер
            </li>
        </ul>
    </div>
    <img class="main-title__img" src="/img/uncode-child/bg-sm.png" alt="">
</section>


<section class="content plr">
    <div class="content-wrap limit-width">
        <div class="content-row">
            <div class="content-box">
                <div class="content-info">
                    <ul	class="nav nav-tabs">
                        <li>
                            <a href="<?= Url::toRoute(['mfo/view', 'url' => $mfo->url]) ?>">
                                <span>О	компании</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= Url::toRoute(['mfo/login', 'url' => $mfo->url]) ?>">
                                <span>Личный	кабинет</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?= Url::toRoute(['mfo/reviews', 'url' => $mfo->url]) ?>">
                                <span>Пікірлер ( <span	class="rr-reviews-count">6</span> )</span>
                            </a>
                        </li>
                        <li	class="add_to_compare">
                            <a data-mfo="creditplus"	data-title="CreditPlus"	href="#">
                                <span>Салыстыру</span>
                            </a>
                        </li>
                    </ul>
                    <div class="content-main-info">
                        <div class="content-main-info__item">
                            <h1>Пікірлер	о	<?= $mfo->mfo_name ?></h1>
                            <a href="#" class="content-main-info__button">Получить	деньги</a>
                            <div class="content-reviews">
                                <?php foreach ($reviews as $review) :?>
                                <div class="content-reviews-item">
                                    <div class="rr_review_name"><?= $review->name_client ?></div>
                                    <span class="rr_date">13.08.2020</span>
                                    <div class="content-reviews-rating">
                                        <div class="rating">
                                            <span class="rating__caption">Алу қарапайымдылығы</span>
                                            <div class="rating__stars rating__stars--sm" style="width:100%">
                                            </div>
                                            <div class="rating__val"><?= $review->prostota ?></div>
                                        </div>
                                        <div class="rating">
                                            <span class="rating__caption">Беру жылдамдығы</span>
                                            <div class="rating__stars rating__stars--sm" style="width:100%">
                                            </div>
                                            <div class="rating__val"><?= $review->speed ?></div>
                                        </div>
                                        <div class="rating">
                                            <span class="rating__caption">Қолдау көрсету қызметі</span>
                                            <div class="rating__stars rating__stars--sm" style="width:100%">
                                            </div>
                                            <div class="rating__val"><?= $review->support ?></div>
                                        </div>
                                    </div>
                                    <p class="content-reviews-text"><?= $review->body ?></p>
                                    <div class="content-reviews-plus">
                                        <span>Плюсы:</span>
                                        <span><?= $review->plus ?></span>
                                    </div>
                                    <div class="content-reviews-minus">
                                        <span>Минусы:</span>
                                        <span><?= $review->minus ?></span>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <form class="review-form"  id="review-form" action="/mfo/reviews" method="post">
                                    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                                    <input type="hidden" id="review-cat_id" name="Review[cat_id]" value="1"/>
                                    <input type="hidden" id="review-prostota" name="Review[prostota]" value="1"/>
                                    <input type="hidden" id="review-speed" name="Review[speed]" value="1"/>
                                    <input type="hidden" id="review-support" name="Review[support]" value="1"/>
                                    <input type="hidden" id="review-support" name="Review[date]" value="<?= date('Y/m/d h:i:s')?>"/>
                                    <div class="review-form__textarea-wrap">
                                        <textarea class="textarea-review" id="review-body" placeholder="Өз пікіріңізді қалдырыңыз" name="Review[body]"></textarea>
                                        <textarea class="textarea-plus" id="review-plus" placeholder="Компанияның артықшылықтары" name="Review[plus]"></textarea>
                                        <span class="form-err"></span>
                                        <textarea class="textarea-minus" id="review-minus" placeholder="Компанияның кемшіліктері" name="Review[minus]"></textarea>
                                        <span class="form-err"></span>
                                    </div>
                                    <div class="review-form__bottom">
                                        <div class="review-form__input">
                                            <input type="text" placeholder="Атыңыз" id="review-name_client" name="Review[name_client]" value="">
                                            <span class="form-err"></span>
                                        </div>
                                        <div class="review-form__input">
                                            <input type="text" placeholder="E-mail" id="review-email" name="Review[email]">
                                            <span class="form-err"></span>
                                        </div>
                                        <div class="review-form__btn">
                                            <button type="submit" class="review-form__btn">Пікірді жариялау</button>
                                            <span class="form-err"></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <sidebar class="content-sidebar">
                <div class="mfo_card">
                    <div class="mfo_card__title">Компанияның рейтингі</div>
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
                                <div class="aside-rating-title">Алу қарапайымдылығы</div>
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
                                        <img style="height: 20px;"	src="/img/2016/08/all.png">
                                    </noscript>
                                    <img	class="lazyload"	style="height: 20px;"	src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20%20%22%3E%3C/svg%3E'	data-src="/img/2016/08/all.png">
                                </div>
                            </div>
                        </div>
                        <noindex>
                            <a href="#">
                                <div class="mfo_card_button">Ақшаны алу</div>
                            </a>
                        </noindex>
                    </div>
                </div>
                <div class="mfo_card">
                    <div class="mfo_card__title">Өтінім беру</div>
                    <div class="mfo_card__info">
                        <div class="mfo_card__text">Компанияны таңдай алмадыңыз ба? Өтінім қалдырыңыз, біз Сіз үшін мейлінше пайдалы қарыз түрлерін іріктеп таңдап береміз!</div>
                        <a href="#">
                            <div	class="mfo_card_button">Нақтырақ</div>
                        </a>
                    </div>
                </div>
                <div class="mfo_card">
                    <div class="mfo_card__title">Қарыз алушылар рейтингі</div>
                    <div	class="aside-rating aside-rating-mfo">

                        <div class="aside-rating-mfo-col">
                            <div class="aside-rating-mfo-item">
                                <a	href="#">
                                    <noscript>
                                        <img src="/img/2016/08/4slovo-e1550510710120.png">
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
                                        <div	class="aside-rating-mfo__rev">Пікірлер:	177</div>
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
                                        <div	class="aside-rating-mfo__rev">Пікірлер:	41</div>
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
                                        <div	class="aside-rating-mfo__rev">Пікірлер:	30</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mfo_card__info">
                        <a href="#">
                            <div	class="mfo_card_button">Басқа қарызды таңдау</div>
                        </a>
                    </div>
                </div>
                <div class="mfo_card">
                    <form	class="subscribtion_form">
                        <div	class="aside-subscribe-text">Арнайы ұсыныстар мен акциялар <br>туралы бірінші білгіңіз <br> келе ме?</div>
                        <div	class="email_sidebar_container">
                            <div	class="subscribe-sidebar-item subscribe-sidebar-item--input-email">
                                <input	class="subscribe-sidebar-item__control subscribe-sidebar-item__control--input-email"	placeholder="Email"	type="text"	name="email"	value=""></div>
                            <div	class="subscribe-sidebar-item subscribe-sidebar-item--btn-submit">
                                <input	class="subscribe-sidebar-item__btn subscribe-sidebar-item__btn--btn-submit"	type="submit"	value="Қол қою">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mfo_card">
                    <div class="mfo_card__title">Пайдалы материалдар</div>
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
                        <a href="#"	class="btn-yellow">Барлық мақалалар</a>
                    </div>
                </div>
                <div class="mfo_card">
                    <div class="mfo_card__title">Соңғы жаңалықтар</div>
                    <div class="mfo_card__info">
                        <ul class="aside-list">
                            <li>
                                <span class="aside-list__date">29.11.2020</span>
                                <a href="#" class="aside-list__title">Многодетные семьи в ВКО будут исключены из очереди на жилье</a>
                            </li>
                            <li>
                                <span class="aside-list__date">22.11.2020</span>
                                <a href="#" class="aside-list__title">Дорожная карта занятости работает: 207 тысяч жителей Казахстана нашли работу</a>
                            </li>
                            <li>
                                <span class="aside-list__date">15.11.2020</span>
                                <a href="#" class="aside-list__title">Власти Казахстана проверят подозрительные денежные интернет-переводы на причастность к наркобизнесу</a>
                            </li>
                        </ul>
                        <a href="#" target="_blank" rel="nofollow">
                            <div class="mfo_card_button">Барлық жаңалықтар</div>
                        </a>
                    </div>
                </div>
            </sidebar>
        </div>
    </div>
</section>
