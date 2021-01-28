<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mfo_city".
 *
 * @property int $id
 * @property int|null $mfo_id
 * @property int|null $city_id
 */
class MfoCity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mfo_city';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mfo_id', 'city_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mfo_id' => 'Mfo ID',
            'city_id' => 'City ID',
        ];
    }

    public function getCity(){
        return $this->hasOne(City::className(),['id'=>'city_id']);
    }
}
