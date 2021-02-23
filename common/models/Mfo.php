<?php

namespace common\models;

use common\helpers\Common;
use Yii;
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
 */
class Mfo extends \yii\db\ActiveRecord
{
    public $type_credit_array;
    public $mfo_city_array;
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
        return [
            [['mfo_name', 'stavka', 'title','url'], 'required'],
            [['rating'], 'number'],
            [['odobrenie', 'akcii', 'home_page', 'status','sort','max_sum_calc','min_sum_calc'
                ,'max_term_calc','min_term_calc','advanced_repayment','extension_loan'], 'integer'],
            [['rekvisit', 'about_company', 'content','text_video','login_content'], 'string'],
            [['mfo_name','logo', 'srok', 'sum', 'stavka', 'rasmotrenie', 'phone', 'email', 'website', 'video',
                'link_offer', 'title', 'description', 'keywords','url','srok_new_client','sum_new_client',
                'stavka_new_client','odobrenie_new_client','rasmotrenie_new_client',
                'srok_for_client','sum_for_client','stavka_for_client',
                'odobrenie_for_client','rasmotrenie_for_client','login_link'], 'string', 'max' => 255],
            [['type_credit_array','mfo_city_array'], 'safe'],
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
            'type_credit_array' => 'Виды кредита',
            'mfo_city_array' => 'Города',
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
        $this->type_credit_array = $this->type;
        $this->mfo_city_array = $this->city;
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
        $arr = ArrayHelper::map($this->type,'id','name');
        if($this->type_credit_array) {
            foreach ($this->type_credit_array as $one){
                if(!in_array($one,$arr)){
                    $model = new MfoTypeCredit();
                    $model->mfo_id = $this->id;
                    $model->type_credit_id = $one;
                    $model->save();
                }
                if(isset($arr[$one])){
                    unset($arr[$one]);
                }
            }
        }
        $arrCity = ArrayHelper::map($this->city,'id','id');
        if($this->mfo_city_array){
            foreach ($this->mfo_city_array as $one){
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
