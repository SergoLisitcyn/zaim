<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "type_credit".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property int|null $sort
 * @property int|null $status
 */
class TypeCredit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type_credit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'url','parent_id'], 'required'],
            [['sort', 'status','parent_id'], 'integer'],
            [['name', 'url','calc_name','calc_get_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Фильтр',
            'name' => 'Название',
            'url' => 'Url',
            'sort' => 'Сортировка',
            'calc_name' => 'Название в калькуляторе',
            'calc_get_url' => 'Get url в калькуляторе',
            'status' => 'Статус',
        ];
    }

    public function getFilters()
    {
        return $this->hasOne(Filters::className(), ['parent_id' => 'id']);
    }
}
