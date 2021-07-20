<?php

/* @var $this yii\web\View */
use \frontend\widgets\GridCatalog;
use \frontend\widgets\Rating;
use \frontend\widgets\SaleCatalog;
use \frontend\widgets\CalculatorWidget;
$this->title = 'My Yii Application';
?>
<section class="main-title">
    <h1 class="title">Қазақстандағы онлайн қарыздар</h1>
    <h2 class="subtitle">Неғұрлым тиімді ұсынысты тегін таңдаңыз!</h2>
    <h3 class="descr">Онлайн қарыз алу үшін, кредиттік ұйымдарға берілетін өтінім санын барынша көбірек толтырыңыз:</h3>
    <img class="main-title__img" src="img/uncode-child/bg-sm.png" alt="">
</section>

<?= CalculatorWidget::widget() ?>

<section class="database plr">
    <div class="database-wrap limit-width">
        <h2 class="database__title">Кредиттік ұйымдар туралы ең өзекті ақпарат</h2>
        <div class="database__row">
            <div class="database__item">
                <div class="quantity">65</div>
                <div class="field">Компаний<br>в Казахстане</div>
            </div>
            <div class="database__item">
                <div class="quantity">800</div>
                <div class="field">Клиенттің<br> пікірі </div>
            </div>
            <div class="database__item">
                <div class="quantity">27</div>
                <div class="field">Айына<br>в өтінім</div>
                <div class="thousand"><br>тыс.</div>
            </div>
        </div>
        <span class="mfo_update_date">Обновлено в ноябре 2020</span>
    </div>
</section>

<?php echo GridCatalog::widget(['input' => 'homepage']); ?>

<section class="subscribe-main plr mt18">
    <div class="subscribe-main-wrap limit-width">
        <form name="subscribtion_form">
            <h2>Акцияға жазылу</h2>
            <div class="subscribe_text_item">
                <span>Жазылушылар үшін бізде жеке жеңілдіктер болады!</span>
                <br>
                <span>Бірінші болып білгіңіз келе ме?</span>
            </div>
            <div class="subscribe_input_item">
                <input id="subscribe_email" class="subscribe-input" placeholder="E-mail" type="text" name="email" value="">
                <input id="subscribe_phone" class="subscribe-input" placeholder="Телефон (міндетті емес)" type="text" name="phone" value="">
                <input class="subscribe-btn" type="submit" value="Қол қою">
            </div>
        </form>
    </div>
</section>

<section class="faq plr">
    <div class="faq-wrap limit-width">
        <div class="faq__title">
            <a class="faq__link" href="faq.html">Часто задаваемые вопросы</a>
        </div>
        <div class="faq__content">
            <div class="faq__row">
                <div class="faq__col">
                    <a href="faq.html#choose_mfo">Как выбрать МФО?</a>
                </div>
                <div class="faq__col">
                    <a href="faq.html#how_apply">Как подать заявку?</a>
                </div>
                <div class="faq__col">
                    <a href="faq.html#where_money">Куда зачисляются деньги?</a>
                </div>
            </div>
            <div class="faq__row">
                <div class="faq__col">
                    <a href="faq.html#when_pay">Когда надо платить?</a>
                </div>
                <div class="faq__col">
                    <a href="faq.html#loan_online">Что такое займ онлайн?</a>
                </div>
                <div class="faq__col">
                    <a href="faq.html#how_much">Сколько стоит продление?</a>
                </div>
            </div>
        </div>
        <div class="faq__btn">
            <a href="faq.html">Читать все</a>
        </div>
    </div>
</section>

