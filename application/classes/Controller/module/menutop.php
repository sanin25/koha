<?php

class Controller_Module_MenuTop extends Controller_Module{
    public $template = "module/m_menu-top";
    
    public function action_index()
            {
                 $category = ORM::factory('category')->find_all();
                 
                $this->template->page = $category;
                 
            }
}

