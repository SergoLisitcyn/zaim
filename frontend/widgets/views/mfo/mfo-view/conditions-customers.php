<?php if($model->srok_new_client) : ?>
<div class="mfo-stat-container">
    <div class="firstloan">
        <div class="firstloan-col">
            <div class="offer-row-col">Мерзімі/күн</div>
            <div class="offer-col"><?= $model->srok_new_client?></div>
        </div>
        <div class="firstloan-col">
            <div class="offer-row-col">Макс. сомасы/теңге</div>
            <div class="offer-col"><?= $model->sum_new_client?></div>
        </div>
        <div class="firstloan-col">
            <div class="offer-row-col">Бір күндік мөлшерлемесі</div>
            <div class="offer-col"><?= $model->stavka_new_client?></div>
        </div>
        <div class="firstloan-col">
            <div class="offer-row-col">Мақұлдау:</div>
            <div class="offer-col"><?= $model->odobrenie_new_client?>%</div>
        </div>
        <div class="firstloan-col">
            <div class="offer-row-col">Қарау/минут</div>
            <div class="offer-col"><?= $model->rasmotrenie_new_client?></div>
        </div>
        <div class="firstloan-col">
            <div class="offer-row-col">Алу:</div>
            <div class="offer-col">
                <noscript>
                    <img	src="/img/2016/08/all.png">
                </noscript>
                <img class="lazyloaded" src="/img/2016/08/all.png" data-src="/img/2016/08/all.png">
            </div>
        </div>
    </div>
    <div class="mfo-footer">
        <a class="mfo-footer mfo-show-rule" href="#" style="text-decoration: none">Бар клиенттерге арналған шарттарды көрсету ></a>
        <a class="mfo-footer-item mfo-card-btn" href="<?= $model->link_offer ?>" target="_blank">Ақшаны алу</a>
    </div>
    <div class="conexist">
        <div class="firstloan">
            <div class="firstloan-col">
                <div class="offer-row-col">Мерзімі/күн</div>
                <div class="offer-col"><?= $model->srok_for_client ?></div>
            </div>
            <div class="firstloan-col">
                <div class="offer-row-col">Макс. сомасы/теңге</div>
                <div class="offer-col"><?= $model->sum_for_client ?></div>
            </div>
            <div class="firstloan-col">
                <div class="offer-row-col">Бір күндік мөлшерлемесі</div>
                <div class="offer-col"><?= $model->stavka_for_client ?></div>
            </div>
            <div class="firstloan-col">
                <div class="offer-row-col">Мақұлдау:</div>
                <div class="offer-col"><?= $model->odobrenie_for_client ?>%</div>
            </div>
            <div class="firstloan-col">
                <div class="offer-row-col">Қарау/минут</div>
                <div class="offer-col"><?= $model->rasmotrenie_for_client ?></div>
            </div>
            <div class="firstloan-col">
                <div class="offer-row-col">Алу:</div>
                <div class="offer-col">
                    <noscript>
                        <img	src="/img/2016/08/all.png">
                    </noscript>
                    <img class="lazyloaded" src="/img/2016/08/all.png" data-src="/img/2016/08/all.png">
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>