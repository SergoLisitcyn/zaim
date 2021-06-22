<?php

namespace common\models;

use common\helpers\Common;
use Yii;
use yii\base\BaseObject;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use \yii\helpers\ArrayHelper;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "mfo".
 *
 * @property int $id
 * @property string $mfo_name
 * @property float|null $rating
 * @property string $srok
 * @property string $sum
 * @property string $stavka
 * @property int|null $odobrenie
 * @property string $rasmotrenie
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $website
 * @property string|null $logo
 * @property string|null $video
 * @property string|null $rekvisit
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
 */
class Mfo extends \yii\db\ActiveRecord
{
    public $type_credit_arr;
    public $mfo_city_arr;
    public $logo_file;

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
//        return [
//            [['mfo_name', 'stavka', 'title','url'], 'required'],
//            [['rating'], 'number'],
//            [['odobrenie', 'akcii', 'home_page', 'status','sort','max_sum_calc','min_sum_calc'
//                ,'max_term_calc','min_term_calc','advanced_repayment','extension_loan'], 'integer'],
//            [['rekvisit', 'about_company', 'content','text_video','login_content'], 'string'],
//            [['mfo_name','logo', 'srok', 'sum', 'stavka', 'rasmotrenie', 'phone', 'email', 'website', 'video',
//                'link_offer', 'title', 'description', 'keywords','url','srok_new_client','sum_new_client',
//                'stavka_new_client','odobrenie_new_client','rasmotrenie_new_client',
//                'srok_for_client','sum_for_client','stavka_for_client',
//                'odobrenie_for_client','rasmotrenie_for_client','login_link'], 'string', 'max' => 255],
//            [['type_credit_array','mfo_city_array'], 'safe'],
//            [['logo_file'], 'file'],
//        ];
        return [
            [['mfo_name', 'stavka', 'title', 'created_at', 'updated_at', 'url'], 'required'],
            [['rating'], 'number'],
            [['odobrenie', 'akcii', 'home_page', 'status', 'created_at', 'updated_at', 'sort', 'max_sum_calc',
                'min_sum_calc', 'max_term_calc', 'min_term_calc', 'advanced_repayment', 'extension_loan'], 'integer'],
            [['rekvisit', 'about_company', 'content', 'login_content'], 'string'],
            [['mfo_name', 'srok', 'sum', 'stavka', 'rasmotrenie', 'phone', 'email', 'website', 'logo', 'video',
                'link_offer', 'title', 'description', 'keywords', 'type_credit_array', 'url', 'text_video',
                'mfo_city_array', 'srok_new_client', 'sum_new_client', 'stavka_new_client', 'odobrenie_new_client',
                'rasmotrenie_new_client', 'srok_for_client', 'sum_for_client', 'stavka_for_client',
                'odobrenie_for_client', 'rasmotrenie_for_client', 'login_link'], 'string', 'max' => 255],
            [['type_credit_arr','mfo_city_arr'], 'safe'],
            [['logo_file'], 'file'],
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
            'login_link' => 'Ссылка на личный кабинет'
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


    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        $arr = ArrayHelper::map($this->type,'id','id');

        foreach ($this->type_credit_arr as $key => $value){
            if($value){
                foreach ($value as $item){
                    $find = MfoTypeCredit::find()->where(['type_credit_id' => $item])->all();
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

        $arrCity = ArrayHelper::map($this->city,'id','id');
        if($this->mfo_city_arr){
            foreach ($this->mfo_city_arr as $one){
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
        MfoTypeCredit::deleteAll(['type_credit_id'=>$arr]);
        MfoCity::deleteAll(['city_id'=>$arrCity]);
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
    }
}
