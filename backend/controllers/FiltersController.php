<?php

namespace backend\controllers;

use Yii;
use common\models\Filters;
use common\models\FiltersSearch;
use yii\filters\AccessControl;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FiltersController implements the CRUD actions for Filters model.
 */
class FiltersController extends Controller
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
                    [   'actions' => ['login'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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
     * Lists all Filters models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FiltersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        if (Yii::$app->request->post('hasEditable'))
        {
            $id=$_POST['editableKey'];
            $model = $this->findModel($id);
            $out    = Json::encode(['output'=>'', 'message'=>'']);
            $post = [];
            $posted = current($_POST['Filters']);
            $post['Filters'] = $posted;
            if ($model->load($post)) {
                $model->save();
                $output = '';
                $out = Json::encode(['output'=>$output, 'message'=>'']);
            }
            echo $out;
            return $this->refresh();
        }
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Filters model.
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
     * Creates a new Filters model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Filters();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Filters model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->addFlash('success', 'Фильтр обновлен');
            return $this->redirect(['update', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Filters model.
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
     * Finds the Filters model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Filters the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Filters::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * @throws \yii\db\Exception
     */
    public function actionSheet()
    {
        Filters::getFilters('filters');
//        Filters::getFilters('city');

        return $this->render('sheet');
    }
}
