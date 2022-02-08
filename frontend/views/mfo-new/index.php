<?php

use \yii\helpers\Url;


$this->title = 'Mfo News';
?>
<section class="offers plr bank-offers">
    <div class="offers-wrap limit-width">
        <div class="offers__items">
            <?php foreach ($mfo as $item) : ?>
            <div class="mfo_card" style="min-height: 40px">
                <div class="mfo_card_company-name">
                    <a href="<?= Url::toRoute(['mfo-new/view', 'url' => $item->url]) ?>"><?= $item->mfo_name ?></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
