<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bank_review".
 *
 * @property int $id
 * @property int $bank_id
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
class BankReview extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bank_review';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bank_id', 'prostota', 'speed', 'support'], 'required'],
            [['bank_id', 'status'], 'integer'],
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
            'bank_id' => 'Банк',
            'body' => 'Сообщение',
            'plus' => 'Плюсы',
            'minus' => 'Минусы',
            'prostota' => 'Простота получения',
            'speed' => 'Скорость',
            'support' => 'Поддержка',
            'email' => 'Email',
            'name_client' => 'Имя',
            'otvet_review' => 'Ответ на отзыв',
            'date' => 'Дата',
            'status' => 'Статус',
        ];
    }
}
