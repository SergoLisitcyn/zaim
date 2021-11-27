<?php
// Подключаем клиент Google таблиц
require __DIR__ . '../../../../vendor/autoload.php';

// Наш ключ доступа к сервисному аккаунту
$googleAccountKeyFilePath = __DIR__ . '/service_key.json';
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
$spreadsheetId = '1R_sI1XHQJqX-yCI8H7nsapa6c0mSLy2z5rAgIwkhjgI';
$response = $service->spreadsheets->get($spreadsheetId);

// Получение свойств таблицы
$spreadsheetProperties = $response->getProperties();
// Обход всех листов
foreach($response->getSheets() as $sheet) {
    $sheetProperties = $sheet->getProperties();
}

$range = $sheetProperties->title;
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
if($response['values']){
    Yii::$app->db->createCommand()->truncateTable('links')->execute();
} else {
    echo '<h1>Таблица пуста</h1>';
    die;
}
foreach ($response['values']  as $key => $value){
    if($key == 0) continue;
    $model = new \common\models\Links();
    if(!$value[0] || !$value[1]){
        echo '<h1>В таблице есть незаполненные поля</h1>';
        die;
    }
    $model->ru = $value[0];
    $model->kz = $value[1];
    $model->save();
}
echo '<h1>Обновление прошло успешно</h1>';