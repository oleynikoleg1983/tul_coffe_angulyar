<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-12-15 12:38:40 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\MySQL.php:75
2017-12-15 12:38:40 --- DEBUG: #0 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id, pare...', false, Array)
#3 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(12): Kohana_Database_Query->execute()
#4 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php(16): Model_Site_Getdata->get_all()
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Index->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#8 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\MySQL.php:75
2017-12-15 12:40:58 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.category_goods' doesn't exist [ SELECT id, parent_id, name_category FROM category_goods WHERE parent_id=0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-15 12:40:58 --- DEBUG: #0 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id, pare...', false, Array)
#1 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(12): Kohana_Database_Query->execute()
#2 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php(16): Model_Site_Getdata->get_all()
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-15 12:44:20 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.category_goods' doesn't exist [ SELECT id, parent_id, name_category FROM category_goods WHERE parent_id=0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-15 12:44:20 --- DEBUG: #0 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id, pare...', false, Array)
#1 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(12): Kohana_Database_Query->execute()
#2 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php(16): Model_Site_Getdata->get_all()
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-15 12:44:30 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.category_goods' doesn't exist [ SELECT id, parent_id, name_category FROM category_goods WHERE parent_id=0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-15 12:44:30 --- DEBUG: #0 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id, pare...', false, Array)
#1 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(12): Kohana_Database_Query->execute()
#2 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php(16): Model_Site_Getdata->get_all()
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-15 12:44:50 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.category_goods' doesn't exist [ SELECT id, parent_id, name_category FROM category_goods WHERE parent_id=0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-15 12:44:50 --- DEBUG: #0 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id, pare...', false, Array)
#1 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(12): Kohana_Database_Query->execute()
#2 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php(16): Model_Site_Getdata->get_all()
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-15 12:44:53 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.category_goods' doesn't exist [ SELECT id, parent_id, name_category FROM category_goods WHERE parent_id=0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-15 12:44:53 --- DEBUG: #0 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id, pare...', false, Array)
#1 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(12): Kohana_Database_Query->execute()
#2 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php(16): Model_Site_Getdata->get_all()
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php:251
2017-12-15 12:53:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH\classes\Controller\Site\Index.php [ 16 ] in Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php:16
2017-12-15 12:53:12 --- DEBUG: #0 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 16, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#4 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php:16
2017-12-15 12:53:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH\classes\Controller\Site\Index.php [ 16 ] in Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php:16
2017-12-15 12:53:31 --- DEBUG: #0 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 16, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#4 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php:16
2017-12-15 13:00:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH\classes\Controller\Site\Index.php [ 17 ] in Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php:17
2017-12-15 13:00:53 --- DEBUG: #0 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 17, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#4 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php:17
2017-12-15 13:01:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH\classes\Controller\Site\Index.php [ 17 ] in Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php:17
2017-12-15 13:01:25 --- DEBUG: #0 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 17, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#4 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php:17
2017-12-15 13:01:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH\classes\Controller\Site\Index.php [ 18 ] in Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php:18
2017-12-15 13:01:43 --- DEBUG: #0 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 18, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#4 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php:18
2017-12-15 13:01:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH\classes\Controller\Site\Index.php [ 18 ] in Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php:18
2017-12-15 13:01:51 --- DEBUG: #0 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 18, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#4 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php:18
2017-12-15 18:12:31 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\MySQL.php:171
2017-12-15 18:12:31 --- DEBUG: #0 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM c...', false, Array)
#2 Z:\home\localhost\coffeSite\application\classes\Model\Site\Getdata.php(14): Kohana_Database_Query->execute()
#3 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Getajax.php(12): Model_Site_Getdata->get_coffee_menu()
#4 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\MySQL.php:171