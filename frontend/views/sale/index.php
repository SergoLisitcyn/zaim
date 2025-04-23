<?php

use frontend\widgets\ContentSideBar;
use \frontend\widgets\Rating;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Акциялар - smartzaim.kz';
$this->registerMetaTag(['name' => 'description',
    'content' => '➤Акциялар. Сілтемеге жазылыңыз акциялар мен арнайы ұсыныстар туралы алғашқылардың бірі болып біліңізツ']);
?>
<section class="breadcrumbs plr">
    <div class="breadcrumbs-wrap limit-width">
        <ul class="breadcrumbs__items">
            <li>
                <a href="/">Онлайн қарыздар</a>
            </li>
            <li>
                Акциялар
            </li>
        </ul>
    </div>
</section>


<section class="content plr">
    <div class="content-wrap limit-width">
        <div class="content-row">
            <div class="content-box">
                <div class="content-info">
                    <div class="content-main-info">
                        <div class="content-main-info__item">
                            <h1>📰 Акциялар</h1>
<!--                            <div class="email_container">-->
<!--                                <div class="text_top_subscribe_container">Сілтемеге жазылыңыз және акциялар мен арнайы<br> ұсыныстар туралы алғашқылардың бірі болып біліңіз</div>-->
<!--                                <div class="subscribe-top-item-wrap">-->
<!--                                    <div	class="subscribe-top-item subscribe-top-item--input-email">-->
<!--                                        <input	class="subscribe-top-item__control subscribe-top-item__control--input-email"	placeholder="Email"	type="text"	name="email"	value=""></div>-->
<!--                                    <div	class="subscribe-top-item subscribe-top-item--btn-submit">-->
<!--                                        <input	class="subscribe-top-item__btn subscribe-top-item__btn--btn-submit"	type="submit"	value="Қол қою">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="aktsii-list__container">
                                <?php foreach ($sales as $sale) :?>
                                <div class="aktsii-list__item">
                                    <div class="aktsii-item">
                                        <a href="<?= Url::toRoute(['sale/list', 'url' => $sale->url]) ?>" class="aktsii-item__link">
                                            <div class="aktsii-item__img-wrap">
                                                <a href="<?= Url::toRoute(['sale/list', 'url' => $sale->url]) ?>">
                                                    <img src="<?= $sale->image ?>" data-lazy-type="image" data-lazy-src="<?= $sale->image ?>" alt="<?= $sale->name ?>" class="lazy aktsii-item__img lazy-loaded"  style="opacity: 1;">
                                                </a>
                                                <noscript>
                                                    <img src="<?= $sale->image ?>" alt="<?= $sale->name ?>" class="aktsii-item__img"  style="opacity: 1;">
                                                </noscript>
                                            </div>
                                            <a href="<?= Url::toRoute(['sale/list', 'url' => $sale->url]) ?>">
                                            <h3 class="aktsii-item__title"><?= $sale->name ?></h3>
                                            </a>
                                        </a>
                                        <div class="aktsii-item__date">с <?= date('d.m.Y',strtotime($sale->srok_ot)) ?> по <?= date('d.m.Y',strtotime($sale->srok_do)) ?></div>
                                        <a href="<?= Url::toRoute(['sale/list', 'url' => $sale->url]) ?>" class="aktsii-item__more">Нақтырақ</a>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="aktsii-arhiv">
                                <a href="aktsii/arhiv">Акциялар мұрағаты >></a>
                            </div>
                            <ul class="pagination">
                                <li>
                                    <a href="#" class="page-numbers current">1</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <?= ContentSideBar::widget(['type' => 'aktsii']); ?>

        </div>
    </div>
</section>
<?= Rating::widget(); ?>
