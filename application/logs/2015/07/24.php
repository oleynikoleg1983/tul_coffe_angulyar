<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-24 08:23:54 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT id, parent_id, name_category FROM category_goods WHERE parent_id= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-24 08:23:54 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id, pare...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\site\getdata.php(21): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\site\getajax.php(12): Model_Site_Getdata->get_next('')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-24 08:25:48 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH\views\site\v_categories.php [ 8 ] in Z:\home\localhost\kohana\application\views\site\v_categories.php:8
2015-07-24 08:25:48 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\site\v_categories.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\localho...', 8, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana\application\views\site\v_index.php(15): Kohana_View->__toString()
#5 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#11 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana\application\views\site\v_categories.php:8
2015-07-24 08:26:01 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH\views\site\v_categories.php [ 8 ] in Z:\home\localhost\kohana\application\views\site\v_categories.php:8
2015-07-24 08:26:01 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\site\v_categories.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\localho...', 8, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana\application\views\site\v_index.php(15): Kohana_View->__toString()
#5 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#11 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana\application\views\site\v_categories.php:8
2015-07-24 08:26:05 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH\views\site\v_categories.php [ 8 ] in Z:\home\localhost\kohana\application\views\site\v_categories.php:8
2015-07-24 08:26:05 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\site\v_categories.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\localho...', 8, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana\application\views\site\v_index.php(15): Kohana_View->__toString()
#5 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#11 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana\application\views\site\v_categories.php:8
2015-07-24 10:04:20 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '[object Object]' at line 1 [ SELECT id, parent_id, name_category FROM category_goods WHERE parent_id=[object Object] ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-24 10:04:20 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id, pare...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\site\getdata.php(21): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\site\getajax.php(12): Model_Site_Getdata->get_next('[object Object]')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-24 10:05:33 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '[object Object]' at line 1 [ SELECT id, parent_id, name_category FROM category_goods WHERE parent_id=[object Object] ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-24 10:05:33 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id, pare...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\site\getdata.php(21): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\site\getajax.php(12): Model_Site_Getdata->get_next('[object Object]')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-24 10:05:36 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '[object Object]' at line 1 [ SELECT id, parent_id, name_category FROM category_goods WHERE parent_id=[object Object] ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-24 10:05:36 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id, pare...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\site\getdata.php(21): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\site\getajax.php(12): Model_Site_Getdata->get_next('[object Object]')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-24 10:06:06 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '[object Object]' at line 1 [ SELECT id, parent_id, name_category FROM category_goods WHERE parent_id=[object Object] ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-24 10:06:06 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id, pare...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\site\getdata.php(21): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\site\getajax.php(12): Model_Site_Getdata->get_next('[object Object]')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-24 10:07:52 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '[object Object]' at line 1 [ SELECT id, parent_id, name_category FROM category_goods WHERE parent_id=[object Object] ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-24 10:07:52 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id, pare...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\site\getdata.php(21): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\site\getajax.php(12): Model_Site_Getdata->get_next('[object Object]')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-24 10:08:22 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '[object Object]' at line 1 [ SELECT id, parent_id, name_category FROM category_goods WHERE parent_id=[object Object] ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-24 10:08:22 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id, pare...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\site\getdata.php(21): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\site\getajax.php(12): Model_Site_Getdata->get_next('[object Object]')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-24 10:10:55 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '[object Object]' at line 1 [ SELECT id, parent_id, name_category FROM category_goods WHERE parent_id=[object Object] ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-24 10:10:55 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id, pare...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\site\getdata.php(21): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\site\getajax.php(12): Model_Site_Getdata->get_next('[object Object]')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-24 10:27:37 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT id, parent_id, name_category FROM category_goods WHERE parent_id= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-24 10:27:37 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id, pare...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\site\getdata.php(21): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\site\getajax.php(12): Model_Site_Getdata->get_next('')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-24 12:47:28 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT id, parent_id, name_category FROM category_goods WHERE parent_id= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-24 12:47:28 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id, pare...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\site\getdata.php(21): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\site\getajax.php(12): Model_Site_Getdata->get_next('')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251