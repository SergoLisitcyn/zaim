<?php

use frontend\widgets\ContentSideBar;
use \frontend\widgets\Rating;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Акциялар мұрағаты — Smartzaim.kz';
$this->registerMetaTag(['name' => 'description',
    'content' => 'Акциялар мұрағаты — Smartzaim.kz. Кредиттік ұйымдардың аяқталған акциялары мен арнайы ұсыныстары']);
?>
?>
<section class="breadcrumbs plr">
    <div class="breadcrumbs-wrap limit-width">
        <ul class="breadcrumbs__items">
            <li>
                <a href="/">Онлайн қарыздар</a>
            </li>
            <li>
                Акциялар мұрағаты
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
                            <h1>📰 Акциялар мұрағаты</h1>
                            <div class="email_container">
                                <div class="text_top_subscribe_container">Сілтемеге жазылыңыз және акциялар мен арнайы<br> ұсыныстар туралы алғашқылардың бірі болып біліңіз</div>
                                <div class="subscribe-top-item-wrap">
                                    <div	class="subscribe-top-item subscribe-top-item--input-email">
                                        <input	class="subscribe-top-item__control subscribe-top-item__control--input-email"	placeholder="Email"	type="text"	name="email"	value=""></div>
                                    <div	class="subscribe-top-item subscribe-top-item--btn-submit">
                                        <input	class="subscribe-top-item__btn subscribe-top-item__btn--btn-submit"	type="submit"	value="Қол қою">
                                    </div>
                                </div>
                            </div>
                            <div class="aktsii-list__container">
                                <?php foreach ($sales as $sale) :?>
                                <div class="aktsii-list__item">
                                    <div class="aktsii-item">
                                        <a href="<?= Url::toRoute(['sale/list', 'url' => $sale->url]) ?>" class="aktsii-item__link">
                                            <div class="aktsii-item__img-wrap">
                                                <img src="<?= $sale->image ?>" data-lazy-type="image" data-lazy-src="<?= $sale->image ?>" alt="" class="lazy aktsii-item__img lazy-loaded">
                                                <noscript>
                                                    <img src="<?= $sale->image ?>" alt="" class="aktsii-item__img">
                                                </noscript>
                                            </div>
                                            <h3 class="aktsii-item__title"><?= $sale->name ?></h3>
                                        </a>
                                        <div class="aktsii-item__date">с <?= date('d.m.Y',strtotime($sale->srok_ot)) ?> по <?= date('d.m.Y',strtotime($sale->srok_do)) ?></div>
                                        <a href="<?= Url::toRoute(['sale/list', 'url' => $sale->url]) ?>" class="aktsii-item__more">Нақтырақ</a>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="aktsii-arhiv">
                                <a href="/aktsii">Акциялар></a>
                            </div>
<!--                            <ul class="pagination">-->
<!--                                <li>-->
<!--                                    <a href="#" class="page-numbers current">1</a>-->
<!--                                </li>-->
<!--                            </ul>-->
                                                                <div class="div-pagination">
                                                                    <?php echo \yii\widgets\LinkPager::widget([
                                                                      'pagination' => $pages,
                                                                      'prevPageLabel' => false,
                                                                      'nextPageLabel' => false,
                                                                      'activePageCssClass' => 'current' ,
                                                                      'firstPageCssClass' => 'lknflbes',
                                                                      'pageCssClass' => 'page-numbers',
                                                                    ]);
                                                                    ?>
                                                                </div>
                        </div>
                    </div>
                </div>

            </div>

            <?= ContentSideBar::widget(['type' => 'aktsii']); ?>
        </div>
    </div>
</section>
<?= Rating::widget(); ?>
