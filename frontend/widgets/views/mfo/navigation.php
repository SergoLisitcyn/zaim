<?php
use \yii\helpers\Url;
$view = '';
$login = '';
$clients = '';
$contacts = '';
if($active == 'view') $view = 'active';
if($active == 'login') $login = 'active';
if($active == 'clients') $clients = 'active';
if($active == 'contacts') $contacts = 'active';
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
    <li class="<?= $clients ?>">
        <a href="<?= Url::toRoute(['mfo-new/clients', 'url' => $model->url]) ?>">
            <span><?= $dataMenu['block_3'] ?></span>
        </a>
    </li>
    <li class="<?= $contacts ?>">
        <a href="<?= Url::toRoute(['mfo-new/contacts', 'url' => $model->url]) ?>">
            <span><?= $dataMenu['block_4'] ?></span>
        </a>
    </li>
</ul>
