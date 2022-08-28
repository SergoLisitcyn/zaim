<?php

use common\models\Mfo;
use \frontend\widgets\MfoViewWidget;
if(isset($data['seo']['clients_title']) and !empty($data['seo']['clients_title'])) {
    $this->title = $data['seo']['clients_title'];
} else {
    $this->title = $model->mfo_name;
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
                <a href="/"><?= $data['info']['name'] ?></a>
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
                    <?= MfoViewWidget::widget(['type' => 'navigation','model' => $model,'data' => $data,'navigation' => 'clients','clientsPageView' => $clientsPageView]) ?>
                    <div class="content-main-info__content">
                        <div class="mfo-clients">
                            <?php if($data['seo']['h1']) :  ?>
                                <h1 style="font-size: 32px;line-height: 41px;font-family: 'Open Sans', sans-serif;">
                                    Жедел желі <?=  $data['seo']['h1'] ?>
                                </h1>
                            <?php endif; ?>
                            <?php if($data['clients']['rules']) : ?>
                            <div class="mfo-clients__column mfo-clients-column">
                                <div class="mfo-clients-column__col">
                                    <div class="mfo-clients-column__title"><?= $dataMfo['mfo']['clients']['rules'] ?></div>
                                </div>
                                <div class="mfo-clients-column__col">
                                    <div class="mfo-clients__file">
                                        <a href="//<?= $data['clients']['rules']?>" class="mfo-clients__file-link"  download target="_blank" rel="nofollow">
                                            <img class="lazyloaded" src="/img/mfo/pdf.png" data-src="/img/mfo/pdf.png" alt="PDF-файл">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php if($data['clients']['faq']) : ?>
                                <div class="mfo-clients__column mfo-clients-column">
                                    <div class="mfo-clients-column__col">
                                        <div class="mfo-clients-column__title"><?= $dataMfo['mfo']['clients']['faq'] ?></div>
                                    </div>
                                    <div class="mfo-clients-column__col">
                                        <div class="mfo-clients__file">
                                            <a href="//<?= $data['clients']['faq']?>" class="mfo-clients__file-link" rel="nofollow">
                                                <?= $data['clients']['faq'] ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="mfo-clients__column mfo-clients-column">
                                <div class="mfo-clients-column__col">
                                    <div class="mfo-clients-column__title">Свяжитесь с нами:</div>
                                </div>
                                <div class="mfo-clients-column__col">
                                    <div class="mfo-clients-column__social mfo-clients-column-social">
                                        <ul class="mfo-clients-column-social__list">
                                            <?php if($data['clients']['request_call']) : ?>
                                            <li class="mfo-clients-column-social__list-item">
                                                <a class="mfo-clients-column-social__list-link">
                                                    <img class="mfo-clients-column-social__list-icon lazyloaded" src="/img/svg-icons/socials/call.svg" data-src="img/svg-icons/socials/call.svg" alt="Заказать звонок">
                                                    <span class="mfo-clients-column-social__list-text" style="text-decoration: none;">
                                                        Можно заказать обратный звонок
                                                    </span>
                                                </a>
                                            </li>
                                            <?php endif; ?>
<!--                                            --><?php //if($data['clients']['whatsApp']) : ?>
                                            <?php if($data['contacts']['whatsApp']) : ?>
                                            <li class="mfo-clients-column-social__list-item">
                                                <a href="https://wa.me/<?= $data['contacts']['whatsApp'] ?>" class="mfo-clients-column-social__list-link" target="_blank" rel="nofollow">
                                                    <img class="mfo-clients-column-social__list-icon lazyloaded" src="/img/svg-icons/socials/whatsapp.svg" data-src="img/svg-icons/socials/whatsapp.svg" alt="WhatsApp">
                                                    <span class="mfo-clients-column-social__list-text"><?= $data['contacts']['whatsApp'] ?></span>
                                                </a>
                                            </li>
                                            <?php endif; ?>
<!--                                            --><?php //if($data['clients']['telegram']) : ?>
                                            <?php if($data['contacts']['telegram']) : ?>
                                            <li class="mfo-clients-column-social__list-item">
                                                <a href="//<?= $data['contacts']['telegram'] ?>" class="mfo-clients-column-social__list-link" target="_blank" rel="nofollow">
                                                    <img class="mfo-clients-column-social__list-icon lazyloaded" src="/img/svg-icons/socials/telegram.svg" data-src="img/svg-icons/socials/telegram.svg" alt="Telegram">
                                                    <span class="mfo-clients-column-social__list-text"><?= $data['contacts']['telegram'] ?></span>
                                                </a>
                                            </li>
                                            <?php endif; ?>
                                            <?php if($data['contacts']['phone_1']) : ?>
                                            <li class="mfo-clients-column-social__list-item">
                                                <a href="tel:<?= $data['contacts']['phone_1'] ?>" class="mfo-clients-column-social__list-link">
                                                    <img class="mfo-clients-column-social__list-icon lazyloaded" src="/img/svg-icons/socials/consultation.svg" data-src="img/svg-icons/socials/consultation.svg" alt="Позвонить для консультации">
                                                    <span class="mfo-clients-column-social__list-text"><?= $data['contacts']['phone_1'] ?></span>
                                                </a>
                                            </li>
                                            <?php endif; ?>
                                        </ul>
                                        <ul class="mfo-clients-column-social__list">
                                            <?php if($data['clients']['online_chat']) : ?>
                                            <li class="mfo-clients-column-social__list-item">
                                                <a class="mfo-clients-column-social__list-link">
                                                    <img class="mfo-clients-column-social__list-icon lazyloaded" src="/img/svg-icons/socials/chat.svg" data-src="img/svg-icons/socials/chat.svg" alt="Онлайн чат">
                                                    <span class="mfo-clients-column-social__list-text" style="text-decoration: none;">На сайте есть онлайн чат</span>
                                                </a>
                                            </li>
                                            <?php endif; ?>
                                            <?php if($data['clients']['viber']) : ?>
                                            <li class="mfo-clients-column-social__list-item">
                                                <a href="#" class="mfo-clients-column-social__list-link">
                                                    <img class="mfo-clients-column-social__list-icon lazyloaded" src="/img/svg-icons/socials/viber.svg" data-src="img/svg-icons/socials/viber.svg" alt="Viber">
                                                    <span class="mfo-clients-column-social__list-text">Viber</span>
                                                </a>
                                            </li>
                                            <?php endif; ?>
<!--                                            --><?php //if($data['clients']['email_consultation']) : ?>
                                            <?php if($data['contacts']['email_1']) : ?>
                                            <li class="mfo-clients-column-social__list-item">
                                                <a href="mailto:<?= $data['contacts']['email_1'] ?>" class="mfo-clients-column-social__list-link" target="_blank" rel="nofollow">
                                                    <img class="mfo-clients-column-social__list-icon lazyloaded" src="/img/svg-icons/socials/email.svg" data-src="img/svg-icons/socials/email.svg" alt="Email для консультации">
                                                    <span class="mfo-clients-column-social__list-text"><?= $data['contacts']['email_1'] ?></span>
                                                </a>
                                            </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
<!--                            Форма обратной связи-->
                            <?php if($data['clients']['feedback']) : ?>
                            <div class="mfo-clients__column mfo-clients-column">
                                <div class="mfo-clients-column__col">
                                    <div class="mfo-clients-column__title"><?= $dataMfo['mfo']['clients']['feedback'] ?></div>
                                </div>
                                <div class="mfo-clients-column__col">
                                    <div class="mfo-clients__file">
                                        <a href="//<?= $data['clients']['feedback']?>" class="mfo-clients__file-link" rel="nofollow" target="_blank">
                                            <?= $data['clients']['feedback']?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php if($socialView) :?>
                            <div class="mfo-clients__column mfo-clients-column">
                                <div class="mfo-clients-column__col">
                                    <div class="mfo-clients-column__title">Соцсети:</div>
                                </div>
                                <div class="mfo-clients-column__col">
                                    <div class="mfo-clients-column__social mfo-clients-column-social">
                                        <ul class="mfo-clients-column-social__list">
                                            <?php if($data['clients']['facebook']) : ?>
                                            <li class="mfo-clients-column-social__list-item">
                                                <a href="//<?= $data['clients']['facebook'] ?>" class="mfo-clients-column-social__list-link" rel="nofollow" target="_blank">
                                                    <img class="mfo-clients-column-social__list-icon lazyloaded" src="/img/svg-icons/socials/facebook.svg" data-src="/img/svg-icons/socials/facebook.svg" alt="Facebook">
                                                    <span class="mfo-clients-column-social__list-text"><?= $data['clients']['facebook'] ?></span>
                                                </a>
                                            </li>
                                            <?php endif; ?>
                                            <?php if($data['clients']['vk']) : ?>
                                            <li class="mfo-clients-column-social__list-item">
                                                <a href="//<?= $data['clients']['vk'] ?>" class="mfo-clients-column-social__list-link" rel="nofollow" target="_blank">
                                                    <img class="mfo-clients-column-social__list-icon lazyloaded" src="/img/svg-icons/socials/vk.svg" data-src="/img/svg-icons/socials/vk.svg" alt="Vk">
                                                    <span class="mfo-clients-column-social__list-text"><?= $data['clients']['vk'] ?></span>
                                                </a>
                                            </li>
                                            <?php endif; ?>
                                            <?php if($data['clients']['instagram']) : ?>
                                            <li class="mfo-clients-column-social__list-item">
                                                <a href="//<?= $data['clients']['instagram'] ?>" class="mfo-clients-column-social__list-link" rel="nofollow" target="_blank">
                                                    <img class="mfo-clients-column-social__list-icon lazyloaded" src="/img/svg-icons/socials/instagram.svg" data-src="/img/svg-icons/socials/instagram.svg" alt="Инстаграм">
                                                    <span class="mfo-clients-column-social__list-text"><?= $data['clients']['instagram'] ?></span>
                                                </a>
                                            </li>
                                            <?php endif; ?>
                                        </ul>
                                        <ul class="mfo-clients-column-social__list">
                                            <?php if($data['clients']['twitter']) : ?>
                                            <li class="mfo-clients-column-social__list-item">
                                                <a href="//<?= $data['clients']['twitter'] ?>" class="mfo-clients-column-social__list-link" rel="nofollow" target="_blank">
                                                    <img class="mfo-clients-column-social__list-icon lazyloaded" src="/img/svg-icons/socials/twitter.svg" data-src="/img/svg-icons/socials/twitter.svg" alt="Twitter">
                                                    <span class="mfo-clients-column-social__list-text"><?= $data['clients']['twitter'] ?></span>
                                                </a>
                                            </li>
                                            <?php endif; ?>
                                            <?php if($data['clients']['youtube']) : ?>
                                            <li class="mfo-clients-column-social__list-item">
                                                <a href="//<?= $data['clients']['youtube'] ?>" class="mfo-clients-column-social__list-link" rel="nofollow" target="_blank">
                                                    <img class="mfo-clients-column-social__list-icon lazyloaded" src="/img/svg-icons/socials/youtube.svg" data-src="/img/svg-icons/socials/youtube.svg" alt="Youtube">
                                                    <span class="mfo-clients-column-social__list-text"><?= $data['clients']['youtube'] ?></span>
                                                </a>
                                            </li>
                                            <?php endif; ?>
                                            <?php if($data['clients']['odnoklasniki']) : ?>
                                            <li class="mfo-clients-column-social__list-item">
                                                <a href="//<?= $data['clients']['odnoklasniki'] ?>" class="mfo-clients-column-social__list-link" rel="nofollow" target="_blank">
                                                    <img class="mfo-clients-column-social__list-icon lazyloaded" src="/img/svg-icons/socials/odnoklassniki.svg" data-src="/img/svg-icons/socials/odnoklassniki.svg" alt="Одноклассники">
                                                    <span class="mfo-clients-column-social__list-text"><?= $data['clients']['odnoklasniki'] ?></span>
                                                </a>
                                            </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php if(!$model->login_content) : ?>
                        <div class="blocks-content-text login_clients">

                            <?php if($data['seo']['h1']) :  ?>
                                <h2>
                                    Жеке кабинет <?=  $data['seo']['h1'] ?>
                                </h2>
                            <?php endif; ?>
                            <div class="mfo-about__table">
                                <div class="mfo-about__columns">
                                    <?php if($data['login']['lk']) : ?>
                                        <div class="mfo-about__col">
                                            <div class="mfo-about__col-left">
                                                <?= $dataMfo['mfo']['login']['lk'] ?>
                                            </div>
                                            <div class="mfo-about__col-right">
                                                <?= $data['login']['lk'] ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
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
                        <?php endif; ?>
                        <div class="mfo-about bank-mfo-about">
                            <?php if($data['seo']['h1']) :  ?>
                                <h2>
                                    Байланыстар <?=  $data['seo']['h1'] ?>
                                </h2>
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
            <?= MfoViewWidget::widget(['type' => 'sideBar','model' => $model,'data' => $data,'action' => '/mfo/'.$model->url.'/clients']) ?>
        </div>
    </div>
</section>
