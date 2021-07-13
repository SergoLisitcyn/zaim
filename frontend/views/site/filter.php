<?php

/* @var $this yii\web\View */
use \frontend\widgets\GridCatalog;
use \frontend\widgets\Rating;
use \frontend\widgets\SaleCatalog;
use \frontend\widgets\CalculatorWidget;
$this->title = 'Калькулятор займа онлайн — расчет суммы и процентов по кредиту';
?>
<style>
    .content-filter li {
        font-size: 18px;
        font-weight: 300;
        color: #111;
        position: relative;
        padding-left: 15px;
    }
    .content-filter ul {
        text-align: left;
        margin-bottom: 20px;
    }
    .content-filter li:before {
        position: absolute;
        content: '';
        top: 50%;
        transform: translateY(-50%);
        left: 0;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #000000;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
    }
    .content-filter h2 {
        color: #000000;
        font-size: 30px;
        line-height: 1;
        font-family: 'PT Sans';
        margin-bottom: 15px;
        font-weight: 500;
        margin-top: 30px;
    }
    .content-filter p {
        margin-bottom: 20px;
    }
</style>
<section class="main-title">
    <h1 class="title"><?= $typeCredit->title ?></h1>
    <h2 class="subtitle">Подберите наиболее выгодное предложение бесплатно!</h2>
    <h3 class="descr">Для получения займа без отказа заполните заявку в максимальное количество кредитных организаций:
    </h3>
    <img class="main-title__img" src="img/uncode-child/bg-sm.png" alt="">
</section>

<?= CalculatorWidget::widget() ?>


<?php echo GridCatalog::widget(['output' => $output]); ?>

<section class="subscribe-main plr mt18">
    <div class="subscribe-main-wrap limit-width">
        <form name="subscribtion_form">
            <h2>Подписка на акции</h2>
            <div class="subscribe_text_item">
                <label for="subscribe_email">У нас бывают индивидуальные скидки для подписчиков!</label>
                <br>
                <label for="subscribe_phone">Вы хотите узнать о них первыми?</label>
            </div>
            <div class="subscribe_input_item">
                <input id="subscribe_email" class="subscribe-input" placeholder="E-mail" type="text" name="email" value="">
                <input id="subscribe_phone" class="subscribe-input" placeholder="Телефон (необязательно)" type="text" name="phone" value="">
                <input class="subscribe-btn" type="submit" value="Подписаться">
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
<section class="advantages">
    <div class="content-filter limit-width">
        <?= $typeCredit->content ?>
    </div>
</section>
<?= Rating::widget(); ?>

