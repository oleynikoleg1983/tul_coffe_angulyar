<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-28 05:53:14 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-12,12' at line 2 [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE id_category=5 OR id_category=11 OR id_category=12 OR id_category=21 OR id_category=22 OR id_category=23 OR id_category=6 OR id_category=8 OR id_category=9 OR id_category=10 OR id_category=20 OR id_category=7 OR id_category=16 OR id_category=28 OR id_category=30 OR id_category=29 OR id_category=31 OR id_category=33 OR id_category=37 OR id_category=41 OR id_category=32 OR id_category=34 OR id_category=35 OR id_category=36 OR id_category=38 OR id_category=39 OR id_category=40 OR id_category=42 OR id_category=46 OR id_category=47 OR id_category=48 OR id_category=49 OR id_category=57 OR id_category=58 OR id_category=59 LIMIT -12,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-28 05:53:14 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(39): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(22): Model_Site_Getdata->get_product(Array, '-12', '12')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-28 06:00:23 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-12,12' at line 2 [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE id_category=5 OR id_category=11 OR id_category=12 OR id_category=21 OR id_category=22 OR id_category=23 OR id_category=6 OR id_category=8 OR id_category=9 OR id_category=10 OR id_category=20 OR id_category=7 OR id_category=16 OR id_category=28 OR id_category=30 OR id_category=29 OR id_category=31 OR id_category=33 OR id_category=37 OR id_category=41 OR id_category=32 OR id_category=34 OR id_category=35 OR id_category=36 OR id_category=38 OR id_category=39 OR id_category=40 OR id_category=42 OR id_category=46 OR id_category=47 OR id_category=48 OR id_category=49 OR id_category=57 OR id_category=58 OR id_category=59 LIMIT -12,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-28 06:00:23 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(39): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(22): Model_Site_Getdata->get_product(Array, '-12', '12')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251