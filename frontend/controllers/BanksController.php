<?php

namespace frontend\controllers;

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

        return $this->render('index', [
            'banks' => $banks,
        ]);
    }

    /**
     * Displays a single Banks model.
     * @param string $url
     * @throws HttpException
     */
    public function actionView(string $url)
    {
        if(!$url) return $this->redirect('/');
        $bank = Banks::find()->where(['status' => 1, 'url' => $url])->one();
        if(!$bank) throw new HttpException(404, 'Страница не существует.');
        return $this->render('view', [
            'model' => $bank,
        ]);
    }

    public function actionFinance($url)
    {
        if(!$url) return $this->redirect('/');


        $bank = Banks::find()->where(['status' => 1, 'url' => $url])->one();
        return $this->render('finance', [
            'model' => $bank,
        ]);
    }
    public function actionRequisites($url)
    {
        if(!$url) return $this->redirect('/');
        $bank = Banks::find()->where(['status' => 1, 'url' => $url])->one();
        return $this->render('requisites', [
            'model' => $bank,
        ]);
    }
    public function actionContacts($url)
    {
        if(!$url) return $this->redirect('/');
        $bank = Banks::find()->where(['status' => 1, 'url' => $url])->one();
        return $this->render('contacts', [
            'model' => $bank,
        ]);
    }

    /**
     * Creates a new Banks model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Banks();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Banks model.
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
     * Deletes an existing Banks model.
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
     * Finds the Banks model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Banks the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Banks::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
