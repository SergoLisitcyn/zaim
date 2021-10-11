<?php

namespace frontend\widgets;

use common\models\Articles;
use yii\bootstrap\Widget;

class ArticlesNews extends Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $articles = Articles::find()->where(['status' => 1])->orderBy(['date_publish' => SORT_DESC])->limit(3)->all();
        return $this->render('articles-news', [
            'articles' => $articles,
        ]);
    }
}