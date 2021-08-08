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
                    <p>Банктен кредит ресімдеу дегеніміз –  айтарлықтай ұзақ және көп еңбекті қажет ететін үдеріс. Ақшаны қарызға алудың бұл тәсілі мақұлдау ықтималдығының төмендігімен ерекшеленеді. Бұл жағдайдың баламасы МҚҰ кредит алу болып отыр. Онлайн қарыздар микроқаржы ұйымдарының анағұрлым өзекті және жоғары сұранысқа ие өнімдері болып табылады. Олар микрокредит алудың қарапайымдылығымен және өтініш берген күні мақұлдау кезінде ақшалай қаражатты лезде аударуымен өздеріне тұтынушылардың назарын аударады.</p>
                    <p>Біздің порталда кез келген мақсатқа қарыз беретін МҚҰ өзекті ұсыныстары орналастырылған. Сіз оларды салыстырып, үйден шықпай-ақ жылдам несие берудің ең қолайлы нұсқасын таңдай аласыз.
                        Қазақстанда несиені тез арада онлайн алу үшін, таңдалған компанияның сайтында шағын сауалнаманы толтыру қажет.</p>
                    <p>Осындай процедураға көп уақыт кетпейді. Қазақстанда онлайн қарыз алуға арналған өтініміңізді тез қарайды: оң шешім қабылданған жағдайда ақша сол күні 15 минут ішінде сіздің қолыңызда болады.
                        </p>
                </div>
            </div>
            <div class="registration__item registration__item-right">
                <div class="registration__descr">
                    <noscript>
                        <img src="img/uncode-child/i-main-page-wallet.png" alt="" style="width: 37px; height: 36px;">
                    </noscript>
                    <img class=" lazyloaded" src="img/uncode-child/i-main-page-wallet.png" data-src="img/uncode-child/i-main-page-wallet.png" alt="" style="width: 37px; height: 36px;">
                    <p>Біздің сайтта ұсынылған Қазақстандағы онлайн – кредиттердің үздік ұсыныстарын бағалаңыз! Қарыздың ең көп мөлшерін, өтінімді қараудың ең жақсы жылдамдығын, сондай-ақ ең тиімді пайыздық мөлшерлемені ұсынатын компанияны таңдаңыз!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="how-take plr">
    <div class="how-take-wrap limit-width">
        <h2 class="how-take__title">Қарызды өтініш берген күні қалай алуға болады?</h2>
        <div class="how-take__text">
            <p>Егер сіз шағын кредитке мақұлдау алу мүмкіндігіңізді арттырғыңыз келсе, бір уақытта бірнеше компанияға
                несие алуға өтініш беруіңіз керек. Мұны біздің сайт арқылы мүлдем тегін жасауға болады. Біз онлайн кредиттер
                мен қарыздарды іріктеп ұсыну арқылы  қызмет көрсетеміз, клиент пен кредитор арасындағы делдал болып табыламыз
                және өз қызметіміз үшін төлем алмаймыз.</p>
            <p>Назар аударыңыз: қарызды онлайн ресімдеуге өтінім берер алдында енгізілген деректердің дұрыстығын тексеру қажет.
                Егер сауалнаманы өңдеу кезінде қате табылса, микроқаржы компаниясы сізге қарыз беруден бас тартады.</p>
            <p>Кредит берудің негізгі шарттары:</p>
        </div>
        <div class="how-take__items">
            <ul class="how-take__list">
                <li>
                    <p>Дұрыс дербес ақпарат көрсетілген, қатесіз толтырылған сауалнама. Банк шотының немесе картасының
                        нөмірі расталған және клиентке тиесілі;</p>
                </li>
                <li>
                    <p>Жедел кредит алуға өтініш берген күні қарыз алушы 18 жасқа толған болуы тиіс.</p>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="how-take-points plr">
    <div class="how-take-points-wrap limit-width">
        <h2 class="how-take-points__title">Өтініш берген күні шағын қарызды қалай алуға болады?</h2>
        <p class="how-take-points__text">
            Сіздердің назарларыңызға микрокредитті рәсімдеудің адымдық нұсқаулығын ұсынамыз. Егер сіз оны ұстанатын болсаңыз,
            сіз ең қысқа мерзімде сол күні және тиімді шарттар бойынша теңгемен қарыз ресімдейсіз.
            Қарыз алу үшін сіз мынадай әрекеттерді орындауыңыз қажет:
        </p>
        <ol class="how-take-points__list">
            <li class="how-take-points__item">
                <p>Біздің порталда компанияны таңдаңыз және оның сайтына өтіңіз.</p>
            </li>
            <li class="how-take-points__item">
                <p>Тіркеу рәсімінен өтіңіз.</p>
            </li>
            <li class="how-take-points__item">
                <p>Кредит берудің қолайлы параметрлерін көрсетіңіз – сомасы және мерзімі (күн).
                </p>
            </li>
            <li class="how-take-points__item">
                <p>Несие алудың ең ыңғайлы тәсілін таңдаңыз.</p>
            </li>
            <li class="how-take-points__item">
                <p>Өзіңіз және материалдық жағдайыңыз туралы айтып, шағын сауалнаманы толтырыңыз.</p>
            </li>
            <li class="how-take-points__item">
                <p>Шағын қарыз мақұлданған жағдайда ақша дереу аударылатын атаулы карточканың
                    немесе банктік шоттың төлем деректемелерін енгізіңіз.</p>
            </li>
            <li class="how-take-points__item">
                <p>Көрсетілген мәліметтердің дұрыстығын тексеріңіз. Қажет болса, түзетулер енгізіңіз.</p>
            </li>
            <li class="how-take-points__item">
                <p>Егер бәрі дұрыс болса, сұраныс жіберіңіз.</p>
            </li>
            <li class="how-take-points__item">
                <p>Микроқаржы ұйымының шешімін күтіңіз – ол дәл сол күні бірнеше минут ішінде белгілі болады.</p>
            </li>
            <li class="how-take-points__item">
                <p>Жауап оң болған жағдайда шартқа қол қою үшін МҚҰ сайтындағы арнайы жолға енгізу қажет болатын бірегей
                    паролі бар SMS немесе электрондық поштаға хат алуыңыз қажет.</p>
            </li>
            <li class="how-take-points__item">
                <p>Қарызды алыңыз.</p>
            </li>
        </ol>
    </div>
