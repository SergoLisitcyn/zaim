<?php

namespace common\models;

use Yii;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string $name
 * @property string $preview_image
 * @property string|null $content
 * @property string $date_publish
 * @property string $url
 * @property string|null $title_seo
 * @property string|null $description
 * @property int|null $user_id
 * @property int|null $sort
 * @property int|null $status
 */
class Articles extends \yii\db\ActiveRecord
{
    public $mainfile;

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $imageSquareFile = UploadedFile::getInstance($this, 'mainfile');
        if ($imageSquareFile) {
            $directory = Yii::getAlias('@frontend/web/uploads/images/articles/main-image') . DIRECTORY_SEPARATOR;
            if (!is_dir($directory)) {
                FileHelper::createDirectory($directory);
            }

            $uid = date('YmdHs').Yii::$app->security->generateRandomString(6);
            $fileName = $uid . '-articles_main_image.' . $imageSquareFile->extension;
            $filePath = $directory . $fileName;
            if ($imageSquareFile->saveAs($filePath)) {
                $path = '/uploads/images/articles/main-image/' . $fileName;

                @unlink(Yii::getAlias('@frontend/web') . $this->mainfile);
                $this->setAttribute('preview_image', $path);
                $this->save();
            }
        }
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'date_publish', 'url'], 'required'],
            [['content'], 'string'],
            [['user_id', 'sort', 'status'], 'integer'],
            [['name', 'preview_image', 'date_publish', 'url', 'title_seo', 'description'], 'string', 'max' => 255],
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
            'name' => 'Название',
            'preview_image' => 'Главная картинка',
            'content' => 'Content',
            'date_publish' => 'Дата публикации',
            'url' => 'Постоянная ссылка',
            'title_seo' => 'Title Seo',
            'description' => 'Description',
            'user_id' => 'User ID',
            'sort' => 'Сортировка',
            'status' => 'Статус',
            'mainfile' => 'Главная картинка',
        ];
    }
}
