<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mfo_type_credit".
 *
 * @property int $id
 * @property int|null $mfo_id
 * @property int|null $type_credit_id
 */
class MfoTypeCredit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mfo_type_credit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mfo_id', 'type_credit_id'], 'integer'],
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
            'type_credit_id' => 'Type Credit ID',
        ];
    }

    public function getType(){
        return $this->hasOne(TypeCredit::className(),['id'=>'type_credit_id']);
    }
}