</section>

<section class="advantages plr">
    <div class="advantages-wrap limit-width">
        <h2 class="advantages__title">Біздің артықшылықтарымыз</h2>
        <div class="advantages__text">
            <p>Біздің smartzaim.kz порталының негізгі артықшылықтары қандай және микрокредиттерді осы жерде ұсынылған
                компанияларда алу неліктен тиімді екендігі төменде сипатталған:</p>
        </div>
        <div class="advantages__items">
            <ul class="advantages__list">
                <li>
                    <p>Қарыз бойынша пайыздық мөлшерлемелерді салыстыру мүмкіндігімен МҚҰ ағымдағы ұсыныстарын салыстырудың ыңғайлылығы;</p>
                </li>
                <li>
                    <p>Кредит берудің қолайлы шарттары бар компанияға дәл сол күні тегін өтінім беріңіз;</p>
                </li>
                <li>
                    <p>Сіздердің назарларыңызға тұтынушылар үшін жақсы шарттары бар төмен пайызбен шағын қарыз берудің сенімді сервистері ғана ұсынылған;</p>
                </li>
                <li>
                    <p>Қарыз алушы үшін қарызды қайтарудың ыңғайлы тәсілдері бар компанияны, оның ішінде Интернет арқылы
                        таңдауға– сонда МҚҰ кеңсесіне келудің қажеттілігі де болмайды.</p>
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
