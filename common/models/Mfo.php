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
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ],
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mfo_name', 'stavka', 'title', 'created_at', 'updated_at'], 'required'],
            [['rating'], 'number'],
            [['odobrenie', 'akcii', 'home_page', 'status'], 'integer'],
            [['rekvisit', 'about_company', 'content'], 'string'],
            [['mfo_name','logo', 'srok', 'sum', 'stavka', 'rasmotrenie', 'phone', 'email', 'website', 'video', 'link_offer', 'title', 'description', 'keywords'], 'string', 'max' => 255],
            [['type_credit_array','created_at','updated_at'], 'safe'],
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
            'video' => 'Video',
            'rekvisit' => 'Реквизиты',
            'akcii' => 'Есть акция?',
            'home_page' => 'Отображать на главной странице',
            'link_offer' => 'Партнерская ссылка',
            'about_company' => 'О компании',
            'content' => 'Контент',
            'title' => 'Title',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'status' => 'Статус',
            'type_credit_array' => 'Виды кредита',
            'typeAsString' => 'Тэги',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'logo_file' => 'Логотип',
        ];
    }
    public function afterFind()
    {
        parent::afterFind();
        $this->type_credit_array = $this->type;
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

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        $arr = ArrayHelper::map($this->type,'id','id');
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
        MfoTypeCredit::deleteAll(['type_credit_id'=>$arr]);

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
