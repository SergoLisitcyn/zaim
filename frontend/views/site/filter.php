<?php

/* @var $this yii\web\View */
use \frontend\widgets\GridCatalog;
use \frontend\widgets\Rating;
use \frontend\widgets\SaleCatalog;
use \frontend\widgets\CalculatorWidget;
if(isset($typeCredit->title_seo) and !empty($typeCredit->title_seo)) { $this->title = $typeCredit->title_seo; }
if(isset($typeCredit->keywords) and !empty($typeCredit->keywords)) { $this->registerMetaTag(['name' => 'keywords','content' => $typeCredit->keywords]); }
if(isset($typeCredit->description) and !empty($typeCredit->description)) { $this->registerMetaTag(['name' => 'description','content' => $typeCredit->description]); }
if(isset($city->title) and !empty($city->title)) { $this->title = $city->title; }
if(isset($city->keywords) and !empty($city->keywords)) { $this->registerMetaTag(['name' => 'keywords','content' => $city->keywords]); }
if(isset($city->description) and !empty($city->description)) { $this->registerMetaTag(['name' => 'description','content' => $city->description]); }
?>
<section class="main-title">
    <?php if($typeCredit) : ?>
    <h1 class="title"><?php  echo $typeCredit->title ?></h1>
    <?php endif; ?>
    <?php if($city) : ?>
        <h1 class="title"><?php  echo $city->title_h1 ?></h1>
    <?php endif; ?>
    <h2 class="subtitle">Неғұрлым тиімді ұсынысты тегін таңдаңыз!</h2>
    <h3 class="descr">Онлайн қарыз алу үшін, кредиттік ұйымдарға берілетін өтінім санын барынша көбірек толтырыңыз:</h3>
</section>
<section class="faq plr">
    <div class="sale-block">
        <div class="sale-block-text">
            Бірнеше минуттан кейін ақша!
            <br>
            Онлайн МҚҰ-да жедел түрде ақша ала аласыз. Ақшаны бірнеше минут ішінде алу үшін
            біздің сайтта ұсынылған компанияларда онлайн өтінімді толтырыңыз.
        </div>
        <div class="sale-block-button">
            <a href="https://maxzaim.com/6803f79457da5?utm_medium=kz.smartzaim.kz&utm_source=articles" target="_blank">Ақшаны алу</a>
        </div>
    </div>
</section>

<?php //echo CalculatorWidget::widget() ?>


<?php echo GridCatalog::widget(['output' => $output]); ?>

<!--<section class="subscribe-main plr mt18">-->
<!--    <div class="subscribe-main-wrap limit-width">-->
<!--        <form name="subscribtion_form">-->
<!--            <h2>Акцияға жазылу</h2>-->
<!--            <div class="subscribe_text_item">-->
<!--                <span>Жазылушылар үшін бізде жеке жеңілдіктер болады!</span>-->
<!--                <br>-->
<!--                <span>Бірінші болып білгіңіз келе ме?</span>-->
<!--            </div>-->
<!--            <div class="subscribe_input_item">-->
<!--                <input id="subscribe_email" class="subscribe-input" placeholder="E-mail" type="text" name="email" value="">-->
<!--                <input id="subscribe_phone" class="subscribe-input" placeholder="Телефон (міндетті емес)" type="text" name="phone" value="">-->
<!--                <input class="subscribe-btn" type="submit" value="Қол қою">-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
<!--</section>-->

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
<section class="advantages">
    <div class="content-filter limit-width">
        <?php if($typeCredit) echo $typeCredit->content ?>
    </div>
</section>
<?= Rating::widget(); ?>

