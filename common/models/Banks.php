<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "banks".
 *
 * @property int $id
 * @property string|null $data
 * @property string|null $image
 * @property string|null $desc
 * @property string|null $content
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
            [['data'], 'safe'],
            [['sort', 'status'], 'integer'],
            [['name','url'], 'required'],
            [['image','name','url','ustav'], 'string', 'max' => 255],
            [['desc','content'], 'string'],
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
            'image' => 'Логотип',
            'sort' => 'Сортировка',
            'status' => 'Статус',
            'name' => 'Название банка',
            'desc' => 'Описание банка',
            'url' => 'Url',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'ustav' => 'Устав',
            'mainfile' => 'Логотип',
            'ustavfile' => 'Устав',
            'content' => 'Контент',
        ];
    }
}
