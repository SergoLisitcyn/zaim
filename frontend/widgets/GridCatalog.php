<?php


namespace frontend\widgets;
use common\models\Mfo;
use \yii\bootstrap\Widget;

class GridCatalog extends Widget
{
    public $input;
    public $actionlink = 'catlist';
    public $parentId = 0;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        if ($this->input != '/') {
            $url = str_replace("/", '', $this->input);
            $output = Mfo::find()
                ->joinWith('type')
                ->where(['type_credit.url' => $url])
                ->andWhere(['mfo.status' => '1'])
                ->andWhere(['mfo.home_page' => '1'])
                ->all();
        } else {
            $output = Mfo::find()
                ->where(['status' => '1'])
//                ->orderBy(['cat_priority' => SORT_ASC, 'cat_id' => SORT_ASC])
                ->all();
        }

        return $this->render('gridCatalog', [
            'mfoAll' => $output,
        ]);
    }
}