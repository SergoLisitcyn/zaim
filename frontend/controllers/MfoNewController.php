<?php

namespace frontend\controllers;

use common\models\MainPage;
use common\models\Mfo;
use common\models\MfoData;
use common\models\Review;
use common\models\Sale;
use Yii;
use common\models\MfoNew;
use yii\console\Response;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MfoNewController implements the CRUD actions for MfoNew model.
 */
class MfoNewController extends Controller
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

    public function actionIndex()
    {
        return Yii::$app->response->redirect(['mfo/reestr-mfo']);
    }

    /**
     * @param null $index
     * @param null $filter
     * @return string
     * @throws HttpException
     */
    public function actionFilter($index = null, $filter = null): string
    {
        $filterData = Mfo::getFilterData($index,$filter);

        return $this->render('filter', [
            'mfoAll' => $filterData['mfoAll'],
            'dataMfo' => $filterData['dataMfo'],
            'tag' => $filterData['tag'],
        ]);
    }


    /**
     * @throws HttpException
     */
    public function actionView($url)
    {
        if(!$url) throw new HttpException(404, 'Страница не существует.');
        $version = 'KZ';
        if(isset($_GET) && isset($_GET['version']) && $_GET['version'] == 'ru') $version = 'RU';
//        $mfo = Mfo::find()->where(['status' => 1, 'url' => $url])->one();
        $mfo = Mfo::find()->where(['url' => $url])->one();
        if(!$mfo) throw new HttpException(404, 'Страница не существует.');

        $sale = Sale::find()->where(['status' => 1,'mfo_id' => $mfo->id])->orderBy(['srok_do' => SORT_DESC])->one();
        if($sale && $sale->srok_do < date('Y-m-d H:i:s')){
            $sale = null;
        }

        $data = unserialize($mfo->data_kz);
        $mfoDatas = Mfo::getMfoDatas($version);

        if($version == 'RU'){
            $data = unserialize($mfo->data_ru);
        }
        $clientsPageView = Mfo::getSocialViewClients($data);
        if(isset($_POST['email_unisender'])){
            (new MainPage)->unisender($_POST['email_unisender']);
            return $this->refresh();
        }

        $model = new Review();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('successMfoView', 'Сіздің пікіріңіз жіберілді. Хабарласқаныңыз үшін рахмет!');
            return $this->refresh();
        } else {
            return $this->render('view', [
                'model' => $mfo,
                'data' => $data,
                'dataMfo' => $mfoDatas['dataMfo'],
                'dataMenu' => $mfoDatas['dataMenu'],
                'dataTag' => $mfoDatas['dataTag'],
                'sale' => $sale,
                'reviews' => Review::getReviewMfo($mfo->id,true),
                'reviewsModel' => $model,
                'version' => $version,
                'clientsPageView' => $clientsPageView,
            ]);
        }
    }

    /**
     * @throws HttpException
     */
    public function actionLogin($url)
    {
        if(!$url) throw new HttpException(404, 'Страница не существует.');
        $version = 'KZ';
        if(isset($_GET) && isset($_GET['version']) && $_GET['version'] == 'ru') $version = 'RU';
        $mfo = Mfo::find()->where(['url' => $url])->one();
        if(!$mfo) throw new HttpException(404, 'Страница не существует.');

        $data = unserialize($mfo->data_kz);
        $mfoDatas = Mfo::getMfoDatas($version);

        if($version == 'RU'){
            $data = unserialize($mfo->data_ru);
        }
        $clientsPageView = Mfo::getSocialViewClients($data);
        if(isset($_POST['email_unisender'])){
            (new MainPage)->unisender($_POST['email_unisender']);
            return $this->refresh();
        }

        return $this->render('login', [
            'model' => $mfo,
            'data' => $data,
            'dataMfo' => $mfoDatas['dataMfo'],
            'dataMenu' => $mfoDatas['dataMenu'],
            'clientsPageView' => $clientsPageView,
        ]);
    }

    /**
     * @throws HttpException
     */
    public function actionClients($url)
    {
        if(!$url) throw new HttpException(404, 'Страница не существует.');
        $version = 'KZ';
        if(isset($_GET) && isset($_GET['version']) && $_GET['version'] == 'ru') $version = 'RU';
        $mfo = Mfo::find()->where(['url' => $url])->one();
        if(!$mfo) throw new HttpException(404, 'Страница не существует.');
        $data = unserialize($mfo->data_kz);

        $mfoDatas = Mfo::getMfoDatas($version);

        if($version == 'RU'){
            $data = unserialize($mfo->data_ru);
        }

        $socialView = Mfo::getSocialViewClients($data);
        $clientsPageView = Mfo::getSocialViewClients($data);
        if(isset($_POST['email_unisender'])){
            (new MainPage)->unisender($_POST['email_unisender']);
            return $this->refresh();
        }
        $model = new Review();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('successMfoView', 'Сіздің пікіріңіз жіберілді. Хабарласқаныңыз үшін рахмет!');
            return $this->refresh();
        } else {
            return $this->render('clients', [
                'model' => $mfo,
                'data' => $data,
                'dataMfo' => $mfoDatas['dataMfo'],
                'dataMenu' => $mfoDatas['dataMenu'],
                'dataTag' => $mfoDatas['dataTag'],
                'reviewsModel' => $model,
                'socialView' => $socialView,
                'clientsPageView' => $clientsPageView,
            ]);
        }
    }

    /**
     * @throws HttpException
     */
