<?php


namespace frontend\widgets;


use common\models\Sale;
use yii\bootstrap\Widget;

class SaleCatalog extends Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $sales = Sale::find()
            ->where(['status' => '1'])
            ->orderBy(['sort' => SORT_ASC])
            ->all();

        return $this->render('sale', [
            'sales' => $sales,
        ]);
    }

}