<?php

$this->title = 'Contact';
?>
<section class="content plr">
    <div class="content-wrap limit-width">
        <div class="content-row">
            <div class="content-box">
                <div class="content-info">
                    <div class="content-main-info__content">
                        <h1>Контакты</h1>
                        <p class="content-main-info__text">
                            Smartzaim.kz – это сервис, помогающий заемщикам выбрать оптимальные условия кредита и подобрать МФО. На одной странице собраны популярные микрофинансовые организации Казахстана, где наглядно сравниваются параметры сервисов по рейтингу, сроку кредитования, ставке, времени рассмотрения и способам получения. Это избавляет от необходимости переходить с сайта на сайт в поисках подходящего кредита или акции.
                        </p>
                        <p class="content-main-info__text">
                            Если с выбором возникли проблемы, то сотрудники портала Smartzaim.kz готовы помочь. Мы профессионалы в сфере микрокредитования с большим опытом работы, которые знают о кредитах все и готовы этим поделиться.
                        </p>
                        <p class="content-main-info__text">
                            Можно задать любой вопрос об МФО: как выбрать кредитную организацию, где проходят выгодные акции, как выдаются деньги, что делать заемщику с плохой кредитной историей, куда обратиться за деньгами, если нет постоянной прописки или официальной работы и многие другие. Для этого необходимо заполнить форму обратной связи.
                        </p>
                        <p class="content-main-info__text">
                            Предложения о сотрудничестве, размещении рекламы ждем по адресу:
                            <a href="#" class="email">info@creditplus.kz</a>
                        </p>
                        <p class="content-main-info__text">
                            Телефон:
                            <a class="phone" href="tel:+77172727920">+7	(717) 272-79-20</a>
                        </p>
                        <p class="content-main-info__text">
                            Адрес: Тимирязева, 42 к10, Бостандыкский район, Алматы
                        </p>
                        <p class="content-main-info__text">
                            Чтобы задать вопрос, воспользуйтесь формой ниже. Ответим в ближайшее время.
                        </p>
                    </div>
                    <div class="article-contacts">
                        <div class="article-contacts__inner">
                            <div class="feedback-form article-contacts__form">
                                <div class="feedback-form__title">Форма обратной связи</div>
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
                </div>
            </div>
            <?= \frontend\widgets\ContentSideBar::widget(); ?>
        </div>
    </div>
</section>
<!--<div class="site-contact">-->
<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--    <p>-->
<!--        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.-->
<!--    </p>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="col-lg-5">-->
<!--            --><?php //$form = ActiveForm::begin(['id' => 'contact-form']); ?>
<!---->
<!--                --><?//= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
<!---->
<!--                --><?//= $form->field($model, 'email') ?>
<!---->
<!--                --><?//= $form->field($model, 'subject') ?>
<!---->
<!--                --><?//= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
<!---->
<!--                --><?//= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
//                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
//                ]) ?>
<!---->
<!--                <div class="form-group">-->
<!--                    --><?//= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
<!--                </div>-->
<!---->
<!--            --><?php //ActiveForm::end(); ?>
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</div>-->
