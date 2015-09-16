<?php

class Controller_Index extends Controller_Main
{
    function before()
    {
         parent::before();
        $this->template->styles = array("media/css/style.css",'media/css/jquery.fancybox.css');
         $this->template->scripts = array('/media/js/jquery.js','/media/js/jquery.fancybox.pack.js','/media/js/demo.js');
          $mod_search =  module::load('search');
            $menu_top =  module::load('menutop');
             $this->template->menu_top = array($menu_top );
                $this->template->search = array($mod_search );
    }
}
