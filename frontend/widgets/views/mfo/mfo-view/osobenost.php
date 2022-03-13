<?php
use \yii\helpers\Url;
?>
<div class="mfo-about__feature-images">
    <?php if($data['singularity']['new_customers']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'new_customers']) ?>">
        <div class="mfo-about__feature-images-box">
            <div class="mfo-about__feature-image">
                <img src="/img/svg-icons/features/icon1.svg" alt="<?= $dataMfo['mfo']['singularity']['new_customers'] ?>">
            </div>
            <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['new_customers'] ?></p>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['singularity']['quick_online_application']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'quick_online_application']) ?>">
        <div class="mfo-about__feature-images-box">
            <div class="mfo-about__feature-image">
                <img src="/img/svg-icons/features/icon2.svg" alt="<?= $dataMfo['mfo']['singularity']['quick_online_application'] ?>">
            </div>
            <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['quick_online_application'] ?></p>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['singularity']['round_the_clock']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'round_the_clock']) ?>">
        <div class="mfo-about__feature-images-box">
            <div class="mfo-about__feature-image">
                <img src="/img/svg-icons/features/icon3.svg" alt="<?= $dataMfo['mfo']['singularity']['round_the_clock'] ?>">
            </div>
            <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['round_the_clock'] ?></p>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['singularity']['full_repayment']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'full_repayment']) ?>">
        <div class="mfo-about__feature-images-box">
            <div class="mfo-about__feature-image">
                <img src="/img/svg-icons/features/icon4.svg" alt="<?= $dataMfo['mfo']['singularity']['full_repayment'] ?>">
            </div>
            <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['full_repayment'] ?></p>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['singularity']['partial_repayment']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'partial_repayment']) ?>">
        <div class="mfo-about__feature-images-box">
            <div class="mfo-about__feature-image">
                <img src="/img/svg-icons/features/icon5.svg" alt="<?= $dataMfo['mfo']['singularity']['partial_repayment'] ?>">
            </div>
            <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['partial_repayment'] ?></p>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['singularity']['license_arrfr']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'license_arrfr']) ?>">
        <div class="mfo-about__feature-images-box">
            <div class="mfo-about__feature-image">
                <img src="/img/svg-icons/features/icon6.svg" alt="<?= $dataMfo['mfo']['singularity']['license_arrfr'] ?>">
            </div>
            <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['license_arrfr'] ?></p>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['singularity']['identity_card']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'identity_card']) ?>">
        <div class="mfo-about__feature-images-box">
            <div class="mfo-about__feature-image">
                <img src="/img/svg-icons/features/icon7.svg" alt="<?= $dataMfo['mfo']['singularity']['identity_card'] ?>">
            </div>
            <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['identity_card'] ?></p>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['singularity']['microcredit_without_collateral']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'microcredit_without_collateral']) ?>">
        <div class="mfo-about__feature-images-box">
            <div class="mfo-about__feature-image">
                <img src="/img/svg-icons/features/icon8.svg" alt="<?= $dataMfo['mfo']['singularity']['microcredit_without_collateral'] ?>">
            </div>
            <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['microcredit_without_collateral'] ?></p>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['singularity']['microcredit_without_guarantee']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'microcredit_without_guarantee']) ?>">
        <div class="mfo-about__feature-images-box">
            <div class="mfo-about__feature-image">
                <img src="/img/svg-icons/features/icon9.svg" alt="<?= $dataMfo['mfo']['singularity']['microcredit_without_guarantee'] ?>">
            </div>
            <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['microcredit_without_guarantee'] ?></p>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['singularity']['written']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'written']) ?>">
        <div class="mfo-about__feature-images-box">
            <div class="mfo-about__feature-image">
                <img src="/img/svg-icons/features/icon10.svg" alt="<?= $dataMfo['mfo']['singularity']['written'] ?>">
            </div>
            <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['written'] ?></p>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['singularity']['territory_kz']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'territory_kz']) ?>">
        <div class="mfo-about__feature-images-box">
            <div class="mfo-about__feature-image">
                <img src="/img/svg-icons/features/icon11.svg" alt="<?= $dataMfo['mfo']['singularity']['territory_kz'] ?>">
            </div>
            <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['territory_kz'] ?></p>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['singularity']['loyal']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'loyal']) ?>">
        <div class="mfo-about__feature-images-box">
            <div class="mfo-about__feature-image">
                <img src="/img/svg-icons/features/icon12.svg" alt="<?= $dataMfo['mfo']['singularity']['loyal'] ?>">
            </div>
            <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['loyal'] ?></p>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['singularity']['biometric']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'biometric']) ?>">
        <div class="mfo-about__feature-images-box">
            <div class="mfo-about__feature-image">
                <img src="/img/svg-icons/features/icon13.svg" alt="<?= $dataMfo['mfo']['singularity']['biometric'] ?>">
            </div>
            <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['biometric'] ?></p>
        </div>
    </a>
    <?php endif; ?>
    <?php if($data['singularity']['calculates']) : ?>
    <a href="<?= Url::toRoute(['mfo-new/filter','index' => 'singularity', 'filter' => 'calculates']) ?>">
        <div class="mfo-about__feature-images-box">
            <div class="mfo-about__feature-image">
                <img src="/img/svg-icons/features/icon14.svg" alt="<?= $dataMfo['mfo']['singularity']['calculates'] ?>">
            </div>
            <p class="mfo-about__feature-text"><?= $dataMfo['mfo']['singularity']['calculates'] ?></p>
        </div>
    </a>
    <?php endif; ?>
</div>