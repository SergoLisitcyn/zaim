<?php

namespace common\models;

use Yii;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "author".
 *
 * @property int $id
 * @property string $name
 * @property string|null $image
 * @property string $description
 * @property int|null $status
 */
class Author extends \yii\db\ActiveRecord
{
    public $mainfile;

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $imageSquareFile = UploadedFile::getInstance($this, 'mainfile');
        if ($imageSquareFile) {
            $directory = Yii::getAlias('@frontend/web/uploads/images/author/main-image') . DIRECTORY_SEPARATOR;
            if (!is_dir($directory)) {
                FileHelper::createDirectory($directory);
            }

            $uid = date('YmdHs').Yii::$app->security->generateRandomString(6);
            $fileName = $uid . '-author_image.' . $imageSquareFile->extension;
            $filePath = $directory . $fileName;
            if ($imageSquareFile->saveAs($filePath)) {
                $path = '/uploads/images/author/main-image/' . $fileName;

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
        return 'author';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['status'], 'integer'],
            [['name', 'image', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя,Фамилия',
            'image' => 'Аватар',
            'description' => 'описание',
            'status' => 'Статус',
            'mainfile' => 'Аватар',
        ];
    }
}
