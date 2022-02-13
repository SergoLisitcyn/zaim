<?php

namespace frontend\widgets;

use common\models\Mfo;
use common\models\MfoData;
use yii\bootstrap\Widget;

class MfoViewWidget  extends Widget
{
    public $type;
    public $model;
    public $data;
    public $navigation;
    public $reviews;
    public $reviewsModel;
    public $action;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $mfoDatas = MfoData::find()->where(['name' => 'Data'])->one();
        $dataMenu = unserialize($mfoDatas->data_menu);
        $dataMfo = unserialize($mfoDatas->data_mfo);
        $dataTag = unserialize($mfoDatas->data_tag);

        if($this->navigation){
            return $this->render('mfo/'.$this->type,[
                'model' => $this->model,
                'data' => $this->data,
                'active' => $this->navigation,
                'dataMfo' => $dataMfo,
                'dataMenu' => $dataMenu,
            ]);
        }
        if($this->type == 'reviews'){
            return $this->render('mfo/'.$this->type,[
                'data' => $this->data,
                'reviews' => $this->reviews,
                'reviewsModel' => $this->reviewsModel,
                'model' => $this->model,
                'action' => $this->action,
            ]);
        }

        if($this->type == 'sideBar'){
            return $this->render('mfo/'.$this->type,[
                'data' => $this->data,
                'model' => $this->model,
                'action' => $this->action,
            ]);
        }

        return $this->render('mfo/mfo-view/'.$this->type,[
            'model' => $this->model,
            'data' => $this->data,
            'dataMfo' => $dataMfo,
        ]);

    }
}