<?php

class Controller_Index_Auth extends Controller_Index{
    
    public function action_login()
            {
                $view = View::factory('auth/v_auth_login');
                $this->template->center = array($view);
                 $this->template->title = "Вход на сайт";
            }
}
