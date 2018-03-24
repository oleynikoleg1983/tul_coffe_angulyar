<?php defined('SYSPATH') or die('No direct script access.');



class Model_Admin_Getdata extends Model {
/*
    protected $_tableArticles = '`product`';
    
    public function get_count_elem($and_where, $and_where_code){
         $sql = "SELECT  COUNT(*) AS COUNT
            FROM  product p WHERE 1 ".$and_where." ".$and_where_code;
         
    return DB::query(Database::SELECT, $sql)
               ->execute()
               ->as_array();
    }
    
    public function get_all($page, $and_where, $and_where_code)
    {
    $sql = "SELECT p.id, i.url, p.name, p.price, p.product_code, p.first_price, p.quantity, p.description, c.name_category 
            FROM category_goods c, product p LEFT JOIN images i ON p.id_image=i.id
            WHERE p.id_category=c.id ".$and_where." ".$and_where_code ." ".$page;
         
    return DB::query(Database::SELECT, $sql)
               ->execute()
               ->as_array();
    }
    
    public function get_change($id)
    { 
    $sql = "SELECT * FROM `product` WHERE id =".$id;    
    return DB::query(Database::SELECT, $sql)
           ->execute()
           ->as_array();
    }
     
    public function set_change( $cha_id_t, 
                                $cha_Name_product_t,
                                $cha_product_code,
                                $cha_price_product,
                                $cha_Text_product,
                                $cha_quantity_product,
                                $cha_first_price_product)
    { 
    $sql = "UPDATE `product`  SET name='".$cha_Name_product_t."',
                                  product_code='".$cha_product_code."',
                                  price=". $cha_price_product.",
                                  description='".$cha_Text_product."',
                                  quantity='".$cha_quantity_product."',
                                  first_price='".$cha_first_price_product."'   
              WHERE id =".$cha_id_t;    
    return DB::query(Database::UPDATE, $sql)
                ->execute();
    }
    
    public function delete_prod($id_del_prod)
    {
          
    $sql = "DELETE FROM `product` WHERE id =".$id_del_prod;    
    return DB::query(Database::DELETE, $sql)
                ->execute();
    }
    
    public function set_new_product($name, $product_code, $price, $first_price, $description, $id_category, $quantity)
    {
    $query = DB::query(Database::INSERT, 'INSERT INTO `product`
    VALUES (null, null, :name, :price, :description, :id_category, :quantity, :first_price, :product_code)') 
    ->bind(':name', $name)
    ->bind(':price', $price) 
    ->bind(':description', $description)
    ->bind(':id_category',  $id_category)
    ->bind(':quantity',  $quantity)
    ->bind(':first_price',  $first_price)
    ->bind(':product_code', $product_code);
    $query->execute();
    }
    
    public function set_images($img_url)
    {    
    $query = DB::query(Database::INSERT, 'INSERT INTO `images` VALUES (null,  :img_url, (SELECT max(id) FROM `product`))') 
    ->bind(':img_url', $img_url);
    $query->execute();
    $this->update_images_product();
    }
    
    public function update_images_product()
    {
    $sql = "CALL  proc(1)";    
    DB::query(Database::UPDATE, $sql)
                ->execute();    
    }
    
    public function get_all_user(){
    $sql = "SELECT id_user, user FROM user";        
    return DB::query(Database::SELECT, $sql)
               ->execute()
               ->as_array();
    }
    
    public function get_reports($start_date, $finish_date, $user, $page){
    $sql = "SELECT first_price, price, product_name, quantity FROM sell_product
             WHERE date>=$start_date AND date<=$finish_date $user".$page;
    return DB::query(Database::SELECT, $sql)
               ->execute()
               ->as_array();
    }
    
    public function get_count_elem_reports($start_date, $finish_date, $user){
    $sql = "SELECT COUNT(*) AS COUNT FROM sell_product
             WHERE date>=$start_date AND date<=$finish_date $user";
    return DB::query(Database::SELECT, $sql)
               ->execute()
               ->as_array();    
    }
    
    public function sum_all_product(){
    $sql = "SELECT price, quantity, first_price FROM product";
    return DB::query(Database::SELECT, $sql)
               ->execute()
               ->as_array();     
    }
 
 */
}