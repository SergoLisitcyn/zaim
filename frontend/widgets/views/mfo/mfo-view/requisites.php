<?php
use \yii\helpers\Url;
?>
<div class="mfo-about__table">
    <div class="mfo-about__columns">
        <?php if($data['requisites']['bin']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['requisites']['bin'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['requisites']['bin'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['requisites']['full_legal_name_ru']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['requisites']['full_legal_name_ru'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['requisites']['full_legal_name_ru'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['requisites']['full_legal_name_kz']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['requisites']['full_legal_name_kz'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['requisites']['full_legal_name_kz'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['requisites']['full_legal_name_en']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['requisites']['full_legal_name_en'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['requisites']['full_legal_name_en'] ?>
                </div>
            </div>
        <?php endif; ?>
<!--        Юридический адрес-->
        <?php if($data['requisites']['legal_address']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['requisites']['legal_address'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['requisites']['legal_address'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['requisites']['index']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['requisites']['index'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['requisites']['index'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['requisites']['date_registration']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['requisites']['date_registration'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['requisites']['date_registration'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['requisites']['kbe']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['requisites']['kbe'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['requisites']['kbe'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['requisites']['iik']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['requisites']['iik'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['requisites']['iik'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['requisites']['bank']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['requisites']['bank'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?php if(isset($data['banklink']) && $data['banklink']) : ?>
                    <a href="<?= Url::toRoute(['banks/view', 'url' => $data['banklink']]) ?>"><?= $data['requisites']['bank'] ?></a>
                    <?php else: ?>
                        <?= $data['requisites']['bank'] ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['requisites']['bik']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['requisites']['bik'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['requisites']['bik'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['requisites']['knp']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['requisites']['knp'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['requisites']['knp'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['requisites']['tax']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['requisites']['tax'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['requisites']['tax'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['requisites']['rnn']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['requisites']['rnn'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['requisites']['rnn'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['requisites']['okpo']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['requisites']['okpo'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['requisites']['okpo'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['requisites']['kato']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['requisites']['kato'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['requisites']['kato'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['requisites']['oked']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['requisites']['oked'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['requisites']['oked'] ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>