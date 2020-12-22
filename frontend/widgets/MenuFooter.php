<?php


namespace frontend\widgets;
use \common\models\Menu;

class MenuFooter extends \yii\bootstrap\Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $menu = Menu::find()->where(['status' => 1])->orderBy(['sort' => SORT_ASC])->all();

        return $this->render('menufooter', [
            'menus' => $menu,
        ]);
    }
}