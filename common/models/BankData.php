<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "bank_data".
 *
 * @property int $id
 * @property string|null $data_menu_ru
 * @property string|null $data_menu_kz
 * @property string|null $data_bank_ru
 * @property string|null $data_bank_kz
 * @property string|null $data_tag_ru
 * @property string|null $data_tag_kz
 * @property string $name
 * @property int $created_at
 * @property int $updated_at
 */
class BankData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bank_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data_menu_ru', 'data_menu_kz', 'data_bank_ru', 'data_bank_kz', 'data_tag_ru', 'data_tag_kz'], 'string'],
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
            'data_menu_ru' => 'Data Menu Ru',
            'data_menu_kz' => 'Data Menu Kz',
            'data_bank_ru' => 'Data Bank Ru',
            'data_bank_kz' => 'Data Bank Kz',
            'data_tag_ru' => 'Data Tag Ru',
            'data_tag_kz' => 'Data Tag Kz',
            'name' => 'Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
