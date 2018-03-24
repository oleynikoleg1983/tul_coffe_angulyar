<?php defined('SYSPATH') or die('No direct script access.');



class Controller_Site_Index extends Controller_Template {
   public $template = '/site/v_index';
    
        public function action_index(){   
            $session = Session::instance();  
            
            $user = $session->get('login');
            $id_user = $session->get('id_user');
            $admin = $session->get('admin');
            
            if (isset($_GET['exit_admin'])) 
            {
                $session->delete('login');
                $session->delete('id_user');
            }
            
            if(empty($user) || empty($id_user) || isset($_GET['exit_admin'])) {
                $this->redirect('http://coffesite.localhost/site/authorization/authorization'); 
            }
          
            $array = null;
            
            $this->template->content = view::factory('/site/v_content')
                    ->set('array', $array)->set('user', $user)->set('id_user', $id_user)
                    ->set('admin', $admin);
             
        }
 

} // End Welcome
