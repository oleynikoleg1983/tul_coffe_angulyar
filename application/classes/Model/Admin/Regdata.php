<?php defined('SYSPATH') or die('No direct script access.');



class Model_Admin_Regdata extends Model {
    
    public function aut_entry($name_user){
    $sql = "SELECT password, id_user, admin FROM user WHERE user='$name_user'";        
    return DB::query(Database::SELECT, $sql)
               ->execute()
               ->as_array();
    }
    /*
    
    
    public function sel_name($name_user) {
        $sql = "SELECT user FROM user WHERE user='$name_user'";
        return DB::query(Database::SELECT, $sql)
                        ->execute()
                        ->as_array();
    }

    public function set_new_user($new_user, $new_user_mail, $new_us_password){
        $query = DB::query(Database::INSERT, 'INSERT INTO `user`
    VALUES (null, :user, :mail, :password, 0)')
                ->bind(':user', $new_user)
                ->bind(':mail', $new_user_mail)
                ->bind(':password', $new_us_password);
        $query->execute();
    }

*/
}