//    public function actionContacts($url)
//    {
//        if(!$url) throw new HttpException(404, 'Страница не существует.');
//
//        $version = 'KZ';
//        if(isset($_GET) && isset($_GET['version']) && $_GET['version'] == 'ru') $version = 'RU';
//
//        $mfo = Mfo::find()->where(['url' => $url])->one();
//        if(!$mfo) throw new HttpException(404, 'Страница не существует.');
//
//        $data = unserialize($mfo->data_kz);
//        $mfoDatas = Mfo::getMfoDatas($version);
//        if($version == 'RU'){
//            $data = unserialize($mfo->data_ru);
//        }
//        $clientsPageView = Mfo::getSocialViewClients($data);
//        if(isset($_POST['email_unisender'])){
//            (new MainPage)->unisender($_POST['email_unisender']);
//            return $this->refresh();
//        }
//        $model = new Review();
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            Yii::$app->session->setFlash('successMfoView', 'Сіздің пікіріңіз жіберілді. Хабарласқаныңыз үшін рахмет!');
//            return $this->refresh();
//        } else {
//            return $this->render('contacts', [
//                'model' => $mfo,
//                'data' => $data,
//                'dataMfo' => $mfoDatas['dataMfo'],
//                'dataMenu' => $mfoDatas['dataMenu'],
//                'dataTag' => $mfoDatas['dataTag'],
//                'reviewsModel' => $model,
//                'clientsPageView' => $clientsPageView,
//            ]);
//        }
//    }

    public function actionReviews($url)
    {
        if(!$url) return $this->redirect('/');

        $mfo = Mfo::find()->where(['url' => $url])->one();
        if(!$mfo) throw new HttpException(404, 'Страница не существует.');

        $data = unserialize($mfo->data_ru);
        $clientsPageView = Mfo::getSocialViewClients($data);
        $mfoDatas = Mfo::getMfoDatas();

        if(isset($_POST['email_unisender'])){
            (new MainPage)->unisender($_POST['email_unisender']);
            return $this->refresh();
        }
        $model = new Review();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('successMfoView', 'Сіздің пікіріңіз жіберілді. Хабарласқаныңыз үшін рахмет!');
            return $this->refresh();
        } else {
            return $this->render('reviews', [
                'model' => $mfo,
                'data' => $data,
                'dataMfo' => $mfoDatas['dataMfo'],
                'dataMenu' => $mfoDatas['dataMenu'],
                'dataTag' => $mfoDatas['dataTag'],
                'reviews' => Review::getReviewMfo($mfo->id),
                'reviewsModel' => $model,
                'clientsPageView' => $clientsPageView,
            ]);
        }
    }
}
