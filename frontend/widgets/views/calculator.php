<section class="calculator plr">
    <div class="calculator-wrap limit-width">
        <div class="loan_calculator">
            <div class="loan_calculator_left">
                <div class="loan_calculator_sum">
                    <label for="rs_sum" class="loan_calculator_sum_label">Сумма кредита</label>
                    <div class="loan_calculator_sum_value">
                        <div class="loan_calculator_sum_min"><?= $calculator->min_sum ?></div>
                        <div class="loan_calculator_sum_input">
                            <input id="rs_sum" type="range" name="rs_sum" min="<?= $calculator->min_sum ?>" max="<?= $calculator->max_sum ?>" step="<?= $calculator->step_sum ?>">
                        </div>
                        <div class="loan_calculator_sum_max"><?= $calculator->max_sum ?> тнг</div>
                    </div>
                </div>
                <div class="loan_calculator_date">
                    <label for="rs_date" class="loan_calculator_date_label">Срок кредитования</label>
                    <div class="loan_calculator_date_value">
                        <div class="loan_calculator_date_min"><?= $calculator->min_srok ?></div>
                        <div class="loan_calculator_date_input">
                            <input id="rs_date" type="range" name="rs_date" min="<?= $calculator->min_srok ?>" max="<?= $calculator->max_srok ?>" step="<?= $calculator->step_srok ?>"></div>
                        <div class="loan_calculator_date_max"><?= $calculator->max_srok ?> дней</div>
                    </div>
                </div>
                <div class="loan_calculator_search">
                    <div class="loan_calculator_search_left">
                        <div class="mfo_card_button search_company">Подобрать компании</div>
                    </div>
                    <div class="loan_calculator_search_right">
                        <div class="loan_calculator_sum_right">
                            <span>Сумма</span><span class="visible-mobile">Вы берете</span>
                            <span class="loan_calculator_sum_input_right">50 000</span> <span>тнг</span>
                        </div>
                        <div class="loan_calculator_date_right">
                            <span>Срок</span><span class="visible-mobile">на срок до</span>
                            <span class="loan_calculator_date_input_right">7</span> <span>дней</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="loan_calculator_right">
                <div class="loan_calculator_ext">
                    <div class="loan_calculator_ext_header"> Дополнительные параметры:</div>
                    <div class="loan_calculator_ext_params">
                        <label>
                            <input type="checkbox" id="advanced_repayment" value="a1">
                            <span>Досрочное погашение</span>
                        </label>
                        <br>
                        <label>
                            <input type="checkbox" id="extension_loan" value="a2"><span>Продление (пролонгация) кредита</span>
                        </label>
                    </div>
                </div>
                <div class="loan_calculator_params">
                    <div class="loan_calculator_process">
                        <label for="select_loan_calculator_process">Способ получения:</label>
                        <select id="select_loan_calculator_process" data-placeholder="Выберите" class="select_loan_calculator">
                            <option class="others_params" value="">не важно</option>
                            <?php foreach ($spPogs as $pog) : ?>
                            <option class="others_params" value="money_to_bank_account"><?= $pog->name ?></option>
                            <?php endforeach; ?>
<!--                            <option class="others_params" value="money_at_stake">на банковскую карту</option>-->
<!--                            <option class="others_params" value="money_to_account_address">на счет Казпочты</option>-->
<!--                            <option class="others_params" value="loan_cash">займ наличными</option>-->
                        </select>
                    </div>
                    <div class="loan_calculator_method">
                        <label for="select_loan_calculator_method">Способ погашения:</label>
                        <select id="select_loan_calculator_method" class="select_loan_calculator" data-placeholder="Выберите">
                            <option class="others_params" value="">не важно</option>
                            <?php foreach ($spPols as $pol) : ?>
                                <option class="others_params" value="bank_card"><?= $pol->name ?></option>
                            <?php endforeach; ?>
<!--                            <option class="others_params" value="bank_card">банковская карта</option>-->
<!--                            <option class="others_params" value="bank_transfer">банковский перевод</option>-->
<!--                            <option class="others_params" value="cyber_plat">CyberPlat</option>-->
<!--                            <option class="others_params" value="qiwi">QIWI</option>-->
<!--                            <option class="others_params" value="kassa24">Kassa24</option>-->
<!--                            <option class="others_params" value="cash_on_hand">в кассе банка-->
<!--                            </option>-->
<!--                            <option class="others_params" value="cash_in_kazpost">в АО «Казпочта»</option>-->
<!--                            <option class="others_params" value="cash_in_office">в офисе компании</option>-->
                        </select>
                    </div>
                </div>
                <div class="loan_calculator_sort">
                    <label for="select_loan_calculator_sort" class="loan_calculator_sort_header">Сортировать по:</label>
                    <div class="loan_calculator_sort_params">
                        <select id="select_loan_calculator_sort" class="select_loan_calculator">
                            <option class="others_params" value="">не важно</option>
                            <option class="others_params" value="max_sum">максимальной сумме</option>
                            <option class="others_params" value="max_term">максимальному сроку</option>
                            <option class="others_params" value="approval">проценту одобрения</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="loan_calculator_submit_mobile">
                <div class="mfo_card_button search_company">Подобрать компании</div>
            </div>
        </div>
    </div>
</section>
