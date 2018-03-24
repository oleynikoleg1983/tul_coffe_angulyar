<?php defined('SYSPATH') or die('No direct script access.');



class Controller_Site_Authorization extends Controller_Template {
    public $template = '/site/v_index';
    
        public function action_authorization()
        {   
            $session = Session::instance();      
            $user = $session->get('login');
            if(isset($user))
            {
               $this->redirect('http://coffesite.localhost/site/index/index');
            }
            
            $ahref="<a class='btn btn-info' href='/site/index/index'> Перейти назад </a>";
            $this->template->content = view::factory('/site/v_authorization')->set('ahref', $ahref); 
            if (isset($_POST ['btnsubmit'])) {
                  $login = Arr::get($_POST, 'login');
                  $password = Arr::get($_POST, 'password');
                  $array = Model::factory('Admin_Regdata')->aut_entry($login);
                  if(isset($array[0]['password']))
                  {
                      if(md5($password)==$array[0]['password'])
                      {
                          Session::instance()->set('login', $login)->set('id_user', $array[0]['id_user'])
                                  ->set('admin', $array[0]['admin']); 
                          $this->redirect('http://coffesite.localhost/site/index/index');
                      }

                  }
            }
        }

    //        }
    
    /*
   public $template = '/site/v_index';
    
        public function action_authorization()
        {   
            $session = Session::instance();      
            $user = $session->get('login');
            if(isset($user))
            {
               $this->redirect('http://kohana.localhost/site/index/index');
            }
            $ahref="<a href='/site/index/index'> Перейти назад </a>";
            $this->template->content = view::factory('/site/v_authorization')->set('ahref', $ahref); 
            if (isset($_POST ['btnsubmit'])) {
                $login = Arr::get($_POST, 'login');
                $password = Arr::get($_POST, 'password');
                $array = Model::factory('Admin_Regdata')->aut_entry($login);
                if(isset($array[0]['password']))
                {
                    if(md5($password)==$array[0]['password'])
                    {
                        Session::instance()->set('login', $login)->set('id_user', $array[0]['id_user']); 
                        $this->redirect('http://kohana.localhost/site/index/index');
                    }

                }
            }
        }
 */

} // End Welcome
