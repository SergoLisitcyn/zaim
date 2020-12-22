<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $name
 * @property string|null $zone
 * @property string $link
 * @property int|null $status
 * @property int|null $sort
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'link'], 'required'],
            [['status', 'sort'], 'integer'],
            [['name', 'zone', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название страницы',
            'zone' => 'Zone',
            'link' => 'Ссылка на страницу',
            'status' => 'Статус',
            'sort' => 'Сортировка',
        ];
    }
}
