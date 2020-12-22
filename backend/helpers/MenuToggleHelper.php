<?php

namespace backend\helpers;

class MenuToggleHelper
{
    const MENU_STATE_SESSION_NAME = 'menu-state';
    const MENU_OPEN_STATE = 'sidebar-not-collapse';
    const MENU_CLOSE_STATE = 'sidebar-collapse';

    protected $session;
    protected $menuState;

    public function __construct()
    {
        $this->session = \Yii::$app->session;
    }

    /**
     * @return mixed
     */
    public function getMenuState()
    {
        return $this->menuState;
    }

    /**
     * @param $menuState
     * @return mixed
     */
    public function setMenuState($menuState)
    {
        return $this->menuState = $menuState;
    }

    /**
     * Define menu state from session if exist or set default value MENU_OPEN_STATE
     */
    public static function initMenuState()
    {
        $helper = new self();
        if ($helper->session->has(self::MENU_STATE_SESSION_NAME)) {
            // TODO START temporary css fix, remove it later
            if ($helper->session->get(self::MENU_STATE_SESSION_NAME) == 'open') {
                $helper->session->set(self::MENU_STATE_SESSION_NAME, self::MENU_OPEN_STATE);
            }
            // TODO END temporary css fix, remove it later
            $helper->setMenuState($helper->session->get(self::MENU_STATE_SESSION_NAME));
        } else {
            $helper->setMenuState(self::MENU_OPEN_STATE);
            $helper->session->set(self::MENU_STATE_SESSION_NAME, self::MENU_OPEN_STATE);
        }
        return $helper->getMenuState();
    }

    /**
     * Toggle menu state
     */
    public function toggleMenuState()
    {
        switch ($this->session->get(self::MENU_STATE_SESSION_NAME)) {
            case self::MENU_OPEN_STATE :
                $this->session->set(self::MENU_STATE_SESSION_NAME,self::MENU_CLOSE_STATE);
                $this->setMenuState(self::MENU_CLOSE_STATE);
                break;
            case self::MENU_CLOSE_STATE :
                $this->session->set(self::MENU_STATE_SESSION_NAME,self::MENU_OPEN_STATE);
                $this->setMenuState(self::MENU_OPEN_STATE);
                break;
            default :
                $this->session->set(self::MENU_STATE_SESSION_NAME,self::MENU_OPEN_STATE);
                $this->setMenuState(self::MENU_OPEN_STATE);
                break;
        }
    }
}