<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "main_page".
 *
 * @property int $id
 * @property string $title
 * @property string $sub_title
 * @property string $description
 * @property string|null $registration_text
 * @property string|null $registration_item
 * @property string $how_take_title
 * @property string $how_take_text
 * @property string $how_take_text_left
 * @property string $how_take_text_right
 * @property string $how_take_point_title
 * @property string|null $how_take_point_text
 * @property string $advantages_title
 * @property string|null $advantages_text
 * @property string|null $advantages_list_1
 * @property string|null $advantages_list_2
 * @property string|null $advantages_list_3
 * @property string|null $advantages_list_4
 */
class MainPage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'main_page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'sub_title', 'description', 'how_take_title', 'how_take_text', 'how_take_text_left', 'how_take_text_right', 'how_take_point_title', 'advantages_title'], 'required'],
            [['registration_text', 'registration_item', 'how_take_point_text', 'advantages_text', 'advantages_list_1', 'advantages_list_2', 'advantages_list_3', 'advantages_list_4'], 'string'],
            [['title', 'sub_title', 'description', 'how_take_title', 'how_take_text', 'how_take_text_left', 'how_take_text_right', 'how_take_point_title', 'advantages_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'sub_title' => 'Подзаголовок',
            'description' => 'Описание подзоголовка',
            'registration_text' => 'Оформление кредита в банке',
            'registration_item' => 'Оформление кредита в банке текст справа',
            'how_take_title' => 'Заголовок "Как взять займ в день обращения"',
            'how_take_text' => 'Текст "Как взять займ в день обращения"',
            'how_take_text_left' => 'Текст слева "Как взять займ в день обращения"',
            'how_take_text_right' => 'Текст справа "Как взять займ в день обращения"',
            'how_take_point_title' => 'Заголовок "Как взять микрозаймзайм в день обращения"',
            'how_take_point_text' => 'Текст "Как взять микрозаймзайм в день обращения"',
            'advantages_title' => 'Заголовок "Наши преимущества"',
            'advantages_text' => 'Текст "Наши преимущества"',
            'advantages_list_1' => 'Преимущества 1',
            'advantages_list_2' => 'Преимущества 2',
            'advantages_list_3' => 'Преимущества 3',
            'advantages_list_4' => 'Преимущества 4',
        ];
    }
}
