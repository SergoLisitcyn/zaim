<?php

namespace frontend\widgets;

use common\models\Links;
use Yii;
use yii\bootstrap\Widget;

class Url extends Widget
{
    public function init()
    {
        parent::init();
    }
    public $output;
    public function run()
    {
//        $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

        $url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $url = explode('?', $url);
        $url = $url[0];
        $links = Links::find()->where(['kz' => $url])->one();
        if($links){
            $linkRu = $links->ru;
        } else {
            $linkRu = 'https://smartzaim.kz/';
        }
        if(Yii::$app->request->pathInfo == 'reestr-mfo'){
            $linkRu = 'https://smartzaim.kz/reestr-mfo/?letter=%D0%90';
        }
        return $this->render('url', [
            'linkRu' => $linkRu,
            'output' => $this->output

        ]);
    }

}