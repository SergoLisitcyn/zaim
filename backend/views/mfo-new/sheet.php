<?php
// Подключаем клиент Google таблиц
require __DIR__ . '../../../../vendor/autoload.php';

// Наш ключ доступа к сервисному аккаунту
$googleAccountKeyFilePath = __DIR__ . '/smartzaimcrm-59bd2db3d605.json';
putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $googleAccountKeyFilePath);

// Создаем новый клиент
$client = new Google_Client();
// Устанавливаем полномочия
$client->useApplicationDefaultCredentials();

// Добавляем область доступа к чтению, редактированию, созданию и удалению таблиц
$client->addScope('https://www.googleapis.com/auth/spreadsheets');

$service = new Google_Service_Sheets($client);

// ID таблицы

$spreadsheetId = '1rj9l2BMuPpU0PCYi55Oy7ZcD0Ge855xlHEROjyjDDjo';
$response = $service->spreadsheets->get($spreadsheetId);

// Получение свойств таблицы
$spreadsheetProperties = $response->getProperties();
// Обход всех листов
foreach($response->getSheets() as $sheet) {
    $sheetProperties = $sheet->getProperties();
}

$range = $sheetProperties->title;
$response = $service->spreadsheets_values->get($spreadsheetId, 'МФО Казахстана');

