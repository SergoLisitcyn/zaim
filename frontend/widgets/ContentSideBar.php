<?php


namespace frontend\widgets;


class ContentSideBar extends \yii\bootstrap\Widget
{
    public $type;
    public function init()
    {
        parent::init();
    }

    public function run()
    {
//        $menu = Menu::find()->where(['status' => 1])->orderBy(['sort' => SORT_ASC])->all();

        return $this->render('contentSideBar', [
            'type' => $this->type,
        ]);
    }
}