<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Reg extends Controller_Template {
    /*
    public $template = '/admin/v_index';

    public function action_index() {
        $session = Session::instance();      
        $user = $session->get('login_admin');
        if(isset($user) )
        {
           $this->redirect('http://kohana.localhost/admin/index/index');
        }
        I18n::lang(Cookie::get('lang', 'ru'));
        $site_config = Kohana::$config->load('mysite');
        $title = $site_config->get('title');
        $header = $site_config->get('header');
        $footer = $site_config->get('footer');

        $data["mes1"] = 'Authorization';
        $data["mes2"] = 'Login';
        

        $this->template->title = $title;
        $this->template->header = $header;
        $this->template->footer = $footer;

        $this->template->languages = '';
        $this->template->content = view::factory('/admin/v_form');
        if (isset($_POST ['btnsubmit'])) {
            $login = Arr::get($_POST, 'login');
            $password = Arr::get($_POST, 'password');
            $array = Model::factory('Admin_Regdata')->aut_entry($login);
            if(isset($array[0]['password']))
            {
                if(md5($password)==$array[0]['password'] && $array[0]['admin']=='1')
                {
                    Session::instance()->set('login_admin', $login); 
                    $this->redirect('http://kohana.localhost/admin/reg/index');
                }
                else
                {
                  $data["mes2"] = '<span style="color:red">Логин или пароль введены не правильно</span>';  
                }
               
            }
       
        }
        $this->template->data = $data;
    }
*/
}

// End Welcome
