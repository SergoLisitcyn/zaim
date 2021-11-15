<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string|null $title_h1
 * @property string|null $title
 * @property string|null $description
 * @property string|null $keywords
 * @property int|null $sort
 * @property int|null $status
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'url'], 'required'],
            [['sort', 'status'], 'integer'],
            [['name', 'url','title_h1','title','description','keywords'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название города',
            'url' => 'Url',
            'sort' => 'Сортировка',
            'status' => 'Статус',
            'title_h1' => 'Заголовок h1',
            'title' => 'Title',
            'description' => 'Description',
            'keywords' => 'Keywords',
        ];
    }
}
