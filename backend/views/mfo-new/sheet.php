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
    if($key == 0 || $key == 1 || $key == 2) continue;
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