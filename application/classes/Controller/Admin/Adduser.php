<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Adduser extends Controller_Template {

    public $template = '/admin/v_index';

    public function action_index() {
       /*
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
             //$this->redirect('http://magtulco.s69.r53.com.ua/admin/reg/index');
        }
      
        $ahref="<a href='/admin/index'>На главную</a>";
        $this->template->ahref=$ahref;
        I18n::lang(Cookie::get('lang', 'ru'));
        $site_config = Kohana::$config->load('mysite');
        $title = $site_config->get('title');
        $header = $site_config->get('header');
        $footer = $site_config->get('footer');
        $data["mes1"] = 'Authorization';
        $this->template->data = $data;
        $this->template->title = $title;
        $this->template->header = $header;
        $this->template->footer = $footer;
        $this->template->chec_script="/js/chec_add_user.js";
        $this->template->languages = '';
        $this->template->content = view::factory('/admin/v_add_usform');
        
        if(!empty($_POST['user']) && !empty($_POST['mail']) && !empty($_POST['password'])  && !empty($_POST['re_password']))
        {        
            $new_user = htmlspecialchars(addslashes($_POST['user']));
            $new_user_mail = htmlspecialchars(addslashes($_POST['mail']));
            $new_us_password = htmlspecialchars(addslashes($_POST['password']));
            $re_password = htmlspecialchars(addslashes($_POST['re_password']));
            if($new_us_password==$re_password)
            {
               $array = Model::factory('Admin_Regdata')->sel_name($new_user);
               if(empty($array))
               {
                   Model::factory('Admin_Regdata')->set_new_user($new_user, $new_user_mail, md5($new_us_password));
                   $this->template->content = view::factory('/admin/v_add_usform')->set('log_no_empty', 'логин добавлен');
               }
               else
               {
                   $this->template->content = view::factory('/admin/v_add_usform')->set('log_no_empty', '<div style="color:red">Логин занят</div>');
               }
            }
        }*/        
    }
}

// End Welcome
