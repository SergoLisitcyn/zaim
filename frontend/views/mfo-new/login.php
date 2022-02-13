<?php
use \yii\helpers\Url;
use \frontend\widgets\MfoViewWidget;
if(isset($data['seo']['login_title']) and !empty($data['seo']['login_title'])) {
    $this->title = $data['seo']['login_title'];
} else {
    $this->title = $model->name;
}
if(isset($data['seo']['login_description']) and !empty($data['seo']['login_description'])) {
    $this->registerMetaTag(['name' => 'description','content' => $data['seo']['login_description']]);
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
                Личный кабинет
            </li>
        </ul>
    </div>
    <img class="main-title__img bank-main-title__img" src="/img/uncode-child/bg-sm.png" alt="">
</section>


<section class="content plr">
    <div class="content-wrap limit-width">
        <div class="content-row">
            <div class="content-box">
                <div class="content-info">
                    <!--  Навигация-->
                    <?= MfoViewWidget::widget(['type' => 'navigation','model' => $model,'data' => $data,'navigation' => 'login']) ?>
                    <div class="content-main-info">
                        <div class="content-main-info__item">
                            <?php if($data['seo']['login_h1']) :  ?>
                                <h1><?= $data['seo']['login_h1'] ?></h1>
                            <?php endif; ?>
                            <div class="blocks-content-text mt35">
                                <div class="content-text-items">
                                    <?php if($data['login']['phone']) :  ?>
                                    <div class="content-text-item">
                                        <div class="content-text-item-img">
                                            <img src="/img/svg-icons/mobile.svg" alt="<?= $dataMfo['mfo']['login']['phone'] ?>">
                                        </div>
                                        <span><?= $dataMfo['mfo']['login']['phone'] ?></span>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['login']['email']) :  ?>
                                    <div class="content-text-item">
                                        <div class="content-text-item-img">
                                            <img src="/img/svg-icons/mail.svg" alt="<?= $dataMfo['mfo']['login']['email'] ?>">
                                        </div>
                                        <span><?= $dataMfo['mfo']['login']['email'] ?></span>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($data['login']['inn']) :  ?>
                                    <div class="content-text-item">
                                        <div class="content-text-item-img">
                                            <img src="/img/svg-icons/inn.svg" alt="<?= $dataMfo['mfo']['login']['inn'] ?>">
                                        </div>
                                        <span><?= $dataMfo['mfo']['login']['inn'] ?></span>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if($data['login']['lk']) :  ?>
                            <a href="https://<?= $data['login']['lk'] ?>" class="content-main-info__button"><?= $dataMfo['mfo']['login']['lk'] ?></a>
                            <?php endif; ?>
                            <div class="content-main-info__content">
                                <?= $model->login_content ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!--  SideBar -->
            <?= MfoViewWidget::widget(['type' => 'sideBar','model' => $model,'data' => $data,'action' => '/mfo-new/'.$model->url.'/login']) ?>
        </div>
    </div>
</section>
