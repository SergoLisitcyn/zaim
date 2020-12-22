<?php

namespace backend\controllers;

use Yii;
use common\models\Sale;
use common\models\SaleSearch;
use yii\base\DynamicModel;
use yii\helpers\FileHelper;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\Url;

/**
 * SaleController implements the CRUD actions for Sale model.
 */
class SaleController extends Controller
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

    public function actions()
    {
        return [
            'image-upload' => [
                'class' => 'vova07\imperavi\actions\UploadAction',
//                'url' => 'http://yii.loc/public/images/', // URL адрес папки где хранятся изображения.
                'path' => '@frontend/web/uploads/images/sale', // Или абсолютный путь к папке с изображениями.
            ],
        ];
    }
    /**
     * Lists all Sale models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SaleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sale model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Sale model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Sale();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Sale model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->addFlash('success', 'Акция обновлена');
            return $this->redirect(['update', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Sale model.
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

    public function actionDeleteimg($id){

        $model = Sale::find()->where(['id' => $id])->one();
        $model->image = null;
        $model->update(false);

        return $this->redirect(["sale/update?id=$id"]);
    }

    public function actionSaveRedactorImg ($sub='main')

    {
        $this -> enableCsrfValidation = false;
        if (Yii::$app->request->isPost) {
            $dir = Yii::getAlias('@frontend/web') . '/uploads/images/sale' . $sub . '/';
            if (!file_exists($dir)){
                FileHelper::createDirectory($dir);
            }

            $result_link = 'http://zaim.local/uploads/images/sale' . $sub . '/';
            $file = UploadedFile::getInstanceByName('file');
            $model = new DynamicModel (compact ('file'));
            $model ->addRule ('file', 'image')->validate();

            if ($model ->hasErrors()) {

                $result = [
                    'error' => $model -> getFirstError ('file')
                ];
            } else {

                $model->file->name = strtotime('now').'_'.Yii::$app->getSecurity()->generateRandomString(6) . '.' . $model->file->extension;

                if ($model->file->saveAs ($dir . $model->file->name)) {
                    $result = ['filelink' => $result_link . $model->file->name,'filename'=>$model->file->name];

                } else {

                    $result = [
                        'error' => Yii::t ('vova07/imperavi', 'ERROR_CAN_NOT_UPLOAD_FILE')
                    ];

                }
            }
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

            return $result;
        } else {
            throw new BadRequestHttpException ('Only Post is allowed');
        }
    }


    /**
     * Finds the Sale model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Sale the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sale::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
