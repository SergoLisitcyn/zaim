<?php
use \yii\helpers\Url;
$view = '';
$login = '';
$clients = '';
$contacts = '';
$reviews = '';
if($active == 'view') $view = 'active';
if($active == 'login') $login = 'active';
if($active == 'clients') $clients = 'active';
if($active == 'contacts') $contacts = 'active';
if($active == 'reviews') $reviews = 'active';
?>
<ul	class="nav nav-tabs-mfo">
    <li class="<?= $view ?>">
        <a href="<?= Url::toRoute(['mfo-new/view', 'url' => $model->url]) ?>">
            <span><?= $dataMenu['block_1'] ?></span>
        </a>
    </li>
    <?php if($data['login']['lk']) :  ?>
        <li class="<?= $login ?>">
            <a href="<?= Url::toRoute(['mfo-new/login', 'url' => $model->url]) ?>">
                <span><?= $dataMenu['block_2'] ?></span>
            </a>
        </li>
    <?php endif;  ?>
    <?php if($clientsPageView) : ?>
    <li class="<?= $clients ?>">
        <a href="<?= Url::toRoute(['mfo-new/clients', 'url' => $model->url]) ?>">
            <span><?= $dataMenu['block_3'] ?></span>
        </a>
    </li>
    <?php endif; ?>
<!--    <li class="--><?php //$contacts ?><!--">-->
<!--        <a href="--><?php //Url::toRoute(['mfo-new/contacts', 'url' => $model->url]) ?><!--">-->
<!--            <span>--><?php //$dataMenu['block_4'] ?><!--</span>-->
<!--        </a>-->
<!--    </li>-->
    <li class="<?= $reviews ?>">
        <?php if($countReview > 0) : ?>
        <a href="<?= Url::toRoute(['mfo-new/reviews', 'url' => $model->url]) ?>">
            <span>Пікірлер(<?= $countReview ?>)</span>
        </a>
        <?php else: ?>
        <a href="<?= Url::toRoute(['mfo-new/view', 'url' => $model->url,'#'=>'reviews']) ?>">
            <span>ПІКІРДІ ЖАРИЯЛАУ</span>
        </a>
        <?php endif; ?>
    </li>
</ul>
