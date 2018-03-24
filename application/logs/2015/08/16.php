<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-16 00:32:37 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SELECT COUNT(p.id, i.url, p.name, p.price, p.first_price, p.quantity, p.descript' at line 1 [ SELECT SELECT COUNT(p.id, i.url, p.name, p.price, p.first_price, p.quantity, p.description, c.name_category) 
            FROM category_goods c, product p LEFT JOIN images i ON p.id_image=i.id
            WHERE p.id_category=c.id ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 00:32:37 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SELECT C...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(15): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(96): Model_Admin_Getdata->get_count_elem()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 00:33:34 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SELECT COUNT(*) 
            FROM  product p' at line 1 [ SELECT SELECT COUNT(*) 
            FROM  product p ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 00:33:34 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT SELECT C...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(14): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(96): Model_Admin_Getdata->get_count_elem()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 00:34:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count_in_array ~ APPPATH\views\admin\v_add_data.php [ 33 ] in Z:\home\localhost\kohana\application\views\admin\v_add_data.php:33
2015-08-16 00:34:04 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\admin\v_add_data.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 33, Array)
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
#14 {main} in Z:\home\localhost\kohana\application\views\admin\v_add_data.php:33
2015-08-16 00:34:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count_in_array ~ APPPATH\views\admin\v_add_data.php [ 33 ] in Z:\home\localhost\kohana\application\views\admin\v_add_data.php:33
2015-08-16 00:34:38 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\admin\v_add_data.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 33, Array)
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
#14 {main} in Z:\home\localhost\kohana\application\views\admin\v_add_data.php:33
2015-08-16 00:37:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH\views\admin\v_data.php [ 32 ] in file:line
2015-08-16 00:37:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-16 00:45:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\admin\v_data.php [ 33 ] in file:line
2015-08-16 00:45:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-16 00:47:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\admin\v_data.php [ 31 ] in file:line
2015-08-16 00:47:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-16 00:48:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\admin\v_data.php [ 31 ] in file:line
2015-08-16 00:48:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-16 00:53:00 --- CRITICAL: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH\classes\Controller\Admin\Index.php [ 97 ] in file:line
2015-08-16 00:53:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-16 00:53:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\Admin\Index.php [ 97 ] in file:line
2015-08-16 00:53:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-16 00:58:09 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant i - assumed 'i' ~ APPPATH\views\admin\v_data.php [ 32 ] in Z:\home\localhost\kohana\application\views\admin\v_data.php:32
2015-08-16 00:58:09 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\admin\v_data.php(32): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\localho...', 32, Array)
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
#14 {main} in Z:\home\localhost\kohana\application\views\admin\v_data.php:32
2015-08-16 01:07:18 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_Admin_Getdata::get_all(), called in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php on line 101 and defined ~ APPPATH\classes\Model\Admin\Getdata.php [ 18 ] in Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php:18
2015-08-16 01:07:18 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(18): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\localho...', 18, Array)
#1 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(101): Model_Admin_Getdata->get_all()
#2 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php:18
2015-08-16 01:07:33 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'c.id0' in 'where clause' [ SELECT p.id, i.url, p.name, p.price, p.first_price, p.quantity, p.description, c.name_category 
            FROM category_goods c, product p LEFT JOIN images i ON p.id_image=i.id
            WHERE p.id_category=c.id0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 01:07:33 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, i....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(25): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(102): Model_Admin_Getdata->get_all('0')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 01:09:42 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '20,30' at line 3 [ SELECT p.id, i.url, p.name, p.price, p.first_price, p.quantity, p.description, c.name_category 
            FROM category_goods c, product p LEFT JOIN images i ON p.id_image=i.id
            WHERE p.id_category=c.idLIMIT 20,30 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 01:09:42 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, i....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(25): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(102): Model_Admin_Getdata->get_all('LIMIT 20,30')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 01:16:50 --- CRITICAL: Database_Exception [ 1327 ]: Undeclared variable: 20ORDER [ SELECT p.id, i.url, p.name, p.price, p.first_price, p.quantity, p.description, c.name_category 
            FROM category_goods c, product p LEFT JOIN images i ON p.id_image=i.id
            WHERE p.id_category=c.id LIMIT 10,20ORDER BY id ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 01:16:50 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, i....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(25): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(104): Model_Admin_Getdata->get_all(' LIMIT 10,20ORD...')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 01:17:05 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id' at line 3 [ SELECT p.id, i.url, p.name, p.price, p.first_price, p.quantity, p.description, c.name_category 
            FROM category_goods c, product p LEFT JOIN images i ON p.id_image=i.id
            WHERE p.id_category=c.id LIMIT 10,20 ORDER BY id ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 01:17:05 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, i....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(25): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(104): Model_Admin_Getdata->get_all(' LIMIT 10,20 OR...')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 01:17:38 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY p.id' at line 3 [ SELECT p.id, i.url, p.name, p.price, p.first_price, p.quantity, p.description, c.name_category 
            FROM category_goods c, product p LEFT JOIN images i ON p.id_image=i.id
            WHERE p.id_category=c.id LIMIT 10,20 ORDER BY p.id ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 01:17:38 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, i....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(25): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(104): Model_Admin_Getdata->get_all(' LIMIT 10,20 OR...')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 01:18:58 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'BY p.id LIMIT 10,20' at line 3 [ SELECT p.id, i.url, p.name, p.price, p.first_price, p.quantity, p.description, c.name_category 
            FROM category_goods c, product p LEFT JOIN images i ON p.id_image=i.id
            WHERE p.id_category=c.idORDER BY p.id LIMIT 10,20 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 01:18:58 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, i....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(25): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(104): Model_Admin_Getdata->get_all('ORDER BY p.id L...')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 01:37:30 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'OFFSET 10' at line 3 [ SELECT p.id, i.url, p.name, p.price, p.first_price, p.quantity, p.description, c.name_category 
            FROM category_goods c, product p LEFT JOIN images i ON p.id_image=i.id
            WHERE p.id_category=c.id ORDER BY p.id LIMIT 10, 20 OFFSET 10  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 01:37:30 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, i....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(25): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(105): Model_Admin_Getdata->get_all(' ORDER BY p.id ...')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 03:10:17 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'c.id0' in 'where clause' [ SELECT p.id, i.url, p.name, p.price, p.first_price, p.quantity, p.description, c.name_category 
            FROM category_goods c, product p LEFT JOIN images i ON p.id_image=i.id
            WHERE p.id_category=c.id0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 03:10:17 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, i....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(25): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(104): Model_Admin_Getdata->get_all(0)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 03:10:32 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'c.id0' in 'where clause' [ SELECT p.id, i.url, p.name, p.price, p.first_price, p.quantity, p.description, c.name_category 
            FROM category_goods c, product p LEFT JOIN images i ON p.id_image=i.id
            WHERE p.id_category=c.id0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 03:10:32 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, i....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(25): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(104): Model_Admin_Getdata->get_all(0)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 03:11:00 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'c.id0' in 'where clause' [ SELECT p.id, i.url, p.name, p.price, p.first_price, p.quantity, p.description, c.name_category 
            FROM category_goods c, product p LEFT JOIN images i ON p.id_image=i.id
            WHERE p.id_category=c.id0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 03:11:00 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, i....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(25): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(104): Model_Admin_Getdata->get_all('0')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-16 03:22:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\views\admin\v_data.php [ 18 ] in file:line
2015-08-16 03:22:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-16 03:22:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\views\admin\v_data.php [ 18 ] in file:line
2015-08-16 03:22:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-16 03:23:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\views\admin\v_data.php [ 18 ] in file:line
2015-08-16 03:23:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-16 03:23:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: page ~ APPPATH\classes\Controller\Admin\Index.php [ 109 ] in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php:109
2015-08-16 03:23:44 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(109): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 109, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php:109
2015-08-16 03:29:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: num_page ~ APPPATH\classes\Controller\Admin\Index.php [ 110 ] in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php:110
2015-08-16 03:29:06 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(110): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 110, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php:110