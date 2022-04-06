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
     * Lists all Mfo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Mfo::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
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

        $q = 'А';
        if($page) $q = $page;

        if($bin || $name || $city){
            $mfoAll = Mfo::getFormReestrMfo($bin,$name,$city);
            $q = '00000000';
        } else {
            $mfoAll = Mfo::find()
                ->where('mfo_name LIKE :q')
                ->andWhere(['not', ['data_kz' => null]])
                ->addParams(['q'=>$q . '%'])
                ->orderBy('mfo_name ASC')
                ->all();
        }

        $mfoDatas = MfoData::find()->where(['name' => 'Data'])->one();
        $dataMfo = unserialize($mfoDatas->data_mfo_kz);

        $city = Mfo::find()
            ->select(['city_kz AS city'])
            ->where(['not', ['data_kz' => null]])
            ->groupBy(['city'])
            ->asArray()
            ->all();

        return $this->render('reestr-mfo', [
            'mfoAll' => $mfoAll,
            'dataMfo' => $dataMfo,
//            'pages' => $pages,
            'citys' => $city,
            'updateTime' => Mfo::getTextDate(),
            'words' => Mfo::getWordsForPagination(),
            'q' => $q,
        ]);
    }

    /**
     * @throws HttpException
     */
    public function actionView($url)
    {
        if(!$url) throw new HttpException(404, 'Страница не существует.');
        $mfo = Mfo::find()->where(['status' => 1, 'url' => $url])->one();
        if(!$mfo) throw new HttpException(404, 'Страница не существует.');
        $sale = Sale::find()->where(['status' => 1,'mfo_id' => $mfo->id])->orderBy(['srok_do' => SORT_DESC])->one();
        $reviews = Review::find()->where(['cat_id' => $mfo->id])->andWhere(['status' => 1])->orderBy(['date' => SORT_DESC])->limit(3)->all();
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
                'sale' => $sale,
                'reviews' => $reviews,
                'reviewsModel' => $model
            ]);
        }
    }

    public function actionLogin($url)
    {
        if(!$url){
            return $this->redirect('/');
        }
        if(isset($_POST['email_unisender'])){
            (new MainPage)->unisender($_POST['email_unisender']);
            return $this->refresh();
        }
        $mfo = Mfo::find()->where(['status' => 1, 'url' => $url])->one();
        return $this->render('login', [
            'model' => $mfo,
        ]);
    }

    public function actionReviews($url)
    {
        if(!$url){
            throw new HttpException(404, 'Страница не существует.');
        }
        $mfo = Mfo::find()->where(['status' => 1, 'url' => $url])->one();
        $reviews= Review::find()
            ->where([
                'cat_id' => $mfo->id,
                'status' => 1
            ])
            ->all();
        if(isset($_POST['email_unisender'])){
            (new MainPage)->unisender($_POST['email_unisender']);
            return $this->refresh();
        }
        $model = new Review();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('successMfoLogin', 'Сіздің пікіріңіз жіберілді. Хабарласқаныңыз үшін рахмет!');
            return $this->refresh();
        } else {
            return $this->render('reviews', [
                'model' => $model,
                'reviews' => $reviews,
                'mfo' => $mfo,
            ]);
        }
//        return $this->render('reviews');
    }

    /**
     * Creates a new Mfo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Mfo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Mfo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Mfo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Mfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Mfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mfo::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
