<?php


namespace frontend\widgets;
use common\models\Mfo;
use \yii\bootstrap\Widget;

class GridCatalog extends Widget
{
    public $input;
    public $output;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        if ($this->input == 'homepage') {
            $output = Mfo::find()
                ->where(['status' => '1'])
                ->andWhere(['home_page' => '1'])
//                ->orderBy(['cat_priority' => SORT_ASC, 'cat_id' => SORT_ASC])
                ->all();
        }

        if(isset($this->output)){
            $output = $this->output;
        }

        if($this->input == 'calculator'){

            $get = \Yii::$app->request->get();
            $mfo = Mfo::find()
                ->joinWith('type')
                ->where(['>=','max_sum_calc',$get['sum']])
                ->andWhere(['<=','min_sum_calc',$get['sum']])
                ->andWhere(['>=','max_term_calc',$get['term']])
                ->andWhere(['<=','min_term_calc',$get['term']])
                ->andWhere(['mfo.status' => '1']);

            if(isset($get['advanced_repayment'])) {
                $mfo->andWhere(['advanced_repayment' => $get['advanced_repayment']]);
            }

            if(isset($get['extension_loan'])) {
                $mfo->andWhere(['extension_loan' => $get['extension_loan']]);
            }
            if(isset($get['get_loan'])) {
                $mfo->andWhere(['type_credit.calc_get_url' => $get['get_loan']]);
            }

            if(isset($get['loan_repayment'])) {
                $mfo->andWhere(['type_credit.calc_get_url' => $get['loan_repayment']]);
            }
            if(isset($get['sort'])) {
                if($get['sort'] == 'max_sum'){
                    $mfo->orderBy(['mfo.max_sum_calc' => SORT_DESC]);
                } elseif($get['sort'] == 'max_term') {
                    $mfo->orderBy(['mfo.max_sum_calc' => SORT_DESC]);
                } elseif($get['sort'] == 'approval') {
                    $mfo->orderBy(['mfo.odobrenie' => SORT_DESC]);
                } else {
                    $mfo->orderBy(['mfo.sort' => SORT_ASC]);
                }

            }


            $output = $mfo->all();
        }

        return $this->render('gridCatalog', [
            'mfoAll' => $output,
        ]);
    }
}