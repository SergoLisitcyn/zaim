<?php

namespace frontend\controllers;

use common\models\Review;
use common\models\Sale;
use Yii;
use common\models\Mfo;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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
     * Displays a single Mfo model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($url)
    {
        if(!$url) return $this->redirect('/');

        $mfo = Mfo::find()->where(['status' => 1, 'url' => $url])->one();
        if(!$mfo) return $this->redirect('/');
        $sale = Sale::find()->where(['status' => 1,'mfo_id' => $mfo->id])->orderBy(['srok_do' => SORT_DESC])->one();
        return $this->render('view', [
            'model' => $mfo,
            'sale' => $sale,
        ]);
    }

    public function actionLogin($url)
    {
        if(!$url){
            return $this->redirect('/');
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
        $model = new Review();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Ваш отзыв был отправлен. Благодарим за обращение!');

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
