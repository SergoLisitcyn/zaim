<?php

namespace common\models;

use Yii;

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
            'name' => 'Name',
            'content' => 'Content',
            'text_content' => 'Text Content',
            'images' => 'Images',
            'url' => 'Url',
            'date' => 'Date',
            'sort' => 'Sort',
            'status' => 'Status',
        ];
    }
}
