<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-21 04:31:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: add_data ~ APPPATH\views\admin\v_index.php [ 35 ] in Z:\home\localhost\kohana\application\views\admin\v_index.php:35
2015-07-21 04:31:17 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\admin\v_index.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 35, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categorygoods))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana\application\views\admin\v_index.php:35
2015-07-21 04:31:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: add_data ~ APPPATH\views\admin\v_index.php [ 35 ] in Z:\home\localhost\kohana\application\views\admin\v_index.php:35
2015-07-21 04:31:24 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\admin\v_index.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 35, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Categorygoods))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana\application\views\admin\v_index.php:35