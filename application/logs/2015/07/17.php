<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-17 00:19:09 --- CRITICAL: ErrorException [ 2 ]: mysql_num_rows() expects parameter 1 to be resource, boolean given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 20 ] in file:line
2015-07-17 00:19:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_num_rows(...', 'Z:\home\localho...', 20, Array)
#1 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\MySQL\Result.php(20): mysql_num_rows(true)
#2 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\MySQL.php(210): Kohana_Database_MySQL_Result->__construct(true, 'CALL  proc(1)', false, Array)
#3 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'CALL  proc(1)', false, Array)
#4 Z:\home\localhost\kohana\application\classes\Model\admin\getdata.php(76): Kohana_Database_Query->execute()
#5 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(105): Model_Admin_Getdata->set_images('images/tekipfse...')
#6 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(87): Controller_Admin_Index->add_images('Z:\tmp\php9935....', 'Z:/home/localho...', 'aakgihw.jpg')
#7 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#10 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2015-07-17 00:20:11 --- CRITICAL: ErrorException [ 2 ]: mysql_num_rows() expects parameter 1 to be resource, boolean given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 20 ] in file:line
2015-07-17 00:20:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_num_rows(...', 'Z:\home\localho...', 20, Array)
#1 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\MySQL\Result.php(20): mysql_num_rows(true)
#2 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\MySQL.php(210): Kohana_Database_MySQL_Result->__construct(true, 'CALL  proc(1)', false, Array)
#3 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'CALL  proc(1)', false, Array)
#4 Z:\home\localhost\kohana\application\classes\Model\admin\getdata.php(76): Kohana_Database_Query->execute()
#5 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(105): Model_Admin_Getdata->set_images('images/styykphj...')
#6 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(87): Controller_Admin_Index->add_images('Z:\tmp\php88C3....', 'Z:/home/localho...', 'aakgihw.jpg')
#7 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#10 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2015-07-17 04:02:56 --- CRITICAL: ErrorException [ 2 ]: mysql_num_rows() expects parameter 1 to be resource, boolean given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 20 ] in file:line
2015-07-17 04:02:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_num_rows(...', 'Z:\home\localho...', 20, Array)
#1 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\MySQL\Result.php(20): mysql_num_rows(true)
#2 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\MySQL.php(210): Kohana_Database_MySQL_Result->__construct(true, 'CALL  proc(1)', false, Array)
#3 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'CALL  proc(1)', false, Array)
#4 Z:\home\localhost\kohana\application\classes\Model\admin\getdata.php(76): Kohana_Database_Query->execute()
#5 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(105): Model_Admin_Getdata->set_images('images/rkhahuao...')
#6 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(87): Controller_Admin_Index->add_images('Z:\tmp\php7685....', 'Z:/home/localho...', 'ahpdfsa.jpg')
#7 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#10 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2015-07-17 04:48:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: u ~ APPPATH\views\admin\v_data.php [ 22 ] in Z:\home\localhost\kohana\application\views\admin\v_data.php:22
2015-07-17 04:48:20 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\admin\v_data.php(22): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 22, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana\application\views\admin\v_index.php(28): Kohana_View->__toString()
#5 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#11 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana\application\views\admin\v_data.php:22
2015-07-17 04:48:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: u ~ APPPATH\views\admin\v_data.php [ 22 ] in Z:\home\localhost\kohana\application\views\admin\v_data.php:22
2015-07-17 04:48:50 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\admin\v_data.php(22): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 22, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana\application\views\admin\v_index.php(28): Kohana_View->__toString()
#5 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#11 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana\application\views\admin\v_data.php:22
2015-07-17 04:49:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index: u ~ APPPATH\views\admin\v_data.php [ 22 ] in Z:\home\localhost\kohana\application\views\admin\v_data.php:22
2015-07-17 04:49:30 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\admin\v_data.php(22): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 22, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana\application\views\admin\v_index.php(28): Kohana_View->__toString()
#5 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#11 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana\application\views\admin\v_data.php:22
2015-07-17 04:50:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: u ~ APPPATH\views\admin\v_data.php [ 22 ] in Z:\home\localhost\kohana\application\views\admin\v_data.php:22
2015-07-17 04:50:39 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\admin\v_data.php(22): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 22, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana\application\views\admin\v_index.php(28): Kohana_View->__toString()
#5 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#11 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana\application\views\admin\v_data.php:22
2015-07-17 04:51:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: u ~ APPPATH\views\admin\v_data.php [ 22 ] in Z:\home\localhost\kohana\application\views\admin\v_data.php:22
2015-07-17 04:51:08 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\admin\v_data.php(22): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 22, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana\application\views\admin\v_index.php(28): Kohana_View->__toString()
#5 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#11 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana\application\views\admin\v_data.php:22
2015-07-17 21:49:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function update_images_product() ~ APPPATH\classes\Model\admin\getdata.php [ 73 ] in file:line
2015-07-17 21:49:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line