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
            [['cat_id', 'prostota', 'speed', 'support','body','name_client'], 'required'],
            [['cat_id', 'status'], 'integer'],
            [['body', 'plus', 'minus', 'otvet_review'], 'string'],
            [['prostota', 'speed', 'support'], 'number'],
            [['email', 'name_client','date'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_id' => 'МФО',
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


    public static function getReviewMfo($id,$limit = null): array
    {
        if($limit){
            return Review::find()->where(['cat_id' => $id])->andWhere(['status' => 1])->orderBy(['date' => SORT_DESC])->limit(3)->all();
        } else {
            return Review::find()->where(['cat_id' => $id])->andWhere(['status' => 1])->orderBy(['date' => SORT_DESC])->all();
        }
    }
}
