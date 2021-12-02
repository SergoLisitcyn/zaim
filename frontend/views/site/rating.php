<?php

/* @var $this yii\web\View */
use \frontend\widgets\Rating;
use \frontend\widgets\CalculatorWidget;
use \yii\helpers\Url;

$this->title = 'Рейтинг лучших МФО — smartzaim.kz';
?>
<section class="main-title">
    <h1 class="title">Үздік МҚҰ рейтингі</h1>
    <?php
    $monthsList = [
        "1"=>"қаңтарда","2"=>"ақпанда","3"=>"наурызда",
        "4"=>"сәуірде","5"=>"мамырда", "6"=>"маусымда",
        "7"=>"шілдеде","8"=>"тамызда","9"=>"қыркүйекте",
        "10"=>"қазанда","11"=>"қарашада","12"=>"желтоқсанда"];
    $month = $monthsList[date("n")];
    ?>
    <p class="updated">Жаңартылған <?= $month.' '.date("Y") ?></p>
    <h3 class="descr">Онлайн қарыз алу үшін, кредиттік ұйымдарға берілетін өтінім санын барынша көбірек толтырыңыз:</h3>
</section>

<?= CalculatorWidget::widget() ?>

<section class="offers-rating plr">
    <div class="offers-rating-wrap limit-width">
        <div class="loan_calculator_sort">
            <div class="loan_calculator_sort_header">Сұрыптау:</div>
            <div class="loan_calculator_sort_params">
                <select id="select_loan_calculator_sort_rating">
                    <option class="others_params" value="">маңызды емес</option>
                    <option class="others_params" value="max_sum">максималды сома бойынша</option>
                    <option class="others_params" value="max_term">максималды мерзім бойынша</option>
                    <option class="others_params" value="approval">мақұлдау пайызы бойынша</option>
                </select>
            </div>
        </div>
        <?php
            $i = 0;
            foreach ($mfo as $item) :
            $i++;
            ?>
        <div class="offer-item">
            <div class="offer-container">
                <div class="offer-firstloan"><?= $i ?></div>
                <div class="offer-content">
                    <div class="offer-row">
                        <div class="offer-logo">
                            <a href="<?= Url::toRoute(['mfo/view', 'url' => $item->url]) ?>">
                                <noscript>
                                    <img alt="<?= $item->mfo_name; ?>" src="<?= $item->logo; ?>">
                                </noscript>
                                <img class="lazyloaded" alt="<?= $item->mfo_name; ?>" src="<?= $item->logo; ?>" data-src="<?= $item->logo; ?>">
                            </a>
                        </div>
                    </div>
                    <div class="offer-row">
                        <div class="offer-row-col">Мерзімі/<br>
                            <div class="offer-row-col-weight">күн</div>
                        </div>
                        <div class="offer-col"><?= $item->srok ?></div>
                    </div>
                    <div class="offer-row">
                        <div class="offer-row-col">Макс. сомасы/<br>
                            <div class="offer-row-col-weight">теңге</div>
                        </div>
                        <div class="offer-col"><?= $item->max_sum_calc ?></div>
                    </div>
                    <div class="offer-row">
                        <div class="offer-row-col">Бір күндік<br>
                            <div class="offer-row-col-weight">мөлшерлемесі</div>
                        </div>
                        <div class="offer-col"><?= $item->stavka ?></div>
                    </div>
                    <div class="offer-row">
                        <div class="offer-row-col">Мақұлдау:</div>
                        <div class="offer-col"><?= $item->odobrenie ?> %</div>
                    </div>
                    <div class="offer-row">
                        <div class="offer-row-col">Қарау/<br>
                            <div class="offer-row-col-weight">минут</div>
                        </div>
                        <div class="offer-col"><?= $item->rasmotrenie ?></div>
                    </div>
                    <div class="offer-row">
                        <div class="offer-row-col">Алу:</div>
                        <div class="offer-col">
                            <noscript>
                                <img src="img/2016/08/all.png">
                            </noscript>
                            <img class="lazyloaded" src="img/2016/08/all.png" data-src="img/2016/08/all.png">
                        </div>
                    </div>
                </div>
                <div class="offer-footer">
                    <div class="offer-footer-item">
                        <div class="mfo_card_info_rating_data">
                            <div class="rating__stars" style="width:90%">
                            </div>
                            <div class="rating__val"><?= $item->rating ?></div>
                        </div>
                    </div>
                    <div class="offer-footer-item offer-zaim-calc mfo_card_vert_info_link_creditplus">Қарыз сомасы 50000 тг + комиссия за 7 дней 35 тг = 50035 Төлеуге</div>
                    <div class="offer-footer-item offer-btn">
                        <a data-mfo="creditplus" href="<?= $item->link_offer ?>" class="offers-compare-btn"></a>
                        <a href="<?= $item->link_offer ?>" class="offers-card-btn">Ақшаны алу</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;?>
        <a href="https://smartzaim.kz/rating/?utm_source=kz.smartzaim.kz" class="offers-show-all">Показать еще</a>
    </div>
</section>

<?= Rating::widget(); ?>

