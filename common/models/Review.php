<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "review".
 *
 * @property int $id
 * @property int $cat_id
 * @property string|null $body
 * @property string|null $plus
 * @property string|null $minus
 * @property float $prostota
 * @property float $speed
 * @property float $support
 * @property string|null $email
 * @property string|null $name_client
 * @property string|null $otvet_review
 * @property string|null $date
 * @property int|null $status
 */
class Review extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'review';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_id', 'prostota', 'speed', 'support'], 'required'],
            [['cat_id', 'status'], 'integer'],
            [['body', 'plus', 'minus', 'otvet_review'], 'string'],
            [['prostota', 'speed', 'support'], 'number'],
            [['date'], 'safe'],
            [['email', 'name_client'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_id' => 'Cat ID',
            'body' => 'Body',
            'plus' => 'Plus',
            'minus' => 'Minus',
            'prostota' => 'Prostota',
            'speed' => 'Speed',
            'support' => 'Support',
            'email' => 'Email',
            'name_client' => 'Name Client',
            'otvet_review' => 'Otvet Review',
            'date' => 'Date',
            'status' => 'Status',
        ];
    }
}
