<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "links".
 *
 * @property int $id
 * @property string $ru
 * @property string $kz
 */
class Links extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'links';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ru', 'kz'], 'required'],
            [['ru', 'kz'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ru' => 'Ru',
            'kz' => 'Kz',
        ];
    }
}
