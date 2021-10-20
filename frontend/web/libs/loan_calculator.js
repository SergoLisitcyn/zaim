jQuery(document).ready(function($){
    function getParameterByName(name,url){
        if(!url){url=window.location.href;}name=name.replace(/[\[\]]/g,"\\$&");
        var regex=new RegExp("[?&]"+name+"(=([^&#]*)|&|#|$)"),results=regex.exec(url);
        if(!results)return null;
        if(!results[2])return'';
        return decodeURIComponent(results[2].replace(/\+/g," "));
    }function setLoanParametersOffer(procent,sum,term,offer)
    {var com_offer=parseInt(procent*sum*term);
    var sum_offer=parseInt(sum)+parseInt(procent*sum*term);
    $(".mfo_card_info_link_"+offer).html('<div class="line_mfo"><div><span class="text_unit">Сумма займа</span>' +
        '<span class="zaym_result">'+sum+'</span><span class="text_unit_small">тнг</span></div>' +
        '<div><span class="text_unit">Комиссия <b class="kom_dni">'+term+'</b> дн</span>' +
        '<span class="zaym_com">'+com_offer+'</span><span class="text_unit_small">тнг</span>' +
        '</div><div><span class="text_unit">К выплате</span>' +
        '<span class="zaym_vipl">'+sum_offer+'</span>' +
        '<span class="text_unit_small">тнг</span></div></div>');
    $(".mfo_card_vert_info_link_"+offer).html('Сумма займа ' + sum + ' тг + комиссия за '+term+' дней '+com_offer+' тг = '+sum_offer+' к выплате');
    $(".mfo_card_info_return_data_"+offer).text(sum_offer);
    }


    function setLoanParameters(sum,term)
    {var offer=["tengo","dengiclick","ccloan","moneyman","kredit7","turbomoney","zaimer","4slovo","dopo","kredit24",
        "zing","altenge","tat-senim","1-kredit","mfo-365-tenge","zhyldam-a-sha","arnur-kredit","kmf","akshamat",
        "i-credit","mko-yrys","kazcreditline","bereke","soyuz-kredit","tumar","100tenge","gomoney","gofingo","mycredit",
        "koke","sberbank","ekredit","homecredit","tenge-credit","crediton","credital","rakhatfinance","richpapa",
        "moneyexpress","zanachka","zaim-online","accordcapital","expresszaim","mkd","moneybox","mcfinance",
        "capitalinvest","tasmicrofinance","inkar","inkocredit","creditum","rfinance","sminvest","tengoff",
        "kmi","creditmfo","altynpaida","efgroup","sator","creditplus"];
    var procent=[0.001,0.0001,0.0067,0.0001,0.001,0.0001,0.0001,0.0067,0.02,0.0175,0,0.01,0.025,0.01,0.01,0.01,0.01,
        0.01,0.01,0.01,0.01,0.0008,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.001,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,
        0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.01,0.0001];
    var index;for(index=0;index<offer.length;++index){setLoanParametersOffer(procent[index],sum,term,offer[index]);}}
    $('input[name="rs_sum"]').val(getParameterByName('sum')||'50000');
    $(".loan_calculator_sum_input_right").text(getParameterByName('sum')||'50000');
    $('input[name="rs_date"]').val(getParameterByName('term')||'5');
    $(".loan_calculator_date_input_right").text(getParameterByName('term')||'5');
    $('#select_loan_calculator_process option[value='+getParameterByName('get_loan')+']').attr('selected','selected');
    $('#select_loan_calculator_method option[value='+getParameterByName('loan_repayment')+']').attr('selected','selected');
    $('#select_loan_calculator_sort option[value='+getParameterByName('sort')+']').attr('selected','selected');
    var pathname=window.location.pathname;if(pathname=='/onlajn-zajm-na-kartu/'){
        $('#select_loan_calculator_process option[value=money_at_stake]').attr('selected','selected');}
        else if(pathname=='/zajm-na-bankovskij-schet/')
        {$('#select_loan_calculator_process option[value=money_to_bank_account]').attr('selected','selected');}
        else if(pathname=='/dengi-na-schet-kazpochty/'){
            $('#select_loan_calculator_process option[value=money_to_account_address]').attr('selected','selected');}
        else if(pathname=='/zajm-nalichnymi/'){$('#select_loan_calculator_process option[value=loan_cash]').attr('selected','selected');}
        else if(pathname=='/bankovskaya-karta/'){$('#select_loan_calculator_method option[value=bank_card]').attr('selected','selected');}
        else if(pathname=='/bankovskij-perevod/'){$('#select_loan_calculator_method option[value=bank_transfer]').attr('selected','selected');}
        else if(pathname=='/cyberplat/'){$('#select_loan_calculator_method option[value=cyber_plat]').attr('selected','selected');}
        else if(pathname=='/qiwi/'){$('#select_loan_calculator_method option[value=qiwi]').attr('selected','selected');}
        else if(pathname=='/kassa24/'){$('#select_loan_calculator_method option[value=kassa24]').attr('selected','selected');}
        else if(pathname=='/nalichnymi-v-kasse-banka/')
        {$('#select_loan_calculator_method option[value=cash_on_hand]').attr('selected','selected');}
        else if(pathname=='/nalichnymi-v-ao-kazpochta/')
        {$('#select_loan_calculator_method option[value=cash_in_kazpost]').attr('selected','selected');}
        else if(pathname=='/nalichnymi-v-ofise-kompanii/')
        {$('#select_loan_calculator_method option[value=cash_in_office]').attr('selected','selected');}
        else if(pathname=='/zajm-5000-tenge/'){$('input[name="rs_sum"]').val('5000');
        $(".loan_calculator_sum_input_right").text('5000');$(".rs_sum_output").html('5000 тнг');}
        else if(pathname=='/zajm-10000-tenge/'){$('input[name="rs_sum"]').val('10000');
        $(".loan_calculator_sum_input_right").text('10000');$(".rs_sum_output").html('10000 тнг');}
        else if(pathname=='/zajm-15000-tenge/'){$('input[name="rs_sum"]').val('15000');
        $(".loan_calculator_sum_input_right").text('15000');$(".rs_sum_output").html('15000 тнг');}
        else if(pathname=='/zajm-20000-tenge/'){$('input[name="rs_sum"]').val('20000');
        $(".loan_calculator_sum_input_right").text('20000');$(".rs_sum_output").html('20000 тнг');}
        else if(pathname=='/zajm-25000-tenge/'){$('input[name="rs_sum"]').val('25000');
        $(".loan_calculator_sum_input_right").text('25000');$(".rs_sum_output").html('25000 тнг');}
        else if(pathname=='/zajm-30000-tenge/'){$('input[name="rs_sum"]').val('30000');
        $(".loan_calculator_sum_input_right").text('30000');$(".rs_sum_output").html('30000 тнг');}
        else if(pathname=='/zajm-35000-tenge/'){$('input[name="rs_sum"]').val('35000');
        $(".loan_calculator_sum_input_right").text('35000');$(".rs_sum_output").html('35000 тнг');}
        else if(pathname=='/zajm-40000-tenge/'){$('input[name="rs_sum"]').val('40000');
        $(".loan_calculator_sum_input_right").text('40000');$(".rs_sum_output").html('40000 тнг');}
        else if(pathname=='/zajm-45000-tenge/'){$('input[name="rs_sum"]').val('45000');
        $(".loan_calculator_sum_input_right").text('45000');$(".rs_sum_output").html('45000 тнг');}
        else if(pathname=='/zajm-50000-tenge/'){$('input[name="rs_sum"]').val('50000');
        $(".loan_calculator_sum_input_right").text('50000');$(".rs_sum_output").html('50000 тнг');}
        else if(pathname=='/zajm-55000-tenge/'){$('input[name="rs_sum"]').val('55000');
        $(".loan_calculator_sum_input_right").text('55000');$(".rs_sum_output").html('55000 тнг');}
        else if(pathname=='/zajm-60000-tenge/'){$('input[name="rs_sum"]').val('60000');
        $(".loan_calculator_sum_input_right").text('60000');$(".rs_sum_output").html('60000 тнг');}
        else if(pathname=='/zajm-70000-tenge/'){$('input[name="rs_sum"]').val('70000');
        $(".loan_calculator_sum_input_right").text('70000');$(".rs_sum_output").html('70000 тнг');}
        else if(pathname=='/zajm-75000-tenge/'){$('input[name="rs_sum"]').val('75000');
        $(".loan_calculator_sum_input_right").text('75000');$(".rs_sum_output").html('75000 тнг');}
        else if(pathname=='/zajm-80000-tenge/'){$('input[name="rs_sum"]').val('80000');
        $(".loan_calculator_sum_input_right").text('80000');$(".rs_sum_output").html('80000 тнг');}
        else if(pathname=='/zajm-90000-tenge/'){$('input[name="rs_sum"]').val('90000');
        $(".loan_calculator_sum_input_right").text('90000');$(".rs_sum_output").html('90000 тнг');}
        else if(pathname=='/zajm-100000-tenge/'){$('input[name="rs_sum"]').val('100000');
        $(".loan_calculator_sum_input_right").text('100000');$(".rs_sum_output").html('100000 тнг');}
        else if(pathname=='/zajm-110000-tenge/'){$('input[name="rs_sum"]').val('110000');
        $(".loan_calculator_sum_input_right").text('110000');$(".rs_sum_output").html('110000 тнг');}
        else if(pathname=='/zajm-120000-tenge/'){$('input[name="rs_sum"]').val('120000');
        $(".loan_calculator_sum_input_right").text('120000');$(".rs_sum_output").html('120000 тнг');}
        else if(pathname=='/zajm-130000-tenge/'){$('input[name="rs_sum"]').val('130000');
        $(".loan_calculator_sum_input_right").text('130000');$(".rs_sum_output").html('130000 тнг');}
        else if(pathname=='/zajm-150000-tenge/'){$('input[name="rs_sum"]').val('150000');
        $(".loan_calculator_sum_input_right").text('150000');$(".rs_sum_output").html('150000 тнг');}
        else if(pathname=='/zajm-200000-tenge/'){$('input[name="rs_sum"]').val('200000');
        $(".loan_calculator_sum_input_right").text('200000');$(".rs_sum_output").html('200000 тнг');}
        else if(pathname=='/zajm-250000-tenge/'){$('input[name="rs_sum"]').val('250000');
        $(".loan_calculator_sum_input_right").text('250000');$(".rs_sum_output").html('250000 тнг');}
        else if(pathname=='/zajm-300000-tenge/'){$('input[name="rs_sum"]').val('300000');
        $(".loan_calculator_sum_input_right").text('300000');$(".rs_sum_output").html('300000 тнг');}
        if(getParameterByName('advanced_repayment')){$("#advanced_repayment").prop('checked',true);}
        if(getParameterByName('extension_loan')){$("#extension_loan").prop('checked',true);}
        $(".loan_calculator_left").on('click','a',function()
        {var value=$('input[name="rs_sum"]').val();var sum_value=value;if($(this).hasClass("more_sum"))
        {if(value>=0&&value<5000){sum_value=5000;}else if(value>=5000&&value<10000){sum_value=10000;}
        else if(value>=10000&&value<15000){sum_value=15000;}else if(value>=15000&&value<20000){sum_value=20000;}
        else if(value>=20000&&value<25000){sum_value=25000;}else if(value>=25000&&value<30000){sum_value=30000;}
        else if(value>=30000&&value<35000){sum_value=35000;}else if(value>=35000&&value<40000){sum_value=40000;}
        else if(value>=40000&&value<45000){sum_value=45000;}else if(value>=45000&&value<50000){sum_value=50000;}
        else if(value>=50000&&value<55000){sum_value=55000;}else if(value>=55000&&value<60000){sum_value=60000;}
        else if(value>=60000&&value<70000){sum_value=70000;}else if(value>=70000&&value<75000){sum_value=75000;}
        else if(value>=75000&&value<80000){sum_value=80000;}else if(value>=80000&&value<90000){sum_value=90000;}
        else if(value>=90000&&value<100000){sum_value=100000;}else if(value>=100000&&value<110000){sum_value=110000;}
        else if(value>=110000&&value<120000){sum_value=120000;}else if(value>=120000&&value<130000){sum_value=130000;}
        else if(value>=130000&&value<150000){sum_value=150000;}else if(value>=150000&&value<200000){sum_value=200000;}
        else if(value>=200000&&value<250000){sum_value=250000;}else if(value>=250000&&value<300000){sum_value=300000;}}
        else if($(this).hasClass("less_sum")){if(value>0&&value<=5000){sum_value=0;}else if(value>5000&&value<=10000)
        {sum_value=5000;}else if(value>10000&&value<=15000){sum_value=10000;}else if(value>15000&&value<=20000)
        {sum_value=15000;}else if(value>20000&&value<=25000){sum_value=20000;}else if(value>25000&&value<=30000)
        {sum_value=25000;}else if(value>30000&&value<=35000){sum_value=30000;}else if(value>35000&&value<=40000)
        {sum_value=35000;}else if(value>40000&&value<=45000){sum_value=40000;}else if(value>45000&&value<=50000)
        {sum_value=45000;}else if(value>50000&&value<=55000){sum_value=50000;}else if(value>55000&&value<=60000)
        {sum_value=55000;}else if(value>60000&&value<=70000){sum_value=60000;}else if(value>70000&&value<=75000)
        {sum_value=70000;}else if(value>75000&&value<=80000){sum_value=75000;}else if(value>80000&&value<=90000)
        {sum_value=80000;}else if(value>90000&&value<=100000){sum_value=90000;}else if(value>100000&&value<=110000)
        {sum_value=100000;}else if(value>110000&&value<=120000){sum_value=110000;}else if(value>120000&&value<=130000)
        {sum_value=120000;}else if(value>130000&&value<=150000){sum_value=130000;}else if(value>150000&&value<=200000)
        {sum_value=150000;}else if(value>200000&&value<=250000){sum_value=200000;}else if(value>250000&&value<=300000)
        {sum_value=250000;}}$('input[name="rs_sum"]').val(sum_value).change();$(".loan_calculator_sum_input_right").text(sum_value);
        $(".rs_sum_output").html('<a href="/zajm-'+getLessSum(sum_value)+'-tenge/" class="less_sum" onclick="return false;">' +
            '&larr;&nbsp;</a>'+sum_value+'<a href="/zajm-'+getMoreSum(sum_value)+'-tenge/" class="more_sum" onclick="return false;">' +
            '&nbsp;&rarr;</a> тнг');});$('.loan_calculator').show();$('input[name="rs_sum"]').rangeslider({polyfill:false,onInit:function()
        {this.output=$('<div class="rs_sum_output" />').insertAfter('.loan_calculator_sum_label').html('<a href="/zajm-'+getLessSum(this.$element.val())+'-tenge/" class="less_sum" onclick="return false;">&larr;&nbsp;</a>'+this.$element.val()+'<a href="/zajm-'+getMoreSum(this.$element.val())+'-tenge/" class="more_sum" onclick="return false;">&nbsp;&rarr;</a>'+' тнг');
        $(".loan_calculator_sum_input_right").text(this.$element.val());var sum=this.$element.val();
        var term=$('input[name="rs_date"]').val();
        if(term==0){term=5;}setLoanParameters(sum,term);},onSlide:function(position,value)
        {this.output.html('<a href="/zajm-'+getLessSum(this.$element.val())+'-tenge/" class="less_sum" onclick="return false;">&larr;&nbsp;</a>'+value+'<a href="/zajm-'+getMoreSum(this.$element.val())+'-tenge/" class="more_sum" onclick="return false;">&nbsp;&rarr;</a>'+' тнг');
        $(".loan_calculator_sum_input_right").text(this.$element.val());
        var sum=this.$element.val();var term=$('input[name="rs_date"]').val();if(term==0){term=5;}setLoanParameters(sum,term);}});
            function getLessSum(value){var sum=5000;if(value==0){sum=5000;}else if(value==5000){sum=5000;}else if(value==10000){sum=5000;}
            else if(value==15000){sum=10000;}else if(value==20000){sum=15000;}else if(value==25000){sum=20000;}
            else if(value==30000){sum=25000;}else if(value==35000){sum=30000;}else if(value==40000){sum=35000;}
            else if(value==45000){sum=40000;}else if(value==50000){sum=45000;}else if(value==55000){sum=50000;}
            else if(value==60000){sum=55000;}else if(value==70000){sum=60000;}else if(value==75000){sum=70000;}
            else if(value==80000){sum=75000;}else if(value==90000){sum=80000;}else if(value==100000){sum=90000;}
            else if(value==110000){sum=100000;}else if(value==120000){sum=110000;}else if(value==130000){sum=120000;}
            else if(value==150000){sum=130000;}else if(value==200000){sum=150000;}else if(value==250000){sum=200000;}
            else if(value==300000){sum=250000;}return sum;}function getMoreSum(value){var sum=300000;if(value==0){sum=5000;}
            else if(value==5000){sum=10000;}else if(value==10000){sum=15000;}else if(value==15000){sum=20000;}
            else if(value==20000){sum=25000;}else if(value==25000){sum=30000;}else if(value==30000){sum=35000;}
            else if(value==35000){sum=40000;}else if(value==40000){sum=45000;}else if(value==45000){sum=50000;}
            else if(value==50000){sum=55000;}else if(value==55000){sum=60000;}else if(value==60000){sum=70000;}
            else if(value==70000){sum=75000;}else if(value==75000){sum=80000;}else if(value==80000){sum=90000;}
            else if(value==90000){sum=100000;}else if(value==100000){sum=110000;}else if(value==110000){sum=120000;}
            else if(value==120000){sum=130000;}else if(value==130000){sum=150000;}else if(value==150000){sum=200000;}
            else if(value==200000){sum=250000;}else if(value==250000){sum=300000;}else if(value==300000){sum=300000;}
            return sum;}$('input[name="rs_date"]').rangeslider({polyfill:false,onInit:function(){this.output=$('<div class="rs_date_output" />').insertAfter('.loan_calculator_date_label').html(this.$element.val()+' дней');
            $(".loan_calculator_date_input_right").text(this.$element.val());
            var sum=$('input[name="rs_sum"]').val();if(sum==0){sum=5000;}var term=this.$element.val();setLoanParameters(sum,term);},onSlide:function(position,value){this.output.html(value+' дней');
            $(".loan_calculator_date_input_right").text(this.$element.val());
            var sum=$('input[name="rs_sum"]').val();if(sum==0){sum=5000;}
            var term=this.$element.val();setLoanParameters(sum,term);}});
            $(".search_company").on('click',function(){var location_url="https://kz.smartzaim.kz/kreditnyj-kalkulyator?sum="+($(".loan_calculator_sum_input_right").text()||'50000')+"&term="+($(".loan_calculator_date_input_right").text()||'5');
            var select_loan_calculator_process=$("#select_loan_calculator_process").val();
            if(select_loan_calculator_process){location_url+="&get_loan="+select_loan_calculator_process;}
            var select_loan_calculator_method=$("#select_loan_calculator_method").val();
            if(select_loan_calculator_method){location_url+="&loan_repayment="+select_loan_calculator_method;}
            var select_loan_calculator_sort=$("#select_loan_calculator_sort").val();if(select_loan_calculator_sort){location_url+="&sort="+select_loan_calculator_sort;}var advanced_repayment=$("#advanced_repayment").is(':checked');if(advanced_repayment){location_url+="&advanced_repayment=1";}var extension_loan=$("#extension_loan").is(':checked');if(extension_loan){location_url+="&extension_loan=1";}window.location=location_url;});
            $('.loan_calculator #select_loan_calculator_sort').on('change',function(){var url='https://kz.smartzaim.kz/kreditnyj-kalkulyator';var sum=$(".loan_calculator_sum_input_right").text()||'50000';var term=$(".loan_calculator_date_input_right").text()||'5';var get_loan=$("#select_loan_calculator_process").val();
            var loan_repayment=$("#select_loan_calculator_method").val();var sort=$("#select_loan_calculator_sort").val();
            var advanced_repayment=$("#advanced_repayment").is(':checked')?1:0;
            var extension_loan=$("#extension_loan").is(':checked')?1:0;
            var requestData={action:'get_all_offers',sum:sum,term:term,get_loan:get_loan,loan_repayment:loan_repayment,sort:sort,advanced_repayment:advanced_repayment,extension_loan:extension_loan};jQuery.post(url,requestData,function(response){$('.offer_row').hide();
            $('.show_mfo_btn').hide();$('.show_mfo_btn + div').hide();$('.show_mfo_btn + div + div').hide();
            $('.loan_calculator_offers').html(response);});});$('#select_loan_calculator_sort_rating').on('change',function()
    {var url='https://kz.smartzaim.kz/kreditnyj-kalkulyator';
        var sum=$(".loan_calculator_sum_input_right").text()||'50000';var term=$(".loan_calculator_date_input_right").text()||'5';var get_loan=$("#select_loan_calculator_process").val();var loan_repayment=$("#select_loan_calculator_method").val();var sort=$("#select_loan_calculator_sort_rating").val();var advanced_repayment=$("#advanced_repayment").is(':checked')?1:0;var extension_loan=$("#extension_loan").is(':checked')?1:0;var requestData={action:'get_all_rating_offers',sum:sum,term:term,get_loan:get_loan,loan_repayment:loan_repayment,sort:sort,advanced_repayment:advanced_repayment,extension_loan:extension_loan};jQuery.post(url,requestData,function(response){$('.rated_mfo').html(response);});});$(".loan_calculator_ext_header_title_2,.loan_calculator_ext_header_trn_up,.loan_calculator_ext_header_trn_down").on('click',function(){if($(".loan_calculator_ext_params").is(":visible")){$(".loan_calculator_ext_params").hide();$(".loan_calculator_params").hide();$(".loan_calculator_ext_header_trn_up").fadeIn(1000).css('display','block');
        $(".loan_calculator_ext_header_trn_down").hide();$(".loan_calculator").height(250);}else
            {$(".loan_calculator_ext_params").fadeIn(1000).css('display','inline-block');
        $(".loan_calculator_params").fadeIn(1000).css('display','inline-block');$(".loan_calculator_ext_header_trn_up").hide();
        $(".loan_calculator_ext_header_trn_down").fadeIn(1000).css('display','block');
        $(".loan_calculator").height(380);}
        });
});