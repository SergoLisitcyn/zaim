<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use \frontend\widgets\CityWidget;
use \frontend\widgets\TopMenu;
use \frontend\widgets\MenuFooter;
use \frontend\widgets\Url;
AppAsset::register($this);
$url = Yii::$app->request->url;
if($url == '/'){
    $class = 'home';
} elseif ($url == '/rating'){
    $class = 'rating';
} else {
    $class = 'home';
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/libs/rangeslider/rangeslider.css" />
    <link rel="stylesheet" href="/libs/fontawesome/css/font-awesome.min.css" />
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" id="ao_optimized_gfonts" href="https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C600%2C700%2C800%7COpen+Sans%3A300%2Cregular%2Citalic%2C600%2C700%2C800%7CPT+Serif%3Aregular%2Citalic%7CPT+Sans%3Aregular%2Citalic%2C700" />
    <?php $this->registerCsrfMetaTags() ?>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="custom-background" id="<?= $class ?>">
<?php $this->beginBody() ?>
<div class="wrapper">
    <header class="header">
        <div class="header-body">
            <div class="header-body__container limit-width">
                <div class="header-body__row header-body__row--top">
                    <div class="header-body__col header-body__col--top-left">
                        <div class="header-logo">
                            <a href="/">
                                <noscript>
                                    <img src="/img/2016/05/logo-2.png" alt="logo" width="160" height="30">
                                </noscript>
<!--                                <img src='data:image/svg+xml,%3Csvg%20xmlns=%22https://www.w3.org/2000/svg%22%20viewBox=%220%200%201%201%22%3E%3C/svg%3E'	data-src="/img/2016/05/logo-2.png" alt="logo"	class="lazyload" width="160" height="30">-->
                                <img src="/img/2016/05/logo-2.png" alt="logo" class="lazyload" width="160" height="30">
                            </a>
                        </div>
                    </div>
                    <div class="header-body__col header-body__col--top-right">
                        <div class="header-body__search-btn desktop-hidden">
                            <div class="navbar-search">
                                <button type="button" class="js-header-btn-m"	data-block="search" aria-label="Поиск">
                                    <svg id="i-head-search" viewBox="0 0 34 33.99"><g style="stroke:currentColor;fill:none;stroke-width:1.91;stroke-linecap:round;stroke-linejoin:round"><path d="M33.04 29.93l-3.1 3.1-7.96-7.96 3.15-3.05 7.91 7.91z"></path><path d="M14.14.95c7.28 0 13.19 5.91 13.19 13.19 0 7.28-5.91 13.19-13.19 13.19C6.86 27.33.95 21.42.95 14.14.95 6.86 6.86.95 14.14.95zM14.02 4.69c5.27 0 9.54 4.27 9.54 9.54"></path></g></svg>
                                </button>
                            </div>
                        </div>
                        <div class="header-cab">
                            <div class="desktop-visible" style="display: inline-block;vertical-align: top;text-align: center;line-height: 30px;">Тілі:</div>
                            <?= Url::widget(['output' => 'desktop']); ?>
                            <div class="desktop-visible" style="color:#337ab7;display: inline-block;vertical-align: top;text-align: center;line-height: 30px;padding-right: 15px;"><b >| KZ</b></div>
                            <a href="https://smartzaim.kz/lk/login?utm_source=kz.smartzaim.kz" class="header-cab__btn header-cab__btn--outline">Кіру</a>
                            <a href="https://smartzaim.kz/lk/register?utm_source=kz.smartzaim.kz" class="header-cab__btn desktop-visible">Тіркелу</a>
                        </div>
                        <div class="header-body__menu-btn desktop-hidden">
                            <button type="button" class="header-menu-btn" id="headerMenuBtn" aria-label="Меню">
                                <svg width="25" height="20" id="i-head-menu-open" viewBox="0 0 66.38 55.316">
                                    <path d="M63.617 44.25H2.766c-.75 0-1.399.273-1.942.824C.274 45.621 0 46.27 0 47.02v5.53c0 .75.273 1.395.824 1.946.547.547 1.192.82 1.942.82h60.851c.746 0 1.395-.273 1.942-.82.546-.55.82-1.195.82-1.945V47.02c0-.75-.27-1.399-.82-1.946-.547-.55-1.196-.824-1.942-.824M65.559.82C65.012.273 64.363 0 63.617 0H2.766C2.016 0 1.367.273.824.82.274 1.371 0 2.016 0 2.762v5.535c0 .75.273 1.394.824 1.945.547.547 1.192.82 1.942.82h60.851c.746 0 1.395-.273 1.942-.82.55-.55.82-1.195.82-1.945V2.762c0-.746-.27-1.39-.82-1.942M63.617 22.125H2.766c-.75 0-1.399.273-1.942.82-.55.547-.824 1.2-.824 1.946v5.535c0 .746.273 1.394.824 1.941.547.547 1.192.82 1.942.82h60.851c.746 0 1.395-.273 1.942-.82.546-.547.82-1.195.82-1.941V24.89c0-.746-.274-1.399-.82-1.946-.547-.547-1.196-.82-1.942-.82"></path>
                                </svg>
                                <svg width="19" height="19" id="i-head-menu-close" viewBox="0 0 19 19">
                                    <path fill-rule="evenodd" d="M18.748 16.752l-2.121 2.121L9.5 11.746l-7.127 7.127-2.121-2.121 7.127-7.127L.377 2.623 2.498.502 9.5 7.504 16.502.502l2.121 2.121-7.002 7.002 7.127 7.127z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="header-body__row header-body__row--bottom">
                    <?= CityWidget::widget(); ?>
                    <div class="header-body__col header-body__col--all-mfo">
                        <a class="header-all-mfo" href="https://smartzaim.kz/zayavka-na-zajm/?utm_source=kz.smartzaim.kz" target="_blank">Барлық МҚҰ бір өтінім</a>
                    </div>
                    <div class="desktop-hidden" style="padding-left: 15px;padding-right: 15px;padding-top: 15px;width: 100%;text-align: center;">
                        <a href="/rating" class="top-10-mfo" style="float: left">
                            <i></i>
                            <span>МҚҰ ТОП-10</span>
                        </a>
                        <div style="float: right">
                        <div style="display: inline-block;vertical-align: top;text-align: center;line-height: 28px;font-size: 16px;">Тілі:</div>
                        <?= Url::widget(['output' => 'mobile']); ?>
                        <div style="color:#337ab7;display: inline-block;vertical-align: top;text-align: center;padding-right: 15px;"><b style="line-height: 28px;font-size: 16px;">| KZ</b></div>
                        </div>
                    </div>
                    <div class="header-body__col header-body__col--top-mfo  desktop-visible">
                        <a href="/rating" class="top-10-mfo">
                            <i></i>
                            <span>МҚҰ ТОП-10</span>
                        </a>
                    </div>
                    <div class="header-body__col header-body__col--nav desktop-visible">
                        <nav class="header-body-nav">
                            <ul>
                                <li><a href="/banks">Қазақстан банктері</a></li>
                                <li><a href="/aktsii">Акциялар</a></li>
                                <li><a href="/reestr-mfo">МҚҰ тізілімі</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav-section" id="headerNavSection">
            <div class="header-nav-section__container limit-width">
                <div class="header-nav-section__row">
                    <div class="header-nav-section__col">
                        <nav class="header-nav">
                            <div class="header-nav__cab desktop-hidden">
                                <a	class="header-nav__link header-nav__link--cab" href="#">Тiркелу</a>
                            </div>
                            <ul class="header-nav__list desktop-hidden">
                                <li class="header-nav__item">
                                    <a class="header-nav__link" href="/banks">Қазақстан банктері</a>
                                </li>
                                <li class="header-nav__item">
                                    <a class="header-nav__link" href="/aktsii">Акциялар</a>
                                </li>
                                <li class="header-nav__item">
                                    <a class="header-nav__link" href="/reestr-mfo">МҚҰ тізілімі</a>
                                </li>
                            </ul>
                            <?= TopMenu::widget(); ?>
                        </nav>
                        <div class="header-nav-section__search-m desktop-hidden">
                            <div class="search">
                                <form class="search__container"><input class="search__input" type="text" placeholder="Поиск по сайту">
                                    <button class="search__btn">
                                        <i></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="header-nav-section__col header-nav-section__col--navbar desktop-visible">
                        <div class="header-navbar">
                            <div class="header-navbar__row">
                                <div class="header-navbar__col">
                                    <a class="navbar-feedback" href="/contact">
                                        <svg width="26" height="26" id="i-head-feedback" viewBox="0 0 30 30">
                                            <path d="M29.068 24.569l-4.387-4.387c.073.02.145.045.224.045a2.721 2.721 0 002.717-2.718V2.719A2.721 2.721 0 0024.905 0H2.719A2.722 2.722 0 000 2.719V24.28c0 .541.323 1.023.823 1.23a1.33 1.33 0 001.451-.289l4.987-4.993h6.55a.87.87 0 100-1.74H6.9a.87.87 0 00-.616.256L1.74 23.292V2.719a.98.98 0 01.979-.979h22.186c.539 0 .977.439.977.979V17.51a.979.979 0 01-.977.978.87.87 0 00-.87.87c0 .08.024.15.045.224l-.567-.567a.87.87 0 00-1.23 0l-2.326 2.327-5.307-5.306 1.273-1.272c.041-.04.06-.09.09-.135l4.636 4.636a.87.87 0 101.23-1.23l-5.228-5.229a.883.883 0 00-.34-.21l-2.943-.981a.86.86 0 00-.526-.002l-.114-.114a.87.87 0 10-1.23 1.23l.114.114a.863.863 0 00.002.525l.98 2.942c.002.008.01.014.013.021a.86.86 0 00.197.318l6.003 6.004a.858.858 0 00.208.859l5.555 5.557c.601.6 1.4.931 2.248.931a3.16 3.16 0 002.25-.932 3.186 3.186 0 000-4.499zm-.828 2.441l-3.003-3.004c.044-.158.075-.319.075-.488 0-.092-.014-.181-.027-.271l2.553 2.552c.329.33.459.782.402 1.211zm-5.332-2.888l.001.003-.046.046.045-.049zm-9.421-10.634l.937.312-.625.624-.312-.936zm9.41 7.371l.907.907c-.555-.085-1.147.072-1.557.482-.339.34-.526.789-.526 1.269 0 .091.014.179.026.268l-.889-.889 2.039-2.037zm2.903 6.979l-2.551-2.552c.088.013.177.026.268.026.17 0 .332-.031.49-.075l2.979 2.978c-.428.048-.872-.064-1.186-.377z"></path>
                                            <path d="M22.076 7.341a.87.87 0 00-.87-.87H6.417a.87.87 0 100 1.74h14.79a.87.87 0 00.869-.87zM6.417 11.093a.87.87 0 000 1.74H9.19a.87.87 0 100-1.74H6.417z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="header-navbar__col">
                                    <a class="navbar-compare" href="https://smartzaim.kz/compare/?utm_source=kz.smartzaim.kz" data-counter="0">
                                        <svg width="26" height="26" id="i-head-compare" viewBox="0 0 32.33 32.1">
                                            <g style="stroke:currentColor;fill:none;stroke-width:1.91;stroke-linecap:round;stroke-linejoin:round">
                                                <path d="M5.52 24.24L31.37 9.03M18.45 16.63V30.2M6.8 31.14h23.52M11.37 13.41c0 2.88-2.33 5.21-5.21 5.21-2.87 0-5.21-2.33-5.21-5.21 0-2.87 2.34-5.2 5.21-5.2 2.88 0 5.21 2.33 5.21 5.2zM29.5 4.58c0 2-1.62 3.63-3.63 3.63-2 0-3.62-1.63-3.62-3.63S23.87.96 25.87.96c2.01 0 3.63 1.62 3.63 3.62z"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="header-navbar__col">
                                    <div class="navbar-search">
                                        <input type="text" class="navbar-topmenu-search__input">
                                        <button type="button">
                                            <svg>
                                                <use xlink:href="#i-head-search" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="header-navbar__col">
                                    <a class="navbar-phone" href="tel:+77172727920">
                                        <svg width="25" height="25" id="i-head-phone" viewBox="0 0 31.27 32.05">
                                            <g style="stroke:currentColor;fill:none;stroke-width:1.91;stroke-linecap:round;stroke-linejoin:round"><path d="M24.74 14.22c.17-1.06.08-2.11-.21-3.07a7.18 7.18 0 00-1.81-3.05c-.85-.85-1.92-1.43-3.05-1.61-.66-.11-1.35-.07-2.03.13"></path>
                                                <path d="M29.71 16.65c.85-2.57.76-5.19 0-7.52-.58-1.8-1.56-3.43-2.82-4.75-1.27-1.34-2.83-2.36-4.56-2.93-1.92-.63-4.03-.69-6.18.01M9.05 11.2c-1.59 1.55-1.11 5.03 1.16 8 2.27 2.97 5.51 4.34 7.42 3.2"></path>
                                                <path d="M22.81 29.16c-.07.12-.43.43-1.77 1.42-2.62 1.93-8.83-1.72-14.23-8.77C1.4 14.75-.43 7.82 2.04 5.78c1.33-1.09 1.7-1.34 1.82-1.35M23.36 28.19l-4.99-6.52a.858.858 0 01.15-1.2l2.27-1.73c.37-.29.91-.22 1.2.15l5 6.53c.28.37.21.91-.16 1.2l-2.27 1.73a.85.85 0 01-1.2-.16zM9.93 10.66l-5-6.52a.869.869 0 01.16-1.2l2.27-1.73a.85.85 0 011.2.16l5 6.52c.28.37.21.91-.16 1.2l-2.27 1.73a.85.85 0 01-1.2-.16z"></path>
                                            </g>
                                        </svg>
                                        <span>+7 (717) 272 79 20</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs'] ?? [],]) ?>
        <?= $content ?>
    </main>
</div>
<div class="footer">
    <div class="footer__container container">
        <div class="footer__row">
            <div class="footer__col"> © Smartzaim.kz 2016-2020. <br>Барлық құқықтар қорғалған <br><br>
                <a href="tel:+77172727920">+7 (717) 272-79-20</a> <br> Сайттың мазмұны айрықша ақпараттық-анықтамалық сипатқа ие. Smartzaim.kz сайты кредиттік ұйым болып табылмайды және кредиттер бермейді. Сайт таңдалған микрокредиттеу сервисіне берілген өтініш үшін клиенттен төлемақы алмайды.
            </div>
            <div class="footer__col"> Барлық ұсынылған компаниялардың тиісті қызметке лицензиялары бар.
                <br> Материалдарды пайдалану кезінде Smartzaim.kz сайтына белсенді гиперсілтеме жіберу міндетті болып табылады.</div>
            <?php echo MenuFooter::widget(); ?>
            <div class="footer__col">
                <div>Біздің әлеуметтік желілеріміз бар</div>
                <ul class="footer__social">
                    <li>
                        <a class="vk" aria-label="vk" href="https://vk.com/smartzaimkz" target="_blank"></a>
                    </li>
                    <li>
                        <a class="inst" aria-label="instagram" href="https://www.instagram.com/smartzaim.kz/" target="_blank"></a>
                    </li>
                    <li>
                        <a class="yt" aria-label="youtube" href="https://www.youtube.com/channel/UCMreDvPVHVU6zMG1hoqSKXw/video" target="_blank"></a>
                    </li>
                </ul>
                <div class="footer__logo">
                    <a href="/" aria-label="footer">
                        <noscript>
                            <img src="/img/uncode-child/logo-footer.png" alt="logo" width="241" height="46">
                        </noscript>
                        <img class="lazyload" src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20%20%22%3E%3C/svg%3E' data-src="/img/uncode-child/logo-footer.png" alt="logo" width="241" height="46">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(86407640, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/86407640" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-78532063-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-78532063-3');
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
