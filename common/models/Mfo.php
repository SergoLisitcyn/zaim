<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Exception;
use \yii\helpers\ArrayHelper;
use yii\helpers\FileHelper;
use yii\web\HttpException;
use yii\web\UploadedFile;

/**
 * This is the model class for table "mfo".
 *
 * @property int $id
 * @property string $mfo_name
 * @property string $mfo_name_kz
 * @property string $city_kz
 * @property float|null $rating
 * @property string $srok
 * @property string $sum
 * @property string $stavka
 * @property int|null $odobrenie
 * @property string $rasmotrenie
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $bin
 * @property string|null $website
 * @property string|null $logo
 * @property string|null $certificate
 * @property string|null $video
 * @property string|null $rekvisit
 * @property string|null $data_ru
 * @property string|null $data_kz
 * @property int|null $akcii
 * @property int|null $home_page
 * @property string|null $link_offer
 * @property string|null $about_company
 * @property string|null $content
 * @property string $title
 * @property string|null $description
 * @property string|null $keywords
 * @property int|null $status
 * @property int $created_at
 * @property int $updated_at
 * @property string|null $type_credit_array
 * @property string $url
 * @property int|null $sort
 * @property string|null $text_video
 * @property int|null $max_sum_calc
 * @property int|null $min_sum_calc
 * @property int|null $max_term_calc
 * @property int|null $min_term_calc
 * @property int|null $advanced_repayment
 * @property int|null $extension_loan
 * @property string|null $mfo_city_array
 * @property string|null $srok_new_client
 * @property string|null $sum_new_client
 * @property string|null $stavka_new_client
 * @property string|null $odobrenie_new_client
 * @property string|null $rasmotrenie_new_client
 * @property string|null $srok_for_client
 * @property string|null $sum_for_client
 * @property string|null $stavka_for_client
 * @property string|null $odobrenie_for_client
 * @property string|null $rasmotrenie_for_client
 * @property string|null $login_content
 * @property string|null $login_link
 * @property string|null $gesv
 */
