<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "filters".
 *
 * @property int $id
 * @property string $name
 * @property int|null $status
 * @property int|null $sort
 */
class Filters extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'filters';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status', 'sort'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'status' => 'Status',
            'sort' => 'Sort',
        ];
    }

    public function getTypeCredits()
    {
        return $this->hasMany(TypeCredit::className(), ['parent_id' => 'id']);
    }
}
