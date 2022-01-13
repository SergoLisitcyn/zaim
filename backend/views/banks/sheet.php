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
//$spreadsheetId = '1bcGLtmGQuafRszK_7gw28Hq6V_JCLUTHpeCCqVOUWRg';
$spreadsheetId = '17qVw_wwyMjRlTDRHYDdpIen9YmGBz-16IijD98fWH0E';
$response = $service->spreadsheets->get($spreadsheetId);

// Получение свойств таблицы
$spreadsheetProperties = $response->getProperties();
// Обход всех листов
foreach($response->getSheets() as $sheet) {
    $sheetProperties = $sheet->getProperties();
}

$range = $sheetProperties->title;
$response = $service->spreadsheets_values->get($spreadsheetId, 'Лист1');

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
    if(isset($value[62]) && $value[62] == '+'){
    $banks = \common\models\Banks::find()->where(['name' => $value[1]])->one();
    $model = new \common\models\Banks();
    $model->name = $value[1];
    $data['info']['name'] = $value[1];
    $data['info']['city'] = $value[2];
    $data['info']['year_foundation'] = $value[3];
    $data['info']['license_number'] = $value[4];
    $data['info']['license_data'] = $value[5];
    $data['info']['chairman'] = $value[6];
    $data['info']['corporate_name_rus'] = $value[7];
    $data['info']['corporate_name_kz'] = $value[8];
    $data['info']['corporate_name_eng'] = $value[9];
    $data['info']['short_name'] = $value[10];
    $data['info']['url'] = $value[11];
    $data['info']['controll_shareholder'] = $value[12];
    $data['rating']['sp_rating'] = $value[13];
    $data['rating']['sp_prediction'] = $value[14];
    $data['rating']['fitch_rating'] = $value[15];
    $data['rating']['fitch_prediction'] = $value[16];
    $data['rating']['moodys_rating'] = $value[17];
    $data['rating']['moodys_prediction'] = $value[18];
    $data['services']['credit_card'] = $value[19];
    $data['services']['credit_cash'] = $value[20];
    $data['services']['credit_auto'] = $value[21];
    $data['services']['ipoteka'] = $value[22];
    $data['financial']['date'] = $value[23];
    $data['financial']['authorized_capital'] = $value[24];
    $data['financial']['equity'] = $value[25];
    $data['financial']['total_assets'] = $value[26];
    $data['financial']['total_liabilities'] = $value[27];
    $data['financial']['deposits'] = $value[28];
    $data['financial']['npl'] = $value[29];
    $data['financial']['net_profit'] = $value[30];
    $data['financial']['roa'] = $value[31];
    $data['financial']['roe'] = $value[32];
    $data['requisites']['bin'] = $value[33];
    $data['requisites']['bik_swift'] = $value[34];
    $data['requisites']['uumo'] = $value[35];
    $data['requisites']['vat_registration_certificate'] = $value[36];
    $data['codes']['okpo'] = $value[37];
    $data['codes']['lei'] = $value[38];
    $data['codes']['sic'] = $value[39];
    $data['codes']['reuters'] = $value[40];
    $data['contacts']['mailing_address'] = $value[41];
    $data['contacts']['phone_individuals'] = $value[42];
    $data['contacts']['phone_legal'] = $value[43];
    $data['contacts']['phone_city_1'] = $value[44];
    $data['contacts']['phone_city_2'] = $value[45];
    $data['contacts']['phone_city_3'] = $value[46];
    $data['contacts']['email'] = $value[47];
    $data['contacts']['maps'] = $value[48];
    $data['contacts']['url'] = $value[49];
    $data['contacts']['h1'] = $value[50];
//    $data['contacts']['title'] = $value[51];
//    $data['contacts']['description'] = $value[52];
    $model->data = $data;
    $model->url = $value[49];
    if($banks){
        $banks->name = $value[1];
        $banks->url = $value[49];
        $banks->data = $data;
        if($banks->save()){
            $countUpdate++;
            continue;
        } else {
            var_dump($banks->errors); die;
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