class Mfo extends ActiveRecord
{
    public $type_credit_arr;
    public $mfo_city_arr;
    public $logo_file;
    public $certificate_file;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mfo';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mfo_name', 'stavka', 'title', 'url'], 'required'],
            [['rating'], 'number'],
            [['odobrenie', 'akcii', 'home_page', 'status', 'created_at', 'updated_at', 'sort', 'max_sum_calc',
                'min_sum_calc', 'max_term_calc', 'min_term_calc', 'advanced_repayment', 'extension_loan'], 'integer'],
            [['rekvisit', 'about_company', 'content', 'login_content','data_ru','data_kz'], 'string'],
            [['mfo_name', 'srok', 'sum', 'stavka', 'rasmotrenie', 'phone', 'email', 'website', 'logo', 'video',
                'link_offer', 'title', 'description', 'keywords', 'type_credit_array', 'url', 'text_video',
                'mfo_city_array', 'srok_new_client', 'sum_new_client', 'stavka_new_client', 'odobrenie_new_client',
                'rasmotrenie_new_client', 'srok_for_client', 'sum_for_client', 'stavka_for_client',
                'odobrenie_for_client', 'rasmotrenie_for_client', 'login_link','gesv','certificate',
                'mfo_name_kz','bin','city_kz'], 'string', 'max' => 255],
            [['type_credit_arr','mfo_city_arr'], 'safe'],
            [['logo_file','certificate_file'], 'file'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mfo_name' => 'Название МФО',
            'rating' => 'Рейтинг',
            'srok' => 'На срок',
            'sum' => 'Сумма (тнг)',
            'stavka' => 'Ставка',
            'odobrenie' => 'Одобрение',
            'rasmotrenie' => 'Рассмотрение',
            'phone' => 'Номер телефона',
            'email' => 'Email',
            'website' => 'Название сайта',
            'logo' => 'Логотип МФО',
            'certificate' => 'Лицензия',
            'certificate_file' => 'Лицензия',
            'video' => 'Ссылка на видео',
            'rekvisit' => 'Реквизиты',
            'akcii' => 'Есть акция?',
            'home_page' => 'Отображать на главной странице',
            'link_offer' => 'Партнерская ссылка',
            'about_company' => 'О компании',
            'content' => 'Описание компании',
            'login_content' => 'Текст для страницы логина',
            'title' => 'Title',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'status' => 'Статус',
            'type_credit_arr' => 'Виды кредита',
            'mfo_city_arr' => 'Города',
            'typeAsString' => 'Тэги',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'logo_file' => 'Логотип',
            'sort' => 'Сортировка',
            'url' => 'Постоянная ссылка',
            'max_sum_calc' => 'Максимальная сумма кредита',
            'min_sum_calc' => 'Минимальная сумма кредита',
            'max_term_calc' => 'Максимальный срок кредита',
            'min_term_calc' => 'Минимальный срок кредита',
            'advanced_repayment' => 'Досрочное погашение',
            'extension_loan' => 'Продление (пролонгация) кредита',
            'text_video' => 'Заголовок видео',
            'srok_new_client' => 'Срок для нового клиента',
            'sum_new_client' => 'Сумма для нового клиента',
            'stavka_new_client' => 'Ставка для нового клиента',
            'odobrenie_new_client' => 'Одобрение для нового клиента',
            'rasmotrenie_new_client' => 'Рассмотрение для нового клиента',
            'srok_for_client' => 'Срок для существуещего клиента',
            'sum_for_client' => 'Сумма для существуещего клиента',
            'stavka_for_client' => 'Ставка для существуещего клиента',
            'odobrenie_for_client' => 'Одобрение для существуещего клиента',
            'rasmotrenie_for_client' => 'Рассмотрение для существуещего клиента',
            'login_link' => 'Ссылка на личный кабинет',
            'gesv' => 'ГЭСВ',
            'mfo_name_kz' => 'Название на КЗ',
            'bin' => 'БИН',
            'city_kz' => 'Город',
        ];
    }
    public function afterFind()
    {
        parent::afterFind();
        foreach ($this->type as $key => $value){
            $this->type_credit_arr[$value['parent_id']] = $this->type;
        }

        $this->mfo_city_arr = $this->city;
    }

    public function getMfo(){
        return $this->hasMany(MfoTypeCredit::className(),['mfo_id'=>'id']);
    }

    public function getType()
    {
        return $this->hasMany(TypeCredit::className(), ['id' => 'type_credit_id'])->via('mfo');
    }

    public function getTypeAsString()
    {
        $arr = ArrayHelper::map($this->type,'id','name');
        return implode(', ',$arr);
    }

    public function getMfocity(){
        return $this->hasMany(MfoCity::className(),['mfo_id'=>'id']);
    }

    public function getCity()
    {
        return $this->hasMany(City::className(), ['id' => 'city_id'])->via('mfocity');
    }

    public function getCityAsString()
    {
        $arr = ArrayHelper::map($this->city,'id','name');
        return implode(', ',$arr);
    }

    public static function getSale($id)
    {
        $sale = Sale::find()->where(['mfo_id' => $id])->andWhere(['>=', 'srok_do', date('Y-m-d H:i:s')])->all();
        if($sale){
            return true;
        } else {
            return false;
        }
    }


    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        $arr = ArrayHelper::map($this->type,'id','id');
        if($this->type_credit_arr){
            foreach ($this->type_credit_arr as $key => $value){

                if($value){
                    foreach ($value as $item){
                        if(is_numeric($item)){
                            $find = MfoTypeCredit::find()
                                ->where(['type_credit_id' => $item])
                                ->andWhere(['mfo_id' => $this->id])
                                ->all();

                            if($item && empty($find)){
                                $model = new MfoTypeCredit();
                                $model->mfo_id = $this->id;
                                $model->type_credit_id = $item;
                                $model->save();
                            }
                            if(isset($arr[$item])){
                                unset($arr[$item]);
                            }
                        }
                    }
                }
            }
        }


        $arrCity = ArrayHelper::map($this->city,'id','id');
        if($this->mfo_city_arr){
            foreach ($this->mfo_city_arr as $one){
                if(is_numeric($one)){
                    if(!in_array($one,$arrCity)){
                        $model = new MfoCity();
                        $model->mfo_id = $this->id;
                        $model->city_id = $one;
                        $model->save();
                    }
                    if(isset($arrCity[$one])){
                        unset($arrCity[$one]);
                    }
                }
            }

        }
        if($changedAttributes){
            MfoTypeCredit::deleteAll(['type_credit_id'=>$arr]);
        }
        if($changedAttributes){
            MfoCity::deleteAll(['city_id'=>$arrCity]);
        }

        $imageSquareFile = UploadedFile::getInstance($this, 'logo_file');
        if ($imageSquareFile) {
            $directory = Yii::getAlias('@frontend/web/uploads/images/mfo/logo') . DIRECTORY_SEPARATOR;
            if (!is_dir($directory)) {
                FileHelper::createDirectory($directory);
            }

            $uid = date('YmdHs').Yii::$app->security->generateRandomString(6);
            $fileName = $uid . '-mfo_logo.' . $imageSquareFile->extension;
            $filePath = $directory . $fileName;
            if ($imageSquareFile->saveAs($filePath)) {
                $path = '/uploads/images/mfo/logo/' . $fileName;

                @unlink(Yii::getAlias('@frontend/web') . $this->logo_file);
                $this->setAttribute('logo', $path);
                $this->save();
            }
        }
        $certificateFile = UploadedFile::getInstance($this, 'certificate_file');
        if ($certificateFile) {
            $directory = Yii::getAlias('@frontend/web/uploads/images/mfo/certificate') . DIRECTORY_SEPARATOR;
            if (!is_dir($directory)) {
                FileHelper::createDirectory($directory);
            }

            $uid = date('YmdHs').Yii::$app->security->generateRandomString(6);
            $fileName = $uid . '-mfo_certificate.' . $certificateFile->extension;
            $filePath = $directory . $fileName;
            if ($certificateFile->saveAs($filePath)) {
                $path = '/uploads/images/mfo/certificate/' . $fileName;

                @unlink(Yii::getAlias('@frontend/web') . $this->certificate_file);
                $this->setAttribute('certificate', $path);
                $this->save();
            }
        }
    }

    public static function getMfoUpdate($list,$version)
    {
        $googleAccountKeyFilePath = __DIR__ . '/../../backend/views/mfo-new/smartzaimcrm-59bd2db3d605.json';
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $googleAccountKeyFilePath);

        $client = new \Google_Client();
        $client->useApplicationDefaultCredentials();
        $client->addScope('https://www.googleapis.com/auth/spreadsheets');

        $service = new \Google_Service_Sheets($client);
        $spreadsheetId = Yii::$app->params['mfoSheet'];
        $response = $service->spreadsheets->get($spreadsheetId);
        $spreadsheetProperties = $response->getProperties();
        foreach($response->getSheets() as $sheet) {
            $sheetProperties = $sheet->getProperties();
        }
        $range = $sheetProperties->title;
        $response = $service->spreadsheets_values->get($spreadsheetId, $list);
        $data = [];
        $countSave = 0;
        $countUpdate = 0;
        foreach ($response['values']  as $key => $value){
            $mfoData = MfoData::find()->where(['name' => 'Data'])->one();
            $modelMfoData = new MfoData();
            if($key == 0){
                $dataMenu['block_1'] = $value[1];
                $dataMenu['block_2'] = $value[105];
                $dataMenu['block_3'] = $value[109];
                $dataMenu['block_4'] = $value[125];
                if($mfoData){
                    if($version == 'RU') $mfoData->data_menu = serialize($dataMenu);
                    if($version == 'KZ') $mfoData->data_menu_kz = serialize($dataMenu);

                    if($mfoData->save()){
                        continue;
                    } else {
                        echo 'Ошибка1 - '.$key;
                        var_dump($mfoData->errors); die;
                    }
                } else {
                    $modelMfoData->name = 'Data';
                    if($version == 'RU') $modelMfoData->data_menu = serialize($dataMenu);
                    if($version == 'KZ') $modelMfoData->data_menu_kz = serialize($dataMenu);
                    if($modelMfoData->save()){
                        continue;
                    } else {
                        echo 'Ошибка2 - '.$key;
                        var_dump($modelMfoData->errors); die;
                    }
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
                    if($version == 'RU') $mfoData->data_tag = serialize($dataTag);
                    if($version == 'KZ') $mfoData->data_tag_kz = serialize($dataTag);
                    if($mfoData->save()){
                        continue;
                    } else {
                        echo 'Ошибка3 - '.$key;
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

                if($mfoData){
                    if($version == 'RU') $mfoData->data_mfo = serialize($dataMfo);
                    if($version == 'KZ') $mfoData->data_mfo_kz = serialize($dataMfo);
                    if($mfoData->save()){
                        continue;
                    } else{
                        echo 'Ошибка4 - '.$key;
                        var_dump($mfoData->errors); die;
                    }
                }
            }

            if(isset($value[159]) && $value[159] == '+'){
                $mfo = Mfo::find()->where(['url' => $value[143]])->one();
                $model = new Mfo();
                $model->mfo_name = $value[1];
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
//                $data['seo']['description'] = $value[146];

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
                if(isset($value[161]) && $value[161]){
                    $data['banklink'] = $value[161];
                }

                if($version == 'RU' && !$mfo){
                    $model->status = 0;
                    if($data['conditions']['stack_min_first_microcredit']){
                        $model->stavka = 'от '.$data['conditions']['stack_min_first_microcredit'];
                    } else {
                        $model->stavka = '0';
                    }
                    $model->title = 'test';
                    $model->data_ru = serialize($data);

//                    Досрочное погашение
                    $model->advanced_repayment = 0;
                    if($data['singularity']['full_repayment']) $model->advanced_repayment = 1;

//                    Продление (пролонгация) кредита
                    $model->extension_loan = 0;
                    if($data['conditions']['term_extension_service']) $model->extension_loan = 1;

                    $model->url = $value[143];
                }

                if($version == 'KZ' && !$mfo){
                    $model->srok = $data['conditions']['min_term'].' - '.$data['conditions']['max_term'];

                    if($data['conditions']['stack_min_first_microcredit']){
                        $model->stavka = 'от '.$data['conditions']['stack_min_first_microcredit'];
                    } else {
                        $model->stavka = '0';
                    }

                    if ($data['info']['city']){
                        $model->city_kz = $data['info']['city'];
                    }

                    if($data['requisites']['bin']){
                        $model->bin = $data['requisites']['bin'];
                    }
                    if($data['seo']['h1']){
                        $model->mfo_name_kz = $data['seo']['h1'];
                    }
                    if($data['conditions']['min_amount'] && $data['conditions']['max_amount']){
                        $model->sum = $data['conditions']['min_amount'].' - '.$data['conditions']['max_amount'];
                    }
                    if(!$data['conditions']['min_amount'] && $data['conditions']['max_amount']){
                        $model->sum = $data['conditions']['max_amount'];
                    }
                    if($data['conditions']['min_amount'] && !$data['conditions']['max_amount']){
                        $model->sum = $data['conditions']['min_amount'];
                    }

                    $data['conditions']['min_amount'] = $value[38];
                    $data['conditions']['max_amount'] = $value[39];
                    $model->gesv = $data['conditions']['gesv_min'];
                    $model->sum_new_client = $data['conditions']['amount_first_microcredit'];
                    $model->stavka_new_client = $data['conditions']['stack_min_first_microcredit'];
                }

                if($mfo){
                    if($version == 'RU'){
                        $mfo->data_ru = serialize($data);
                    }
                    if($version == 'KZ'){
                        $mfo->data_kz = serialize($data);
                        $mfo->srok = $data['conditions']['min_term'].' - '.$data['conditions']['max_term'];

                        if($data['conditions']['stack_min_first_microcredit']){
                            $mfo->stavka = 'от '.$data['conditions']['stack_min_first_microcredit'];
                        } else {
                            $mfo->stavka = '0';
                        }

                        if ($data['info']['city']){
                            $mfo->city_kz = $data['info']['city'];
                        }
                        if($data['requisites']['bin']){
                            $mfo->bin = $data['requisites']['bin'];
                        }
                        if($data['seo']['h1']){
                            $mfo->mfo_name_kz = $data['seo']['h1'];
                        }
                        if($data['conditions']['min_amount'] && $data['conditions']['max_amount']){
                            $mfo->sum = $data['conditions']['min_amount'].' - '.$data['conditions']['max_amount'];
                        }
                        if(!$data['conditions']['min_amount'] && $data['conditions']['max_amount']){
                            $mfo->sum = $data['conditions']['max_amount'];
                        }
                        if($data['conditions']['min_amount'] && !$data['conditions']['max_amount']){
                            $mfo->sum = $data['conditions']['min_amount'];
                        }

                        $mfo->gesv = $data['conditions']['gesv_min'];
                        $mfo->sum_new_client = $data['conditions']['amount_first_microcredit'];
                        $mfo->stavka_new_client = $data['conditions']['stack_min_first_microcredit'];
                    }

                    //  Досрочное погашение
                    $mfo->advanced_repayment = 0;
                    if($data['singularity']['full_repayment']) $mfo->advanced_repayment = 1;
                    // Продление (пролонгация) кредита
                    $mfo->extension_loan = 0;
                    if($data['conditions']['term_extension_service']) $mfo->extension_loan = 1;

                    if($mfo->save()){
                        $countUpdate++;
                        continue;
                    } else {
                        echo 'Ошибка5 - '.$key.' - '.$value[1]; echo '<br><br>';
                        var_dump($mfo->errors); die;
                    }
                }
                if($version == 'RU' && !$mfo){
                    if($model->save()){
                        $countSave++;
                    } else {
                        echo $version;
                        echo 'Ошибка6 - '.$key.' - '.$value[1]; echo '<br><br>';
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

    public static function getTextDate(): string
    {
        $all = Mfo::find()->all();
        $arr = ['қаңтар','ақпан','наурыз','сәуір','мамыр','маусым','шілде','тамыз','қыркүйек','қазан','қараша','желтоқсан',];
        $updatedAt = $all[0]['updated_at'];
        $month = date('n',$updatedAt) - 1;

        return date('d',$updatedAt).' '.$arr[$month].' '.date('Y',$updatedAt).' жыл';
    }

    /**
     * @throws Exception
     */
    public static function getWordsForPagination()
    {
        return Yii::$app->db
            ->createCommand('SELECT distinct left( `mfo_name_kz` , 1) as `first` from `mfo` WHERE `data_kz` IS NOT NULL ORDER BY `first` ASC')
            ->queryAll();
    }


    public static function getFormReestrMfo($bin = null,$name = null,$city = null): array
    {
        $all = Mfo::find()->where(['not', ['data_kz' => null]]);

        if($bin) $all->andWhere(['like', 'bin', $bin . '%', false]);
        if($name) $all->andWhere(['like', 'mfo_name_kz', $name . '%', false]);
        if($city) $all->andWhere(['city_kz' => $city]);

        return $all->all();
    }

    public static function getMfoDatas($version = null)
    {
        $mfoDatas = MfoData::find()->where(['name' => 'Data'])->one();
        $dataMfo = unserialize($mfoDatas->data_mfo_kz);
        $dataTag = unserialize($mfoDatas->data_tag_kz);
        $dataMenu = unserialize($mfoDatas->data_menu_kz);
        if($version == 'RU'){
            $dataMenu = unserialize($mfoDatas->data_menu);
            $dataMfo = unserialize($mfoDatas->data_mfo);
            $dataTag = unserialize($mfoDatas->data_tag);
        }
        return [
            'dataMfo' => $dataMfo,
            'dataTag' => $dataTag,
            'dataMenu' => $dataMenu,
        ];
    }


    /**
     * Есть ли у МФО выбранный фильтр
     * @param string|null $index
     * @param string|null $filter
     * @return array
     * @throws HttpException
     */
    public static function getFilterData(string $index = null, string $filter = null)
    {
        if(!$filter || !$index) throw new HttpException(404, 'Страница не существует.');

        $mfo = Mfo::find()->where(['not', ['data_kz' => null]])->all();
        $array = [];
        foreach ($mfo as $key => $value){
            $data = unserialize($value['data_kz']);
            if(isset($data[$index][$filter]) && $data[$index][$filter]){
                $array[] = $value['id'];
            }
        }
        $query = Mfo::find()
            ->where(['in', 'id', $array])->all();
        $mfoDatas = MfoData::find()->where(['name' => 'Data'])->one();
        $dataMfo = unserialize($mfoDatas->data_mfo_kz);
        $tag = null;
        if(isset($dataMfo['mfo'][$index][$filter]) && $dataMfo['mfo'][$index][$filter]){
            $tag = $dataMfo['mfo'][$index][$filter];
        }

        return [
            'mfoAll' => $query,
            'dataMfo' => $dataMfo,
            'tag' => $tag,
        ];
    }

    /**
     * Поиск МФО по первой букве
     * @param string $letter
     * @return array
     */
    public static function findMfoByLetter(string $letter): array
    {
        return Mfo::find()
            ->where('mfo_name_kz LIKE :q')
            ->andWhere(['not', ['data_kz' => null]])
            ->addParams(['q'=>$letter . '%'])
            ->orderBy('mfo_name_kz ASC')
            ->all();
    }

    /**
     * Поиск всех городов добавленных из гугл файла
     * @return array
     */
    public static function findAllCity(): array
    {
        return Mfo::find()
            ->select(['city_kz AS city'])
            ->where(['not', ['data_kz' => null]])
            ->groupBy(['city'])
            ->asArray()
            ->all();
    }

    /**
     * Отображать соцсети на странице клиентской поддержки
     * @param $data
     * @return bool
     */
    public static function getSocialViewClients($data): bool
    {

        if(!($data['clients']['facebook']) && !($data['clients']['vk']) && !($data['clients']['instagram']) &&
            !($data['clients']['twitter']) && !($data['clients']['youtube']) && !($data['clients']['odnoklasniki'])){
            return false;
        }

        return true;
    }

    /**
     * Отображать страницу клиентской поддержки
     * @param $data
     * @return bool
     */
    public static function getPageViewClients($data): bool
    {
        $socialViewClients = self::getSocialViewClients($data);
        if(!$socialViewClients && !$data['clients']['rules'] && !$data['clients']['faq'] && !$data['clients']['request_call'] &&
            !$data['contacts']['whatsApp'] && !$data['contacts']['telegram'] && !$data['clients']['online_chat'] &&
        !$data['clients']['viber'] && !$data['contacts']['email_1'] && !$data['clients']['feedback']){
            return false;
        }

        return true;
    }
}
