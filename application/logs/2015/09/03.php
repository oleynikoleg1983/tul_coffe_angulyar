<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-03 08:43:18 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '12' at line 2 [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE p.name LIKE '%%'  AND p.product_code LIKE '%%'  ORDER BY price LIMIT ,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 08:43:18 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(85): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(64): Model_Site_Getdata->get_find_product('price', '', '', '', '12')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 08:55:54 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 2 [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE p.name LIKE '%%'  AND p.product_code LIKE '%%'  ORDER BY    ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 08:55:54 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(85): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(64): Model_Site_Getdata->get_find_product('', '', '', '', '')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 08:56:34 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 2 [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE p.name LIKE '%%'  AND p.product_code LIKE '%%'  ORDER BY    ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 08:56:34 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(85): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(64): Model_Site_Getdata->get_find_product('', '', '', '', '')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 09:09:23 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 0,12' at line 2 [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE p.name LIKE '%%'  AND p.product_code LIKE '%%'  ORDER BY  LIMIT 0,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 09:09:23 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(85): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(64): Model_Site_Getdata->get_find_product('', '', '', '0', '12')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 09:21:10 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'order clause' [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE p.name LIKE '%%'  AND p.product_code LIKE '%%'  ORDER BY undefined LIMIT 0,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 09:21:10 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(85): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(64): Model_Site_Getdata->get_find_product('undefined', '', '', '0', '12')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 09:25:25 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'order clause' [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE p.name LIKE '%%'  AND p.product_code LIKE '%%'  ORDER BY undefined LIMIT 0,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 09:25:25 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(85): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(64): Model_Site_Getdata->get_find_product('undefined', '', '', '0', '12')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 09:26:22 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 0,12' at line 2 [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE p.name LIKE '%%'  AND p.product_code LIKE '%%'  ORDER BY  LIMIT 0,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 09:26:22 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(85): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(64): Model_Site_Getdata->get_find_product('', '', '', '0', '12')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 09:32:49 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '=>по цене LIMIT 0,12' at line 2 [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE p.name LIKE '%%'  AND p.product_code LIKE '%%'  ORDER BY price=>по цене LIMIT 0,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 09:32:49 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(85): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(64): Model_Site_Getdata->get_find_product('price=>???? ???...', '', '', '0', '12')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 12:42:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: sel_sort_elem ~ APPPATH\classes\Controller\Site\Getajax.php [ 19 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:19
2015-09-03 12:42:01 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 19, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:19
2015-09-03 12:42:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: sel_sort_elem ~ APPPATH\classes\Controller\Site\Getajax.php [ 19 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:19
2015-09-03 12:42:06 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 19, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:19
2015-09-03 12:43:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: sel_sort_elem ~ APPPATH\classes\Controller\Site\Getajax.php [ 19 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:19
2015-09-03 12:43:19 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 19, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:19
2015-09-03 12:43:24 --- CRITICAL: ErrorException [ 8 ]: Undefined index: sel_sort_elem ~ APPPATH\classes\Controller\Site\Getajax.php [ 19 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:19
2015-09-03 12:43:24 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 19, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:19
2015-09-03 12:46:14 --- CRITICAL: ErrorException [ 8 ]: Undefined index: sel_sort_elem ~ APPPATH\classes\Controller\Site\Getajax.php [ 19 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:19
2015-09-03 12:46:14 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 19, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:19
2015-09-03 14:28:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_first_prise ~ APPPATH\classes\Controller\Site\Getajax.php [ 55 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:28:17 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 55, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:30:12 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_first_prise ~ APPPATH\classes\Controller\Site\Getajax.php [ 55 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:30:12 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 55, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:30:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_first_prise ~ APPPATH\classes\Controller\Site\Getajax.php [ 55 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:30:17 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 55, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:30:24 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_first_prise ~ APPPATH\classes\Controller\Site\Getajax.php [ 55 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:30:24 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 55, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:31:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_first_prise ~ APPPATH\classes\Controller\Site\Getajax.php [ 55 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:31:15 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 55, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:33:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_first_prise ~ APPPATH\classes\Controller\Site\Getajax.php [ 55 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:33:52 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 55, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:34:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_first_prise ~ APPPATH\classes\Controller\Site\Getajax.php [ 55 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:34:02 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 55, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:35:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_first_prise ~ APPPATH\classes\Controller\Site\Getajax.php [ 55 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:35:27 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 55, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:35:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_first_prise ~ APPPATH\classes\Controller\Site\Getajax.php [ 55 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:35:51 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 55, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:38:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_finish_priset ~ APPPATH\classes\Controller\Site\Getajax.php [ 56 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:56
2015-09-03 14:38:26 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(56): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 56, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:56
2015-09-03 14:38:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_finish_priset ~ APPPATH\classes\Controller\Site\Getajax.php [ 56 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:56
2015-09-03 14:38:29 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(56): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 56, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:56
2015-09-03 14:40:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_first_prise ~ APPPATH\classes\Controller\Site\Getajax.php [ 55 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:40:10 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 55, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:40:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_finish_priset ~ APPPATH\classes\Controller\Site\Getajax.php [ 56 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:56
2015-09-03 14:40:40 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(56): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 56, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:56
2015-09-03 14:45:11 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY name LIMIT 0,12' at line 2 [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE p.name LIKE '%%'  AND p.product_code LIKE '%%'  AND p.price >   ORDER BY name LIMIT 0,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 14:45:11 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(87): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(62): Model_Site_Getdata->get_find_product('name', '', '', '0', '12', '')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 14:45:14 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_first_prise ~ APPPATH\classes\Controller\Site\Getajax.php [ 55 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:45:14 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 55, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:45:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_first_prise ~ APPPATH\classes\Controller\Site\Getajax.php [ 55 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:45:19 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 55, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:45:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_first_prise ~ APPPATH\classes\Controller\Site\Getajax.php [ 55 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:45:23 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 55, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:48:18 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY name LIMIT 0,12' at line 2 [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE p.name LIKE '%%'  AND p.product_code LIKE '%%'  AND p.price >   ORDER BY name LIMIT 0,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 14:48:18 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(88): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(62): Model_Site_Getdata->get_find_product('name', '', '', '0', '12', '')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 14:50:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_first_prise ~ APPPATH\classes\Controller\Site\Getajax.php [ 55 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:50:43 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 55, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:55
2015-09-03 14:54:48 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY name LIMIT 0,12' at line 2 [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE p.name LIKE '%%'  AND p.product_code LIKE '%%'  AND p.price >   ORDER BY name LIMIT 0,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 14:54:48 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(88): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(62): Model_Site_Getdata->get_find_product('name', '', '', '0', '12', '')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 14:55:03 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY name LIMIT 0,12' at line 2 [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE p.name LIKE '%%'  AND p.product_code LIKE '%%'  AND p.price >   ORDER BY name LIMIT 0,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 14:55:03 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(88): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(62): Model_Site_Getdata->get_find_product('name', '', '', '0', '12', '')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 14:56:58 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY name LIMIT 0,12' at line 2 [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE p.name LIKE '%%'  AND p.product_code LIKE '%%'  AND p.price >   ORDER BY name LIMIT 0,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 14:56:58 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(88): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(62): Model_Site_Getdata->get_find_product('name', '', '', '0', '12', '')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 14:58:21 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY name LIMIT 0,12' at line 2 [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE p.name LIKE '%%'  AND p.product_code LIKE '%%'  AND p.price >   ORDER BY name LIMIT 0,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 14:58:21 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(88): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(62): Model_Site_Getdata->get_find_product('name', '', '', '0', '12', '')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 14:58:40 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY name LIMIT 0,12' at line 2 [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE p.name LIKE '%%'  AND p.product_code LIKE '%%'  AND p.price >   ORDER BY name LIMIT 0,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 14:58:40 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(88): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(62): Model_Site_Getdata->get_find_product('name', '', '', '0', '12', '')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 14:59:23 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY name LIMIT 0,12' at line 2 [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE p.name LIKE '%%'  AND p.product_code LIKE '%%'  AND p.price >   ORDER BY name LIMIT 0,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 14:59:23 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(88): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(62): Model_Site_Getdata->get_find_product('name', '', '', '0', '12', '')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 15:00:31 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY name LIMIT 0,12' at line 2 [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE p.name LIKE '%%'  AND p.product_code LIKE '%%'  AND p.price >   ORDER BY name LIMIT 0,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 15:00:31 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(88): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(62): Model_Site_Getdata->get_find_product('name', '', '', '0', '12', '')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 15:00:34 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY name LIMIT 0,12' at line 2 [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE p.name LIKE '%%'  AND p.product_code LIKE '%%'  AND p.price >   ORDER BY name LIMIT 0,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 15:00:34 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(88): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(62): Model_Site_Getdata->get_find_product('name', '', '', '0', '12', '')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 15:06:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_finish_priset ~ APPPATH\classes\Controller\Site\Getajax.php [ 56 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:56
2015-09-03 15:06:10 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(56): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 56, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:56
2015-09-03 15:06:14 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_finish_priset ~ APPPATH\classes\Controller\Site\Getajax.php [ 56 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:56
2015-09-03 15:06:14 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(56): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 56, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:56
2015-09-03 15:06:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_finish_priset ~ APPPATH\classes\Controller\Site\Getajax.php [ 56 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:56
2015-09-03 15:06:18 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(56): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 56, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:56
2015-09-03 15:06:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_finish_priset ~ APPPATH\classes\Controller\Site\Getajax.php [ 56 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:56
2015-09-03 15:06:20 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(56): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 56, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:56
2015-09-03 15:06:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: find_finish_priset ~ APPPATH\classes\Controller\Site\Getajax.php [ 56 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:56
2015-09-03 15:06:23 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(56): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 56, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:56
2015-09-03 15:12:39 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '=> 0    ORDER BY price LIMIT 0,12' at line 2 [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE p.name LIKE '%%'  AND p.product_code LIKE '%%'  AND p.price => 0    ORDER BY price LIMIT 0,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-09-03 15:12:39 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(92): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(62): Model_Site_Getdata->get_find_product('price', '', '', '0', '12', '0', '')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251