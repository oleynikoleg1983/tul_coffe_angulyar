<?php defined('SYSPATH') or die('No direct script access.');



class Model_Site_Getdata extends Model {
    
    protected $_tableArticles = '`category_goods`';
    
    public function get_coffee_menu()
    {
  
    $sql =  "SELECT * FROM coffee_menu WHERE 1";   
    return DB::query(Database::SELECT, $sql)
               ->execute()
               ->as_array();
    }
    
     public function sell_product($product_id, $product_count, $user_id)
     {
         //$product_price = 1;
        date_default_timezone_set('Europe/Kiev'); 
        $sell_date = date("Y-m-d H:i:s");              
        $sell_date_str = strtotime($sell_date);
        
     // $q = "INSERT INTO sell_product VALUES (null,  ".$product_id.", ".$product_count.", (SELECT price FROM coffee_menu WHERE id =".$product_id."), ".$sell_date.", ".$sell_date_str." ((SELECT user_salary FROM coffee_menu WHERE id =".$product_id)*$product_count).','. $user_id)";
        $q = "INSERT INTO sell_product VALUES (null,  $product_id, $product_count, (SELECT price FROM coffee_menu WHERE id =$product_id), '".$sell_date."', $sell_date_str, ((SELECT user_salary FROM coffee_menu WHERE id =$product_id)*$product_count), $user_id, (SELECT type_coffee_machine FROM coffee_menu WHERE id =$product_id), (SELECT has_bonus FROM coffee_menu WHERE id =$product_id))";	


             return DB::query(Database::INSERT, $q)
                ->execute(); 
     

      //  $query = DB::query(Database::INSERT, 'INSERT INTO `sell_product` VALUES (null,  :product_id, :product_count, (SELECT price FROM `coffee_menu` WHERE id =:product_id), :sell_date, :sell_date_str, ((SELECT user_salary FROM `coffee_menu` WHERE id =:product_id)*:product_count), :user_id)') 
       // ->bind(':product_id', $product_id)
      //  ->bind(':product_count', $product_count)
      //  ->bind(':product_price', $product_price)
      //  ->bind(':sell_date', $sell_date)
     //   ->bind(':sell_date_str', $sell_date_str)
     //   ->bind(':user_id', $user_id);
     
      // return $query->execute();
       
     }
     
      public function get_reports($report_date1, $report_date2, $user_id){
         // $d = date("Y-m-d H:i:s");
          //print_R($d); exit;
          $str_report_date1 = strtotime($report_date1.'00:00:00');
          $str_report_date2 = strtotime($report_date2.'23:59:00');
       
        // print_R($user_id); exit;
          
     
          if ($user_id) {
              $sql = "SELECT * FROM sell_product
                 WHERE sell_date_str>=$str_report_date1 AND sell_date_str<=$str_report_date2 AND user_id = $user_id";
          // print_r( $sql); exit;
          } else {
              $sql = "SELECT * FROM sell_product
                 WHERE sell_date_str>=$str_report_date1 AND sell_date_str<=$str_report_date2";
          }
          return DB::query(Database::SELECT, $sql)
               ->execute()
               ->as_array();
      }
      
       public function get_users(){
           $sql = "SELECT * FROM user
                 WHERE 1";
     
          return DB::query(Database::SELECT, $sql)
               ->execute()
               ->as_array();
       }
      
    
    /*$sql = "UPDATE `product`  SET name='".$cha_Name_product_t."',
                                  product_code='".$cha_product_code."',
                                  price=". $cha_price_product.",
                                  description='".$cha_Text_product."',
                                  quantity='".$cha_quantity_product."',
                                  first_price='".$cha_first_price_product."'   
              WHERE id =".$cha_id_t;    
    return DB::query(Database::UPDATE, $sql)
                ->execute();*/
    
    /*
     public function get_next($parent_id)
    {
    $sql = "SELECT id, parent_id, name_category FROM category_goods WHERE parent_id=".$parent_id;
         
    return DB::query(Database::SELECT, $sql)
               ->execute()
               ->as_array();
    }
    
    */
     /*
    public function get_all()
    {
    $sql = "SELECT id, parent_id, name_category FROM category_goods WHERE parent_id=0";
         
    return DB::query(Database::SELECT, $sql)
               ->execute()
               ->as_array();
    }
    
    public function get_next($parent_id)
    {
    $sql = "SELECT id, parent_id, name_category FROM category_goods WHERE parent_id=".$parent_id;
         
    return DB::query(Database::SELECT, $sql)
               ->execute()
               ->as_array();
    }
    
    public function get_product($selected_type, $page, $show_elm, $sel_sort_elem)
    {
    $sel_sort_elem  = " ORDER BY ".$sel_sort_elem;
    $limit = " ";
    if(!empty($show_elm)){
    $limit = "LIMIT ".$page.",".$show_elm;   
    }
    $where = " WHERE id_category=".$selected_type[0];
    for($i=1; $i<count($selected_type); $i++)
        {
        $where.=" OR id_category=".$selected_type[$i];
        }
    $sql = "SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id".$where." ".$sel_sort_elem." ".$limit;     
    return DB::query(Database::SELECT, $sql)
               ->execute()
               ->as_array();
    }
    
    public function get_pagination($selected_type)
    {
    $where = " WHERE id_category=".$selected_type[0];
    for($i=1; $i<count($selected_type); $i++)
        {
        $where.=" OR id_category=".$selected_type[$i];
        }
    $sql = "SELECT p.id FROM product p LEFT JOIN  images i ON p.id_image=i.id ".$where;     
    return DB::query(Database::SELECT, $sql)
               ->execute()
               ->as_array();
    }
    
    public function get_type_product($id_product)
    {
    $sql = "SELECT id, name_category, parent_id FROM category_goods"; //WHERE parent_id=".$id_product;
   
    return DB::query(Database::SELECT, $sql)
               ->execute()
               ->as_array();
    }
   
    public function sell_product($id_sell, $sell_product, $id_user, $time_sell) {
        if ($sell_product > 0)
        {    
            $sql = "CALL  proc_sell($sell_product, $id_sell, $id_user, $time_sell)";    
            return DB::query(Database::UPDATE, $sql)
                ->execute(); 
        }      
    }
    
    public function get_find_product($sel_sort_elem, $find_name_product, $find_code_product, $page, $show_elm, $find_first_prise, $find_finish_priset) {
        $limit = " ";
        $where_firs_price = " ";
        $where_finish_prise = " ";
        $sel_sort_elem = " ORDER BY " . $sel_sort_elem;
        if (!empty($show_elm)) {
            $limit = "LIMIT " . $page . "," . $show_elm;
        }
        $where_name = " WHERE p.name LIKE '%$find_name_product%'";
        $where_code = " AND p.product_code LIKE '%$find_code_product%'";
        $where_firs_price = " AND p.price >= " . $find_first_prise;
        if (!empty($find_finish_priset)) {
            $where_finish_prise = " AND p.price < " . $find_finish_priset;
        }
        $sql = 'SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id' . $where_name . " " . $where_code . " " . $where_firs_price . " ".$where_finish_prise." " . $sel_sort_elem . " " . $limit;
        return DB::query(Database::SELECT, $sql)
                        ->execute()
                        ->as_array();
    }
      * /
      

    /*
    public function  get_product_image_detail($id_product_image_detail)
    {
    $sql = "SELECT url FROM images WHERE id_product".$id_product_image_detail;
   
    return DB::query(Database::SELECT, $sql)
               ->execute()
               ->as_array();    
    }
     */
}