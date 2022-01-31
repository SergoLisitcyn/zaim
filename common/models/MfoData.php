<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "mfo_data".
 * @property int $id
 * @property string|null $data_menu
 * @property string|null $data_mfo
 * @property string|null $data_tag
 * @property string $name
 * @property int $created_at
 * @property int $updated_at
 */
class MfoData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mfo_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data_menu', 'data_mfo','data_tag'], 'string'],
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
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
            'data_menu' => 'Data Menu',
            'data_mfo' => 'Data Mfo',
            'data_tag' => 'Data Tag',
            'name' => 'Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
