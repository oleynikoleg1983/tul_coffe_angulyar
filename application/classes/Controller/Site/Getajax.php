<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Getajax extends Controller_Template {
   public $template = '/admin/v_ajax';
    
   
        public function action_index()
        {  // print_R($_POST); exit;
            
            if(isset($_POST['is_connect'])) {
              echo rand();  
            }
            if(isset($_POST['get_coffee_menu'])){   
              //  PRINT_r('1111'); EXIT;
             // $parent_id = $_POST['selected'];
              $array = Model::factory('Site_Getdata')->get_coffee_menu();
              $output = json_encode($array);
              exit($output);
              }
            
            
            if(isset($_POST['sell_product'])){ 
                
                $product_id = $_POST['product_id'];
                $product_count = $_POST['product_count'];
                $user_id = $_POST['user_id'];
           
                $array = Model::factory('Site_Getdata')->sell_product($product_id, $product_count, $user_id);
                $output = json_encode($array);
                exit($output);
          
            }
            
              if(isset($_POST['report_product'])){ 
               // print_R($_POST); exit;
                $report_date1 = $_POST['report_date1'];
                $report_date2 = $_POST['report_date2'];
                $user_id = $_POST['user_id'];
           
                $array = Model::factory('Site_Getdata')->get_reports($report_date1, $report_date2, $user_id);
                $output = json_encode($array);
                exit($output);
              }
              
              if(isset($_POST['get_users'])){ 
                $array = Model::factory('Site_Getdata')->get_users();
                $output = json_encode($array);
                exit($output);
              }
              
              
            /*
        if(isset($_POST['selected'])){   
            $parent_id = $_POST['selected'];
            $array=Model::factory('Site_Getdata')->get_next($parent_id);
            $output = json_encode($array);
            exit($output);
            }
            
        if(isset($_POST['selected_type'])){  //ged_product_ajax(page) 78
            $selected_type = $_POST['selected_type'];
            $page = $_POST['page'];
            $sel_sort_elem =  $_POST['sel_sort_elem'];
            $show_elm = $_POST['show_elm'];
            $array=Model::factory('Site_Getdata')->get_product($selected_type, $page, $show_elm, $sel_sort_elem);
            $output = json_encode($array);
            exit($output);
            }
            
         if(isset($_POST['selected_type_pagination'])){
            $selected_type_pagination = $_POST['selected_type_pagination'];
            $array=Model::factory('Site_Getdata')->get_pagination($selected_type_pagination);
            $output = json_encode($array);
            exit($output);
            }
            
        if(isset($_POST['id_product'])){   
            $id_product = $_POST['id_product'];
            $array=Model::factory('Site_Getdata')->get_type_product($id_product);
            $output = json_encode($array);
            exit($output);
            }
            
        if (isset($_POST['id_sell'])) {
            $session = Session::instance();
            $user = $session->get('login');
            if (isset($user)) {
                $id_sell = $_POST['id_sell'];
                $sell_product = $_POST['sell_product'];
                $id_user = $_POST['id_user'];
                $time_sell = time();
                $array = Model::factory('Site_Getdata')->sell_product($id_sell, $sell_product, $id_user, $time_sell);
                $output = json_encode($array);
                exit($output);
            }
        }
        
        if(isset($_POST['sel_sort_elem'])){//find_product(page)
            $find_first_prise = $_POST['find_first_prise'];
            $find_finish_priset= $_POST['find_finish_priset'];
            $sel_sort_elem = $_POST['sel_sort_elem'];
            $find_name_product = $_POST['find_name_product'];
            $find_code_product = $_POST['find_code_product'];
            $page = $_POST['page'];
            $show_elm = $_POST['show_elm'];
            $array=Model::factory('Site_Getdata')->get_find_product($sel_sort_elem, $find_name_product, $find_code_product, $page, $show_elm, $find_first_prise, $find_finish_priset);
            $output = json_encode($array);
            exit($output);
            }
        */
    }
   
} // End Welcome