<?php

use \yii\helpers\Url;
use \yii\web\YiiAsset;
use kartik\rating\StarRating;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use \frontend\widgets\MfoViewWidget;
/* @var $this yii\web\View */
/* @var $model common\models\Mfo */

YiiAsset::register($this);
$this->title = 'Пікірлер о '.$model->mfo_name.' – ең аз пайызбен берілетін онлайн микрокредиттер';
$this->registerMetaTag(['name' => 'description',
    'content' => 'Пікірлер о '.$model->mfo_name.' – ең аз пайызбен берілетін онлайн микрокредиттер.Қазақстанның несие компаниясының нақты клиенттерінен. Онлайн режимде ақша алу тәжірибесі туралы пайдалы ақпарат']);?>
<section class="breadcrumbs plr">
    <div class="breadcrumbs-wrap limit-width">
        <ul class="breadcrumbs__items">
            <li>
                <a href="/">Онлайн қарыздар</a>
            </li>
            <li>
                <a href="<?= Url::toRoute(['mfo-new/view', 'url' => $model->url]) ?>"><?= $model->mfo_name ?></a>
            </li>
            <li>
                Пікірлер
            </li>
        </ul>
    </div>
</section>


<section class="content plr">
    <div class="content-wrap limit-width">
        <div class="content-row">
            <div class="content-box">
                <div class="content-info">
                    <!--  Навигация-->
                    <?= MfoViewWidget::widget(['type' => 'navigation','model' => $model,'data' => $data,'navigation' => 'reviews','clientsPageView' => $clientsPageView]) ?>
                    <div class="content-main-info">
                        <div class="content-main-info__item">
<!--                            <h1 style="color: #028ab4">Пікірлер о	--><?php //echo $mfo->mfo_name ?><!--</h1>-->
                            <h1 style="color: #028ab4"><?= $model->mfo_name?> туралы пікірлер</h1>

                            <a href="<?= $model->link_offer ?>"  target="_blank" class="content-main-info__button" style="background: #fda729;">Ақшаны алу</a>

                            <!--  Раздел отзывы -->
                            <?= MfoViewWidget::widget(['type' => 'reviews','model' => $model,'data' => $data,'reviews' => $reviews, 'reviewsModel' => $reviewsModel,'action' => '/mfo/'.$model->url.'/reviews']) ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--  SideBar -->
            <?= MfoViewWidget::widget(['type' => 'sideBar','model' => $model,'data' => $data,'action' => '/mfo/'.$model->url.'/reviews']) ?>
        </div>
    </div>
</section>
