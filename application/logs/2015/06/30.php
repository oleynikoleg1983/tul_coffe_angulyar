<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-30 00:06:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: m ~ APPPATH\views\v_index.php [ 21 ] in Z:\home\localhost\kohana_3\application\views\v_index.php:21
2015-06-30 00:06:54 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_index.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 21, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana_3\application\views\v_index.php:21
2015-06-30 00:19:47 --- CRITICAL: View_Exception [ 0 ]: The requested view v_from could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:145
2015-06-30 00:19:47 --- DEBUG: #0 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(145): Kohana_View->set_filename('v_from')
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(30): Kohana_View->__construct('v_from', NULL)
#2 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(22): Kohana_View::factory('v_from')
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:145
2015-06-30 00:21:27 --- CRITICAL: View_Exception [ 0 ]: The requested view v_from could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:145
2015-06-30 00:21:27 --- DEBUG: #0 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(145): Kohana_View->set_filename('v_from')
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(30): Kohana_View->__construct('v_from', NULL)
#2 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(22): Kohana_View::factory('v_from')
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:145
2015-06-30 00:21:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\v_form.php [ 19 ] in Z:\home\localhost\kohana_3\application\views\v_form.php:19
2015-06-30 00:21:50 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_form.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 19, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\application\views\v_index.php(15): Kohana_View->__toString()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana_3\application\views\v_form.php:19
2015-06-30 00:22:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\v_index.php [ 23 ] in Z:\home\localhost\kohana_3\application\views\v_index.php:23
2015-06-30 00:22:58 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_index.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 23, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana_3\application\views\v_index.php:23
2015-06-30 00:23:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\v_index.php [ 23 ] in Z:\home\localhost\kohana_3\application\views\v_index.php:23
2015-06-30 00:23:19 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_index.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 23, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana_3\application\views\v_index.php:23
2015-06-30 00:26:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: mes1 ~ APPPATH\views\v_form.php [ 17 ] in Z:\home\localhost\kohana_3\application\views\v_form.php:17
2015-06-30 00:26:00 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_form.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 17, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(26): Kohana_Response->body(Object(View))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\localhost\kohana_3\application\views\v_form.php:17
2015-06-30 00:26:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\v_form.php [ 19 ] in Z:\home\localhost\kohana_3\application\views\v_form.php:19
2015-06-30 00:26:00 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_form.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 19, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\application\views\v_index.php(15): Kohana_View->__toString()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana_3\application\views\v_form.php:19
2015-06-30 00:26:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: mes1 ~ APPPATH\views\v_form.php [ 17 ] in Z:\home\localhost\kohana_3\application\views\v_form.php:17
2015-06-30 00:26:58 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_form.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 17, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(25): Kohana_Response->body(Object(View))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\localhost\kohana_3\application\views\v_form.php:17
2015-06-30 00:26:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\v_form.php [ 19 ] in Z:\home\localhost\kohana_3\application\views\v_form.php:19
2015-06-30 00:26:58 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_form.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 19, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\application\views\v_index.php(15): Kohana_View->__toString()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana_3\application\views\v_form.php:19
2015-06-30 00:34:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: age ~ APPPATH\views\v_index.php [ 16 ] in Z:\home\localhost\kohana_3\application\views\v_index.php:16
2015-06-30 00:34:16 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_index.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 16, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana_3\application\views\v_index.php:16
2015-06-30 00:34:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: age ~ APPPATH\views\v_index.php [ 16 ] in Z:\home\localhost\kohana_3\application\views\v_index.php:16
2015-06-30 00:34:28 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_index.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 16, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana_3\application\views\v_index.php:16
2015-06-30 00:37:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\v_index.php [ 7 ] in Z:\home\localhost\kohana_3\application\views\v_index.php:7
2015-06-30 00:37:53 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_index.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 7, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana_3\application\views\v_index.php:7
2015-06-30 00:38:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\v_index.php [ 7 ] in Z:\home\localhost\kohana_3\application\views\v_index.php:7
2015-06-30 00:38:52 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_index.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 7, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana_3\application\views\v_index.php:7
2015-06-30 01:15:44 --- CRITICAL: ErrorException [ 1 ]: Class 'oute' not found ~ APPPATH\bootstrap.php [ 153 ] in file:line
2015-06-30 01:15:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 01:15:48 --- CRITICAL: ErrorException [ 1 ]: Class 'oute' not found ~ APPPATH\bootstrap.php [ 153 ] in file:line
2015-06-30 01:15:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 01:16:04 --- CRITICAL: ErrorException [ 1 ]: Class 'oute' not found ~ APPPATH\bootstrap.php [ 153 ] in file:line
2015-06-30 01:16:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 01:29:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\v_index.php [ 18 ] in file:line
2015-06-30 01:29:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 01:29:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\v_index.php [ 18 ] in file:line
2015-06-30 01:29:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 01:34:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ahref ~ APPPATH\views\v_index.php [ 16 ] in Z:\home\localhost\kohana_3\application\views\v_index.php:16
2015-06-30 01:34:26 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_index.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 16, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana_3\application\views\v_index.php:16
2015-06-30 06:35:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH\classes\Controller\Index.php [ 13 ] in file:line
2015-06-30 06:35:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 06:42:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH\views\v_index.php [ 7 ] in file:line
2015-06-30 06:42:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 09:30:14 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:145
2015-06-30 09:30:14 --- DEBUG: #0 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(145): Kohana_View->set_filename('')
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 Z:\home\localhost\kohana_3\application\classes\Controller\page.php(23): Kohana_View::factory('')
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Page->action_about()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:145
2015-06-30 09:38:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH\views\pages\about.php [ 2 ] in file:line
2015-06-30 09:38:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 09:39:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ')' ~ APPPATH\views\pages\about.php [ 2 ] in file:line
2015-06-30 09:39:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 12:15:25 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant authorization - assumed 'authorization' ~ APPPATH\views\v_form.php [ 4 ] in Z:\home\localhost\kohana_3\application\views\v_form.php:4
2015-06-30 12:15:25 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_form.php(4): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\localho...', 4, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\application\views\v_index.php(19): Kohana_View->__toString()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana_3\application\views\v_form.php:4
2015-06-30 22:02:58 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_View::bind(), called in Z:\home\localhost\kohana_3\application\classes\Controller\Index.php on line 37 and defined ~ SYSPATH\classes\Kohana\View.php [ 325 ] in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:325
2015-06-30 22:02:58 --- DEBUG: #0 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(325): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\localho...', 325, Array)
#1 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(37): Kohana_View->bind(Array)
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:325
2015-06-30 22:03:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: mes1 ~ APPPATH\views\v_form.php [ 17 ] in Z:\home\localhost\kohana_3\application\views\v_form.php:17
2015-06-30 22:03:55 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_form.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 17, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\application\views\v_index.php(19): Kohana_View->__toString()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana_3\application\views\v_form.php:17
2015-06-30 22:20:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: mes1 ~ APPPATH\views\v_form.php [ 17 ] in Z:\home\localhost\kohana_3\application\views\v_form.php:17
2015-06-30 22:20:15 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_form.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 17, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\application\views\v_index.php(19): Kohana_View->__toString()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana_3\application\views\v_form.php:17
2015-06-30 22:20:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\views\v_form.php [ 17 ] in file:line
2015-06-30 22:20:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 22:24:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH\classes\Controller\Index.php [ 38 ] in Z:\home\localhost\kohana_3\application\classes\Controller\Index.php:38
2015-06-30 22:24:40 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 38, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana_3\application\classes\Controller\Index.php:38
2015-06-30 22:26:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH\classes\Controller\Index.php [ 38 ] in Z:\home\localhost\kohana_3\application\classes\Controller\Index.php:38
2015-06-30 22:26:23 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 38, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana_3\application\classes\Controller\Index.php:38
2015-06-30 22:43:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Model\Model.php [ 9 ] in file:line
2015-06-30 22:43:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 22:45:51 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_model' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2015-06-30 22:45:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 22:46:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Model\getdata.php [ 9 ] in file:line
2015-06-30 22:46:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 22:47:12 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_getdata' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2015-06-30 22:47:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 22:47:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_getdata2' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2015-06-30 22:47:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-30 22:58:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\v_index.php [ 17 ] in Z:\home\localhost\kohana_3\application\views\v_index.php:17
2015-06-30 22:58:25 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_index.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 17, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana_3\application\views\v_index.php:17
2015-06-30 23:03:41 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Index.php [ 26 ] in Z:\home\localhost\kohana_3\application\classes\Controller\Index.php:26
2015-06-30 23:03:41 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(26): Kohana_Core::error_handler(8, 'Array to string...', 'Z:\home\localho...', 26, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana_3\application\classes\Controller\Index.php:26
2015-06-30 23:05:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\v_index.php [ 18 ] in Z:\home\localhost\kohana_3\application\views\v_index.php:18
2015-06-30 23:05:00 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_index.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 18, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana_3\application\views\v_index.php:18