<?php

namespace common\models;

use Yii;
use yii\db\Exception;

/**
 * This is the model class for table "filters".
 *
 * @property int $id
 * @property string $name
 * @property int|null $status
 * @property int|null $sort
 */
class Filters extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'filters';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status', 'sort'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название фильтра',
            'status' => 'Статус',
            'sort' => 'Сортировка',
        ];
    }

    public function getTypeCredits()
    {
        return $this->hasMany(TypeCredit::className(), ['parent_id' => 'id']);
    }

    /**
     * @throws Exception
     */
    public static function getFilters($sheets = null)
    {
        if(!$sheets){
            die;
        }
        if($sheets == 'filters'){
            $range = 'Признаки';
        }
        if($sheets == 'city'){
            $range = 'Города';
        }
        $googleAccountKeyFilePath = __DIR__ . '/../../backend/views/mfo-new/smartzaimcrm-59bd2db3d605.json';
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $googleAccountKeyFilePath);
        $client = new \Google_Client();
        $client->useApplicationDefaultCredentials();
        $client->addScope('https://www.googleapis.com/auth/spreadsheets');

        $service = new \Google_Service_Sheets($client);
        $spreadsheetId = Yii::$app->params['filterSheet'];
        $response = $service->spreadsheets->get($spreadsheetId);
        $spreadsheetProperties = $response->getProperties();
        foreach($response->getSheets() as $sheet) {
            $sheetProperties = $sheet->getProperties();
        }
        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        $types = [];
        $cities = [];
        $typeCredit = TypeCredit::find()->select(['id','name'])->where(['status' => 1])->asArray()->all();
        $typeCities = City::find()->select(['id','name'])->where(['status' => 1])->asArray()->all();
        foreach ($response['values']  as $key => $value){
          if($sheets == 'filters'){
              if($key == 0 || $key == 2 || $key == 3){
                  continue;
              }
              if($key == 1){
                  $types[3]['zajmy-po-pasportu'] = $value[3];
                  $types[4]['kredit-bez-poruchitelej'] = $value[4];
                  $types[5]['zaem-bez-spravki-o-dohodah'] = $value[5];
                  $types[6]['mikrokredit-bez-zaloga'] = $value[6];
                  $types[7]['mikrozajm-bez-raspiski'] = $value[7];
                  $types[8]['zajmy-do-zarplaty-v-kazahstane'] = $value[8];
                  $types[9]['kredit-dlya-biznesa'] = $value[9];
                  $types[10]['kratkosrochnye-zajmy'] = $value[10];
                  $types[11]['onlajn-kredit-nalichnymi-bez-spravok'] = $value[11];
                  $types[12]['onlajn-zajm-bez-proverok'] = $value[12];
                  $types[13]['zajmy-s-plohoj-kreditnoj-istoriej'] = $value[13];
                  $types[14]['zajmy-bez-otkaza'] = $value[14];
                  $types[15]['chastnyj-zajm-v-kazahstane-bez-predoplaty'] = $value[15];
                  $types[16]['onlajn-zajmy-v-kazahstane-s-prosrochkami'] = $value[16];
                  $types[17]['zajmy-24-chasa'] = $value[17];
                  $types[18]['onlajn-zajmy-bez-protsentov-v-kazahstane'] = $value[18];

                  $types[19]['onlajn-zajm-na-kartu'] = $value[19];
                  $types[20]['zajm-na-bankovskij-schet'] = $value[20];
                  $types[21]['dengi-na-schet-kazpochty'] = $value[21];
                  $types[22]['zajm-nalichnymi'] = $value[22];

                  $types[23]['bankovskaya-karta'] = $value[23];
                  $types[24]['bankovskij-perevod'] = $value[24];
                  $types[25]['cyberplat'] = $value[25];
                  $types[26]['qiwi'] = $value[26];
                  $types[27]['kassa24'] = $value[27];
                  $types[28]['nalichnymi-v-kasse-banka'] = $value[28];
                  $types[29]['nalichnymi-v-ao-kazpochta'] = $value[29];
                  $types[30]['nalichnymi-v-ofise-kompanii'] = $value[30];

                  $types[31]['rabotayushhij'] = $value[31];
                  $types[32]['bezrabotnyj'] = $value[32];
                  $types[33]['student'] = $value[33];
                  $types[34]['onlajn-zajmy-pensioneram'] = $value[34];
                  $types[35]['onlajn-zajmy-s-18-let'] = $value[35];

                  $types[36]['zajm-nedelya'] = $value[36];
                  $types[37]['zajm-30-dnej'] = $value[37];
                  $types[38]['zajm-60-dnej'] = $value[38];
                  $types[39]['zajm-na-90-dnej'] = $value[39];
                  continue;
              }
              foreach ($typeCredit as $item) {
                  foreach ($types as $k => $type) {
                      foreach ($type as $typ) {
                          if ($item['name'] == $typ) {
                              if(!isset($value[2])){
                                  continue;
                              }
                              $mfo = Mfo::find()->where(['url' => $value[2]])->one();
                              if (!$mfo) {
                                  throw new Exception('Такого МФО не существует');
                              }
                              $mfoType = MfoTypeCredit::find()
                                  ->where([
                                      'mfo_id' => $mfo->id,
                                      'type_credit_id' => $item['id']
                                  ])
                                  ->one();
                              $model = new MfoTypeCredit();
                              if ($value[$k]) {
                                  if (!$mfoType) {
                                      $model->mfo_id = $mfo->id;
                                      $model->type_credit_id = $item['id'];
                                      $model->save();
                                  }
                              } else {
                                  $mfoType->delete();
                              }
                          }
                      }
                  }
              }
          }

          if($sheets == 'city'){
              if($key == 0 || $key == 2 || $key == 3){
                  continue;
              }
              if($key == 1){
                  $cities[3]['almaty'] = $value[3];
                  $cities[4]['aktobe'] = $value[4];
                  $cities[5]['aktau'] = $value[5];
                  $cities[6]['atyrau'] = $value[6];
                  $cities[7]['zhezkazgan'] = $value[7];
                  $cities[8]['karaganda'] = $value[8];
                  $cities[9]['kokshetau'] = $value[9];
                  $cities[10]['kostanaj'] = $value[10];
                  $cities[11]['kyzylorda'] = $value[11];
                  $cities[12]['astana'] = $value[12];
                  $cities[13]['pavlodar'] = $value[13];
                  $cities[14]['petropavlovsk'] = $value[14];
                  $cities[15]['ridder'] = $value[15];
                  $cities[16]['semej'] = $value[16];
                  $cities[17]['taldykorgan'] = $value[17];
                  $cities[18]['taraz'] = $value[18];
                  $cities[19]['temirtau'] = $value[19];
                  $cities[20]['uralsk'] = $value[20];
                  $cities[21]['ust-kamenogorsk'] = $value[21];
                  $cities[22]['shymkent'] = $value[22];
                  $cities[23]['ekibastuz'] = $value[23];
                  continue;
              }
              foreach ($typeCities as $itemCity) {
                  foreach ($cities as $k => $citi) {
                      foreach ($citi as $cit) {
                          if ($itemCity['name'] == $cit) {
                              if(!isset($value[2])){
                                  continue;
                              }
                              $mfoCity = Mfo::find()->where(['url' => $value[2]])->one();
                              if (!$mfoCity) {
                                  throw new Exception('Такого МФО не существует');
                              }
                              $mfoTypeCity = MfoCity::find()
                                  ->where([
                                      'mfo_id' => $mfoCity->id,
                                      'city_id' => $itemCity['id']
                                  ])
                                  ->one();
                              $model = new MfoCity();
                              if ($value[$k]) {
                                  if (!$mfoTypeCity) {
                                      $model->mfo_id = $mfoCity->id;
                                      $model->city_id = $itemCity['id'];
                                      $model->save();
                                  }
                              } else {
                                  $mfoTypeCity->delete();
                              }
                          }
                      }
                  }
              }
          }
        }
    }
}
