<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Getajax extends Controller_Template {
   public $template = '/admin/v_ajax';
    
   /*
        public function action_index()
        {
        if(isset($_POST['selected_l1']))
            {   
            $parent_id = $_POST['selected_l1'];
            $array=Model::factory('Admin_Datacategory')->get_category_for_property($parent_id);
            $output = json_encode($array);
            exit($output);
            }
        
        }
        
        public function action_index2()
        {
        if(isset($_GET['selected_l1']))
            {   
            $parent_id = $_GET['selected_l1'];
            $array=Model::factory('Admin_Datacategory')->get_category_for_property($parent_id);
            $str="";
            for($i=0; $i<count($array); $i++)
            {
                $str.=$array[$i]['id']."/".$array[$i]['name_category']."*";
            }
            echo $str;
            }
        
        }
 */

} // End Welcome
