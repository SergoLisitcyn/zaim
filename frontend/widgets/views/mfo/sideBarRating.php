<?php
use \yii\helpers\Url;
?>
<div class="mfo_card">
    <div class="mfo_card__title">Қарыз алушылар рейтингі</div>
    <div	class="aside-rating aside-rating-mfo">
        <?php foreach ($rating as $item ) : ?>
            <div class="aside-rating-mfo-col">
                <div class="aside-rating-mfo-item">
                    <a	href="<?= Url::toRoute(['mfo-new/view', 'url' => $item->url]) ?>">
                        <noscript>
                            <img	src="<?= $item->logo; ?>">
                        </noscript>
                        <img	class="lazyload"	src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20%20%22%3E%3C/svg%3E'	data-src="<?= $item->logo; ?>"	style="width: 110px;">
                    </a>
                </div>
                <div class="aside-rating-mfo-item">
                    <a	href="<?= Url::toRoute(['mfo-new/view', 'url' => $item->url]) ?>">
                        <div	class="rating rating-wraps">
                            <div class="rating-box">
                                <div class="rating__stars"	style="width:87%"></div>
                                <div	class="rating__val"><?= $item->rating ?></div>
                            </div>
                            <!--                            <div	class="aside-rating-mfo__rev">Нақтырақ:	177</div>-->
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="mfo_card__info">
        <a href="/">
            <div class="mfo_card_button">Басқа қарызды таңдау</div>
        </a>
    </div>
</div>