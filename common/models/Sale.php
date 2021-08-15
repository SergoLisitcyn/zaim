<?php

namespace common\models;

use Yii;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "sale".
 *
 * @property int $id
 * @property int|null $mfo_id
 * @property string $name
 * @property string|null $content
 * @property string|null $srok_ot
 * @property string|null $srok_do
 * @property string $url
 * @property string $image
 * @property string $partner_link
 * @property int|null $sort
 * @property int|null $status
 */
class Sale extends \yii\db\ActiveRecord
{
    public $file;
    public $mainfile;

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $imageSquareFile = UploadedFile::getInstance($this, 'mainfile');
        if ($imageSquareFile) {
            $directory = Yii::getAlias('@frontend/web/uploads/images/sale/main-image') . DIRECTORY_SEPARATOR;
            if (!is_dir($directory)) {
                FileHelper::createDirectory($directory);
            }

            $uid = date('YmdHs').Yii::$app->security->generateRandomString(6);
            $fileName = $uid . '-sale_main_image.' . $imageSquareFile->extension;
            $filePath = $directory . $fileName;
            if ($imageSquareFile->saveAs($filePath)) {
                $path = '/uploads/images/sale/main-image/' . $fileName;

                @unlink(Yii::getAlias('@frontend/web') . $this->mainfile);
                $this->setAttribute('image', $path);
                $this->save();
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sale';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mfo_id', 'sort', 'status'], 'integer'],
            [['name', 'url'], 'required'],
            [['content','image','partner_link'], 'string'],
            [['srok_ot', 'srok_do'], 'safe'],
            [['name', 'url'], 'string', 'max' => 255],
            [['file'], 'file', 'extensions' => 'png, jpg'],
            [['mainfile'], 'file'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mfo_id' => 'МФО',
            'name' => 'Название акции',
            'content' => 'Content',
            'srok_ot' => 'Срок от',
            'srok_do' => 'Срок до',
            'url' => 'Постоянная ссылка',
            'sort' => 'Сортировка',
            'status' => 'Статус',
            'image' => 'Изображение',
            'file' => 'Картинка',
            'mainfile' => 'Главная картинка',
            'partner_link' => 'Партнерская ссылка',
        ];
    }

    public function getMfo()
    {
        return $this->hasMany(Mfo::className(),['mfo_id'=>'id']);
    }
}