//if($response['values']){
//    Yii::$app->db->createCommand()->truncateTable('links')->execute();
//} else {
//    echo '<h1>Таблица пуста</h1>';
//    die;
//}
$data = [];
$countSave = 0;
$countUpdate = 0;
foreach ($response['values']  as $key => $value){
//    if($key == 0 || $key == 1 || $key == 2) continue;
    $mfoData = \common\models\MfoData::find()->where(['name' => 'Data'])->one();
    $modelMfoData = new \common\models\MfoData();
    if($key == 0){
        $dataMenu['block_1'] = $value[1];
        $dataMenu['block_2'] = $value[105];
        $dataMenu['block_3'] = $value[109];
        $dataMenu['block_4'] = $value[125];
        if($mfoData){
            $mfoData->name = 'Data';
            $mfoData->data_menu = serialize($dataMenu);
            if($mfoData->save()){
                continue;
            }else{
                echo 'tut1';
                var_dump($mfoData->errors); die;
            }
        }
        $modelMfoData->name = 'Data';
        $modelMfoData->data_menu = serialize($dataMenu);
        if($modelMfoData->save()){
            continue;
        } else {
            echo 'tut';
            var_dump($modelMfoData->errors); die;
        }
    }
    if($key == 1){
        $dataTag['main_info'] = $value[1];
        $dataTag['license'] = $value[13];
        $dataTag['fin'] = $value[17];
        $dataTag['priznak'] = $value[20];
        $dataTag['uslovia_credit'] = $value[38];
        $dataTag['osobenost'] = $value[53];
        $dataTag['sposob_poluch'] = $value[67];
        $dataTag['sposob_pogash'] = $value[72];
        $dataTag['requisites'] = $value[88];
        $dataTag['social'] = $value[119];
        if($mfoData){
            $mfoData->data_tag = serialize($dataTag);
            if($mfoData->save()){
                continue;
            } else {
                echo 'tut2';
                var_dump($mfoData->errors); die;
            }
        }
    }
    if($key == 2){
        $dataMfo['mfo']['info']['name'] = $value[1];
        $dataMfo['mfo']['info']['city'] = $value[2];
        $dataMfo['mfo']['info']['neizvestnost'] = $value[3];
        $dataMfo['mfo']['info']['international_company'] = $value[4];
        $dataMfo['mfo']['info']['general_manager'] = $value[5];
        $dataMfo['mfo']['info']['country_central_office'] = $value[6];
        $dataMfo['mfo']['info']['city_central_office'] = $value[7];
        $dataMfo['mfo']['info']['parent_company'] = $value[8];
        $dataMfo['mfo']['info']['website'] = $value[9];
        $dataMfo['mfo']['info']['entity'] = $value[10];
        $dataMfo['mfo']['info']['amfok'] = $value[11];
        $dataMfo['mfo']['info']['fintech'] = $value[12];

        $dataMfo['mfo']['license']['license_arrfr'] = $value[13];
        $dataMfo['mfo']['license']['issue_date'] = $value[14];
        $dataMfo['mfo']['license']['date_number_license'] = $value[15];
        $dataMfo['mfo']['license']['link_license'] = $value[16];


        $dataMfo['mfo']['financial_report']['report'] = $value[17];
        $dataMfo['mfo']['financial_report']['result'] = $value[18];
        $dataMfo['mfo']['financial_report']['year'] = $value[19];


        $dataMfo['mfo']['features']['credit_individuals'] = $value[20];
        $dataMfo['mfo']['features']['credit_legal'] = $value[21];
        $dataMfo['mfo']['features']['ip'] = $value[22];
        $dataMfo['mfo']['features']['consumer'] = $value[23];
        $dataMfo['mfo']['features']['fast_order'] = $value[24];
        $dataMfo['mfo']['features']['application_online'] = $value[25];
        $dataMfo['mfo']['features']['money_online'] = $value[26];
        $dataMfo['mfo']['features']['without_collateral'] = $value[27];
        $dataMfo['mfo']['features']['car_deposit'] = $value[28];
        $dataMfo['mfo']['features']['real_estate'] = $value[29];
        $dataMfo['mfo']['features']['other'] = $value[30];
        $dataMfo['mfo']['features']['microloan'] = $value[31];
        $dataMfo['mfo']['features']['entrepreneurial'] = $value[32];
        $dataMfo['mfo']['features']['agricultural_purposes'] = $value[33];
        $dataMfo['mfo']['features']['damu_micro'] = $value[34];
        $dataMfo['mfo']['features']['microcredit_business'] = $value[35];
        $dataMfo['mfo']['features']['unsecured'] = $value[36];
        $dataMfo['mfo']['features']['pensioners'] = $value[37];


        $dataMfo['mfo']['conditions']['min_amount'] = $value[38];
        $dataMfo['mfo']['conditions']['max_amount'] = $value[39];
        $dataMfo['mfo']['conditions']['min_term'] = $value[40];
        $dataMfo['mfo']['conditions']['max_term'] = $value[41];
        $dataMfo['mfo']['conditions']['max_overpayment'] = $value[42];
        $dataMfo['mfo']['conditions']['amount_first_microcredit'] = $value[43];
        $dataMfo['mfo']['conditions']['stack_min_first_microcredit'] = $value[44];
        $dataMfo['mfo']['conditions']['stack_max_first_microcredit'] = $value[45];
        $dataMfo['mfo']['conditions']['stack_min_repeat_microcredit'] = $value[46];
        $dataMfo['mfo']['conditions']['stack_max_repeat_microcredit'] = $value[47];
        $dataMfo['mfo']['conditions']['gesv_min'] = $value[48];
        $dataMfo['mfo']['conditions']['gesv_max'] = $value[49];
        $dataMfo['mfo']['conditions']['term_extension_service'] = $value[50];
        $dataMfo['mfo']['conditions']['min_age'] = $value[51];
        $dataMfo['mfo']['conditions']['max_age'] = $value[52];

        $dataMfo['mfo']['singularity']['new_customers'] = $value[53];
        $dataMfo['mfo']['singularity']['quick_online_application'] = $value[54];
        $dataMfo['mfo']['singularity']['round_the_clock'] = $value[55];
        $dataMfo['mfo']['singularity']['full_repayment'] = $value[56];
        $dataMfo['mfo']['singularity']['partial_repayment'] = $value[57];
        $dataMfo['mfo']['singularity']['license_arrfr'] = $value[58];
        $dataMfo['mfo']['singularity']['identity_card'] = $value[59];
        $dataMfo['mfo']['singularity']['microcredit_without_collateral'] = $value[60];
        $dataMfo['mfo']['singularity']['microcredit_without_guarantee'] = $value[61];
        $dataMfo['mfo']['singularity']['written'] = $value[62];
        $dataMfo['mfo']['singularity']['territory_kz'] = $value[63];
        $dataMfo['mfo']['singularity']['loyal'] = $value[64];
        $dataMfo['mfo']['singularity']['biometric'] = $value[65];
        $dataMfo['mfo']['singularity']['calculates'] = $value[66];

        $dataMfo['mfo']['sposob_get']['bank_card'] = $value[67];
        $dataMfo['mfo']['sposob_get']['iban'] = $value[68];
        $dataMfo['mfo']['sposob_get']['kazpost'] = $value[69];
        $dataMfo['mfo']['sposob_get']['cash'] = $value[70];
        $dataMfo['mfo']['sposob_get']['exceptions'] = $value[71];

        $dataMfo['mfo']['sposob_repayment']['online_bank_card'] = $value[72];
        $dataMfo['mfo']['sposob_repayment']['bank_transfer'] = $value[73];
        $dataMfo['mfo']['sposob_repayment']['kazpost'] = $value[74];
        $dataMfo['mfo']['sposob_repayment']['qiwi_terminals'] = $value[75];
        $dataMfo['mfo']['sposob_repayment']['qiwi_wallet'] = $value[76];
        $dataMfo['mfo']['sposob_repayment']['kassa24_terminals'] = $value[77];
        $dataMfo['mfo']['sposob_repayment']['kassa24_lk'] = $value[78];
        $dataMfo['mfo']['sposob_repayment']['plus24'] = $value[79];
        $dataMfo['mfo']['sposob_repayment']['money_market'] = $value[80];
        $dataMfo['mfo']['sposob_repayment']['cyberplat'] = $value[81];
        $dataMfo['mfo']['sposob_repayment']['halyk_bank'] = $value[82];
        $dataMfo['mfo']['sposob_repayment']['homebank'] = $value[83];
        $dataMfo['mfo']['sposob_repayment']['mobile_halyk_bank'] = $value[84];
        $dataMfo['mfo']['sposob_repayment']['jysan'] = $value[85];
        $dataMfo['mfo']['sposob_repayment']['office'] = $value[86];
        $dataMfo['mfo']['sposob_repayment']['qr_code'] = $value[87];


        $dataMfo['mfo']['requisites']['bin'] = $value[88];
        $dataMfo['mfo']['requisites']['full_legal_name_ru'] = $value[89];
        $dataMfo['mfo']['requisites']['full_legal_name_kz'] = $value[90];
        $dataMfo['mfo']['requisites']['full_legal_name_en'] = $value[91];
        $dataMfo['mfo']['requisites']['legal_address'] = $value[92];
        $dataMfo['mfo']['requisites']['index'] = $value[93];
        $dataMfo['mfo']['requisites']['date_registration'] = $value[94];
        $dataMfo['mfo']['requisites']['kbe'] = $value[95];
        $dataMfo['mfo']['requisites']['iik'] = $value[96];
        $dataMfo['mfo']['requisites']['bank'] = $value[97];
        $dataMfo['mfo']['requisites']['bik'] = $value[98];
        $dataMfo['mfo']['requisites']['knp'] = $value[99];
        $dataMfo['mfo']['requisites']['tax'] = $value[100];
        $dataMfo['mfo']['requisites']['rnn'] = $value[101];
        $dataMfo['mfo']['requisites']['okpo'] = $value[102];
        $dataMfo['mfo']['requisites']['kato'] = $value[103];
        $dataMfo['mfo']['requisites']['oked'] = $value[104];


        $dataMfo['mfo']['login']['lk'] = $value[105];
        $dataMfo['mfo']['login']['phone'] = $value[106];
        $dataMfo['mfo']['login']['email'] = $value[107];
        $dataMfo['mfo']['login']['inn'] = $value[108];


        $dataMfo['mfo']['clients']['rules'] = $value[109];
        $dataMfo['mfo']['clients']['faq'] = $value[110];
        $dataMfo['mfo']['clients']['request_call'] = $value[111];
        $dataMfo['mfo']['clients']['online_chat'] = $value[112];
        $dataMfo['mfo']['clients']['whatsApp'] = $value[113];
        $dataMfo['mfo']['clients']['viber'] = $value[114];
        $dataMfo['mfo']['clients']['telegram'] = $value[115];
        $dataMfo['mfo']['clients']['email_consultation'] = $value[116];
        $dataMfo['mfo']['clients']['call_consultation'] = $value[117];
        $dataMfo['mfo']['clients']['feedback'] = $value[118];
        $dataMfo['mfo']['clients']['facebook'] = $value[119];
        $dataMfo['mfo']['clients']['vk'] = $value[120];
        $dataMfo['mfo']['clients']['instagram'] = $value[121];
        $dataMfo['mfo']['clients']['twitter'] = $value[122];
        $dataMfo['mfo']['clients']['youtube'] = $value[123];
        $dataMfo['mfo']['clients']['odnoklasniki'] = $value[124];


        $dataMfo['mfo']['contacts']['address'] = $value[125];
        $dataMfo['mfo']['contacts']['version_ru'] = $value[126];
        $dataMfo['mfo']['contacts']['version_kz'] = $value[127];
        $dataMfo['mfo']['contacts']['phone_1'] = $value[128];
        $dataMfo['mfo']['contacts']['phone_2'] = $value[129];
        $dataMfo['mfo']['contacts']['phone_3'] = $value[130];
        $dataMfo['mfo']['contacts']['whatsApp'] = $value[131];
        $dataMfo['mfo']['contacts']['viber'] = $value[132];
        $dataMfo['mfo']['contacts']['telegram'] = $value[133];
        $dataMfo['mfo']['contacts']['skype'] = $value[134];
        $dataMfo['mfo']['contacts']['phone_time'] = $value[135];
        $dataMfo['mfo']['contacts']['email_1'] = $value[136];
        $dataMfo['mfo']['contacts']['email_2'] = $value[137];
        $dataMfo['mfo']['contacts']['maps_1'] = $value[138];
        $dataMfo['mfo']['contacts']['maps_2'] = $value[139];
//    echo '<pre>';    var_dump($dataMfo);die;
        if($mfoData){
            $mfoData->data_mfo = serialize($dataMfo);
            if($mfoData->save()){
                continue;
            } else{
                echo 'tut3';
                var_dump($mfoData->errors); die;
            }
        }
    }

    if(isset($value[159]) && $value[159] == '+'){
    $mfo = \common\models\MfoNew::find()->where(['url' => $value[143]])->one();
    $model = new \common\models\MfoNew();
    $model->name = $value[1];
    $data['info']['name'] = $value[1];
    $data['info']['city'] = $value[2];
    $data['info']['neizvestnost'] = $value[3];
    $data['info']['international_company'] = $value[4];
    $data['info']['general_manager'] = $value[5];
    $data['info']['country_central_office'] = $value[6];
    $data['info']['city_central_office'] = $value[7];
    $data['info']['parent_company'] = $value[8];
    $data['info']['website'] = $value[9];
    $data['info']['entity'] = $value[10];
    $data['info']['amfok'] = $value[11];
    $data['info']['fintech'] = $value[12];

    $data['license']['license_arrfr'] = $value[13];
    $data['license']['issue_date'] = $value[14];
    $data['license']['date_number_license'] = $value[15];
    $data['license']['link_license'] = $value[16];


    $data['financial_report']['report'] = $value[17];
    $data['financial_report']['result'] = $value[18];
    $data['financial_report']['year'] = $value[19];


    $data['features']['credit_individuals'] = $value[20];
    $data['features']['credit_legal'] = $value[21];
    $data['features']['ip'] = $value[22];
    $data['features']['consumer'] = $value[23];
    $data['features']['fast_order'] = $value[24];
    $data['features']['application_online'] = $value[25];
    $data['features']['money_online'] = $value[26];
    $data['features']['without_collateral'] = $value[27];
    $data['features']['car_deposit'] = $value[28];
    $data['features']['real_estate'] = $value[29];
    $data['features']['other'] = $value[30];
    $data['features']['microloan'] = $value[31];
    $data['features']['entrepreneurial'] = $value[32];
    $data['features']['agricultural_purposes'] = $value[33];
    $data['features']['damu_micro'] = $value[34];
    $data['features']['microcredit_business'] = $value[35];
    $data['features']['unsecured'] = $value[36];
    $data['features']['pensioners'] = $value[37];


    $data['conditions']['min_amount'] = $value[38];
    $data['conditions']['max_amount'] = $value[39];
    $data['conditions']['min_term'] = $value[40];
    $data['conditions']['max_term'] = $value[41];
    $data['conditions']['max_overpayment'] = $value[42];
    $data['conditions']['amount_first_microcredit'] = $value[43];
    $data['conditions']['stack_min_first_microcredit'] = $value[44];
    $data['conditions']['stack_max_first_microcredit'] = $value[45];
    $data['conditions']['stack_min_repeat_microcredit'] = $value[46];
    $data['conditions']['stack_max_repeat_microcredit'] = $value[47];
    $data['conditions']['gesv_min'] = $value[48];
    $data['conditions']['gesv_max'] = $value[49];
    $data['conditions']['term_extension_service'] = $value[50];
    $data['conditions']['min_age'] = $value[51];
    $data['conditions']['max_age'] = $value[52];

    $data['singularity']['new_customers'] = $value[53];
    $data['singularity']['quick_online_application'] = $value[54];
    $data['singularity']['round_the_clock'] = $value[55];
    $data['singularity']['full_repayment'] = $value[56];
    $data['singularity']['partial_repayment'] = $value[57];
    $data['singularity']['license_arrfr'] = $value[58];
    $data['singularity']['identity_card'] = $value[59];
    $data['singularity']['microcredit_without_collateral'] = $value[60];
    $data['singularity']['microcredit_without_guarantee'] = $value[61];
    $data['singularity']['written'] = $value[62];
    $data['singularity']['territory_kz'] = $value[63];
    $data['singularity']['loyal'] = $value[64];
    $data['singularity']['biometric'] = $value[65];
    $data['singularity']['calculates'] = $value[66];

    $data['sposob_get']['bank_card'] = $value[67];
    $data['sposob_get']['iban'] = $value[68];
    $data['sposob_get']['kazpost'] = $value[69];
    $data['sposob_get']['cash'] = $value[70];
    $data['sposob_get']['exceptions'] = $value[71];

    $data['sposob_repayment']['online_bank_card'] = $value[72];
    $data['sposob_repayment']['bank_transfer'] = $value[73];
    $data['sposob_repayment']['kazpost'] = $value[74];
    $data['sposob_repayment']['qiwi_terminals'] = $value[75];
    $data['sposob_repayment']['qiwi_wallet'] = $value[76];
    $data['sposob_repayment']['kassa24_terminals'] = $value[77];
    $data['sposob_repayment']['kassa24_lk'] = $value[78];
    $data['sposob_repayment']['plus24'] = $value[79];
    $data['sposob_repayment']['money_market'] = $value[80];
    $data['sposob_repayment']['cyberplat'] = $value[81];
    $data['sposob_repayment']['halyk_bank'] = $value[82];
    $data['sposob_repayment']['homebank'] = $value[83];
    $data['sposob_repayment']['mobile_halyk_bank'] = $value[84];
    $data['sposob_repayment']['jysan'] = $value[85];
    $data['sposob_repayment']['office'] = $value[86];
    $data['sposob_repayment']['qr_code'] = $value[87];


    $data['requisites']['bin'] = $value[88];
    $data['requisites']['full_legal_name_ru'] = $value[89];
    $data['requisites']['full_legal_name_kz'] = $value[90];
    $data['requisites']['full_legal_name_en'] = $value[91];
    $data['requisites']['legal_address'] = $value[92];
    $data['requisites']['index'] = $value[93];
    $data['requisites']['date_registration'] = $value[94];
    $data['requisites']['kbe'] = $value[95];
    $data['requisites']['iik'] = $value[96];
    $data['requisites']['bank'] = $value[97];
    $data['requisites']['bik'] = $value[98];
    $data['requisites']['knp'] = $value[99];
    $data['requisites']['tax'] = $value[100];
    $data['requisites']['rnn'] = $value[101];
    $data['requisites']['okpo'] = $value[102];
    $data['requisites']['kato'] = $value[103];
    $data['requisites']['oked'] = $value[104];


    $data['login']['lk'] = $value[105];
    $data['login']['phone'] = $value[106];
    $data['login']['email'] = $value[107];
    $data['login']['inn'] = $value[108];


    $data['clients']['rules'] = $value[109];
    $data['clients']['faq'] = $value[110];
    $data['clients']['request_call'] = $value[111];
    $data['clients']['online_chat'] = $value[112];
    $data['clients']['whatsApp'] = $value[113];
    $data['clients']['viber'] = $value[114];
    $data['clients']['telegram'] = $value[115];
    $data['clients']['email_consultation'] = $value[116];
    $data['clients']['call_consultation'] = $value[117];
    $data['clients']['feedback'] = $value[118];
    $data['clients']['facebook'] = $value[119];
    $data['clients']['vk'] = $value[120];
    $data['clients']['instagram'] = $value[121];
    $data['clients']['twitter'] = $value[122];
    $data['clients']['youtube'] = $value[123];
    $data['clients']['odnoklasniki'] = $value[124];


    $data['contacts']['address'] = $value[125];
    $data['contacts']['version_ru'] = $value[126];
    $data['contacts']['version_kz'] = $value[127];
    $data['contacts']['phone_1'] = $value[128];
    $data['contacts']['phone_2'] = $value[129];
    $data['contacts']['phone_3'] = $value[130];
    $data['contacts']['whatsApp'] = $value[131];
    $data['contacts']['viber'] = $value[132];
    $data['contacts']['telegram'] = $value[133];
    $data['contacts']['skype'] = $value[134];
    $data['contacts']['phone_time'] = $value[135];
    $data['contacts']['email_1'] = $value[136];
    $data['contacts']['email_2'] = $value[137];
    $data['contacts']['maps_1'] = $value[138];
    $data['contacts']['maps_2'] = $value[139];

    $data['seo']['h1'] = $value[144];
    $data['seo']['title'] = $data['seo']['h1'].' — smartzaim.kz';
    $data['seo']['description'] = $value[146];

    $data['seo']['login_h1'] = $value[147].' '.$data['seo']['h1'];
    $data['seo']['login_title'] = 'Личный кабинет '.$data['seo']['h1'].' '.$value[148].' — smartzaim.kz';
    $data['seo']['login_description'] = 'Личный кабинет '.$data['seo']['h1'].' '.$value[149];

    $data['seo']['reviews_h1'] = $value[150].' '.$data['seo']['h1'];
    $data['seo']['reviews_title'] = $data['seo']['h1'].''.$value[151].' — smartzaim.kz';
    $data['seo']['reviews_description'] = 'Отзывы о '.$data['seo']['h1'].' '.$value[152];

    $data['seo']['clients_h1'] = $value[153].' '.$data['seo']['h1'];
    $data['seo']['clients_title'] = 'Горячая линия '.$data['seo']['h1'].''.$value[154].' — smartzaim.kz';
    $data['seo']['clients_description'] = 'Горячая линия '.$data['seo']['h1'].' '.$value[155];

    $data['seo']['contacts_h1'] = $value[156].' '.$data['seo']['h1'];
    $data['seo']['contacts_title'] = $data['seo']['h1'].''.$value[157].' — smartzaim.kz';
    $data['seo']['contacts_description'] =$data['seo']['h1'].' '.$value[158];

    $model->data = serialize($data);
    $model->url = $value[143];
    if($mfo){
        $mfo->name = $value[1];
        $mfo->url = $value[143];
        $mfo->data = serialize($data);
        if($mfo->save()){
            $countUpdate++;
            continue;
        } else {
            var_dump($mfo->errors); die;
        }
    }

    if($model->save()){
        $countSave++;
        echo '<h1>Обновление прошло успешно</h1>';
    } else {
        var_dump($model->errors); die;
    }
    }
}
echo '<h1>Обновлено '.$countUpdate.'</h1><br>';
echo '<h1>Добавлено новых  '.$countSave.'</h1>';