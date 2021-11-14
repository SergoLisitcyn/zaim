<?php

namespace frontend\widgets;

use common\models\RatingSite;
use yii\bootstrap\Widget;
use Yii;


class Rating extends Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $rating = RatingSite::find()->sum('rating');
        $count = RatingSite::find()->count();

        if($count == 0) {
            $countRating = 0;
        } else {
            $countRating = number_format($rating/$count,2);
        }

        $model = new RatingSite();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            $urlNew = $url.'#successRating';
            Yii::$app->session->setFlash('successRating', 'Your rating was '.$model->rating.'/5');
            header("Location: $urlNew");

        } else {
            return $this->render('ratingSite', [
                'model' => $model,
                'countRating' => $countRating,
                'count' => $count,
            ]);
        }
    }

}