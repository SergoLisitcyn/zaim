<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "calculator".
 *
 * @property int $id
 * @property int $min_sum
 * @property int $max_sum
 * @property int $step_sum
 * @property int $min_srok
 * @property int $max_srok
 * @property int $step_srok
 */
class Calculator extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'calculator';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['min_sum', 'max_sum', 'step_sum', 'min_srok', 'max_srok', 'step_srok'], 'required'],
            [['min_sum', 'max_sum', 'step_sum', 'min_srok', 'max_srok', 'step_srok'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'min_sum' => 'Минимальная сумма кредита',
            'max_sum' => 'Максимальная сумма кредита',
            'step_sum' => 'Шаг суммы',
            'min_srok' => 'Минимальный срок кредитования',
            'max_srok' => 'Максимальный срок кредитования',
            'step_srok' => 'Шаг срока',
        ];
    }
}
