<?php
class Controller_Ajax extends Controller
{
    public function action_index()
            {
                $post = $_POST['del'].'Я был тут !';
                echo json_encode($post);
            }
    public function action_delfoto()
            {
                if(!empty($_POST['del'])){
                $id =  $_POST['del'];
                
                $db = ORM::factory('images',$id)->find();
                var_dump($db->name);
                echo json_encode($name);
            }
            }
}

