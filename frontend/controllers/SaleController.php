<?php

namespace frontend\controllers;

use common\models\MainPage;
use common\models\Mfo;
use common\models\Reviews;
use Yii;
use common\models\Sale;
use yii\data\ActiveDataProvider;
use yii\db\Expression;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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

    /**
     * Lists all Sale models.
     * @return mixed
     */
    public function actionIndex()
    {
        $date = date('Y-m-d H:i:s');
        $sales = Sale::find()
            ->where(['status' => '1'])
            ->andWhere(['>=', 'srok_do', $date])
            ->orderBy(['srok_do' => SORT_DESC])
            ->all();
        if(isset($_POST['email'])){
            (new MainPage)->unisender($_POST['email']);
            return $this->refresh();
        }
        return $this->render('index', [
            'sales' => $sales,
        ]);
    }

    public function actionList($url = null)
    {
        $sales = Sale::find()->where(['status' => 1, 'url' => $url])->one();
        if(!$sales) throw new HttpException(404, 'Страница не существует.');
        $salesRandom = Sale::find()
            ->where(['status' => 1])
            ->andWhere(['!=','id', $sales->id])
            ->orderBy(new Expression('rand()'))
            ->limit(3)
            ->all();
        $mfo = Mfo::find()->where(['id' => $sales->mfo_id])->one();
        if(isset($_POST['email'])){
            (new MainPage)->unisender($_POST['email']);
            return $this->refresh();
        }
        return $this->render('view', [
            'model' => $sales,
            'mfo' => $mfo,
            'salesRandom' => $salesRandom,
        ]);

    }

    public function actionArhiv()
    {
        $date = date('Y-m-d H:i:s');
        $sales = Sale::find()
            ->where(['status' => '1'])
            ->andWhere(['<=', 'srok_do', $date])
            ->orderBy(['srok_do' => SORT_DESC])
            ->all();

        return $this->render('arhiv', [
            'sales' => $sales,
        ]);

    }
}
