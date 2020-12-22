<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rating_site".
 *
 * @property int $id
 * @property string $rating
 */
class RatingSite extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rating_site';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rating'], 'required'],
            [['rating'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rating' => 'Rating',
        ];
    }
}
