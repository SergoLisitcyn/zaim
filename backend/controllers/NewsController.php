<?php

namespace backend\controllers;

use Yii;
use common\models\News;
use common\models\NewsSearch;
use yii\base\DynamicModel;
use yii\filters\AccessControl;
use yii\helpers\FileHelper;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

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
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['admin','manager'],
                    ],
                    [
                        'allow' => false,
                        'roles' => ['client'],
                        'denyCallback' => function() { $this->redirect('/'); }
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
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

    public function actionDeleteimg($id){

        $model = News::find()->where(['id' => $id])->one();
        $model->images = null;
        $model->update(false);

        return $this->redirect(["news/update?id=$id"]);
    }

    public function actionSaveRedactorImg ($sub='main')

    {
        $this -> enableCsrfValidation = false;
        if (Yii::$app->request->isPost) {
            $dir = Yii::getAlias('@frontend/web') . '/uploads/images/news' . $sub . '/';
            if (!file_exists($dir)){
                FileHelper::createDirectory($dir);
            }

            $result_link = 'https://kz.smartzaim.kz/uploads/images/news' . $sub . '/';
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
