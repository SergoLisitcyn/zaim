<?php

namespace frontend\widgets;

use yii\bootstrap\Widget;

class ReestrMfoFilter  extends Widget
{
    public $type;
    public $tag;
    public function init()
    {
        parent::init();
    }
    public function run()
    {
        return $this->render('reestrMfoFilter', [
            'dataMfo' => $this->type,
            'dataTag' => $this->tag,
        ]);
    }
}