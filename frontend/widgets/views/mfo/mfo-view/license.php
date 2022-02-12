<div class="mfo-license__block">
    <div class="mfo-license__col">
        <?php if($data['license']['license_arrfr']) :  ?>
            <div class="mfo-license__text">
                <div class="mfo-license__col-left"><?= $dataMfo['mfo']['license']['license_arrfr'] ?></div>
                <div class="mfo-license__col-right"><?= $data['license']['license_arrfr'] ?></div>
            </div>
        <?php endif; ?>
        <?php if($data['license']['issue_date']) :  ?>
            <div class="mfo-license__text">
                <div class="mfo-license__col-left"><?= $dataMfo['mfo']['license']['issue_date'] ?></div>
                <div class="mfo-license__col-right"><?= $data['license']['issue_date'] ?></div>
            </div>
        <?php endif; ?>
        <?php if($data['license']['date_number_license']) :  ?>
            <div class="mfo-license__text">
                <div class="mfo-license__col-left"><?= $dataMfo['mfo']['license']['date_number_license'] ?></div>
                <div class="mfo-license__col-right"><?= $data['license']['date_number_license'] ?></div>
            </div>
        <?php endif; ?>
    </div>
    <?php if($data['license']['link_license']) :  ?>
        <div class="mfo-license__image">
            <img src="/img/mfo/license_mfo_page.jpg" data-src="/img/mfo/license_mfo_page.jpg" class="lazyload attachment-200x size-200x">
        </div>
    <?php endif; ?>
</div>