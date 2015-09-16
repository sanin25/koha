<?php
     defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Main extends Controller_Admin
     {
    
        function action_index()
    {   
            $status = ORM::factory('page')->find_all()->count();
           $view =  View::factory('admin/pages/a_status')->bind('status', $status);
           
           $this->template->center = array($view);
           
    }
     }

