<?php

class Controller_Index_Page extends Controller_Index{
    
    public function action_index()
            {
                 $href = $this->request->param('path');
                
                $pages = ORM::factory('page')->where('href', '=',$href)->find();
                  
                  if($pages->act == 0)
                      {
                         throw new HTTP_Exception_404('Нет такой страницы ошибка 404');
                      }else{
                  
                 
                 $center =  View::factory('index/v_page')->bind('pages', $pages);
                 
                 $this->template->center = array($center);
                 $this->template->title = $pages->title;
                      }
             }
    
}
