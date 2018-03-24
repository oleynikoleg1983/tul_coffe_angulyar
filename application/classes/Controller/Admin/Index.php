<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Index extends Controller_Template {
/*
    public $template = '/admin/v_index';

    public function action_index() {
        if (isset($_GET['exit_admin'])) {
            $session = Session::instance();
            $session->delete('login_admin');
        }
        $session = Session::instance();
        $user_admin = $session->get('login_admin');
        if (isset($user_admin)) {
            $data["mes2"] = $user_admin;
        } else {
            $this->redirect('http://kohana.localhost/admin/reg/index'); 
            //$this->redirect('http://magtulco.s69.r53.com.ua/admin/reg/index');
        }

        if (isset($_POST['change_data_p'])) {
            $cha_id_t = htmlspecialchars(addslashes($_POST['cha_id_t']));
            $cha_Name_product_t = htmlspecialchars(addslashes($_POST['cha_Name_product_t']));
            $cha_product_code = htmlspecialchars(addslashes($_POST['cha_product_code']));
            $cha_price_product = htmlspecialchars(addslashes($_POST['cha_price_product']));
            $cha_description_product = htmlspecialchars(addslashes($_POST['cha_description_product']));
            $cha_quantity_product = htmlspecialchars(addslashes($_POST['cha_quantity_product']));
            $cha_first_price_product = htmlspecialchars(addslashes($_POST['cha_first_price_product']));

            Model::factory('Admin_Getdata')->set_change($cha_id_t, $cha_Name_product_t, $cha_product_code, $cha_price_product, $cha_description_product, $cha_quantity_product, $cha_first_price_product);
            $this->redirect('http://kohana.localhost/admin/index/index');
            //$this->redirect('http://magtulco.s69.r53.com.ua/admin/index/index');

          
        }

        if (isset($_POST ['submit'])) {
            if (!empty($_POST['put_name']) &&
                    !empty($_POST['put_first_price']) &&
                    !empty($_POST['put_price']) &&
                    !empty($_POST['put_quantity']) &&
                    !empty($_POST['put_product_code'])) {
                $first_price = htmlspecialchars(addslashes(Arr::get($_POST, 'put_first_price')));
                $name = htmlspecialchars(addslashes(Arr::get($_POST, 'put_name'))); //вытягивать даные через - (arr extract)
                $put_product_code = htmlspecialchars(addslashes(Arr::get($_POST, 'put_product_code')));
                $price = htmlspecialchars(addslashes(Arr::get($_POST, 'put_price')));
                $quantity = htmlspecialchars(addslashes(Arr::get($_POST, 'put_quantity')));
                $description = htmlspecialchars(addslashes(Arr::get($_POST, 'text')));
                if (!empty($_POST['selected'])) 
                {
                    $id_category = Arr::get($_POST, 'selected');
                }
                else 
                {
                    $id_category = Arr::get($_POST, 'sel1');
                }
                Model::factory('Admin_Getdata')->set_new_product($name, $put_product_code, $price, $first_price, $description, $id_category, $quantity);
                if (!empty($_FILES)) {
                    for ($i = 0; $i < (count($_FILES['file']['tmp_name']) - 1); $i++) {
                        $tmp_file_dir = $_FILES['file']['tmp_name'][$i];
                        $dir_in_file = $_SERVER['DOCUMENT_ROOT'];
                        $nane_file = $_FILES['file']['name'][$i];
                        $this->add_images($tmp_file_dir, $dir_in_file, $nane_file);
                    }
                }
                $this->redirect('http://kohana.localhost/admin/index/index?add_data='.$name);
                //$this->redirect('http://magtulco.s69.r53.com.ua/admin/index/index?add_data='.$name);

            } else {
                $data['mes3'] = '<div id="empty_input">Не заполнены все поля!</div>';
            }
        }

        I18n::lang(Cookie::get('lang', 'ru')); // устанавливаем язык из Куки, либо ставим русский, если Куки нету
        if (Arr::get($_GET, 'lang', NULL) != NULL) {// если был передан GET параметр lang - выполняем следующие условия:
            Cookie::set('lang', strip_tags(Arr::get($_GET, 'lang'))); // устанавливаем Куку с выбранным языком
            I18n::lang(strip_tags(Arr::get($_GET, 'lang'))); // меняем текущий язык на выбранный
        }
        $site_config = Kohana::$config->load('mysite');
        $title = $site_config->get('title');
        $header = $site_config->get('header');
        $footer = $site_config->get('footer');
        $ahref = "<a href='/admin/categorygoods/about'>Категории товаров</a> <br />
                <a href='/admin/adduser/index'>Регистрация пользователей</a> <br />
                <a href='/admin/reports/index'>Отчеты</a>       ";



        $data["mes1"] = 'Authorization';

        $this->template->chec_script="/js/chec_add_data.js";
        $this->template->data = $data;
        $this->template->ahref = $ahref;
        $this->template->title = $title;
        $this->template->header = $header;
        $this->template->footer = $footer;
        $page='0';
        $num_page='0';
        $sortby='name';
        $find_name_show='';
        $and_where="";
        $find_cod_show="";
        $and_where_code="";
        $num_page_in_display = 10;
        if (isset($_GET['sortby'])) {
            $sortby = $_GET['sortby'];
        }
        if(isset($_GET['find_name_show'])){
            $find_name_show=htmlspecialchars(addslashes($_GET['find_name_show']));
            $and_where=" AND  p.name LIKE '%$find_name_show%'";
        }
        if(isset($_GET['find_cod_show'])){
            $find_cod_show=htmlspecialchars(addslashes($_GET['find_cod_show']));
            $and_where_code=" AND  p.product_code LIKE '%$find_cod_show%'";
        }
        $count_in_array = Model::factory('Admin_Getdata')->get_count_elem($and_where, $and_where_code);
        $count_in_array = $count_in_array[0]['COUNT'] / $num_page_in_display; 
        $this_page = 0;
        if (isset($_GET['page'])) {
            $page = " ORDER BY p.$sortby LIMIT " . $_GET['page'] . ", $num_page_in_display";
            $num_page = $_GET['page'];
            $this_page = $_GET['page'] / $num_page_in_display;
        } else {
            $page = " ORDER BY p.$sortby LIMIT 0, $num_page_in_display";
        }
        $array = Model::factory('Admin_Getdata')->get_all($page, $and_where, $and_where_code);
        $this->template->content = view::factory('/admin/v_data')
                ->set('array', $array)
                ->set('count_in_array', $count_in_array)
                ->set('num_page', $num_page)
                ->set('sortby', $sortby)
                ->set('this_page', $this_page)
                ->set('num_page_in_display', $num_page_in_display)
                ->set('find_name_show', $find_name_show)
                ->set('find_cod_show', $find_cod_show);
        $this->template->languages = view::factory('/admin/v_languages');

        $arraycat = Model::factory('Admin_Datacategory')->get_category_for_property(0);
        $this->template->add_data = view::factory('/admin/v_add_data')->set('arraycat', $arraycat);

        if (isset($_GET['change'])) {
            $id = $_GET['change'];
            $array_change = Model::factory('Admin_Getdata')->get_change($id);
            $this->template->data_change = view::factory('/admin/v_data_change')->set('array_change', $array_change);
        }

        if (isset($_GET['delete'])) {
            $id_del_prod = $_GET['delete'];
            Model::factory('Admin_Getdata')->delete_prod($id_del_prod);
            $this->redirect('http://kohana.localhost/admin/index/index');
            //$this->redirect('http://magtulco.s69.r53.com.ua/admin/index/index');

        }
    }

    public function add_images($tmp_file_dir, $dir_in_file, $nane_file) {
        $nane_file = explode(".", $nane_file);
        $elem_array = count($nane_file);
        $supername = "";
        $supername_array = array('q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l');
        for ($i = 0; $i < 8; $i++) {
            $random = rand(1, 17);
            $supername.=$supername_array[$random];
        }
        copy($tmp_file_dir, $dir_in_file . "/images/" . $supername . "." . $nane_file[$elem_array - 1]);
        $img_url = "images/" . $supername . "." . $nane_file[$elem_array - 1];
        Model::factory('Admin_Getdata')->set_images($img_url);
    }
*/
}

// End Welcome
