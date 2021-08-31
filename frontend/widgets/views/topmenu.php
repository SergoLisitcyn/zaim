<?php
use common\models\TypeCredit;
?>
<ul class="header-nav__list" id="headerNavAccordion" data-max-w="959">
    <?php foreach ($filters as $filter): ?>
    <?php $typeCredits = TypeCredit::find()->where(['parent_id'=> $filter->id])->all(); ?>
    <li class="header-nav__item">
        <a class="header-nav__link js-header-nav-accordion-toggle"><?= $filter->name?></a>
        <div class="header-nav__drop collapse js-header-nav-accordion-collapse">
            <ul class="header-nav__list-l2">
                <?php foreach ($typeCredits as $typeCredit): ?>
                <li class="header-nav__item-l2">
                    <?php
                    $url = $typeCredit->url;
                    if($url == 'zajm-60-dnej') $url = 'https://smartzaim.kz/zajm-60-dnej/';
                    if($url == 'zajm-na-90-dnej') $url = 'https://smartzaim.kz/zajm-na-90-dnej/';
                    ?>
                    <a href="<?= $url ?>" class="header-nav__link-l2"><?= $typeCredit->name?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </li>
    <?php endforeach; ?>
</ul>