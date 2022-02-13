<?php
use \yii\helpers\Url;
use \frontend\widgets\MfoViewWidget;
if(isset($data['seo']['clients_title']) and !empty($data['seo']['clients_title'])) {
    $this->title = $data['seo']['clients_title'];
} else {
    $this->title = $model->name;
}
if(isset($data['seo']['clients_description']) and !empty($data['seo']['clients_description'])) {
    $this->registerMetaTag(['name' => 'description','content' => $data['seo']['clients_description']]);
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
                Клиентская поддержка
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
                    <?= MfoViewWidget::widget(['type' => 'navigation','model' => $model,'data' => $data,'navigation' => 'clients']) ?>
                    <div class="content-main-info__content">
                        <?php if($data['clients']['rules']) : ?>
                        <div class="mfo-report">
                            <div class="mfo-report__block" style="margin-top: 0;">
                                <div class="mfo-report__col" style="align-items: center;">
                                    <h2 class="mfo-about-title info-subtitle"><?= $dataMfo['mfo']['clients']['rules'] ?></h2>
                                    <a href="//<?= $data['clients']['rules']?>" class="mfo-report__link" download target="_blank" rel="nofollow">
                                        <img class="lazyloaded" src="/img/mfo/pdf.png" data-src="/img/mfo/pdf.png" alt="PDF-файл" style="margin-left: 15px">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="mfo-socials">
                            <?php if($data['clients']['faq']) : ?>
                            <a href="//<?= $data['clients']['faq']?>" class="mfo-socials-link" target="_blank" rel="nofollow">
                                <h2 class="mfo-about-title info-subtitle"><?= $dataMfo['mfo']['clients']['faq'] ?></h2>
                            </a>
                            <?php endif; ?>
                            <div class="mfo-socials__block">
                                <?php if($data['clients']['request_call']) : ?>
                                <a href="#" class="mfo-socials__link">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/call.svg" data-src="/img/svg-icons/socials/call.svg" alt="Заказать звонок">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['online_chat']) : ?>
                                <a href="#" class="mfo-socials__link">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/chat.svg" data-src="/img/svg-icons/socials/chat.svg" alt="Онлайн чат">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['whatsApp']) : ?>
                                <a href="#" class="mfo-socials__link">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/whatsapp.svg" data-src="/img/svg-icons/socials/whatsapp.svg" alt="WhatsApp">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['viber']) : ?>
                                <a href="#" class="mfo-socials__link">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/viber.svg" data-src="/img/svg-icons/socials/viber.svg" alt="Viber">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['telegram']) : ?>
                                <a href="#" class="mfo-socials__link">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/telegram.svg" data-src="/img/svg-icons/socials/telegram.svg" alt="Telegram">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['email_consultation']) : ?>
                                <a href="#" class="mfo-socials__link">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/email.svg" data-src="/img/svg-icons/socials/email.svg" alt="Email для консультации">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['call_consultation']) : ?>
                                <a href="#" class="mfo-socials__link">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/consultation.svg" data-src="/img/svg-icons/socials/consultation.svg" alt="Позвонить для консультации">
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if($data['clients']['feedback']) : ?>
                        <div class="mfo-feedback">
                            <a href="//<?= $data['clients']['feedback'] ?>" class="mfo-feedback-link" rel="nofollow" target="_blank">
                                <h2 class="mfo-about-title info-subtitle"><?= $dataMfo['mfo']['clients']['feedback'] ?></h2>
                            </a>
                        </div>
                        <?php endif; ?>
                        <div class="mfo-socials">
                            <h2 class="mfo-about-title info-subtitle">Соцсети:</h2>
                            <div class="mfo-socials__block">
                                <?php if($data['clients']['facebook']) : ?>
                                <a href="//<?= $data['clients']['facebook'] ?>" class="mfo-socials__link" rel="nofollow" target="_blank">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/facebook.svg" data-src="/img/svg-icons/socials/facebook.svg" alt="Facebook">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['vk']) : ?>
                                <a href="//<?= $data['clients']['vk'] ?>" class="mfo-socials__link" rel="nofollow" target="_blank">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/vk.svg" data-src="/img/svg-icons/socials/vk.svg" alt="Vk">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['instagram']) : ?>
                                <a href="//<?= $data['clients']['instagram'] ?>" class="mfo-socials__link" rel="nofollow" target="_blank">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/instagram.svg" data-src="/img/svg-icons/socials/instagram.svg" alt="Instagram">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['twitter']) : ?>
                                <a href="//<?= $data['clients']['twitter'] ?>" class="mfo-socials__link" rel="nofollow" target="_blank">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/twitter.svg" data-src="/img/svg-icons/socials/twitter.svg" alt="Twitter">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['youtube']) : ?>
                                <a href="//<?= $data['clients']['youtube'] ?>" class="mfo-socials__link" rel="nofollow" target="_blank">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/youtube.svg" data-src="/img/svg-icons/socials/youtube.svg" alt="Youtube">
                                </a>
                                <?php endif; ?>
                                <?php if($data['clients']['odnoklasniki']) : ?>
                                <a href="//<?= $data['clients']['odnoklasniki'] ?>" class="mfo-socials__link" rel="nofollow" target="_blank">
                                    <img class="lazyloaded" src="/img/svg-icons/socials/odnoklassniki.svg" data-src="/img/svg-icons/socials/odnoklassniki.svg" alt="Одноклассники">
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Раздел отзывы -->
                <?= MfoViewWidget::widget(['type' => 'reviews','model' => $model,'data' => $data,'reviews' => $reviews, 'reviewsModel' => $reviewsModel,'action' => '/mfo-new/'.$model->url.'/clients']) ?>
            </div>

            <!--  SideBar -->
            <?= MfoViewWidget::widget(['type' => 'sideBar','model' => $model,'data' => $data,'action' => '/mfo-new/'.$model->url.'/clients']) ?>
        </div>
    </div>
</section>