<section class="registration plr">
    <div class="registration-wrap limit-width">
        <div class="registration__items">
            <div class="registration__item registration__item-left">
                <div class="registration__text">
                    <p>Оформление кредита в банке — достаточно длительный и трудоёмкий процесс. Такой способ получения денег в долг отличается низкой вероятностью одобрения. Альтернативой в этом случае выступает кредитование в МФО. Займы онлайн являются наиболее актуальными и востребованными продуктами микрофинансовых организаций. Они привлекают внимание потребителей простотой получения микрокредита и мгновенным зачислением денежных средств при одобрении в день обращения.</p>
                    <p>На нашем портале размещены актуальные предложения МФО, которые выдают займы на любые цели. Вы можете сравнить их и выбрать наиболее подходящий вариант предоставления быстрого займа не выходя из дома.</p>
                    <p>Чтобы срочно взять кредит онлайн в Казахстане день в день, понадобится заполнить небольшую анкету на сайте выбранной компании. На такую процедуру не уйдет много времени. Вашу заявку на получение займа онлайн в Казахстане рассмотрят быстро: при положительном решении деньги будут у вас в тот же день в течение 15 минут.</p>
                </div>
            </div>
            <div class="registration__item registration__item-right">
                <div class="registration__descr">
                    <noscript>
                        <img src="img/uncode-child/i-main-page-wallet.png" alt="" style="width: 37px; height: 36px;">
                    </noscript>
                    <img class=" lazyloaded" src="img/uncode-child/i-main-page-wallet.png" data-src="img/uncode-child/i-main-page-wallet.png" alt="" style="width: 37px; height: 36px;">
                    <p>Оцените лучшие предложения онлайн – кредитов в Казахстане, представленные на нашем сайте! Выберите компанию, которая предложит максимальную сумму займа, лучшую скорость рассмотрения заявки, а также самую выгодную процентную ставку!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="how-take plr">
    <div class="how-take-wrap limit-width">
        <h2 class="how-take__title">Как взять займ в день обращения?</h2>
        <div class="how-take__text">
            <p>Если вы хотите повысить свои шансы на одобрение мини займа, стоит
                одновременно подать заявку на кредит в несколько компаний. Сделать это можно
                через наш сайт абсолютно бесплатно. Мы оказываем услуги по подбору онлайн
                кредитов и займов, являемся посредником между клиентом и кредитором и не
                берем оплаты за свои услуги.</p>
            <p>Обратите внимание: перед тем, как подать заявку на оформление займа онлайн,
                необходимо проверить правильность введенных данных. Если при обработке
                анкеты будет обнаружена ошибка, микрофинансовая компания вам откажет.</p>
            <p>Главные условия кредитования:</p>
        </div>
        <div class="how-take__items">
            <ul class="how-take__list">
                <li>
                    <p>Заполненная без ошибок анкета, в которой указана достоверная
                        персональная информация. Номер банковского счета или карты
                        подтвержден и принадлежит клиенту;</p>
                </li>
                <li>
                    <p>В день подачи заявления на моментальный кредит заемщику уже
                        исполнилось 18 лет.</p>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="how-take-points plr">
    <div class="how-take-points-wrap limit-width">
        <h2 class="how-take-points__title">Как взять займ в день обращения?</h2>
        <p class="how-take-points__text">
            Вашему вниманию мы представляем пошаговую инструкцию оформления микрокредита. Если следовать ей, вы в самые сжатые сроки оформите займ в тенге в тот же день и на выгодных условиях. Для получения займа вам нужно будет выполнить следующие действия:
        </p>
        <ol class="how-take-points__list">
            <li class="how-take-points__item">
                <p>Выбрать компанию на нашем портале и перейти на ее сайт.</p>
            </li>
            <li class="how-take-points__item">
                <p>Пройти процедуру регистрации.</p>
            </li>
            <li class="how-take-points__item">
                <p>Указать подходящие параметры кредитования — сумму и срок (в днях).
                </p>
            </li>
            <li class="how-take-points__item">
                <p>Выбрать наиболее удобный способ получения ссуды.</p>
            </li>
            <li class="how-take-points__item">
                <p>Заполнить небольшую анкету, рассказав о себе и своем материальном
                    положении.</p>
            </li>
            <li class="how-take-points__item">
                <p>Ввести платежные реквизиты именной карточки или банковского счета, по
                    которым будут сразу перечислены деньги в случае одобрения
                    микрозайма.</p>
            </li>
            <li class="how-take-points__item">
                <p>Проверить правильность указанных сведений. При необходимости внести
                    корректировки.</p>
            </li>
            <li class="how-take-points__item">
                <p>Если все верно, отправить запрос.</p>
            </li>
            <li class="how-take-points__item">
                <p>Дождаться решения микрофинансовой организации — оно станет известно в
                    тот же день в течение нескольких минут.</p>
            </li>
            <li class="how-take-points__item">
                <p>При положительном ответе получить SMS или письмо на электронную почту
                    с уникальным паролем, который понадобится ввести в специальном поле
                    на сайте МФО, чтобы подписать договор.</p>
            </li>
            <li class="how-take-points__item">
                <p>Получить займ.</p>
            </li>
        </ol>
    </div>
</section>

<section class="advantages plr">
    <div class="advantages-wrap limit-width">
        <h2 class="advantages__title">Наши преимущества</h2>
        <div class="advantages__text">
            <p>В чем заключаются основные преимущества нашего портала smartzaim.kz и почему
                выгодно брать микрозаймы именно в тех компаниях, предложения которых
                представлены здесь, описано ниже:</p>
        </div>
        <div class="advantages__items">
            <ul class="advantages__list">
                <li>
                    <p>Удобство сравнения текущих предложений МФО с возможностью сопоставления процентных ставок по займу;</p>
                </li>
                <li>
                    <p>Бесплатная подача заявки в тот же день в компанию с подходящими условиями кредитования;</p>
                </li>
                <li>
                    <p>Вашему вниманию представлены только надежные сервисы выдачи микрозаймов под низкий процент с хорошими условиями для потребителей;</p>
                </li>
                <li>
                    <p>Можно выбрать компанию с удобными для заёмщика способами возврата долга, в том числе, через интернет — когда отпадает необходимость посещения офиса МФО.</p>
                </li>
            </ul>
        </div>
    </div>
</section>



<?= SaleCatalog::widget(); ?>
<?= Rating::widget(); ?>

<section class="partners">
    <div class="sz-partners">
        <div class="sz-partners-wrap">
            <div class="sz-partners-title">Наши партнеры:</div>
            <div class="sz-partners-list">
                <div class="sz-partner sz-partner-cyberplat"></div>
                <div class="sz-partner sz-partner-kassa24"></div>
                <div class="sz-partner sz-partner-qiwi"></div>
                <div class="sz-partner sz-partner-visa"></div>
                <div class="sz-partner sz-partner-mastercard"></div>
            </div>
        </div>
    </div>
</section>
