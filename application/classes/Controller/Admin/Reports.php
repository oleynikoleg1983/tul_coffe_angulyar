<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Reports extends Controller_Template {
/*
    public $template = '/admin/v_index';

    public function action_index() {
        $session = Session::instance();      
        $user_admin = $session->get('login_admin');
        if (isset($user_admin)) 
        {
            $data["mes2"] = $user_admin;
        } 
        else
        {
            $this->redirect('http://kohana.localhost/admin/reg/index'); 
            //$this->redirect('http://magtulco.s69.r53.com.ua/admin/reg/index');
        }
        I18n::lang(Cookie::get('lang', 'ru'));
        $site_config = Kohana::$config->load('mysite');
        $title = $site_config->get('title');
        $header = $site_config->get('header');
        $footer = $site_config->get('footer');
        $data["mes1"] = 'Authorization';
        $this->template->title = $title;
        $this->template->header = $header;
        $this->template->footer = $footer;
        $this->template->languages = '';
        $sum_all_product=0;
        $sum_all_product_first=0;
        $num_in_page = 10;
        $this_page=0;
        $chose_id_user=0;
        $array_reports=0;
        $chose_name_user='Выберете имя';
        $sum_sell='';
        $sum_zarobotok='';
        $in_page_sum_zarobotok='';
        $sum_quantity='';
        $sum_first_sell='';
        $this_date=date("Y-m-d");
        if (isset($_GET['go_sum_product'])) {
            $ar_sum_all_product = Model::factory('Admin_Getdata')->sum_all_product();
            for ($i = 0; $i < count($ar_sum_all_product); $i++) {
                $sum_all_product+=($ar_sum_all_product[$i]['price'] * $ar_sum_all_product[$i]['quantity']);
                $sum_all_product_first+=($ar_sum_all_product[$i]['first_price'] * $ar_sum_all_product[$i]['quantity']);
            }
        }
        if(!empty($_GET['this_page'])){
            $this_page=$_GET['this_page'];
        }
        $array = Model::factory('Admin_Getdata')->get_all_user();
        $choose_start_date=$choose_finish_date=0;
        if (!empty($_GET['date1'])) {
            $choose_start_date =  $_GET['date1'];
            $choose_finish_date = $_GET['date2'];
        }
        $this->template->data = $data;
        $ahref = "<a href='/admin/index/index'>Назад</a>";
        $this->template->ahref = $ahref;
        if (!empty($_GET['id_user'])) {
            $chose_id_user = $_GET['id_user'];
            for ($i = 0; $i < count($array); $i++) {
                if ($array[$i]['id_user'] == $chose_id_user) {
                    $chose_name_user = $array[$i]['user'];
                }
            }
        }
        if (isset($_GET['go_reports']) && !empty($_GET['date1']) && !empty($_GET['date2'])) {
            $user = "";
            if (!empty($_GET['id_user'])) {
                $user = "AND id_user=" . $_GET['id_user'];
            }
            $start_date = strtotime($_GET['date1']);
            $finish_date = strtotime($_GET['date2']);
            if(!empty($_GET['this_page'])){
                $page =" LIMIT $this_page,".$num_in_page;  
            }else{
                $page=" LIMIT 0,".$num_in_page; 
            }
            
            $array_reports = Model::factory('Admin_Getdata')->get_reports($start_date, ($finish_date + 86399), $user, $page);
            $count = Model::factory('Admin_Getdata')->get_count_elem_reports($start_date, ($finish_date + 86399), $user);
            $count= $count[0]['COUNT'];
            for ($i = 0; $i < count($array_reports); $i++) {
                $in_page_sum_zarobotok+=$array_reports[$i]['price'] - $array_reports[$i]['first_price'];
                $sum_sell+=$array_reports[$i]['price'];
                $sum_quantity+=$array_reports[$i]['quantity'];
                $sum_first_sell+=$array_reports[$i]['first_price'];
            }
            $array_reports = Model::factory('Admin_Getdata')->get_reports($start_date, ($finish_date + 86399), $user, NULL);
            for ($i = 0; $i < count($array_reports); $i++) {
                $sum_zarobotok+=$array_reports[$i]['price'] - $array_reports[$i]['first_price'];
                }    
            $this->template->show_reports = view::factory('/admin/v_show_reports')
                    ->set('sum_sell', $sum_sell)
                    ->set('sum_zarobotok', $sum_zarobotok)
                    ->set('sum_first_sell', $sum_first_sell)
                    ->set('sum_quantity', $sum_quantity)
                    ->set('array_reports', $array_reports)
                    ->set('chose_id_user', $chose_id_user)
                    ->set('choose_start_date', $choose_start_date)
                    ->set('choose_finish_date', $choose_finish_date)
                    ->set('num_in_page', $num_in_page)
                    ->set('count',$count)
                    ->set('this_page', $this_page)
                    ->set('in_page_sum_zarobotok', $in_page_sum_zarobotok);
        }
        $this->template->content = view::factory('/admin/v_reports')
                ->set('this_date', $this_date)
                ->set('array', $array)
                ->set('choose_start_date', $choose_start_date)
                ->set('choose_finish_date', $choose_finish_date)
                ->set('chose_id_user', $chose_id_user)
                ->set('chose_name_user', $chose_name_user)
                ->set('sum_all_product',$sum_all_product)
                ->set('sum_all_product_first', $sum_all_product_first);
       
    }
*/
}

// End Welcome
