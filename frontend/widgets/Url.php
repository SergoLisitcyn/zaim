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
        var_dump($links);die;
        if($links){
            $linkRu = $links->ru;
            $linkKz = $links->ru;
        } else {
            $linkRu = 'https://smartzaim.kz/';
            $linkKz = 'https://kz.smartzaim.kz/';
        }

        if(Yii::$app->request->pathInfo == 'reestr-mfo'){
            $linkRu = 'https://smartzaim.kz/reestr-mfo/?letter=%D0%90';
            $linkKz = 'https://kz.smartzaim.kz/reestr-mfo';
        }
        if(Yii::$app->request->pathInfo == 'reestr-mfo' && isset($_GET['page'])){
            $linkRu = 'https://smartzaim.kz/'.Yii::$app->request->pathInfo.'/?letter='.$_GET['page'];
            $linkKz = 'https://kz.smartzaim.kz/'.Yii::$app->request->pathInfo.'?page='.$_GET['page'];
        }
        if(Yii::$app->controller->route == 'mfo-new/view'){
            $linkRu = 'https://smartzaim.kz/'.Yii::$app->request->pathInfo.'/';
            $linkKz = 'https://kz.smartzaim.kz/'.Yii::$app->request->pathInfo;
        }
        if(Yii::$app->controller->route == 'mfo-new/login'){
            $linkRu = 'https://smartzaim.kz/'.Yii::$app->request->pathInfo.'/';
            $linkKz = 'https://kz.smartzaim.kz/'.Yii::$app->request->pathInfo;
        }
        if(Yii::$app->controller->route == 'mfo-new/contacts'){
            $linkRu = 'https://smartzaim.kz/'.Yii::$app->request->pathInfo.'/';
            $linkKz = 'https://kz.smartzaim.kz/'.Yii::$app->request->pathInfo;
        }
        if(Yii::$app->controller->route == 'mfo-new/reviews'){
            $linkRu = 'https://smartzaim.kz/'.Yii::$app->request->pathInfo.'/';
            $linkKz = 'https://kz.smartzaim.kz/'.Yii::$app->request->pathInfo;
        }
        if(Yii::$app->controller->route == 'mfo-new/clients'){
            $str = trim(Yii::$app->request->pathInfo, " \clients.");
            $linkRu = 'https://smartzaim.kz/'.$str.'clients_support/';
            $linkKz = 'https://kz.smartzaim.kz/'.$str.'clients';
        }
        if(Yii::$app->controller->route == 'banks/index'){
            $linkRu = 'https://smartzaim.kz/'.Yii::$app->request->pathInfo.'/';
            $linkKz = 'https://kz.smartzaim.kz/'.Yii::$app->request->pathInfo;
        }
        return $this->render('url', [
            'linkRu' => $linkRu,
            'linkKz' => $linkKz,
            'output' => $this->output

        ]);
    }

}