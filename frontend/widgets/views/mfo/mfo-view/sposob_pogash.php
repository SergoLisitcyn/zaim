<?php
use \yii\helpers\Url;
?>
<div class="content-text-items">
    <?php if($data['sposob_repayment']['online_bank_card']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'online_bank_card']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img">
                <img src="/img/svg-icons/repayment/pay.svg" data-src="/img/svg-icons/repayment/pay.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['online_bank_card'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_repayment']['online_bank_card'] ?></span>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['sposob_repayment']['bank_transfer']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'bank_transfer']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img">
                <img src="/img/svg-icons/repayment/transfer.svg" data-src="/img/svg-icons/repayment/transfer.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['bank_transfer'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_repayment']['bank_transfer'] ?></span>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['sposob_repayment']['kazpost']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'kazpost']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img w100">
                <img src="/img/svg-icons/repayment/kazpochta.svg" data-src="/img/svg-icons/repayment/kazpochta.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['kazpost'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_repayment']['kazpost'] ?></span>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['sposob_repayment']['qiwi_terminals']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'qiwi_terminals']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img w100">
                <img src="/img/svg-icons/repayment/qiwi-t.svg" data-src="/img/svg-icons/repayment/qiwi-t.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['qiwi_terminals'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_repayment']['qiwi_terminals'] ?></span>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['sposob_repayment']['kassa24_terminals']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'kassa24_terminals']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img">
                <img src="/img/svg-icons/repayment/kassa24.png" data-src="/img/svg-icons/repayment/kassa24.png" alt="<?= $dataMfo['mfo']['sposob_repayment']['kassa24_terminals'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_repayment']['kassa24_terminals'] ?></span>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['sposob_repayment']['qiwi_wallet']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'qiwi_wallet']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img w100">
                <img src="/img/svg-icons/repayment/qiwi-w.svg" data-src="/img/svg-icons/repayment/qiwi-w.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['qiwi_wallet'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_repayment']['qiwi_wallet'] ?></span>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['sposob_repayment']['cyberplat']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'cyberplat']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img">
                <img src="/img/svg-icons/repayment/cyberplat.png" data-src="/img/svg-icons/repayment/cyberplat.png" alt="<?= $dataMfo['mfo']['sposob_repayment']['cyberplat'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_repayment']['cyberplat'] ?></span>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['sposob_repayment']['office']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'office']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img">
                <img src="/img/svg-icons/repayment/in-office.svg" data-src="/img/svg-icons/repayment/in-office.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['office'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_repayment']['office'] ?></span>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['sposob_repayment']['jysan']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'jysan']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img w100">
                <img src="/img/svg-icons/repayment/heartland-bank.jpg" data-src="/img/svg-icons/repayment/heartland-bank.jpg" alt="<?= $dataMfo['mfo']['sposob_repayment']['jysan'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_repayment']['jysan'] ?></span>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['sposob_repayment']['halyk_bank']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'halyk_bank']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img w100">
                <img src="/img/svg-icons/repayment/halyk-bank.svg" data-src="/img/svg-icons/repayment/halyk-bank.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['halyk_bank'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_repayment']['halyk_bank'] ?></span>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['sposob_repayment']['kassa24_lk']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'kassa24_lk']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img">
                <img src="/img/svg-icons/repayment/personal-cash.png" data-src="/img/svg-icons/repayment/personal-cash.png" alt="<?= $dataMfo['mfo']['sposob_repayment']['kassa24_lk'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_repayment']['kassa24_lk'] ?></span>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['sposob_repayment']['homebank']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'homebank']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img">
                <img src="/img/svg-icons/repayment/internet-banking.png" data-src="/img/svg-icons/repayment/internet-banking.png" alt="<?= $dataMfo['mfo']['sposob_repayment']['homebank'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_repayment']['homebank'] ?></span>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['sposob_repayment']['qr_code']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'qr_code']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img">
                <img src="/img/svg-icons/repayment/qr-code.svg" data-src="/img/svg-icons/repayment/qr-code.svg" alt="<?= $dataMfo['mfo']['sposob_repayment']['qr_code'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_repayment']['qr_code'] ?></span>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['sposob_repayment']['mobile_halyk_bank']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'mobile_halyk_bank']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img">
                <img src="/img/svg-icons/repayment/app-halyk-bank.png" data-src="/img/svg-icons/repayment/app-halyk-bank.png" alt="<?= $dataMfo['mfo']['sposob_repayment']['mobile_halyk_bank'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_repayment']['mobile_halyk_bank'] ?></span>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['sposob_repayment']['plus24']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'plus24']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img">
                <img src="/img/svg-icons/repayment/app-plus24.png" data-src="/img/svg-icons/repayment/app-plus24.png" alt="<?= $dataMfo['mfo']['sposob_repayment']['plus24'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_repayment']['plus24'] ?></span>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['sposob_repayment']['money_market']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_repayment', 'filter' => 'money_market']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img">
                <img src="/img/svg-icons/repayment/money-market.png" data-src="/img/svg-icons/repayment/money-market.png" alt="<?= $dataMfo['mfo']['sposob_repayment']['money_market'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_repayment']['money_market'] ?></span>
        </div>
    </a>
    <?php endif; ?>
</div>