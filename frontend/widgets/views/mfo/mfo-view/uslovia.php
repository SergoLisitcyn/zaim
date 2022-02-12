<div class="mfo-about__table_uslovia">
    <div class="mfo-about__columns">
        <?php if($data['conditions']['min_amount']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['conditions']['min_amount'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['conditions']['min_amount'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['conditions']['max_amount']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['conditions']['max_amount'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['conditions']['max_amount'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['conditions']['min_term']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['conditions']['min_term'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['conditions']['min_term'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['conditions']['max_term']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['conditions']['max_term'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['conditions']['max_term'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['conditions']['max_overpayment']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['conditions']['max_overpayment'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['conditions']['max_overpayment'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['conditions']['amount_first_microcredit']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['conditions']['amount_first_microcredit'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['conditions']['amount_first_microcredit'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['conditions']['stack_min_first_microcredit']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['conditions']['stack_min_first_microcredit'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['conditions']['stack_min_first_microcredit'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['conditions']['stack_max_first_microcredit']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['conditions']['stack_max_first_microcredit'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['conditions']['stack_max_first_microcredit'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['conditions']['stack_min_repeat_microcredit']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['conditions']['stack_min_repeat_microcredit'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['conditions']['stack_min_repeat_microcredit'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['conditions']['stack_max_repeat_microcredit']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['conditions']['stack_max_repeat_microcredit'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['conditions']['stack_max_repeat_microcredit'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['conditions']['gesv_min']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['conditions']['gesv_min'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['conditions']['gesv_min'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['conditions']['gesv_max']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['conditions']['gesv_max'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['conditions']['gesv_max'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['conditions']['term_extension_service']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['conditions']['term_extension_service'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['conditions']['term_extension_service'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['conditions']['term_extension_service']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['conditions']['min_age'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['conditions']['min_age'] ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($data['conditions']['max_age']) : ?>
            <div class="mfo-about__col">
                <div class="mfo-about__col-left">
                    <?= $dataMfo['mfo']['conditions']['max_age'] ?>
                </div>
                <div class="mfo-about__col-right">
                    <?= $data['conditions']['max_age'] ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>