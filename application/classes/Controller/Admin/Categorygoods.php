<?php defined('SYSPATH') or die('No direct script access.');



class Controller_Admin_Categorygoods extends Controller_Template {
   public $template = '/admin/v_index';
    /*
        public function action_about()
        {
        if(isset($_GET['exit_admin']))
        {
            $session = Session::instance(); 
            $session->delete('login_admin');
        }
        $session = Session::instance();      
        $user_admin = $session->get('login_admin');
        if(isset($user_admin) )
        {
             $data["mes2"] = $user_admin;     
        }
        else
        {
             $this->redirect('http://kohana.localhost/admin/reg/index');
        } 
        
        I18n::lang(Cookie::get('lang', 'ru'));
        $site_config = Kohana::$config->load('mysite');
        $title = $site_config->get('title');
	$header = $site_config->get('header');
        $footer = $site_config->get('footer');
        
        $ahref="<a href='/admin/index'>Назад</a>";
        $this->template->ahref=$ahref;
        
        $data["mes1"]='Authorization';
        $this->template->data=$data;
        
        $this->template->title=$title;
        $this->template->header=$header;
        $this->template->footer=$footer;
        $array=Model::factory('Admin_Datacategory')->get_all_category();
        $content = View::factory('/admin/pages/v_categorygoods')->set('array', $array);
        $this->template->content = $content;
        $this->template->languages='';
     
        if(isset($_POST['submit_cat']))
            {   
            $parent_id = $_POST['put_parent_id'];
            $name_category = $_POST['put_category'];
            Model::factory('Admin_Datacategory')->set_category($parent_id, $name_category);
            $this->redirect('http://kohana.localhost/admin/categorygoods/about'); // перегрузка текущей страницы
            }
        }*/
 

} // End Welcome
