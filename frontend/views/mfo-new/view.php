<?php

use common\models\Mfo;
use \yii\helpers\Url;
use \frontend\widgets\MfoViewWidget;
use yii\web\YiiAsset;

/* @var $this yii\web\View */
/* @var $model common\models\MfoNew */

if(isset($data['seo']['title']) and !empty($data['seo']['title'])) {
    $this->title = $data['seo']['title'];
} else {
    $this->title = $model->mfo_name;
}
if(isset($data['seo']['description']) and !empty($data['seo']['description'])) {
    $this->registerMetaTag(['name' => 'description','content' => $data['seo']['description']]);
}

$url = $model->link_offer;
if(isset($data['sale']['url'])){
    $url = 'https://'.$data['sale']['url'];
}
YiiAsset::register($this);
?>
<section class="breadcrumbs plr">
    <div class="breadcrumbs-wrap limit-width">
        <ul class="breadcrumbs__items white-breadcrumbs__items">
            <li>
                <a href="/">Онлайн қарыздар</a>
            </li>
            <li>
                <?= $data['info']['name']?>
            </li>
        </ul>
    </div>
    <img class="main-title__img bank-main-title__img" src="/img/uncode-child/bg-sm.png" alt="">
</section>
<section class="content plr">
    <div class="content-wrap limit-width">
        <div class="content-row">
            <div class="content-box mfo-content-box">
                <div class="content-info">
                    <!--  Навигация-->
                    <?= MfoViewWidget::widget(['type' => 'navigation','model' => $model,'data' => $data,
                        'navigation' => 'view','version' => $version,'clientsPageView' => $clientsPageView])
                    ?>

                    <div class="content-main-info">
                        <div class="content-main-info__item">
                            <?php if($data['seo']['h1']) :  ?>
                            <h1><?= $data['seo']['h1'] ?></h1>
                            <?php endif; ?>
                            <div class="mfo-head__rating">
                                <div class="rating">
                                    <?php $starRate = (100 *  $model->rating)/5;?>
                                    <div class="rating__stars" style="width:<?= $starRate?>%"></div>
                                    <div class="rating__val"><?= $model->rating?></div>
                                </div>
                            </div>
                            <?php if($model->link_offer && $model->status != Mfo::STATUS_DEACTIVATED_LINK) : ?>
                            <div class="mfo-head__text">Ресми сайтқа өту
                                <a href="<?= $model->link_offer ?>" target="_blank"><?= $model->website?></a>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="content-main-info__item">
                            <div class="mfo-head-logo">
                                <?php if($model->logo) : ?>
                                    <a href="<?= $url ?>">
                                        <noscript>
                                            <img	src="<?= $model->logo?>">
                                        </noscript>
                                        <img class="lazyloaded" src="<?= $model->logo?>" data-src="<?= $model->logo?>" alt="<?= $model->mfo_name?>">
                                    </a>
                                <?php endif; ?>
                                <?php if($model->odobrenie) : ?>
                                <div class="mfo-head-approv">Мақұлдау:
                                    <span class="mfo-head-approv-value"><?= $model->odobrenie ?>%</span>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="content-main-info__content">
                        <?php if($data['sale']['active'] == '+') : ?>
                        <div class="sale-block">
                              <div class="sale-block-text">
                                  <?= $data['sale']['text_top'] ?><br>
                                  <?= $data['sale']['text_bottom'] ?>
                              </div>
                            <div class="sale-block-button">
                                <a href="https://<?= $data['sale']['url'] ?>" target="_blank">Ақшаны алу</a>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if($sale) : ?>
                            <div class="akciya-container">
                                <div class="akciya-container-item">
                                    <div class="akciya-caption">Акция!
                                    </div>
                                    <div class="akciya-text"><?= $sale->name?></div>
                                </div>
                                <div class="akciya-container-item">
                                    <div class="akciya-date-wrap">
                                        <div class="akciya-date"><?= date('d.m.Y',strtotime($sale->srok_ot)) ?> - <?= date('d.m.Y',strtotime($sale->srok_do)) ?>
                                            <a href="<?= Url::toRoute(['sale/list', 'url' => $sale->url]) ?>" class="akciya-btn">Нақтырақ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($model->about_company) : ?>
                        <div class="mfo-about">
                            <h2 class="mfo-about-title info-subtitle">Компания туралы</h2>
                            <!--   О компании -->
                            <div class="mfo-about-text">
                                <?= $model->about_company ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!--   Условия для существующих клиентов-->
                        <?= MfoViewWidget::widget(['type' => 'conditions-customers','model' => $model,'data' => $data]) ?>
                        <div class="mfo-about">
                            <!--    Контент  -->
                            <div class="content-text" style="padding: 0">
                                <?= $model->content ?>
                            </div>

                            <!--   Основная информация -->
                            <?= MfoViewWidget::widget(['type' => 'main-info','model' => $model,'data' => $data,'version' => $version]) ?>

                            <!--   Членство в профессиональных объединениях -->
                            <?= MfoViewWidget::widget(['type' => 'associations','model' => $model,'data' => $data,'version' => $version]) ?>
                        </div>

                        <!--   Лицензия -->
                        <div class="mfo-license">
                            <h2 class="mfo-about-title info-subtitle"><?= $dataTag['license'] ?></h2>
                            <?= MfoViewWidget::widget(['type' => 'license','model' => $model,'data' => $data]) ?>
                        </div>

                        <?php if($data['financial_report']['report']) : ?>
                        <div class="mfo-report">
                            <h2 class="mfo-about-title info-subtitle"><?= $dataTag['fin'] ?></h2>
                            <div class="mfo-report__block">
                                <div class="mfo-report__col">
                                    <a href="//<?= $data['financial_report']['report'] ?>" class="mfo-report__link" target="_blank" download>
                                        <img class="lazyloaded" src="/img/mfo/pdf.png" data-src="/img/mfo/pdf.png" alt="PDF-файл">
                                    </a>
                                    <span class="mfo-report__year">Финансовый отчет за <?= $data['financial_report']['year'] ?>г <?= $data['info']['entity'] ?></span>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!--   Разделы/признаки -->
                        <?php
                        if(isset($data['features']) && $data['features']) {
                        $features = array_diff($data['features'], array('', NULL, false));
                            if($features) :
                        ?>
                        <?= MfoViewWidget::widget(['type' => 'features','model' => $model,'data' => $data,'version' => $version]) ?>
                        <?php endif; }?>


                        <?php
                            $conditions = false;
                            $singularity = false;
                            if(isset($data['conditions']) && $data['conditions']) {
                                $conditions = array_diff($data['conditions'], array('', NULL, false));
                            }
                            if(isset($data['singularity']) && $data['singularity']) {
                            $singularity = array_diff($data['singularity'], array('', NULL, false));
                            }
                            if($conditions || $singularity) :
                        ?>
                        <div class="mfo-about">
                            <!--   Условия микрокредитования -->
                            <?php if($conditions)  : ?>
                            <h2 class="mfo-about-title info-subtitle"><?= $dataTag['uslovia_credit'] ?></h2>
                            <?= MfoViewWidget::widget(['type' => 'uslovia','model' => $model,'data' => $data,'version' => $version]) ?>
                            <?php endif; ?>

                            <!--   Особенность-->
                            <?php if($singularity)  : ?>
                            <div class="mfo-about__feature">
                                <h2 class="content-text-title info-subtitle"><?= $dataTag['osobenost'] ?></h2>
                                <?= MfoViewWidget::widget(['type' => 'osobenost','model' => $model,'data' => $data,'version' => $version]) ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                        <!--      Способы получения-->
                        <?php
                        if(isset($data['sposob_get']) && $data['sposob_get']) {
                        $sposob_get = array_diff($data['sposob_get'], array('', NULL, false));
                        if($sposob_get)  : ?>
                        <div class="content-text blocks-content-text">
                            <h2 class="content-text-title info-subtitle"><?= $dataTag['sposob_poluch'] ?></h2>
                            <?= MfoViewWidget::widget(['type' => 'sposob_poluch','model' => $model,'data' => $data,'version' => $version]) ?>
                        </div>
                        <?php endif; }?>
                        <!--      Способы погашения  -->
                        <?php
                        if(isset($data['sposob_repayment']) && $data['sposob_repayment']) {
                        $sposob_repayment = array_diff($data['sposob_repayment'], array('', NULL, false));
                        if($sposob_repayment)  : ?>
                        <div class="content-text blocks-content-text">
                            <h2 class="content-text-title info-subtitle"><?= $dataTag['sposob_pogash'] ?></h2>
                            <?= MfoViewWidget::widget(['type' => 'sposob_pogash','model' => $model,'data' => $data,'version' => $version]) ?>
                        </div>
                        <?php endif; }?>
                        <!--      Реквизиты  -->
                        <div class="mfo-about">
                            <h2 class="mfo-about-title info-subtitle"><?= $dataTag['requisites'] ?></h2>
                            <?= MfoViewWidget::widget(['type' => 'requisites','model' => $model,'data' => $data,'version' => $version]) ?>
                        </div>

                        <div class="mfo-money">
                            <a href="<?= $model->link_offer ?>" class="mfo-money-btn content-text-button" target="_blank">Ақшаны алу</a>
                        </div>

                        <?= MfoViewWidget::widget(['type' => 'offer-recom']) ?>
                        <?php if($model->video) : ?>
                            <div class="mfo-about__video">
                                <h3 class="mfo-about__video-title"><?= $model->mfo_name?> ақшаны қалай алуға болады</h3>
                                <div class="yt-video">
                                    <iframe width="805" height="460" src="<?= $model->video?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
                <!--  Раздел отзывы -->
                <?= MfoViewWidget::widget(['type' => 'reviews','model' => $model,'data' => $data,'reviews' => $reviews, 'reviewsModel' => $reviewsModel,'action' => '/mfo/'.$model->url]) ?>
            </div>

            <!--  SideBar -->
            <?= MfoViewWidget::widget(['type' => 'sideBar','model' => $model,'data' => $data,'action' => '/mfo/'.$model->url]) ?>

        </div>
    </div>
</section>
