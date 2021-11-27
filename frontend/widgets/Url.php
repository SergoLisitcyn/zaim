<?php

namespace frontend\widgets;

use common\models\Links;
use yii\bootstrap\Widget;

class Url extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $url = explode('?', $url);
        $url = $url[0];
        $links = Links::find()->where(['kz' => $url])->one();
        if($links){
            $linkRu = $links->ru;
        } else {
            $linkRu = 'https://smartzaim.kz/';
        }

        return $this->render('url', [
            'linkRu' => $linkRu
        ]);
    }

}