<?php

class Controller_Module extends Controller_Template{
    
      public function  before() {
         parent::before();

        if(Request::current()->is_initial())
        {
             $this->request->action(404);
        }
    }

}
