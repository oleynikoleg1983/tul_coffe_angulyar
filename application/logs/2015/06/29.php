<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-29 02:48:14 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:145
2015-06-29 02:48:14 --- DEBUG: #0 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:145
2015-06-29 02:48:24 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:145
2015-06-29 02:48:24 --- DEBUG: #0 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:145
2015-06-29 02:49:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\Index.php [ 4 ] in file:line
2015-06-29 02:49:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 02:49:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\Index.php [ 4 ] in file:line
2015-06-29 02:49:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 02:49:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\Index.php [ 4 ] in file:line
2015-06-29 02:49:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 02:50:37 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH\views\v_index.php [ 7 ] in Z:\home\localhost\kohana_3\application\views\v_index.php:7
2015-06-29 02:50:37 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_index.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\localho...', 7, Array)
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
2015-06-29 02:51:30 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH\views\v_index.php [ 7 ] in Z:\home\localhost\kohana_3\application\views\v_index.php:7
2015-06-29 02:51:30 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_index.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\localho...', 7, Array)
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
2015-06-29 02:51:32 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH\views\v_index.php [ 7 ] in Z:\home\localhost\kohana_3\application\views\v_index.php:7
2015-06-29 02:51:32 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_index.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\localho...', 7, Array)
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
2015-06-29 02:51:46 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH\views\v_index.php [ 7 ] in Z:\home\localhost\kohana_3\application\views\v_index.php:7
2015-06-29 02:51:46 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_index.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\localho...', 7, Array)
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
2015-06-29 02:55:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH\views\v_index.php [ 37 ] in file:line
2015-06-29 02:55:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 03:56:19 --- CRITICAL: View_Exception [ 0 ]: The requested view style could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:145
2015-06-29 03:56:19 --- DEBUG: #0 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(145): Kohana_View->set_filename('style')
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(30): Kohana_View->__construct('style', NULL)
#2 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(12): Kohana_View::factory('style')
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:145
2015-06-29 22:55:17 --- CRITICAL: View_Exception [ 0 ]: The requested view style could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:145
2015-06-29 22:55:17 --- DEBUG: #0 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(145): Kohana_View->set_filename('style')
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(30): Kohana_View->__construct('style', NULL)
#2 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(12): Kohana_View::factory('style')
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:145
2015-06-29 22:56:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: style ~ APPPATH\views\v_index.php [ 6 ] in Z:\home\localhost\kohana_3\application\views\v_index.php:6
2015-06-29 22:56:33 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_index.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 6, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana_3\application\views\v_index.php:6
2015-06-29 22:57:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: style ~ APPPATH\views\v_index.php [ 6 ] in Z:\home\localhost\kohana_3\application\views\v_index.php:6
2015-06-29 22:57:00 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_index.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 6, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana_3\application\views\v_index.php:6
2015-06-29 23:11:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_STRING ~ APPPATH\classes\Controller\Index.php [ 5 ] in file:line
2015-06-29 23:11:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 23:11:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\Index.php [ 5 ] in file:line
2015-06-29 23:11:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 23:24:03 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in Z:\home\localhost\kohana_3\application\classes\Controller\Index.php on line 19 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:28
2015-06-29 23:24:03 --- DEBUG: #0 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\localho...', 28, Array)
#1 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(19): Kohana_View::factory('Index', 'helow')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:28
2015-06-29 23:24:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::body() ~ APPPATH\classes\Controller\Index.php [ 19 ] in file:line
2015-06-29 23:24:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 23:25:52 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in Z:\home\localhost\kohana_3\application\classes\Controller\Index.php on line 18 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:28
2015-06-29 23:25:52 --- DEBUG: #0 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\localho...', 28, Array)
#1 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(18): Kohana_View::factory('v_form', 'helow')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:28
2015-06-29 23:32:42 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in Z:\home\localhost\kohana_3\application\classes\Controller\Index.php on line 20 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:28
2015-06-29 23:32:42 --- DEBUG: #0 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\localho...', 28, Array)
#1 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(20): Kohana_View::factory('v_form', 'HHHHHHHHHH')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\kohana_3\system\classes\Kohana\View.php:28
2015-06-29 23:33:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\v_index.php [ 21 ] in Z:\home\localhost\kohana_3\application\views\v_index.php:21
2015-06-29 23:33:39 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_index.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 21, Array)
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
2015-06-29 23:33:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\v_form.php [ 17 ] in Z:\home\localhost\kohana_3\application\views\v_form.php:17
2015-06-29 23:33:57 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_form.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 17, Array)
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
#14 {main} in Z:\home\localhost\kohana_3\application\views\v_form.php:17
2015-06-29 23:34:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\v_form.php [ 17 ] in Z:\home\localhost\kohana_3\application\views\v_form.php:17
2015-06-29 23:34:38 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_form.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 17, Array)
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
#14 {main} in Z:\home\localhost\kohana_3\application\views\v_form.php:17
2015-06-29 23:35:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\v_form.php [ 17 ] in Z:\home\localhost\kohana_3\application\views\v_form.php:17
2015-06-29 23:35:22 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_form.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 17, Array)
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
#14 {main} in Z:\home\localhost\kohana_3\application\views\v_form.php:17