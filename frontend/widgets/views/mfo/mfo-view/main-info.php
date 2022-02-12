<div class="mfo-about__table">
    <div class="mfo-about__columns">
        <?php if($data['info']['city']) :  ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['info']['city'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['info']['city'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['info']['international_company']) :  ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['info']['international_company'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['info']['international_company'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['info']['general_manager']) :  ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['info']['general_manager'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['info']['general_manager'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['info']['country_central_office']) :  ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['info']['country_central_office'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['info']['country_central_office'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['info']['city_central_office']) :  ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['info']['city_central_office'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['info']['city_central_office'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['info']['parent_company']) :  ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['info']['parent_company'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['info']['parent_company'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['info']['website']) :  ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['info']['website'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <a href="//<?= $data['info']['website'] ?>" target="_blank" rel="nofollow" class="mfo-about__col-right-link"><?= $data['info']['website'] ?></a>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['info']['entity']) :  ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['info']['entity'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['info']['entity'] ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
