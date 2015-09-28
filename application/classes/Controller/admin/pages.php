<?php

class Controller_Admin_Pages extends Controller_Admin
{      
   
    public function action_index()
            {
        
               $allpage = ORM::factory('page')->find_all();
               $cotent = View::factory('admin/pages/a_allpage')->bind('allpage', $allpage);
               $this->template->center =  array($cotent); 

       
            }
     public function action_add() {
         $cat = ORM::factory('category')->find_all();
          $cotent =  View::factory('admin/pages/v_page_add')->bind('cat', $cat);
               $this->template->center =  array($cotent);
         
         if(isset($_POST['add_page'])){
          
             $data = Arr::extract($_POST, array('title','descr','href','category_id','act'));
             $pages = ORM::factory('page');
             $pages->values($data);
              try {
                $pages->save();
              
            }
            catch (ORM_Validation_Exception $e) {
               echo $e->errors('validation');
            }
         //Работа с изоброжением 
         if (!empty($_FILES['images']['name'][0]))
         {   foreach ($_FILES["images"]["error"] as $key => $error) 
                             {
                                     if(is_uploaded_file($_FILES['images']['tmp_name'][$key] ))
                                {
                                    if ($error == UPLOAD_ERR_OK) 
                                {
                                    $tmp_name = $_FILES["images"]["tmp_name"][$key];
                                    $name = $_FILES["images"]["name"][$key];
                                    $type = $_FILES["images"]["type"][$key];
                                    $filename = $this->_upload_img($tmp_name,$name,$type);
                                   // Запись в БД
                                        $im_db = ORM::factory('image');
                                        $im_db->page_id = $pages->id;
                                        $im_db->name = $filename;
                                        $im_db->save();
                                        
                                }
                                }
                            }
                        }
                           }
                
                           if(isset($_POST['add_stop']))
                           {
                               HTTP::redirect('admin/pages');
                           }
         }
    
    public function action_edit()
            {
               $category = ORM::factory('category')->find_all()->as_array();
               $cats = array();
                foreach ($category as $cat)
                 {
                     $cats[$cat->id] = $cat->title;
                     
                 }
                $id = (int) $this->request->param('id');
                $data = ORM::factory('page',$id);
                $db  = $data->as_array();
                  $cotent =  View::factory('admin/pages/a_page_edit')
                          ->bind('db', $db)
                          ->bind('cats',$cats)
                          ->bind('id',$id)
                           ->bind('data',$data);
                   $this->template->center =  array($cotent);
                   if(isset($_POST['edit_page']))
                   {
                        $value = Arr::extract($_POST, array('title','descr','href','category_id','act'));
                        try{
                        $data->values($value)
                        ->save();
                        }  catch (ORM_Validation_Exception $e) {
                            echo $e->errors('validation');
                         }
                //Работа над изображениями 
                if (!empty($_FILES['images']['name'][0])) {
            foreach ($_FILES["images"]["error"] as $key => $error) {
                if (is_uploaded_file($_FILES['images']['tmp_name'][$key])) {
                    if ($error == UPLOAD_ERR_OK) {
                        $tmp_name = $_FILES["images"]["tmp_name"][$key];
                        $name = $_FILES["images"]["name"][$key];
                        $type = $_FILES["images"]["type"][$key];
                        $filename = $this->_upload_img($tmp_name, $name, $type);
                        // Запись в БД
                        $im_db = ORM::factory('image');
                        $im_db->page_id = $db['id'];
                        $im_db->name = $filename;
                        $im_db->save();
                    }
                }
            }
        }
            
        HTTP::redirect('admin/pages' );
                    }
             if( isset($_POST['edit_stop']))
                {
                HTTP::redirect('admin/pages');
                }
    }
    public function dellimg()
            {
                echo  $id = (int) $this->request->param('id');;
            }
    public function _upload_img($file,$filename,$type = NULL, $directory = NULL){

        if($directory == NULL)
        {
            $directory = 'media/uploads';
        }

        if($type== NULL)
        {
            $type= 'jpg';
        }

       
        // Изменение размера и загрузка изображения
        $im = Image::factory($file);

        if($im->width > 150)
        {
            $im->resize(150);
        }
        $der = HTML::anchor($directory);
         
    if(is_file($directory.'/'.$filename))
        {
      throw new HTTP_Exception_MY(':file Файл уже существует!', array(':file' => $filename));
       }else{
           try{
        $im->save("$directory/small_$filename");
            $im = Image::factory($file);
        $im->save("$directory/$filename");

        return "$filename";
           }
            catch ( Exception $e) {
                $errors = $e;
            }
        }
    }
}

