<?php


namespace frontend\widgets;


use common\models\Calculator;
use common\models\TypeCredit;
use yii\bootstrap\Widget;

class CalculatorWidget extends Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $calculator = Calculator::findOne(1);
        $spPol = TypeCredit::find()->where(['parent_id' => 3,'status' => 1])->all();
        $spPog = TypeCredit::find()->where(['parent_id' => 2,'status' => 1])->all();

        return $this->render('calculator', [
            'calculator' => $calculator,
            'spPols' => $spPol,
            'spPogs' => $spPog,
        ]);
    }
}
