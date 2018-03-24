<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-15 08:20:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: sum_zarobotok ~ APPPATH\classes\Controller\Admin\Reports.php [ 51 ] in Z:\home\localhost\kohana\application\classes\Controller\Admin\Reports.php:51
2015-08-15 08:20:48 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Admin\Reports.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 51, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Reports->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Reports))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Admin\Reports.php:51