<?php

namespace frontend\controllers;

use common\models\Author;
use common\models\MainPage;
use common\models\Mfo;
use Yii;
use common\models\Articles;
use common\models\ArticlesSearch;
use yii\db\Expression;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ArticlesController implements the CRUD actions for Articles model.
 */
class ArticlesController extends Controller
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
        $articles = Articles::find()
            ->where(['status' => '1'])
            ->orderBy(['date_publish' => SORT_DESC])
            ->all();
        if(isset($_POST['email'])){
            (new MainPage)->unisender($_POST['email']);
            return $this->refresh();
        }
        return $this->render('index', [
            'articles' => $articles,
        ]);
    }

    public function actionView($url = null)
    {
        $articles = Articles::find()->where(['status' => 1, 'url' => $url])->one();
        if(!$articles) throw new HttpException(404, 'Страница не существует.');
        $articlesRandom = Articles::find()
            ->where(['status' => 1])
            ->andWhere(['!=','id', $articles->id])
            ->orderBy(new Expression('rand()'))
            ->limit(3)
            ->all();
        $mfo = Mfo::find()->where(['id' => 1])->one();
        if(isset($_POST['email'])){
            (new MainPage)->unisender($_POST['email']);
            return $this->refresh();
        }
        $author = Author::findOne($articles->user_id);

        return $this->render('view', [
            'model' => $articles,
            'mfo' => $mfo,
            'articlesRandom' => $articlesRandom,
            'author' => $author,
        ]);

    }
}
