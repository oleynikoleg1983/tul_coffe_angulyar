<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-29 01:44:09 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-12,12' at line 2 [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE id_category=5 OR id_category=11 OR id_category=12 OR id_category=21 OR id_category=22 OR id_category=23 OR id_category=6 OR id_category=8 OR id_category=9 OR id_category=10 OR id_category=20 OR id_category=7 OR id_category=16 OR id_category=28 OR id_category=30 OR id_category=29 OR id_category=31 OR id_category=33 OR id_category=37 OR id_category=41 OR id_category=32 OR id_category=34 OR id_category=35 OR id_category=36 OR id_category=38 OR id_category=39 OR id_category=40 OR id_category=42 OR id_category=46 OR id_category=47 OR id_category=48 OR id_category=49 OR id_category=57 OR id_category=58 OR id_category=59 LIMIT -12,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 01:44:09 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(39): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(22): Model_Site_Getdata->get_product(Array, '-12', '12')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 02:02:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: page ~ APPPATH\classes\Controller\Site\Getajax.php [ 62 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:62
2015-08-29 02:02:39 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(62): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 62, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:62
2015-08-29 02:02:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: page ~ APPPATH\classes\Controller\Site\Getajax.php [ 62 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:62
2015-08-29 02:02:53 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(62): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 62, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:62
2015-08-29 02:03:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: page ~ APPPATH\classes\Controller\Site\Getajax.php [ 62 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:62
2015-08-29 02:03:19 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(62): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 62, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:62
2015-08-29 02:04:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: page ~ APPPATH\classes\Controller\Site\Getajax.php [ 62 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:62
2015-08-29 02:04:06 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(62): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 62, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:62
2015-08-29 02:17:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: page ~ APPPATH\classes\Controller\Site\Getajax.php [ 62 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:62
2015-08-29 02:17:08 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(62): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 62, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:62
2015-08-29 07:57:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: where ~ APPPATH\classes\Model\Site\Getdata.php [ 82 ] in Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php:82
2015-08-29 07:57:35 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 82, Array)
#1 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(64): Model_Site_Getdata->get_find_product('name', '', '', '0', '12')
#2 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php:82
2015-08-29 09:44:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: in_page_sum_zarobotok ~ APPPATH\classes\Controller\Admin\Reports.php [ 87 ] in Z:\home\localhost\kohana\application\classes\Controller\Admin\Reports.php:87
2015-08-29 09:44:55 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Admin\Reports.php(87): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 87, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Reports->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Reports))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Admin\Reports.php:87
2015-08-29 12:09:19 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.product1' doesn't exist [ CALL  proc_sell(1, 957, 2, 1440868159) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 12:09:19 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(70): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(51): Model_Site_Getdata->sell_product('957', '1', '2', 1440868159)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 12:09:38 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.product1' doesn't exist [ CALL  proc_sell(2, 957, 2, 1440868177) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 12:09:38 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(70): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(51): Model_Site_Getdata->sell_product('957', '2', '2', 1440868177)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 12:09:38 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.product1' doesn't exist [ CALL  proc_sell(6, 958, 2, 1440868178) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 12:09:38 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(70): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(51): Model_Site_Getdata->sell_product('958', '6', '2', 1440868178)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 12:10:01 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.product1' doesn't exist [ CALL  proc_sell(6, 958, 2, 1440868200) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 12:10:01 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(70): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(51): Model_Site_Getdata->sell_product('958', '6', '2', 1440868200)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 12:10:01 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.product1' doesn't exist [ CALL  proc_sell(9, 957, 2, 1440868201) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 12:10:01 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(70): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(51): Model_Site_Getdata->sell_product('957', '9', '2', 1440868201)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 12:12:15 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.product1' doesn't exist [ CALL  proc_sell(1, 957, 2, 1440868334) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 12:12:15 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(70): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(51): Model_Site_Getdata->sell_product('957', '1', '2', 1440868334)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 12:12:15 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.product1' doesn't exist [ CALL  proc_sell(1, 958, 2, 1440868335) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 12:12:15 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(70): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(51): Model_Site_Getdata->sell_product('958', '1', '2', 1440868335)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 13:06:02 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.product1' doesn't exist [ CALL  proc_sell(1, 957, 2, 1440871561) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 13:06:02 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(70): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(51): Model_Site_Getdata->sell_product('957', '1', '2', 1440871561)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 13:06:03 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.product1' doesn't exist [ CALL  proc_sell(1, 958, 2, 1440871562) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 13:06:03 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(70): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(51): Model_Site_Getdata->sell_product('958', '1', '2', 1440871562)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 13:06:04 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.product1' doesn't exist [ CALL  proc_sell(1, 958, 2, 1440871563) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 13:06:04 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(70): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(51): Model_Site_Getdata->sell_product('958', '1', '2', 1440871563)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 13:06:05 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.product1' doesn't exist [ CALL  proc_sell(1, 957, 2, 1440871564) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 13:06:05 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(70): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(51): Model_Site_Getdata->sell_product('957', '1', '2', 1440871564)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 13:06:07 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.product1' doesn't exist [ CALL  proc_sell(1, 957, 2, 1440871566) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 13:06:07 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(70): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(51): Model_Site_Getdata->sell_product('957', '1', '2', 1440871566)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 13:06:08 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.product1' doesn't exist [ CALL  proc_sell(1, 958, 2, 1440871567) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 13:06:08 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(70): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(51): Model_Site_Getdata->sell_product('958', '1', '2', 1440871567)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 13:06:13 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.product1' doesn't exist [ CALL  proc_sell(1, 957, 2, 1440871572) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 13:06:13 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(70): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(51): Model_Site_Getdata->sell_product('957', '1', '2', 1440871572)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 13:06:16 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.product1' doesn't exist [ CALL  proc_sell(1, 957, 2, 1440871575) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 13:06:16 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(70): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(51): Model_Site_Getdata->sell_product('957', '1', '2', 1440871575)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 13:13:53 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.product1' doesn't exist [ CALL  proc_sell(1, 957, 2, 1440872031) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 13:13:53 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(70): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(51): Model_Site_Getdata->sell_product('957', '1', '2', 1440872031)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 13:13:53 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.product1' doesn't exist [ CALL  proc_sell(1, 958, 2, 1440872033) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-29 13:13:53 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(70): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(51): Model_Site_Getdata->sell_product('958', '1', '2', 1440872033)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251