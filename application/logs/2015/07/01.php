<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-01 01:21:11 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\MySQL.php:171
2015-07-01 01:21:11 --- DEBUG: #0 Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 Z:\home\localhost\kohana_3\application\classes\Model\getdata.php(23): Kohana_Database_Query->execute()
#3 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(32): Model_Getdata->get_all()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\MySQL.php:171
2015-07-01 01:24:13 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\MySQL.php:171
2015-07-01 01:24:13 --- DEBUG: #0 Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 Z:\home\localhost\kohana_3\application\classes\Model\getdata.php(23): Kohana_Database_Query->execute()
#3 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(32): Model_Getdata->get_all()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\MySQL.php:171
2015-07-01 01:25:00 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\MySQL.php:171
2015-07-01 01:25:00 --- DEBUG: #0 Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#2 Z:\home\localhost\kohana_3\application\classes\Model\getdata.php(23): Kohana_Database_Query->execute()
#3 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(32): Model_Getdata->get_all()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\MySQL.php:171
2015-07-01 01:25:45 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.articles' doesn't exist [ SELECT * FROM articles ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 01:25:45 --- DEBUG: #0 Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 Z:\home\localhost\kohana_3\application\classes\Model\getdata.php(23): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(32): Model_Getdata->get_all()
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 01:26:44 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.kohana' doesn't exist [ SELECT * FROM kohana ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 01:26:44 --- DEBUG: #0 Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM k...', false, Array)
#1 Z:\home\localhost\kohana_3\application\classes\Model\getdata.php(23): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(32): Model_Getdata->get_all()
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 01:26:48 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.kohana' doesn't exist [ SELECT * FROM kohana ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 01:26:48 --- DEBUG: #0 Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM k...', false, Array)
#1 Z:\home\localhost\kohana_3\application\classes\Model\getdata.php(23): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(32): Model_Getdata->get_all()
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 01:27:07 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.kohana' doesn't exist [ SELECT * FROM kohana ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 01:27:07 --- DEBUG: #0 Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM k...', false, Array)
#1 Z:\home\localhost\kohana_3\application\classes\Model\getdata.php(23): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(32): Model_Getdata->get_all()
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 01:27:54 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'table' at line 1 [ SELECT * FROM table ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 01:27:54 --- DEBUG: #0 Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM t...', false, Array)
#1 Z:\home\localhost\kohana_3\application\classes\Model\getdata.php(23): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(32): Model_Getdata->get_all()
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 01:29:14 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'table' at line 1 [ SELECT * FROM table ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 01:29:14 --- DEBUG: #0 Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM t...', false, Array)
#1 Z:\home\localhost\kohana_3\application\classes\Model\getdata.php(23): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(32): Model_Getdata->get_all()
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 01:31:39 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'table' at line 1 [ SELECT * FROM table ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 01:31:39 --- DEBUG: #0 Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM t...', false, Array)
#1 Z:\home\localhost\kohana_3\application\classes\Model\getdata.php(23): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(32): Model_Getdata->get_all()
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 01:32:42 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'table WHERE 1' at line 1 [ SELECT * FROM table WHERE 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 01:32:42 --- DEBUG: #0 Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM t...', false, Array)
#1 Z:\home\localhost\kohana_3\application\classes\Model\getdata.php(23): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(32): Model_Getdata->get_all()
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 01:32:53 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''table' WHERE 1' at line 1 [ SELECT * FROM 'table' WHERE 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 01:32:53 --- DEBUG: #0 Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM '...', false, Array)
#1 Z:\home\localhost\kohana_3\application\classes\Model\getdata.php(23): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(32): Model_Getdata->get_all()
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 01:33:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '`' ~ APPPATH\classes\Model\getdata.php [ 7 ] in file:line
2015-07-01 01:33:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-01 01:40:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\views\v_form.php [ 31 ] in file:line
2015-07-01 01:40:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-01 01:40:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\views\v_form.php [ 31 ] in file:line
2015-07-01 01:40:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-01 01:51:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\v_form.php [ 49 ] in file:line
2015-07-01 01:51:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-01 01:51:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\v_form.php [ 49 ] in file:line
2015-07-01 01:51:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-01 01:52:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\v_form.php [ 49 ] in file:line
2015-07-01 01:52:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-01 01:52:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\v_form.php [ 49 ] in file:line
2015-07-01 01:52:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-01 01:52:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\v_form.php [ 49 ] in file:line
2015-07-01 01:52:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-01 01:53:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\v_form.php [ 49 ] in file:line
2015-07-01 01:53:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-01 01:53:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\v_form.php [ 49 ] in file:line
2015-07-01 01:53:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-01 01:59:10 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant name_article - assumed 'name_article' ~ APPPATH\views\v_form.php [ 28 ] in Z:\home\localhost\kohana_3\application\views\v_form.php:28
2015-07-01 01:59:10 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_form.php(28): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\localho...', 28, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\application\views\v_index.php(24): Kohana_View->__toString()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana_3\application\views\v_form.php:28
2015-07-01 02:04:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\views\v_form.php [ 32 ] in file:line
2015-07-01 02:04:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-01 02:04:51 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant i - assumed 'i' ~ APPPATH\views\v_form.php [ 31 ] in Z:\home\localhost\kohana_3\application\views\v_form.php:31
2015-07-01 02:04:51 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_form.php(31): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\localho...', 31, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\application\views\v_index.php(24): Kohana_View->__toString()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana_3\application\views\v_form.php:31
2015-07-01 02:29:04 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant array_count_values - assumed 'array_count_values' ~ APPPATH\views\v_form.php [ 28 ] in Z:\home\localhost\kohana_3\application\views\v_form.php:28
2015-07-01 02:29:04 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_form.php(28): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\localho...', 28, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\application\views\v_index.php(24): Kohana_View->__toString()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana_3\application\views\v_form.php:28
2015-07-01 02:29:30 --- CRITICAL: ErrorException [ 2 ]: array_count_values() [function.array-count-values]: Can only count STRING and INTEGER values! ~ APPPATH\views\v_form.php [ 28 ] in file:line
2015-07-01 02:29:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_count_val...', 'Z:\home\localho...', 28, Array)
#1 Z:\home\localhost\kohana_3\application\views\v_form.php(28): array_count_values(Array)
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 Z:\home\localhost\kohana_3\application\views\v_index.php(24): Kohana_View->__toString()
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#12 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2015-07-01 05:14:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\reg.php [ 27 ] in Z:\home\localhost\kohana_3\application\classes\Controller\reg.php:27
2015-07-01 05:14:02 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\classes\Controller\reg.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 27, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Reg->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reg))
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana_3\application\classes\Controller\reg.php:27
2015-07-01 05:14:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\v_index.php [ 24 ] in Z:\home\localhost\kohana_3\application\views\v_index.php:24
2015-07-01 05:14:12 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_index.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 24, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reg))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana_3\application\views\v_index.php:24
2015-07-01 05:17:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\reg.php [ 30 ] in file:line
2015-07-01 05:17:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-01 05:17:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH\views\v_form.php [ 28 ] in Z:\home\localhost\kohana_3\application\views\v_form.php:28
2015-07-01 05:17:21 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_form.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 28, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\application\views\v_index.php(24): Kohana_View->__toString()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reg))
#11 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana_3\application\views\v_form.php:28
2015-07-01 05:17:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH\views\v_form.php [ 25 ] in Z:\home\localhost\kohana_3\application\views\v_form.php:25
2015-07-01 05:17:51 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_form.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 25, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\application\views\v_index.php(24): Kohana_View->__toString()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reg))
#11 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana_3\application\views\v_form.php:25
2015-07-01 05:43:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\views\v_index.php [ 26 ] in Z:\home\localhost\kohana_3\application\views\v_index.php:26
2015-07-01 05:43:13 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_index.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 26, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reg))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana_3\application\views\v_index.php:26
2015-07-01 05:47:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\views\v_index.php [ 26 ] in Z:\home\localhost\kohana_3\application\views\v_index.php:26
2015-07-01 05:47:07 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_index.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 26, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reg))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana_3\application\views\v_index.php:26
2015-07-01 05:47:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH\views\v_index.php [ 26 ] in Z:\home\localhost\kohana_3\application\views\v_index.php:26
2015-07-01 05:47:51 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_index.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 26, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reg))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana_3\application\views\v_index.php:26
2015-07-01 05:49:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF, expecting ',' or ';' ~ APPPATH\views\v_form.php [ 19 ] in file:line
2015-07-01 05:49:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-01 05:50:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\v_form.php [ 31 ] in file:line
2015-07-01 05:50:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-01 05:54:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: btnsubmit ~ APPPATH\views\v_form.php [ 18 ] in Z:\home\localhost\kohana_3\application\views\v_form.php:18
2015-07-01 05:54:39 --- DEBUG: #0 Z:\home\localhost\kohana_3\application\views\v_form.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 18, Array)
#1 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana_3\application\views\v_index.php(24): Kohana_View->__toString()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Reg))
#11 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana_3\application\views\v_form.php:18
2015-07-01 07:47:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\Index.php [ 52 ] in file:line
2015-07-01 07:47:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-01 08:34:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Getdata::addArticle() ~ APPPATH\classes\Controller\Index.php [ 46 ] in file:line
2015-07-01 08:34:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-01 08:46:00 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.kohana' doesn't exist [ INSERT INTO kohana(name_article, article) VALUES ('dadasdas', 'dasadsads') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 08:46:00 --- DEBUG: #0 Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO koh...', false, Array)
#1 Z:\home\localhost\kohana_3\application\classes\Model\getdata.php(32): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(46): Model_Getdata->set_news('dadasdas', 'dasadsads')
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 08:46:27 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.kohana' doesn't exist [ INSERT INTO kohana VALUES ('dadasdas', 'dasadsads') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 08:46:27 --- DEBUG: #0 Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO koh...', false, Array)
#1 Z:\home\localhost\kohana_3\application\classes\Model\getdata.php(32): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana_3\application\classes\Controller\Index.php(46): Model_Getdata->set_news('dadasdas', 'dasadsads')
#3 Z:\home\localhost\kohana_3\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\localhost\kohana_3\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana_3\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana_3\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana_3\modules\database\classes\Kohana\Database\Query.php:251
2015-07-01 12:21:49 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\getdata.php [ 30 ] in file:line
2015-07-01 12:21:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-01 12:22:34 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\getdata.php [ 30 ] in file:line
2015-07-01 12:22:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-01 12:22:38 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\getdata.php [ 30 ] in file:line
2015-07-01 12:22:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-01 12:25:27 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\getdata.php [ 30 ] in file:line
2015-07-01 12:25:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-01 12:59:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ APPPATH\classes\Model\getdata.php [ 40 ] in file:line
2015-07-01 12:59:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-07-01 13:00:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function param() on a non-object ~ APPPATH\classes\Model\getdata.php [ 40 ] in file:line
2015-07-01 13:00:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line