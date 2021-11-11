<?php


namespace frontend\controllers;

use common\models\City;
use common\models\Mfo;
use common\models\Pages;
use common\models\Sale;
use common\models\TypeCredit;
use yii\web\Controller;
use Yii;

class SitemapController extends Controller
{

    public function actionIndex()
    {
        //Если нужно сбросить кэш, то расскоментируем и перезагрузим страницу
//        Yii::$app->cache->delete('sitemap');

//        if (!$xml_sitemap = Yii::$app->cache->get('sitemap')) {  // проверяем есть ли закэшированная версия sitemap

        $urls = [];
        $citys = City::find()->where(['status' => 1])->all();
        foreach ($citys as $city) {
            $urls[] = [
                'loc' => $city->url,
                'lastmod' => date( DATE_W3C ),
                'priority' => 0.80
            ];
            }

        $typeCredits = TypeCredit::find()->all();
        foreach ($typeCredits as $typeCredit) {
            $urls[] = [
                'loc' => $typeCredit->url,
                'lastmod' => date( DATE_W3C ),
                'priority' => 0.80
            ];
        }
        $mfos = Mfo::find()->where(['status' => 1])->all();
        foreach ($mfos as $mfo) {
            $urls[] = [
                'loc' => 'mfo/'.$mfo->url,
                'lastmod' => date( DATE_W3C ),
                'priority' => 0.80
            ];
        }

        $sales = Sale::find()->where(['status' => 1])->all();
        foreach ($sales as $sale) {
            $urls[] = [
                'loc' => 'aktsii/'.$sale->url,
                'lastmod' => date( DATE_W3C ),
                'priority' => 0.80
            ];
        }

        $pages = Pages::find()->where(['status' => 1])->all();
        foreach ($pages as $page) {
            $urls[] = [
                'loc' => 'page/'.$page->slug,
                'lastmod' => date( DATE_W3C ),
                'priority' => 0.80
            ];
        }

        $mfosLogin = Mfo::find()->where(['status' => 1])->all();
        foreach ($mfosLogin as $mfoLogin) {
            $urls[] = [
                'loc' => 'mfo/'.$mfoLogin->url.'/login',
                'lastmod' => date( DATE_W3C ),
                'priority' => 0.64
            ];
        }

        $mfosReviews = Mfo::find()->where(['status' => 1])->all();
        foreach ($mfosReviews as $review) {
            $urls[] = [
                'loc' => 'mfo/'.$review->url.'/reviews',
                'lastmod' => date( DATE_W3C ),
                'priority' => 0.64
            ];
        }

            $xml_sitemap = $this->renderPartial('index', array( // записываем view на переменную для последующего кэширования
                'host' => Yii::$app->request->hostInfo,         // текущий домен сайта
                'urls' => $urls,                                // с генерированные ссылки для sitemap
            ));

//            Yii::$app->cache->set('sitemap', $xml_sitemap, 60*60*12); // кэшируем результат на 12 ч
//        }
        Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
        $headers = Yii::$app->response->headers;
        $headers->add('Content-Type', 'text/xml');
        return $xml_sitemap;
    }

}