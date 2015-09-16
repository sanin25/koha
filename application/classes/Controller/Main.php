<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {
    public $template = 'index/v_main';
    
    public function before() {
        parent::before();
        //Потключение стили
        $this->template->styles = array();
        $this->template->scripts = array();
        //Подключение блоков 
        $this->template->header = null;
        $this->template->left = null;
        $this->template->center = null;
        $this->template->right = null;
        
        
        
    }

} // End Welcome
