<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-29 04:18:29 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE id =192' at line 2 [ UPDATE `product`  SET price=price-11,                               
              WHERE id =192 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-29 04:18:29 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\site\getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\site\getajax.php(36): Model_Site_Getdata->sell_product('192', '11')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-29 04:22:04 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE id =185' at line 3 [ UPDATE `product`  SET quantity=quantity-1,
                                  
              WHERE id =185 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-29 04:22:04 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\site\getdata.php(52): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\site\getajax.php(37): Model_Site_Getdata->sell_product('185', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-29 10:37:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: sell_product ~ APPPATH\classes\Controller\site\getajax.php [ 36 ] in Z:\home\localhost\kohana\application\classes\Controller\site\getajax.php:36
2015-07-29 10:37:48 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\site\getajax.php(36): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 36, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\site\getajax.php:36
2015-07-29 10:38:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: sell_product ~ APPPATH\classes\Controller\site\getajax.php [ 36 ] in Z:\home\localhost\kohana\application\classes\Controller\site\getajax.php:36
2015-07-29 10:38:06 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\site\getajax.php(36): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 36, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\site\getajax.php:36
2015-07-29 11:59:22 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT id, parent_id, name_category FROM category_goods WHERE parent_id= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-29 11:59:22 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id, pare...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\site\getdata.php(21): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\site\getajax.php(12): Model_Site_Getdata->get_next('')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-29 12:15:55 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT id, parent_id, name_category FROM category_goods WHERE parent_id= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-29 12:15:55 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id, pare...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\site\getdata.php(21): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\site\getajax.php(12): Model_Site_Getdata->get_next('')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251