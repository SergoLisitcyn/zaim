<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "main".
 *
 * @property int $id
 * @property string|null $section_1
 * @property string|null $section_2
 * @property string|null $section_3
 * @property string|null $section_4
 */
class Main extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'main';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['section_1', 'section_2', 'section_3', 'section_4'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'section_1' => 'Section 1',
            'section_2' => 'Section 2',
            'section_3' => 'Section 3',
            'section_4' => 'Section 4',
        ];
    }
}
