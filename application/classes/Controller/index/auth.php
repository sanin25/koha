<?php

class Controller_Index_Auth extends Controller_Index{
    
    public function action_login()
         {
            if(Auth::instance()->logged_in()) {
             HTTP::redirect('admin');
        }

                if (isset($_POST['login'])){
                    var_dump($_POST['login']);
                    $data = Arr::extract($_POST, array('username', 'password', 'remember'));
                    $status = Auth::instance()->login($data['username'], $data['password'], (bool) $data['remember']);

                    if ($status){
                        if(Auth::instance()->logged_in('admin')) {
                            HTTP::redirect('admin');
                        }

                       // HTTP::redirect('admin');
                    }
                    else {
                        $errors = array(Kohana::message('auth/user', 'no_user'));
                    }
                }
                $view = View::factory('auth/v_auth_login')
                        ->bind('errors', $errors);
                $this->template->center = array($view);
                 $this->template->title = "Вход на сайт";
                
            }
           /*public function action_register()
                    {
                
                        if(isset($_POST['reg']))
                                {
                            var_dump($_POST['reg']);
                                        try
                                            {
                                            $user = ORM::factory('User');
                                            $user->create_user($_POST, array(
                                                'email',
                                                'username',
                                                'first_name',
                                                'password',
                                                
                                                ));
                                            $user->add('roles', ORM::factory('role', array('name' => 'login')));

                                                // Регистрация успешна
                                                HTTP::redirect('login');
                                            }
                                            catch(ORM_Validation_Exception $e)
                                            {
                                                var_dump($e->errors()); 
                                                    // Допущены ошибки при вводе данных
                                            }
                                }
                        $view = View::factory('auth/v_auth_register');
                        $this->template->center = array($view);
                         $this->template->title = "регистрация на сайт";
                    }*/
                    
                    public function action_logout()
                            {
                             if(Auth::instance()->logout()) {
                                 HTTP::redirect();
        }
                            }
}

