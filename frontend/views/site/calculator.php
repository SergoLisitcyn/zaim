<?php

/* @var $this yii\web\View */
use \frontend\widgets\GridCatalog;
use \frontend\widgets\Rating;
use \frontend\widgets\SaleCatalog;
use \frontend\widgets\CalculatorWidget;
$this->title = 'Калькулятор займа онлайн — расчет суммы и процентов по кредиту';
?>
<section class="main-title">
    <h1 class="title">Калькулятор займа онлайн</h1>
    <h2 class="subtitle">Неғұрлым тиімді ұсынысты тегін таңдаңыз!</h2>
    <h3 class="descr">Онлайн қарыз алу үшін, кредиттік ұйымдарға берілетін өтінім санын барынша көбірек толтырыңыз:</h3>
</section>

<?= CalculatorWidget::widget() ?>


<?php echo GridCatalog::widget(['input' => 'calculator']); ?>

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
            <a class="faq__link" href="faq">Жиі қойылатын сұрақтар</a>
        </div>
        <div class="faq__content">
            <div class="faq__row">
                <div class="faq__col">
                    <a href="faq#choose_mfo">МҚҰ қалай таңдауға болады?</a>
                </div>
                <div class="faq__col">
                    <a href="faq#how_apply">Өтінімді қалай беруге болады?</a>
                </div>
                <div class="faq__col">
                    <a href="faq#where_money">Ақша қайда аударылады?</a>
                </div>
            </div>
            <div class="faq__row">
                <div class="faq__col">
                    <a href="faq#when_pay">Қашан төлеу керек?</a>
                </div>
                <div class="faq__col">
                    <a href="faq#loan_online">Онлайн қарыз дегеніміз не?</a>
                </div>
                <div class="faq__col">
                    <a href="faq#how_much">Ұзарту қанша тұрады?</a>
                </div>
            </div>
        </div>
        <div class="faq__btn">
            <a href="faq">Нақтырақ</a>
        </div>
    </div>
</section>
<?= Rating::widget(); ?>

