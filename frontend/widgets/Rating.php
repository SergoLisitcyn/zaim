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
            $this->view->context->redirect('/');
//            return $this->redirect('/#anketa');
//            Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
        } else {
            return $this->render('ratingSite', [
                'model' => $model,
                'countRating' => $countRating,
                'count' => $count,
            ]);
        }
    }

}