<?php


namespace frontend\widgets;
use common\models\Filters;
use common\models\Mfo;
use common\models\TypeCredit;
use \yii\bootstrap\Widget;

class TopMenu extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $typeCredits = TypeCredit::find()->where(['status'=> 1])->all();
        $filters = Filters::find()->where(['status'=> 1])->all();

        return $this->render('topmenu', [
            'typeCredits' => $typeCredits,
            'filters' => $filters,
        ]);
    }
}