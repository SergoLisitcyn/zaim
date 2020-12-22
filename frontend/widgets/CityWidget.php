<?php
namespace frontend\widgets;

use \yii\bootstrap\Widget;
use common\models\City;

class CityWidget extends Widget
{
    public $input;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        if (is_null($this->input)) {
            $city = City::find()
                ->where(['status' => '1'])
                ->orderBy(['sort' => SORT_ASC])
                ->all();
        } else {
            $output =$this->input;
            $where = 'subcat_id';
        }

        return $this->render('widgetCity', [
            'cities' => $city,
        ]);
    }
}
