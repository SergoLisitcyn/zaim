<?php

namespace common\models;

use Yii;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $name
 * @property string|null $content
 * @property string|null $text_content
 * @property string|null $images
 * @property string $url
 * @property string|null $date
 * @property int|null $sort
 * @property int|null $status
 */
class News extends \yii\db\ActiveRecord
{
    public $mainfile;

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $imageSquareFile = UploadedFile::getInstance($this, 'mainfile');
        if ($imageSquareFile) {
            $directory = Yii::getAlias('@frontend/web/uploads/images/news/main-image') . DIRECTORY_SEPARATOR;
            if (!is_dir($directory)) {
                FileHelper::createDirectory($directory);
            }

            $uid = date('YmdHs').Yii::$app->security->generateRandomString(6);
            $fileName = $uid . '-articles_main_image.' . $imageSquareFile->extension;
            $filePath = $directory . $fileName;
            if ($imageSquareFile->saveAs($filePath)) {
                $path = '/uploads/images/news/main-image/' . $fileName;

                @unlink(Yii::getAlias('@frontend/web') . $this->mainfile);
                $this->setAttribute('images', $path);
                $this->save();
            }
        }
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'url'], 'required'],
            [['content', 'text_content'], 'string'],
            [['date'], 'safe'],
            [['sort', 'status'], 'integer'],
            [['name', 'images', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text_content' => 'Text Content',
            'images' => 'Главная картинка',
            'date' => 'Дата публикации',
            'name' => 'Название',
            'content' => 'Content',
            'url' => 'Постоянная ссылка',
            'title_seo' => 'Title Seo',
            'description' => 'Description',
            'sort' => 'Сортировка',
            'status' => 'Статус',
            'mainfile' => 'Главная картинка',
        ];
    }
}
