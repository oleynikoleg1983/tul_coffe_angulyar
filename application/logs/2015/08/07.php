<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-07 06:33:24 --- CRITICAL: ErrorException [ 2 ]: copy() [function.copy]: Filename cannot be empty ~ APPPATH\classes\Controller\Admin\Index.php [ 126 ] in file:line
2015-08-07 06:33:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'copy() [<a href...', 'Z:\home\localho...', 126, Array)
#1 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(126): copy('', 'Z:/home/localho...')
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(62): Controller_Admin_Index->add_images('', 'Z:/home/localho...', '12_8025.jpg')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-07 06:33:34 --- CRITICAL: ErrorException [ 2 ]: copy() [function.copy]: Filename cannot be empty ~ APPPATH\classes\Controller\Admin\Index.php [ 126 ] in file:line
2015-08-07 06:33:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'copy() [<a href...', 'Z:\home\localho...', 126, Array)
#1 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(126): copy('', 'Z:/home/localho...')
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(62): Controller_Admin_Index->add_images('', 'Z:/home/localho...', '12_8025.jpg')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-07 06:34:03 --- CRITICAL: ErrorException [ 2 ]: copy() [function.copy]: Filename cannot be empty ~ APPPATH\classes\Controller\Admin\Index.php [ 126 ] in file:line
2015-08-07 06:34:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'copy() [<a href...', 'Z:\home\localho...', 126, Array)
#1 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(126): copy('', 'Z:/home/localho...')
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(62): Controller_Admin_Index->add_images('', 'Z:/home/localho...', '12_8025.jpg')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-08-07 06:34:22 --- CRITICAL: Database_Exception [ 1048 ]: Column 'id_category' cannot be null [ INSERT INTO `product`
    VALUES (null, null, '1', '3', '5', NULL, '4', '2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-07 06:34:22 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(63): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(52): Model_Admin_Getdata->set_new_product('1', '3', '2', '5', NULL, '4')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-07 06:38:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\admin\v_add_data.php [ 32 ] in file:line
2015-08-07 06:38:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-07 06:42:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH\views\admin\v_add_data.php [ 31 ] in file:line
2015-08-07 06:42:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-07 07:13:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: no_add_tov ~ APPPATH\views\admin\v_add_data.php [ 2 ] in Z:\home\localhost\kohana\application\views\admin\v_add_data.php:2
2015-08-07 07:13:12 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\admin\v_add_data.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 2, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana\application\views\admin\v_index.php(34): Kohana_View->__toString()
#5 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#11 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana\application\views\admin\v_add_data.php:2
2015-08-07 07:51:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: arraycat ~ APPPATH\views\admin\v_add_data.php [ 22 ] in Z:\home\localhost\kohana\application\views\admin\v_add_data.php:22
2015-08-07 07:51:47 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\admin\v_add_data.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 22, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana\application\views\admin\v_index.php(34): Kohana_View->__toString()
#5 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#11 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana\application\views\admin\v_add_data.php:22
2015-08-07 08:02:09 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Admin\Index.php [ 114 ] in file:line
2015-08-07 08:02:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-07 08:02:28 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Admin\Index.php [ 114 ] in file:line
2015-08-07 08:02:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-07 08:03:24 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Admin\Index.php [ 80 ] in file:line
2015-08-07 08:03:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-07 08:04:09 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Admin\Index.php [ 80 ] in file:line
2015-08-07 08:04:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-07 08:04:47 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Admin\Index.php [ 80 ] in file:line
2015-08-07 08:04:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line