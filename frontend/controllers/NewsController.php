<?php

namespace frontend\controllers;

use common\models\Articles;
use common\models\MainPage;
use common\models\Mfo;
use Yii;
use common\models\News;
use common\models\NewsSearch;
use yii\db\Expression;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
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
        $news = News::find()->where(['status' => 1])->all();
        if(isset($_POST['email'])){
            (new MainPage)->unisender($_POST['email']);
            return $this->refresh();
        }

        return $this->render('index', [
            'news' => $news,
        ]);
    }

    public function actionView($url = null)
    {
        $news = News::find()->where(['status' => 1, 'url' => $url])->one();
        if(!$news) throw new HttpException(404, 'Страница не существует.');
        $newsRandom = News::find()
            ->where(['status' => 1])
            ->andWhere(['!=','id', $news->id])
            ->orderBy(new Expression('rand()'))
            ->limit(3)
            ->all();
        $mfo = Mfo::find()->where(['id' => 1])->one();
        if(isset($_POST['email'])){
            (new MainPage)->unisender($_POST['email']);
            return $this->refresh();
        }
        return $this->render('view', [
            'model' => $news,
            'mfo' => $mfo,
            'newsRandom' => $newsRandom,
        ]);

    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing News model.
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
     * Deletes an existing News model.
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
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
