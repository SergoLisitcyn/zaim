<?php

namespace common\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "mfo_data".
 * @property int $id
 * @property string|null $data_menu
 * @property string|null $data_menu_kz
 * @property string|null $data_mfo
 * @property string|null $data_mfo_kz
 * @property string|null $data_tag
 * @property string|null $data_tag_kz
 * @property string $name
 * @property int $created_at
 * @property int $updated_at
 */
class MfoData extends ActiveRecord
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
            [['data_menu', 'data_mfo','data_tag','data_menu_kz', 'data_mfo_kz','data_tag_kz'], 'string'],
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
            'data_menu_kz' => 'Data Menu_kz',
            'data_mfo' => 'Data Mfo',
            'data_mfo_kz' => 'Data Mfo_kz',
            'data_tag' => 'Data Tag',
            'data_tag_kz' => 'Data Tag_kz',
            'name' => 'Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
