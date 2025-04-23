<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\FileHelper;
use yii\web\HttpException;
use yii\web\UploadedFile;

/**
 * This is the model class for table "banks".
 *
 * @property int $id
 * @property string|null $data
 * @property string|null $data_kz
 * @property string|null $image
 * @property string|null $desc
 * @property string|null $desc_kz
 * @property string|null $content
 * @property string|null $content_kz
 * @property string|null $ustav
 * @property string $name
 * @property string $url
 * @property int $sort
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Banks extends \yii\db\ActiveRecord
{
    public $mainfile;
    public $ustavfile;

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $imageSquareFile = UploadedFile::getInstance($this, 'mainfile');
        $ustavSquareFile = UploadedFile::getInstance($this, 'ustavfile');
        if ($imageSquareFile) {
            $directory = Yii::getAlias('@frontend/web/uploads/images/banks/main-image') . DIRECTORY_SEPARATOR;
            if (!is_dir($directory)) {
                FileHelper::createDirectory($directory);
            }

            $uid = date('YmdHs').Yii::$app->security->generateRandomString(6);
            $fileName = $uid . '-banks_main_image.' . $imageSquareFile->extension;
            $filePath = $directory . $fileName;
            if ($imageSquareFile->saveAs($filePath)) {
                $path = '/uploads/images/banks/main-image/' . $fileName;

                @unlink(Yii::getAlias('@frontend/web') . $this->mainfile);
                $this->setAttribute('image', $path);
                $this->save();
            }
        }
        if ($ustavSquareFile) {
            $directoryUstav = Yii::getAlias('@frontend/web/uploads/images/banks/ustavfile') . DIRECTORY_SEPARATOR;
            if (!is_dir($directoryUstav)) {
                FileHelper::createDirectory($directoryUstav);
            }

            $uid = date('YmdHs').Yii::$app->security->generateRandomString(6);
            $fileName = $uid . '-ustavfile.' . $ustavSquareFile->extension;
            $filePath = $directoryUstav . $fileName;
            if ($ustavSquareFile->saveAs($filePath)) {
                $path = '/uploads/images/banks/ustavfile/' . $fileName;

                @unlink(Yii::getAlias('@frontend/web') . $this->ustavfile);
                $this->setAttribute('ustav', $path);
                $this->save();
            }
        }
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data','data_kz'], 'safe'],
            [['sort', 'status'], 'integer'],
            [['name','url'], 'required'],
            [['image','name','url','ustav'], 'string', 'max' => 255],
            [['desc','content','content_kz','desc_kz'], 'string'],
            [['mainfile','ustavfile'], 'file'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data' => 'Data',
            'data_kz' => 'Data KZ',
            'image' => 'Логотип',
            'sort' => 'Сортировка',
            'status' => 'Статус',
            'name' => 'Название банка',
            'desc' => 'Описание банка на русском',
            'desc_kz' => 'Описание банка на казахском',
            'url' => 'Url',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'ustav' => 'Устав',
            'mainfile' => 'Логотип',
            'ustavfile' => 'Устав',
            'content' => 'Контент на русском',
            'content_kz' => 'Контент на казахском',
        ];
    }

    public static function getBanksUpdate($version)
    {
        $googleAccountKeyFilePath = __DIR__ . '/../../backend/views/banks/smartzaimcrm-59bd2db3d605.json';
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $googleAccountKeyFilePath);

        $client = new \Google_Client();
        $client->useApplicationDefaultCredentials();
        $client->addScope('https://www.googleapis.com/auth/spreadsheets');

        $service = new \Google_Service_Sheets($client);
        $spreadsheetId = Yii::$app->params['banksSheet'];
        $response = $service->spreadsheets->get($spreadsheetId);
        $spreadsheetProperties = $response->getProperties();
        foreach($response->getSheets() as $sheet) {
            $sheetProperties = $sheet->getProperties();
        }
        $range = $sheetProperties->title;
        $response = $service->spreadsheets_values->get($spreadsheetId, $version);
//        $response = $service->spreadsheets_values->get($spreadsheetId, 'KZ');

        $data = [];
        $countSave = 0;
        $countUpdate = 0;
        foreach ($response['values']  as $key => $value){
            $bankData = BankData::find()->where(['name' => 'Data'])->one();
            $modelBankData = new BankData();
            if($key == 0){
                $dataMenu['block_1'] = $value[1];
                $dataMenu['block_2'] = $value[23];
                $dataMenu['block_3'] = $value[33];
                $dataMenu['block_4'] = $value[41];
                if($bankData){
                    if($version == 'RU') $bankData->data_menu_ru = serialize($dataMenu);
                    if($version == 'KZ') $bankData->data_menu_kz = serialize($dataMenu);

                    if($bankData->save()){
                        continue;
                    } else {
                        echo 'Ошибка - '.$key;
                        var_dump($bankData->errors); die;
                    }
                } else {
                    $modelBankData->name = 'Data';
                    if($version == 'RU') $modelBankData->data_menu_ru = serialize($dataMenu);
                    if($version == 'KZ') $modelBankData->data_menu_kz = serialize($dataMenu);
                    if($modelBankData->save()){
                        continue;
                    } else {
                        echo 'Ошибка - '.$key;
                        var_dump($modelBankData->errors); die;
                    }
                }
            }
            if($key == 1){
                $dataTag['main_info'] = $value[1];
                $dataTag['rating'] = $value[13];
                $dataTag['uslugi'] = $value[19];
                $dataTag['requisites'] = $value[33];
                $dataTag['codes'] = $value[37];
                if($bankData){
                    if($version == 'RU') $bankData->data_tag_ru = serialize($dataTag);
                    if($version == 'KZ') $bankData->data_tag_kz = serialize($dataTag);
                    if($bankData->save()){
                        continue;
                    } else {
                        echo 'Ошибка - '.$key;
                        var_dump($bankData->errors); die;
                    }
                }
            }

            if($key == 2){
                $dataBanks = self::getBanksDataForMenu($value);
                if($bankData){
                    if($version == 'RU') $bankData->data_bank_ru = $dataBanks;
                    if($version == 'KZ') $bankData->data_bank_kz = $dataBanks;
                    if($bankData->save()){
                        continue;
                    } else{
                        echo 'Ошибка - '.$key;
                        var_dump($bankData->errors); die;
                    }
                }
            }

            if(isset($value[62]) && $value[62] == '+'){
                $banks = self::find()->where(['url' => $value[49]])->one();
                if($version == 'RU' && !$banks){
                    $model = new self();
                    $model->name = $value[1];
                }
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
                $data['h1'] = $value[50];
                $data['title'] = $value[51];
                $data['description'] = $value[52];
                $data['financial']['h1'] = $value[53].' '.$value[50];
                $data['financial']['title'] = 'Финнасовые показатели '.$value[50].$value[54].' '.'— smartzaim.kz';
                $data['financial']['description'] = 'Финнасовые показатели '.$value[50].', '.$value[55];
                $data['requisites']['h1'] = $value[56].' '.$value[50];
                $data['requisites']['title'] = 'Реквизиты и коды '.$value[50].' '.$value[57];
                $data['requisites']['description'] = 'Реквизиты и коды '.$value[50].', '.$value[58];
                $data['contacts']['h1'] = $value[59].' '.$value[50];
                $data['contacts']['title'] = $value[50].' '.$value[60].' '.'— smartzaim.kz';
                $data['contacts']['description'] = 'Отзывы о '.$value[50].' '.$value[61];
                if($version == 'KZ'){
                    $data['sale']['text_top'] = $value[64];
                    $data['sale']['text_bottom'] = $value[65];
                    $data['sale']['url'] = $value[66];
                    $data['sale']['active'] = $value[67];
                }


                if($version == 'RU' && !$banks){
                    $model->data = serialize($data);
                    $model->url = $value[49];
                }
                if($banks){
//                    if($version == 'RU' && !$banks){
//                        $banks->name = $banks->name;
//                    }

//                    $banks->url = $value[49];
                    if($version == 'RU'){
                        $banks->data = serialize($data);
                    }
                    if($version == 'KZ'){
                        $banks->data_kz = serialize($data);
                    }

                    if($banks->save()){
                        $countUpdate++;
                        continue;
                    } else {
                        echo 'Ошибка - '.$key;
                        var_dump($banks->errors); die;
                    }
                }
                if($version == 'RU' && !$banks){
                    if($model->save()){
                        $countSave++;
                    } else {
                        echo 'Ошибка - '.$key;
                        var_dump($model->errors); die;
                    }
                }
            }
        }
        return [
            'countSave' => $countSave,
            'countUpdate' => $countUpdate,
        ];
    }

    public static function getBanksDataForMenu($value): string
    {
        $data['banks']['info']['name'] = $value[1];
        $data['banks']['info']['city'] = $value[2];
        $data['banks']['info']['year_foundation'] = $value[3];
        $data['banks']['info']['license_number'] = $value[4];
        $data['banks']['info']['license_data'] = $value[5];
        $data['banks']['info']['chairman'] = $value[6];
        $data['banks']['info']['corporate_name_rus'] = $value[7];
        $data['banks']['info']['corporate_name_kz'] = $value[8];
        $data['banks']['info']['corporate_name_eng'] = $value[9];
        $data['banks']['info']['short_name'] = $value[10];
        $data['banks']['info']['url'] = $value[11];
        $data['banks']['info']['controll_shareholder'] = $value[12];
        $data['banks']['rating']['sp_rating'] = $value[13];
        $data['banks']['rating']['sp_prediction'] = $value[14];
        $data['banks']['rating']['fitch_rating'] = $value[15];
        $data['banks']['rating']['fitch_prediction'] = $value[16];
        $data['banks']['rating']['moodys_rating'] = $value[17];
        $data['banks']['rating']['moodys_prediction'] = $value[18];
        $data['banks']['services']['credit_card'] = $value[19];
        $data['banks']['services']['credit_cash'] = $value[20];
        $data['banks']['services']['credit_auto'] = $value[21];
        $data['banks']['services']['ipoteka'] = $value[22];
        $data['banks']['financial']['date'] = $value[23];
        $data['banks']['financial']['authorized_capital'] = $value[24];
        $data['banks']['financial']['equity'] = $value[25];
        $data['banks']['financial']['total_assets'] = $value[26];
        $data['banks']['financial']['total_liabilities'] = $value[27];
        $data['banks']['financial']['deposits'] = $value[28];
        $data['banks']['financial']['npl'] = $value[29];
        $data['banks']['financial']['net_profit'] = $value[30];
        $data['banks']['financial']['roa'] = $value[31];
        $data['banks']['financial']['roe'] = $value[32];
        $data['banks']['requisites']['bin'] = $value[33];
        $data['banks']['requisites']['bik_swift'] = $value[34];
        $data['banks']['requisites']['uumo'] = $value[35];
        $data['banks']['requisites']['vat_registration_certificate'] = $value[36];
        $data['banks']['codes']['okpo'] = $value[37];
        $data['banks']['codes']['lei'] = $value[38];
        $data['banks']['codes']['sic'] = $value[39];
        $data['banks']['codes']['reuters'] = $value[40];
        $data['banks']['contacts']['mailing_address'] = $value[41];
        $data['banks']['contacts']['phone_individuals'] = $value[42];
        $data['banks']['contacts']['phone_legal'] = $value[43];
        $data['banks']['contacts']['phone_city_1'] = $value[44];
        $data['banks']['contacts']['phone_city_2'] = $value[45];
        $data['banks']['contacts']['phone_city_3'] = $value[46];
        $data['banks']['contacts']['email'] = $value[47];
        $data['banks']['contacts']['maps'] = $value[48];
        $data['banks']['contacts']['url'] = $value[49];

        return serialize($data);
    }

    /**
     * @param $url string
     * @param $version string
     * @return array
     * @throws HttpException
     */
    public static function getBankData(string $url, string $version = 'KZ'){
        if(!$url) throw new HttpException(404, 'Страница не существует.');

        $bank = Banks::find()->where(['status' => 1, 'url' => $url])->one();
        if(!$bank) throw new HttpException(404, 'Страница не существует.');

        $bankData = BankData::find()->where(['name' => 'Data'])->one();

        $data = null;
        $dataMenu = null;
        $dataBank = null;
        $dataTag = null;

        if($bankData){
            $dataMenu = unserialize($bankData->data_menu_ru);
            $dataBank = unserialize($bankData->data_bank_ru);
            $dataTag = unserialize($bankData->data_tag_ru);
            $data = unserialize($bank->data);
            if($version == 'KZ'){
                $dataMenu = unserialize($bankData->data_menu_kz);
                $dataBank = unserialize($bankData->data_bank_kz);
                $dataTag = unserialize($bankData->data_tag_kz);
                $data = unserialize($bank->data_kz);
            }
        }

        return [
            'model' => $bank,
            'data' => $data,
            'version' => $version,
            'bankData' => $bankData,
            'dataMenu' => $dataMenu,
            'dataBank' => $dataBank,
            'dataTag' => $dataTag,
        ];
    }
}
