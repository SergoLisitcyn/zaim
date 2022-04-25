<?php

namespace frontend\controllers;

use common\models\Articles;
use common\models\Author;
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
        $news = News::find()
            ->where(['status' => '1'])
            ->orderBy(['id' => SORT_DESC])
            ->all();
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
        $author = Author::findOne($news->author_id);
        return $this->render('view', [
            'model' => $news,
            'mfo' => $mfo,
            'newsRandom' => $newsRandom,
            'author' => $author,
        ]);

    }
}
