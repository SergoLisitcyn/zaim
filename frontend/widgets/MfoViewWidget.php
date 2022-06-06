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
    public $version;
    public $clientsPageView = null;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $mfoDatas = MfoData::find()->where(['name' => 'Data'])->one();
        $dataMenu = unserialize($mfoDatas->data_menu_kz);
        $dataMfo = unserialize($mfoDatas->data_mfo_kz);
        $dataTag = unserialize($mfoDatas->data_tag_kz);
        if($this->version == 'RU'){
            $dataMenu = unserialize($mfoDatas->data_menu);
            $dataMfo = unserialize($mfoDatas->data_mfo);
            $dataTag = unserialize($mfoDatas->data_tag);
        }
        if($this->navigation){
            return $this->render('mfo/'.$this->type,[
                'model' => $this->model,
                'data' => $this->data,
                'active' => $this->navigation,
                'dataMfo' => $dataMfo,
                'dataMenu' => $dataMenu,
                'clientsPageView' => $this->clientsPageView,
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

        $rating = Mfo::find()
            ->orderBy(['rating' => SORT_DESC])
            ->where(['home_page' => 1])
            ->limit(3)
            ->all();
        if($this->type == 'sideBar'){

            return $this->render('mfo/'.$this->type,[
                'data' => $this->data,
                'model' => $this->model,
                'action' => $this->action,
                'rating' => $rating,
            ]);
        }
        if($this->type == 'sideBarRating'){
            return $this->render('mfo/'.$this->type,[
                'rating' => $rating,
            ]);
        }

        return $this->render('mfo/mfo-view/'.$this->type,[
            'model' => $this->model,
            'data' => $this->data,
            'dataMfo' => $dataMfo,
        ]);

    }
}