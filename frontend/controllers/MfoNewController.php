<?php

namespace frontend\controllers;

use common\models\MfoData;
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
        $mfo = MfoNew::find()->where(['status' => 1])->all();

        return $this->render('index', [
            'mfo' => $mfo,
        ]);
    }


    public function actionView($url)
    {
        if(!$url) return $this->redirect('/');
        $mfo = MfoNew::find()->where(['status' => 1, 'url' => $url])->one();

        if(!$mfo) throw new HttpException(404, 'Страница не существует.');
        $mfoDatas = MfoData::find()->where(['name' => 'Data'])->one();
        $data = unserialize($mfo->data);
        $dataMenu = unserialize($mfoDatas->data_menu);
        $dataMfo = unserialize($mfoDatas->data_mfo);
        $dataTag = unserialize($mfoDatas->data_tag);
        return $this->render('view', [
            'model' => $mfo,
            'data' => $data,
            'dataMenu' => $dataMenu,
            'dataMfo' => $dataMfo,
            'dataTag' => $dataTag,
        ]);
    }

    public function actionLogin($url)
    {
        if(!$url) return $this->redirect('/');
        $mfo = MfoNew::find()->where(['status' => 1, 'url' => $url])->one();
        if(!$mfo) throw new HttpException(404, 'Страница не существует.');
        $mfoDatas = MfoData::find()->where(['name' => 'Data'])->one();
        $data = unserialize($mfo->data);
        $dataMenu = unserialize($mfoDatas->data_menu);
        $dataMfo = unserialize($mfoDatas->data_mfo);
        return $this->render('login', [
            'model' => $mfo,
            'data' => $data,
            'dataMenu' => $dataMenu,
            'dataMfo' => $dataMfo,
        ]);
    }

    public function actionClients($url)
    {
        if(!$url) return $this->redirect('/');
        $mfo = MfoNew::find()->where(['status' => 1, 'url' => $url])->one();
        if(!$mfo) throw new HttpException(404, 'Страница не существует.');
        $mfoDatas = MfoData::find()->where(['name' => 'Data'])->one();
        $data = unserialize($mfo->data);
        $dataMenu = unserialize($mfoDatas->data_menu);
        $dataMfo = unserialize($mfoDatas->data_mfo);
        return $this->render('clients', [
            'model' => $mfo,
            'data' => $data,
            'dataMenu' => $dataMenu,
            'dataMfo' => $dataMfo,
        ]);
    }

    public function actionContacts($url)
    {
        if(!$url) return $this->redirect('/');
        $mfo = MfoNew::find()->where(['status' => 1, 'url' => $url])->one();
        if(!$mfo) throw new HttpException(404, 'Страница не существует.');
        $mfoDatas = MfoData::find()->where(['name' => 'Data'])->one();
        $data = unserialize($mfo->data);
        $dataMenu = unserialize($mfoDatas->data_menu);
        $dataMfo = unserialize($mfoDatas->data_mfo);
        $dataTag = unserialize($mfoDatas->data_tag);
        return $this->render('contacts', [
            'model' => $mfo,
            'data' => $data,
            'dataMenu' => $dataMenu,
            'dataMfo' => $dataMfo,
            'dataTag' => $dataTag,
        ]);
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
