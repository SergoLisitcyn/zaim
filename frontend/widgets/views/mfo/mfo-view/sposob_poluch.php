<div class="content-text-items">
    <?php if($data['sposob_get']['bank_card']) : ?>
        <div class="content-text-item">
            <div class="content-text-item-img">
                <img src="/img/svg-icons/card1.svg" data-src="/img/svg-icons/card1.svg" alt="<?= $dataMfo['mfo']['sposob_get']['bank_card'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_get']['bank_card'] ?></span>
        </div>
    <?php endif; ?>
    <?php if($data['sposob_get']['iban']) : ?>
        <div class="content-text-item">
            <div class="content-text-item-img">
                <img src="/img/svg-icons/card2.svg" data-src="/img/svg-icons/card2.svg" alt="<?= $dataMfo['mfo']['sposob_get']['iban'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_get']['iban'] ?></span>
        </div>
    <?php endif; ?>
    <?php if($data['sposob_get']['exceptions']) : ?>
        <div class="content-text-item">
            <div class="content-text-item-img">
                <img src="/img/svg-icons/exceptions.svg" data-src="/img/svg-icons/exceptions.svg" alt="<?= $dataMfo['mfo']['sposob_get']['exceptions'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_get']['exceptions'] ?></span>
        </div>
    <?php endif; ?>
    <?php if($data['sposob_get']['kazpost']) : ?>
        <div class="content-text-item">
            <div class="content-text-item-img w100">
                <img src="/img/svg-icons/kazpost.svg" data-src="/img/svg-icons/kazpost.svg" alt="<?= $dataMfo['mfo']['sposob_get']['kazpost'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_get']['kazpost'] ?></span>
        </div>
    <?php endif; ?>
    <?php if($data['sposob_get']['cash']) : ?>
        <div class="content-text-item">
            <div class="content-text-item-img">
                <img src="/img/svg-icons/cash.svg" data-src="/img/svg-icons/cash.svg" alt="<?= $dataMfo['mfo']['sposob_get']['cash'] ?>">
            </div>
            <span><?= $dataMfo['mfo']['sposob_get']['cash'] ?></span>
        </div>
    <?php endif; ?>
</div>