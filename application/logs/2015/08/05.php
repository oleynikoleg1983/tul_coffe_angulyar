<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-05 10:27:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cha_Text_product ~ APPPATH\classes\Model\admin\getdata.php [ 46 ] in Z:\home\localhost\kohana\application\classes\Model\admin\getdata.php:46
2015-08-05 10:27:05 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Model\admin\getdata.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 46, Array)
#1 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(24): Model_Admin_Getdata->set_change('178', 'last1_?????????...', '12.00', '   lastlastlast...', '12', '10')
#2 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\kohana\application\classes\Model\admin\getdata.php:46
2015-08-05 10:27:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cha_Text_product ~ APPPATH\classes\Model\admin\getdata.php [ 46 ] in Z:\home\localhost\kohana\application\classes\Model\admin\getdata.php:46
2015-08-05 10:27:40 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Model\admin\getdata.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 46, Array)
#1 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(24): Model_Admin_Getdata->set_change('178', 'last1_?????????...', '12.00', '   lastlastlast...', '12', '10')
#2 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\kohana\application\classes\Model\admin\getdata.php:46
2015-08-05 10:34:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: first_price ~ APPPATH\views\admin\v_data.php [ 20 ] in Z:\home\localhost\kohana\application\views\admin\v_data.php:20
2015-08-05 10:34:18 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\admin\v_data.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 20, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana\application\views\admin\v_index.php(33): Kohana_View->__toString()
#5 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#11 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana\application\views\admin\v_data.php:20
2015-08-05 11:46:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name_user ~ APPPATH\classes\Model\admin\regdata.php [ 9 ] in Z:\home\localhost\kohana\application\classes\Model\admin\regdata.php:9
2015-08-05 11:46:27 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Model\admin\regdata.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 9, Array)
#1 Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php(33): Model_Admin_Regdata->get_entry('1')
#2 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Reg->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Reg))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\kohana\application\classes\Model\admin\regdata.php:9
2015-08-05 11:46:59 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'admin' in 'where clause' [ SELECT password FROM user WHERE user=admin ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-05 11:46:59 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT password...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\admin\regdata.php(12): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php(33): Model_Admin_Regdata->get_entry('admin')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Reg->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Reg))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-05 11:49:49 --- CRITICAL: ErrorException [ 8 ]: Undefined index: password ~ APPPATH\classes\Controller\admin\reg.php [ 34 ] in Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php:34
2015-08-05 11:49:49 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 34, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Reg->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Reg))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php:34
2015-08-05 11:50:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: password ~ APPPATH\classes\Controller\admin\reg.php [ 34 ] in Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php:34
2015-08-05 11:50:23 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 34, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Reg->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Reg))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php:34
2015-08-05 11:53:09 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\admin\reg.php [ 33 ] in Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php:33
2015-08-05 11:53:09 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php(33): Kohana_Core::error_handler(8, 'Undefined offse...', 'Z:\home\localho...', 33, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Reg->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Reg))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php:33
2015-08-05 12:10:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\admin\reg.php [ 53 ] in file:line
2015-08-05 12:10:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-05 12:12:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ahref ~ APPPATH\classes\Controller\admin\reg.php [ 17 ] in Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php:17
2015-08-05 12:12:18 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 17, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Reg->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Reg))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php:17
2015-08-05 12:14:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ahref ~ APPPATH\classes\Controller\admin\reg.php [ 17 ] in Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php:17
2015-08-05 12:14:18 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 17, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Reg->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Reg))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php:17
2015-08-05 12:14:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ahref ~ APPPATH\classes\Controller\admin\reg.php [ 17 ] in Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php:17
2015-08-05 12:14:23 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 17, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Reg->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Reg))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php:17
2015-08-05 12:16:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ahref ~ APPPATH\classes\Controller\admin\reg.php [ 17 ] in Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php:17
2015-08-05 12:16:53 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 17, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Reg->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Reg))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php:17
2015-08-05 12:18:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\classes\Controller\admin\reg.php [ 11 ] in Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php:11
2015-08-05 12:18:45 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 11, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Reg->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Reg))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\admin\reg.php:11
2015-08-05 22:25:45 --- CRITICAL: ErrorException [ 8 ]: Undefined index: mes2 ~ APPPATH\views\admin\v_index.php [ 27 ] in Z:\home\localhost\kohana\application\views\admin\v_index.php:27
2015-08-05 22:25:45 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\admin\v_index.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 27, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana\application\views\admin\v_index.php:27
2015-08-05 22:27:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: mes2 ~ APPPATH\views\admin\v_index.php [ 27 ] in Z:\home\localhost\kohana\application\views\admin\v_index.php:27
2015-08-05 22:27:56 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\admin\v_index.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 27, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana\application\views\admin\v_index.php:27
2015-08-05 22:34:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: languages ~ APPPATH\views\admin\v_index.php [ 25 ] in Z:\home\localhost\kohana\application\views\admin\v_index.php:25
2015-08-05 22:34:39 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\admin\v_index.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 25, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categorygoods))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana\application\views\admin\v_index.php:25