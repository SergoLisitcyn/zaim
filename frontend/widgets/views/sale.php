<section class="aktsii plr">
    <div class="aktsii-wrap limit-width">
        <h2 class="aktsii__title">Акциялар</h2>
        <div class="aktsii-list__container">
            <?php foreach ($sales as $sale) : ?>
            <div class="aktsii-list__item">
                <div class="aktsii-item">
                    <a href="#" class="aktsii-item__link">
                        <div class="aktsii-item__img-wrap">
                            <a href="<?= \yii\helpers\Url::toRoute(['sale/list', 'url' => $sale->url]) ?>">
                            <img src="<?= $sale->image ?>" data-lazy-type="image" data-lazy-src="<?= $sale->image ?>" alt="" class="lazy aktsii-item__img lazy-loaded">
                            </a>
                            <noscript>
                                <img src="<?= $sale->image ?>" alt="" class="aktsii-item__img">
                            </noscript>
                        </div>
                        <a href="<?= \yii\helpers\Url::toRoute(['sale/list', 'url' => $sale->url]) ?>">
                        <h3 class="aktsii-item__title"><?= $sale->name ?></h3>
                        </a>
                    </a>
                    <div class="aktsii-item__date">с <?= date("d.m.Y", strtotime($sale->srok_ot)) ?> по <?= date("d.m.Y", strtotime($sale->srok_do)) ?></div>
                    <a href="<?= \yii\helpers\Url::toRoute(['sale/list', 'url' => $sale->url]) ?>" class="aktsii-item__more">Нақтырақ</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <a href="/aktsii" class="aktsii__btn">Барлық акциялар</a>
    </div>
</section>