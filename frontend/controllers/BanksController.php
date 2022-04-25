<?php

namespace frontend\controllers;

use common\models\BankData;
use common\models\BankReview;
use Yii;
use common\models\Banks;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * BanksController implements the CRUD actions for Banks model.
 */
class BanksController extends Controller
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
     * Lists all Banks models.
     * @return mixed
     */
    public function actionIndex()
    {
        $banks = Banks::find()->where(['status' => 1])->all();
        $version = 'KZ';

        return $this->render('index', [
            'banks' => $banks,
            'version' => $version,
        ]);
    }

    /**
     * Displays a single Banks model.
     * @param string $url
     * @throws HttpException
     */
    public function actionView(string $url)
    {
        $version = 'KZ';
        if(isset($_GET) && isset($_GET['version']) && $_GET['version'] == 'ru') $version = 'RU';
        $bank = Banks::getBankData($url,$version);
        $reviews = BankReview::find()->where(['bank_id' => $bank['model']->id])->andWhere(['status' => 1])->orderBy(['date' => SORT_DESC])->limit(3)->all();
        $model = new BankReview();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('successMfoView', 'Сіздің пікіріңіз жіберілді. Хабарласқаныңыз үшін рахмет!');
            return $this->refresh();
        } else {
            return $this->render('view', [
                'model' => $bank['model'],
                'data' => $bank['data'],
                'reviews' => $reviews,
                'version' => $bank['version'],
                'reviewsModel' => $model,
                'bankData' => $bank['bankData'],
                'dataMenu' => $bank['dataMenu'],
                'dataBank' => $bank['dataBank'],
                'dataTag' => $bank['dataTag'],
            ]);
        }
    }

    public function actionFinance($url)
    {
        $version = 'KZ';
        if(isset($_GET) && isset($_GET['version']) && $_GET['version'] == 'ru') $version = 'RU';
        $bank = Banks::getBankData($url,$version);
        $reviews = BankReview::find()->where(['bank_id' => $bank['model']->id])->andWhere(['status' => 1])->orderBy(['date' => SORT_DESC])->limit(3)->all();
        $model = new BankReview();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('successMfoView', 'Сіздің пікіріңіз жіберілді. Хабарласқаныңыз үшін рахмет!');
            return $this->refresh();
        } else {
            return $this->render('finance', [
                'model' => $bank['model'],
                'data' => $bank['data'],
                'reviews' => $reviews,
                'version' => $bank['version'],
                'reviewsModel' => $model,
                'bankData' => $bank['bankData'],
                'dataMenu' => $bank['dataMenu'],
                'dataBank' => $bank['dataBank'],
                'dataTag' => $bank['dataTag'],
            ]);
        }
    }
    public function actionRequisites($url)
    {
        $version = 'KZ';
        if(isset($_GET) && isset($_GET['version']) && $_GET['version'] == 'ru') $version = 'RU';
        $bank = Banks::getBankData($url,$version);
        $reviews = BankReview::find()->where(['bank_id' => $bank['model']->id])->andWhere(['status' => 1])->orderBy(['date' => SORT_DESC])->limit(3)->all();
        $model = new BankReview();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('successMfoView', 'Сіздің пікіріңіз жіберілді. Хабарласқаныңыз үшін рахмет!');
            return $this->refresh();
        } else {
            return $this->render('requisites', [
                'model' => $bank['model'],
                'data' => $bank['data'],
                'reviews' => $reviews,
                'version' => $bank['version'],
                'reviewsModel' => $model,
                'bankData' => $bank['bankData'],
                'dataMenu' => $bank['dataMenu'],
                'dataBank' => $bank['dataBank'],
                'dataTag' => $bank['dataTag'],
            ]);
        }
    }
    public function actionContacts($url)
    {
        $version = 'KZ';
        if(isset($_GET) && isset($_GET['version']) && $_GET['version'] == 'ru') $version = 'RU';
        $bank = Banks::getBankData($url,$version);
        $reviews = BankReview::find()->where(['bank_id' => $bank['model']->id])->andWhere(['status' => 1])->orderBy(['date' => SORT_DESC])->limit(3)->all();
        $model = new BankReview();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('successMfoView', 'Сіздің пікіріңіз жіберілді. Хабарласқаныңыз үшін рахмет!');
            return $this->refresh();
        } else {
            return $this->render('contacts', [
                'model' => $bank['model'],
                'data' => $bank['data'],
                'reviews' => $reviews,
                'version' => $bank['version'],
                'reviewsModel' => $model,
                'bankData' => $bank['bankData'],
                'dataMenu' => $bank['dataMenu'],
                'dataBank' => $bank['dataBank'],
                'dataTag' => $bank['dataTag'],
            ]);
        }
    }

    public function actionReviews($url)
    {
        if(!$url){
            throw new HttpException(404, 'Страница не существует.');
        }
        $version = 'KZ';
        if(isset($_GET) && isset($_GET['version']) && $_GET['version'] == 'ru') $version = 'RU';
        $bank = Banks::getBankData($url,$version);
        $reviews= BankReview::find()
            ->where([
                'bank_id' => $bank['model']->id,
                'status' => 1
            ])
            ->all();

        $model = new BankReview();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('successMfoLogin', 'Сіздің пікіріңіз жіберілді. Хабарласқаныңыз үшін рахмет!');
            return $this->refresh();
        } else {
            return $this->render('reviews', [
                'model' => $model,
                'reviews' => $reviews,
                'data' => $bank['data'],
                'bank' => $bank['model'],
                'version' => $bank['version'],
                'bankData' => $bank['bankData'],
                'dataMenu' => $bank['dataMenu'],
                'dataBank' => $bank['dataBank'],
                'dataTag' => $bank['dataTag'],
            ]);
        }
    }
}
