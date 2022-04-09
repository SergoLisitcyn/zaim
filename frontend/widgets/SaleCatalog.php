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
        $date = date('Y-m-d H:i:s');
        $sales = Sale::find()
            ->where(['status' => '1'])
            ->andWhere(['>', 'srok_do', $date])
            ->orderBy(['srok_do' => SORT_DESC])
            ->limit(10)
            ->all();

        return $this->render('sale', [
            'sales' => $sales,
        ]);
    }

}