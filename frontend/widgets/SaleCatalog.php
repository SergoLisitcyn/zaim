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
            ->orderBy(['id' => SORT_DESC])
            ->all();

        return $this->render('sale', [
            'sales' => $sales,
        ]);
    }

}