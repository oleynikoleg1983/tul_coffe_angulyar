<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-12-16 09:38:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cha_price_product ~ APPPATH\classes\Model\Site\Getdata.php [ 22 ] in Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php:22
2017-12-16 09:38:26 --- DEBUG: #0 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 22, Array)
#1 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php(23): Model_Site_Getdata->sell_product('2', '2')
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php:22
2017-12-16 09:39:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cha_id_t ~ APPPATH\classes\Model\Site\Getdata.php [ 22 ] in Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php:22
2017-12-16 09:39:15 --- DEBUG: #0 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 22, Array)
#1 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php(23): Model_Site_Getdata->sell_product('2', '2')
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php:22
2017-12-16 09:39:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cha_id_t ~ APPPATH\classes\Model\Site\Getdata.php [ 22 ] in Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php:22
2017-12-16 09:39:22 --- DEBUG: #0 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 22, Array)
#1 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php(23): Model_Site_Getdata->sell_product('2', '2')
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php:22
2017-12-16 09:39:55 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''4' at line 2 [ UPDATE `sell_product` SET product_id='2',
                                  product_count='4 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-16 09:39:55 --- DEBUG: #0 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sell_pr...', false, Array)
#1 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(24): Kohana_Database_Query->execute()
#2 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php(23): Model_Site_Getdata->sell_product('2', '4')
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-16 09:41:42 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE 1' at line 3 [ UPDATE `sell_product` SET product_id='2',
                                  product_count='4',
              WHERE 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-16 09:41:42 --- DEBUG: #0 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sell_pr...', false, Array)
#1 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(24): Kohana_Database_Query->execute()
#2 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php(23): Model_Site_Getdata->sell_product('2', '4')
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-16 10:37:26 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `sell_product` VALUES (null,  '3', '2', (SELECT price FROM `coffee_menu` WHERE id='3')) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-16 10:37:26 --- DEBUG: #0 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `se...', false, Array)
#1 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(24): Kohana_Database_Query->execute()
#2 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php(23): Model_Site_Getdata->sell_product('3', '2')
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-16 10:38:00 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `sell_product` VALUES (null,  '3', '2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-16 10:38:00 --- DEBUG: #0 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `se...', false, Array)
#1 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(24): Kohana_Database_Query->execute()
#2 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php(23): Model_Site_Getdata->sell_product('3', '2')
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-16 10:38:43 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `sell_product` VALUES (1,  '3', '2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-16 10:38:43 --- DEBUG: #0 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `se...', false, Array)
#1 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(24): Kohana_Database_Query->execute()
#2 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php(23): Model_Site_Getdata->sell_product('3', '2')
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-16 10:41:43 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `sell_product` VALUES (1,  '3', '2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-16 10:41:43 --- DEBUG: #0 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `se...', false, Array)
#1 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(24): Kohana_Database_Query->execute()
#2 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php(23): Model_Site_Getdata->sell_product('3', '2')
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-16 10:42:28 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `sell_product` VALUES (1,  '3', '2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-16 10:42:28 --- DEBUG: #0 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `se...', false, Array)
#1 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(25): Kohana_Database_Query->execute()
#2 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php(23): Model_Site_Getdata->sell_product('3', '2')
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-16 10:45:28 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `sell_product` VALUES (1,  '3', '2', 1, 1, 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-16 10:45:28 --- DEBUG: #0 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `se...', false, Array)
#1 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(31): Kohana_Database_Query->execute()
#2 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php(23): Model_Site_Getdata->sell_product('3', '2')
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-16 10:46:20 --- CRITICAL: Database_Exception [ 1048 ]: Column 'id' cannot be null [ INSERT INTO `sell_product` VALUES (null,  '3', '2', 1, 1, 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-16 10:46:20 --- DEBUG: #0 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `se...', false, Array)
#1 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(31): Kohana_Database_Query->execute()
#2 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php(23): Model_Site_Getdata->sell_product('3', '2')
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-16 10:46:49 --- CRITICAL: Database_Exception [ 1048 ]: Column 'id' cannot be null [ INSERT INTO `sell_product` VALUES (null,  '3', '2', 1, 1, 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-16 10:46:49 --- DEBUG: #0 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `se...', false, Array)
#1 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(31): Kohana_Database_Query->execute()
#2 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php(23): Model_Site_Getdata->sell_product('3', '2')
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-16 11:29:52 --- CRITICAL: ErrorException [ 2 ]: Missing argument 3 for Model_Site_Getdata::sell_product(), called in Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php on line 24 and defined ~ APPPATH\classes\Model\Site\Getdata.php [ 18 ] in Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php:18
2017-12-16 11:29:52 --- DEBUG: #0 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(18): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\localho...', 18, Array)
#1 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php(24): Model_Site_Getdata->sell_product('6', '3')
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php:18
2017-12-16 11:30:34 --- CRITICAL: ErrorException [ 2 ]: Missing argument 3 for Model_Site_Getdata::sell_product(), called in Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php on line 24 and defined ~ APPPATH\classes\Model\Site\Getdata.php [ 18 ] in Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php:18
2017-12-16 11:30:34 --- DEBUG: #0 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(18): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\localho...', 18, Array)
#1 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php(24): Model_Site_Getdata->sell_product('3', '3')
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php:18
2017-12-16 11:31:29 --- CRITICAL: ErrorException [ 2 ]: Missing argument 3 for Model_Site_Getdata::sell_product(), called in Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php on line 24 and defined ~ APPPATH\classes\Model\Site\Getdata.php [ 18 ] in Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php:18
2017-12-16 11:31:29 --- DEBUG: #0 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(18): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\localho...', 18, Array)
#1 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php(24): Model_Site_Getdata->sell_product('3', '3')
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php:18
2017-12-16 15:09:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: report_text ~ APPPATH\classes\Controller\Site\Getajax.php [ 33 ] in Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php:33
2017-12-16 15:09:58 --- DEBUG: #0 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 33, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php:33
2017-12-16 15:10:05 --- CRITICAL: ErrorException [ 8 ]: Undefined index: report_text ~ APPPATH\classes\Controller\Site\Getajax.php [ 33 ] in Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php:33
2017-12-16 15:10:05 --- DEBUG: #0 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 33, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php:33
2017-12-16 15:12:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user_id ~ APPPATH\classes\Controller\Site\Getajax.php [ 33 ] in Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php:33
2017-12-16 15:12:02 --- DEBUG: #0 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 33, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php:33