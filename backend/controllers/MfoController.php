<?php

namespace backend\controllers;

use common\models\UploadForm;
use Yii;
use common\models\Mfo;
use common\models\MfoSearch;
use yii\base\DynamicModel;
use yii\filters\AccessControl;
use yii\helpers\FileHelper;
use yii\helpers\Json;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

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
                    'logout' => ['post'],
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
                'path' => '@frontend/web/uploads/images/mfo', // Или абсолютный путь к папке с изображениями.
            ],
        ];
    }
    /**
     * Lists all Mfo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MfoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        if (Yii::$app->request->post('hasEditable'))
        {
            $id=$_POST['editableKey'];
            $model = $this->findModel($id);
            $out    = Json::encode(['output'=>'', 'message'=>'']);
            $post = [];
            $posted = current($_POST['Mfo']);
            $post['Mfo'] = $posted;
            if ($model->load($post)) {
                $model->save();
                $output = '';
                $out = Json::encode(['output'=>$output, 'message'=>'']);
            }
            echo $out;
            return;
        }
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Mfo model.
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
        if ($model->load(Yii::$app->request->post())) {
            if($model->save()){
                Yii::$app->session->addFlash('success', 'Мфо обновлен');
                return $this->redirect(['update', 'id' => $model->id]);
            } else {
                var_dump($model->errors); die;
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDeleteimg($id){

        $model = Mfo::find()->where(['id' => $id])->one();
        $model->logo = null;
        $model->save();

//        return $this->redirect(["mfo/update?id=$id"]);
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
     * @return array|\yii\db\ActiveRecord the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mfo::find()->with('type')->andWhere(['id'=>$id])->one()) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionSaveRedactorImg ($sub='main')

    {
        $this -> enableCsrfValidation = false;
        if (Yii::$app->request->isPost) {
            $dir = Yii::getAlias('@frontend/web') . '/uploads/images/mfo' . $sub . '/';
            if (!file_exists($dir)){
                FileHelper::createDirectory($dir);
            }

            $result_link = 'https://kz.smartzaim.kz/uploads/images/mfo' . $sub . '/';
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

//    protected function findModel($id)
//    {
//        if (($model = Mfo::findOne($id)) !== null) {
//            return $model;
//        }
//
//        throw new NotFoundHttpException('The requested page does not exist.');
//    }
}
