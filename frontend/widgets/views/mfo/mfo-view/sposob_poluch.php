<?php
use \yii\helpers\Url;
?>
<div class="content-text-items">
    <?php if($data['sposob_get']['bank_card']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_get', 'filter' => 'bank_card']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img">
                <img src="/img/svg-icons/card1.svg" data-src="/img/svg-icons/card1.svg" alt="<?= $dataMfo['mfo']['sposob_get']['bank_card'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_get']['bank_card'] ?></span>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['sposob_get']['iban']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_get', 'filter' => 'iban']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img">
                <img src="/img/svg-icons/card2.svg" data-src="/img/svg-icons/card2.svg" alt="<?= $dataMfo['mfo']['sposob_get']['iban'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_get']['iban'] ?></span>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['sposob_get']['exceptions']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_get', 'filter' => 'exceptions']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img">
                <img src="/img/svg-icons/exceptions.svg" data-src="/img/svg-icons/exceptions.svg" alt="<?= $dataMfo['mfo']['sposob_get']['exceptions'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_get']['exceptions'] ?></span>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['sposob_get']['kazpost']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_get', 'filter' => 'kazpost']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img w100">
                <img src="/img/svg-icons/kazpost.svg" data-src="/img/svg-icons/kazpost.svg" alt="<?= $dataMfo['mfo']['sposob_get']['kazpost'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_get']['kazpost'] ?></span>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['sposob_get']['cash']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'sposob_get', 'filter' => 'cash']) ?>">
        <div class="content-text-item">
            <div class="content-text-item-img">
                <img src="/img/svg-icons/cash.svg" data-src="/img/svg-icons/cash.svg" alt="<?= $dataMfo['mfo']['sposob_get']['cash'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_get']['cash'] ?></span>
        </div>
    </a>
    <?php endif; ?>
</div>