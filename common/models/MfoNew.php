<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "mfo_new".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string|null $data
 * @property string|null $desc
 * @property string|null $image
 * @property int $sort
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class MfoNew extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mfo_new';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'url'], 'required'],
            [['data'], 'string'],
            [['sort', 'status'], 'integer'],
            [['name', 'url', 'desc', 'image'], 'string', 'max' => 255],
        ];
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
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data' => 'Data',
            'image' => 'Логотип',
            'sort' => 'Сортировка',
            'status' => 'Статус',
            'name' => 'Название мфо',
            'desc' => 'Описание мфо',
            'url' => 'Url',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
