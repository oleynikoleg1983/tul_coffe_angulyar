<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-17 05:31:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\views\admin\v_data.php [ 30 ] in Z:\home\localhost\kohana\application\views\admin\v_data.php:30
2015-08-17 05:31:54 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\admin\v_data.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 30, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana\application\views\admin\v_index.php(37): Kohana_View->__toString()
#5 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#11 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana\application\views\admin\v_data.php:30
2015-08-17 05:38:57 --- CRITICAL: ErrorException [ 8 ]: Undefined index: page ~ APPPATH\classes\Controller\Admin\Index.php [ 107 ] in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php:107
2015-08-17 05:38:57 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(107): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 107, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php:107
2015-08-17 05:39:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: page ~ APPPATH\classes\Controller\Admin\Index.php [ 107 ] in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php:107
2015-08-17 05:39:23 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(107): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 107, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php:107
2015-08-17 05:40:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Admin\Index.php [ 113 ] in file:line
2015-08-17 05:40:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-17 05:46:17 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '147.4, 10' at line 3 [ SELECT p.id, i.url, p.name, p.price, p.first_price, p.quantity, p.description, c.name_category 
            FROM category_goods c, product p LEFT JOIN images i ON p.id_image=i.id
            WHERE p.id_category=c.id ORDER BY p.name LIMIT 147.4, 10 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-17 05:46:17 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, i....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(25): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(124): Model_Admin_Getdata->get_all(' ORDER BY p.nam...')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251