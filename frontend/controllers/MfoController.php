<?php

namespace frontend\controllers;

use common\models\City;
use common\models\MainPage;
use common\models\MfoData;
use common\models\Review;
use common\models\Sale;
use Yii;
use common\models\Mfo;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use yii\db\Exception;
use yii\db\Expression;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * MfoController implements the CRUD actions for Mfo model.
 */
class MfoController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * @throws Exception
     */
    public function actionReestrMfo()
    {
        $request = Yii::$app->request;
        $bin = $request->post('reestr-bin');
        $name = $request->post('reestr-name');
        $city = $request->post('reestr-city');
        $page = $request->get('page');

        $q = '1';
        if($page) $q = $page;

        $mfoDatas = Mfo::getMfoDatas();

        if($bin || $name || $city){
            $mfoAll = Mfo::getFormReestrMfo($bin,$name,$city);
            $q = '00000000';
            if($city){
                return Yii::$app->response->redirect(['mfo/reestr-mfo-city', 'url' => $city]);
            }
        } else {
            $mfoAll = Mfo::findMfoByLetter($q);
        }

        return $this->render('reestr-mfo', [
            'mfoAll' => $mfoAll,
            'dataMfo' => $mfoDatas['dataMfo'],
            'dataTag' => $mfoDatas['dataTag'],
            'citys' => Mfo::findAllCity(),
            'updateTime' => Mfo::getTextDate(),
            'words' => Mfo::getWordsForPagination(),
            'q' => $q,
        ]);
    }

    public function actionReestrMfoCity($url)
    {
        if(!$url) throw new HttpException(404, 'Страница не существует.');
        $mfoAll = Mfo::getFormReestrMfo(null,null,$url);
        $mfoDatas = Mfo::getMfoDatas();

        return $this->render('reestr-mfo-city', [
            'mfoAll' => $mfoAll,
            'dataMfo' => $mfoDatas['dataMfo'],
            'dataTag' => $mfoDatas['dataTag'],
            'tag' => $url,
        ]);

    }
}
