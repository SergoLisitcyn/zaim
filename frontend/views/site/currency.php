<?php
$this->title = 'Валюта бағамы — Smartzaim.kz';
$this->registerMetaTag(['name' => 'description','content' => 'Қазақстандағы валюталардың өзекті бағамын біліңіз']);
?>
<style>
    .text-medium {
        font-size: 18px;
        font-weight: 400;
        line-height: 27px;
    }
    .section__title {
        display: flex;
        margin-bottom: 22px;
    }
    .exchange__rates_content {
        display: flex;
    }
    .exchange_rates {
        width: 50%;
    }
    .currency__columns.head {
        color: #7d7d7d;
        padding-bottom: 6px;
    }

    .currency__columns {
        display: flex;
        position: relative;
        margin-bottom: 16px;
        padding-bottom: 13px;
    }
    .currency__columns:before {
        content: "";
        height: 1px;
        background: #d8d8d8;
        width: 93%;
        position: absolute;
        bottom: 0;
    }
    .currency__column {
        display: flex;
        width: 50%;
        font-size: 24px;
        font-weight: 400;
        line-height: 36px;
    }
    .currency__title {
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
    }

</style>
<section class="content plr" style="background: #f7f7f7;margin-top: 0">
    <div class="content-wrap limit-width">
        <div class="content-row">
            <div class="content-box" style="width: 100%;">
                <div class="content-info" style="background: #f7f7f7;">
                    <div class="pages">
                        <h1>Валюта бағамы</h1>
                        <div class="pages-content">
                            <div class="exchange_rates_wrapper">
                                <div class="section__title text-medium">Бағам: <?php echo $day[date("w")] ?>, <?php echo date('d');?> <?php echo $month[date('m')] ?></div>
                                <div class="exchange__rates_content">
                                    <div class="exchange_rates">
                                        <div class="currency__columns head">
                                            <div class="currency__column">
                                                <div class="currency__title">Валюта</div>
                                            </div>
                                            <div class="currency__column">
                                                <div class="currency__title">Бағам</div>
                                            </div>
                                        </div>
                                        <div class="currency__columns">
                                            <div class="currency__column">
                                                <div class="currency__title">USD/KZT</div>
                                            </div>
                                            <div class="currency__column">
                                                <div class="currency__group">
                                                    <div class="currency__value up"><?= $valutes['USD'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="currency__columns">
                                            <div class="currency__column">
                                                <div class="currency__title">EUR/KZT</div>
                                            </div>
                                            <div class="currency__column">
                                                <div class="currency__group">
                                                    <div class="currency__value up"><?= $valutes['EUR'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="currency__columns">
                                            <div class="currency__column">
                                                <div class="currency__title">RUB/KZT</div>
                                            </div>
                                            <div class="currency__column">
                                                <div class="currency__group">
                                                    <div class="currency__value up"><?= $valutes['RUB'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="currency__columns">
                                            <div class="currency__column">
                                                <div class="currency__title">CNY/KZT</div>
                                            </div>
                                            <div class="currency__column">
                                                <div class="currency__group">
                                                    <div class="currency__value up"><?= $valutes['CNY'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="currency__columns">
                                            <div class="currency__column">
                                                <div class="currency__title">KGS/KZT</div>
                                            </div>
                                            <div class="currency__column">
                                                <div class="currency__group">
                                                    <div class="currency__value up"><?= $valutes['KGS'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="currency__columns">
                                            <div class="currency__column">
                                                <div class="currency__title">GBP/KZT</div>
                                            </div>
                                            <div class="currency__column">
                                                <div class="currency__group">
                                                    <div class="currency__value up"><?= $valutes['GBP'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>