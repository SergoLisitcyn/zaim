<?php

namespace frontend\controllers;

use common\models\MainPage;
use common\models\Mfo;
use common\models\MfoData;
use common\models\Review;
use common\models\Sale;
use Yii;
use common\models\MfoNew;
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

    /**
     * Lists all MfoNew models.
     * @return mixed
     */
    public function actionIndex()
    {
//        $mfo = Mfo::find()->where(['status' => 1])->all();
        $mfo = Mfo::find()->all();

        return $this->render('index', [
            'mfo' => $mfo,
        ]);
    }

    public function actionFilter($index = null,$filter = null)
    {
        if(!$filter || !$index) throw new HttpException(404, 'Страница не существует.');

//        $mfo = Mfo::find()->where(['status' => 1])->all();
        $mfo = Mfo::find()->all();
        $array = [];
        foreach ($mfo as $key => $value){
            $data = unserialize($value['data_kz']);
            if(isset($data[$index][$filter]) && $data[$index][$filter]){
                $array[] = $value['id'];
            }
        }
        $query = Mfo::find()
            ->where(['in', 'id', $array])->all();
        $mfoDatas = MfoData::find()->where(['name' => 'Data'])->one();
        $dataMfo = unserialize($mfoDatas->data_mfo_kz);
        return $this->render('filter', [
            'mfoAll' => $query,
            'dataMfo' => $dataMfo,
        ]);
    }


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

        $reviews = Review::find()->where(['cat_id' => $mfo->id])->andWhere(['status' => 1])->orderBy(['date' => SORT_DESC])->limit(3)->all();

        $mfoDatas = MfoData::find()->where(['name' => 'Data'])->one();
        $data = unserialize($mfo->data_kz);
        $dataMenu = unserialize($mfoDatas->data_menu_kz);
        $dataMfo = unserialize($mfoDatas->data_mfo_kz);
        $dataTag = unserialize($mfoDatas->data_tag_kz);
        if($version == 'RU'){
            $data = unserialize($mfo->data_ru);
            $dataMenu = unserialize($mfoDatas->data_menu);
            $dataMfo = unserialize($mfoDatas->data_mfo);
            $dataTag = unserialize($mfoDatas->data_tag);
        }

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
                'dataMenu' => $dataMenu,
                'dataMfo' => $dataMfo,
                'dataTag' => $dataTag,
                'sale' => $sale,
                'reviews' => $reviews,
                'reviewsModel' => $model,
                'version' => $version,
            ]);
        }
    }

    public function actionLogin($url)
    {
        if(!$url) throw new HttpException(404, 'Страница не существует.');
        $version = 'KZ';
        if(isset($_GET) && isset($_GET['version']) && $_GET['version'] == 'ru') $version = 'RU';
        $mfo = Mfo::find()->where(['url' => $url])->one();
        if(!$mfo) throw new HttpException(404, 'Страница не существует.');
        $mfoDatas = MfoData::find()->where(['name' => 'Data'])->one();
        $data = unserialize($mfo->data_kz);
        $dataMenu = unserialize($mfoDatas->data_menu_kz);
        $dataMfo = unserialize($mfoDatas->data_mfo_kz);
        $dataTag = unserialize($mfoDatas->data_tag_kz);
        if($version == 'RU'){
            $data = unserialize($mfo->data_ru);
            $dataMenu = unserialize($mfoDatas->data_menu);
            $dataMfo = unserialize($mfoDatas->data_mfo);
            $dataTag = unserialize($mfoDatas->data_tag);
        }
        if(isset($_POST['email_unisender'])){
            (new MainPage)->unisender($_POST['email_unisender']);
            return $this->refresh();
        }

        return $this->render('login', [
            'model' => $mfo,
            'data' => $data,
            'dataMenu' => $dataMenu,
            'dataMfo' => $dataMfo,
        ]);
    }

    public function actionClients($url)
    {
        if(!$url) throw new HttpException(404, 'Страница не существует.');
        $version = 'KZ';
        if(isset($_GET) && isset($_GET['version']) && $_GET['version'] == 'ru') $version = 'RU';
        $mfo = Mfo::find()->where(['url' => $url])->one();
        if(!$mfo) throw new HttpException(404, 'Страница не существует.');
        $mfoDatas = MfoData::find()->where(['name' => 'Data'])->one();
        $reviews = Review::find()->where(['cat_id' => $mfo->id])->andWhere(['status' => 1])->orderBy(['date' => SORT_DESC])->limit(3)->all();
        $data = unserialize($mfo->data_kz);
        $dataMenu = unserialize($mfoDatas->data_menu_kz);
        $dataMfo = unserialize($mfoDatas->data_mfo_kz);
        $dataTag = unserialize($mfoDatas->data_tag_kz);
        if($version == 'RU'){
            $data = unserialize($mfo->data_ru);
            $dataMenu = unserialize($mfoDatas->data_menu);
            $dataMfo = unserialize($mfoDatas->data_mfo);
            $dataTag = unserialize($mfoDatas->data_tag);
        }

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
                'dataMenu' => $dataMenu,
                'dataMfo' => $dataMfo,
                'dataTag' => $dataTag,
                'reviews' => $reviews,
                'reviewsModel' => $model
            ]);
        }
    }

    public function actionContacts($url)
    {
        if(!$url) throw new HttpException(404, 'Страница не существует.');
        $version = 'KZ';
        if(isset($_GET) && isset($_GET['version']) && $_GET['version'] == 'ru') $version = 'RU';
        $mfo = Mfo::find()->where(['url' => $url])->one();
        if(!$mfo) throw new HttpException(404, 'Страница не существует.');
        $reviews = Review::find()->where(['cat_id' => $mfo->id])->andWhere(['status' => 1])->orderBy(['date' => SORT_DESC])->limit(3)->all();
        $mfoDatas = MfoData::find()->where(['name' => 'Data'])->one();
        $data = unserialize($mfo->data_kz);
        $dataMenu = unserialize($mfoDatas->data_menu_kz);
        $dataMfo = unserialize($mfoDatas->data_mfo_kz);
        $dataTag = unserialize($mfoDatas->data_tag_kz);
        if($version == 'RU'){
            $data = unserialize($mfo->data_ru);
            $dataMenu = unserialize($mfoDatas->data_menu);
            $dataMfo = unserialize($mfoDatas->data_mfo);
            $dataTag = unserialize($mfoDatas->data_tag);
        }

        if(isset($_POST['email_unisender'])){
            (new MainPage)->unisender($_POST['email_unisender']);
            return $this->refresh();
        }
        $model = new Review();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('successMfoView', 'Сіздің пікіріңіз жіберілді. Хабарласқаныңыз үшін рахмет!');
            return $this->refresh();
        } else {
            return $this->render('contacts', [
                'model' => $mfo,
                'data' => $data,
                'dataMenu' => $dataMenu,
                'dataMfo' => $dataMfo,
                'dataTag' => $dataTag,
                'reviews' => $reviews,
                'reviewsModel' => $model
            ]);
        }
    }

    public function actionReviews($url)
    {
        if(!$url) return $this->redirect('/');
        $mfo = Mfo::find()->where(['url' => $url])->one();
        if(!$mfo) throw new HttpException(404, 'Страница не существует.');
        $reviews = Review::find()->where(['cat_id' => $mfo->id])->andWhere(['status' => 1])->orderBy(['date' => SORT_DESC])->all();
        $mfoDatas = MfoData::find()->where(['name' => 'Data'])->one();
        $data = unserialize($mfo->data_ru);
        $dataMenu = unserialize($mfoDatas->data_menu);
        $dataMfo = unserialize($mfoDatas->data_mfo);
        $dataTag = unserialize($mfoDatas->data_tag);

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
                'dataMenu' => $dataMenu,
                'dataMfo' => $dataMfo,
                'dataTag' => $dataTag,
                'reviews' => $reviews,
                'reviewsModel' => $model
            ]);
        }
//        return $this->render('reviews');
    }

    /**
     * Creates a new MfoNew model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MfoNew();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MfoNew model.
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
     * Deletes an existing MfoNew model.
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
     * Finds the MfoNew model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MfoNew the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MfoNew::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
