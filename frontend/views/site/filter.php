<?php

/* @var $this yii\web\View */
use \frontend\widgets\GridCatalog;
use \frontend\widgets\Rating;
use \frontend\widgets\SaleCatalog;
use \frontend\widgets\CalculatorWidget;
$this->title = 'Калькулятор займа онлайн — расчет суммы и процентов по кредиту';
?>
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
<section class="advantages">
    <div class="content-filter limit-width">
        <?= $typeCredit->content ?>
    </div>
</section>
<?= Rating::widget(); ?>

