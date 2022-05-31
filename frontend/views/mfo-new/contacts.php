<?php

use common\models\Mfo;
use \frontend\widgets\MfoViewWidget;
if(isset($data['seo']['contacts_title']) and !empty($data['seo']['contacts_title'])) {
    $this->title = $data['seo']['contacts_title'];
} else {
    $this->title = $model->mfo_name;
}
if(isset($data['seo']['contacts_description']) and !empty($data['seo']['contacts_description'])) {
    $this->registerMetaTag(['name' => 'description','content' => $data['seo']['contacts_description']]);
}
?>
<section class="breadcrumbs plr">
    <div class="breadcrumbs-wrap limit-width">
        <ul class="breadcrumbs__items white-breadcrumbs__items">
            <li>
                <a href="/">Онлайн қарыздар</a>
            </li>
            <li>
                <a href="/">МФО</a>
            </li>
            <li>
                <a href="/"><?= $data['info']['name']?></a>
            </li>
            <li>
                Контакты
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
                    <?= MfoViewWidget::widget(['type' => 'navigation','model' => $model,'data' => $data,'navigation' => 'contacts','clientsPageView' => $clientsPageView]) ?>
                    <div class="content-main-info__content">
                        <div class="mfo-about bank-mfo-about">
                            <?php if($data['seo']['h1']) :  ?>
                                <h1 style="font-size: 32px;line-height: 41px;font-family: 'Open Sans', sans-serif;">
                                    <?= $data['seo']['h1'] ?>
                                </h1>
                            <?php endif; ?>
                            <div class="mfo-about__table">
                                <div class="mfo-about__columns">
                                    <?php if($data['contacts']['address']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['contacts']['address'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['contacts']['address'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['contacts']['version_ru']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['contacts']['version_ru'] ?>
                                        </div>

                                        <?php if($model->link_offer && $model->status != Mfo::STATUS_DEACTIVATED_LINK) : ?>
                                            <div class="mfo-about__col-right">
<!--                                                <a href="" class="mfo-about__col-right-link">-->
                                                    <?= $data['contacts']['version_ru'] ?>
<!--                                                </a>-->
                                            </div>
                                        <?php else : ?>
                                            <div class="mfo-about__col-right">
<!--                                                <a href="" class="mfo-about__col-right-link">-->
                                                    <?= $data['contacts']['version_ru'] ?>
<!--                                                </a>-->
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['contacts']['version_kz']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['contacts']['version_kz'] ?>
                                        </div>
                                        <?php if($model->link_offer && $model->status != Mfo::STATUS_DEACTIVATED_LINK) : ?>
                                            <div class="mfo-about__col-right">
<!--                                                <a href="" class="mfo-about__col-right-link">-->
                                                    <?= $data['contacts']['version_ru'] ?>
<!--                                                </a>-->
                                            </div>
                                        <?php else : ?>
                                            <div class="mfo-about__col-right">
<!--                                                <a href="" class="mfo-about__col-right-link">-->
                                                    <?= $data['contacts']['version_kz'] ?>
<!--                                                </a>-->
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['contacts']['phone_1']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['contacts']['phone_1'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <a href="tel:<?= $data['contacts']['phone_1'] ?>" class="mfo-about__col-right-link"><?= $data['contacts']['phone_1'] ?></a>
                                            <?php if($data['contacts']['phone_2']) : ?>
                                                ,&nbsp;<a href="tel:<?= $data['contacts']['phone_2'] ?>" class="mfo-about__col-right-link"><?= $data['contacts']['phone_2'] ?></a>
                                            <?php endif; ?>
                                            <?php if($data['contacts']['phone_3']) : ?>
                                                ,&nbsp;<a href="tel:<?= $data['contacts']['phone_3'] ?>" class="mfo-about__col-right-link"><?= $data['contacts']['phone_3'] ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['contacts']['whatsApp']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['contacts']['whatsApp'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <a href="https://wa.me/<?= $data['contacts']['whatsApp'] ?>" target="_blank" rel="nofollow">
                                                <?= $data['contacts']['whatsApp'] ?>
                                            </a>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['contacts']['viber']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['contacts']['viber'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['contacts']['viber'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['contacts']['telegram']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['contacts']['telegram'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <a href="//<?= $data['contacts']['telegram'] ?>" target="_blank" rel="nofollow">
                                                <?= $data['contacts']['telegram'] ?>
                                            </a>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['contacts']['skype']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['contacts']['skype'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <a href="skype:<?= $data['contacts']['skype'] ?>?chat" rel="nofollow" target="_blank">
                                                <?= $data['contacts']['skype'] ?>
                                            </a>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['contacts']['phone_time']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['contacts']['phone_time'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <?= $data['contacts']['phone_time'] ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['contacts']['email_1']) : ?>
                                    <div class="mfo-about__col">
                                        <div class="mfo-about__col-left">
                                            <?= $dataMfo['mfo']['contacts']['email_1'] ?>
                                        </div>
                                        <div class="mfo-about__col-right">
                                            <a href="mailto:<?= $data['contacts']['email_1'] ?>" class="mfo-about__col-right-link" target="_blank" rel="nofollow"><?= $data['contacts']['email_1'] ?></a>
                                            <?php if($data['contacts']['email_2']) : ?>
                                                ,&nbsp;<a href="mailto:<?= $data['contacts']['email_2'] ?>" class="mfo-about__col-right-link" target="_blank" rel="nofollow"> <?= $data['contacts']['email_2'] ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php if($data['contacts']['maps_1']) : ?>
                        <div class="bank-maps">
                            <?= $data['contacts']['maps_1'] ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!--  SideBar -->
            <?= MfoViewWidget::widget(['type' => 'sideBar','model' => $model,'data' => $data,'action' => '/mfo/'.$model->url.'/contacts']) ?>
        </div>
    </div>
</section>
