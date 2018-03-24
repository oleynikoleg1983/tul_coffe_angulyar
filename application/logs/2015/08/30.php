<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-30 04:14:43 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `user`
    VALUES (null, 'admin5', 'admin5', '1ea7ddd691a52f3504b577b1023f4cc7') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 04:14:43 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Regdata.php(27): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Adduser.php(55): Model_Admin_Regdata->set_new_user('admin5', 'admin5', '1ea7ddd691a52f3...')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Adduser->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adduser))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 04:15:33 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `user`
    VALUES (null, 'admin5', 'admin5', 'oleg9994821') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 04:15:33 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Regdata.php(27): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Adduser.php(55): Model_Admin_Regdata->set_new_user('admin5', 'admin5', 'oleg9994821')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Adduser->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adduser))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 04:19:48 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `user`
    VALUES (null, 'admin5', 'admin5', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 04:19:48 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Regdata.php(27): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Adduser.php(55): Model_Admin_Regdata->set_new_user('admin5', 'admin5', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Adduser->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adduser))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 04:21:02 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `user`
    VALUES (null, 'admin5', 'admin5', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 04:21:02 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Regdata.php(27): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Adduser.php(55): Model_Admin_Regdata->set_new_user('admin5', 'admin5', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Adduser->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adduser))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 04:21:14 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `user`
    VALUES (null, 'admin5', 'admin5', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 04:21:14 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Regdata.php(27): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Adduser.php(55): Model_Admin_Regdata->set_new_user('admin5', 'admin5', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Adduser->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adduser))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 04:23:44 --- CRITICAL: Database_Exception [ 1048 ]: Column 'admin' cannot be null [ INSERT INTO `user`
    VALUES (null, 'admin5', 'admin5', '1ea7ddd691a52f3504b577b1023f4cc7', null) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 04:23:44 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Regdata.php(27): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Adduser.php(55): Model_Admin_Regdata->set_new_user('admin5', 'admin5', '1ea7ddd691a52f3...')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Adduser->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adduser))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 04:28:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_LNUMBER ~ APPPATH\classes\Model\Admin\Regdata.php [ 23 ] in file:line
2015-08-30 04:28:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-30 04:31:22 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Admin\Regdata.php [ 27 ] in file:line
2015-08-30 04:31:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-30 04:31:54 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Admin\Regdata.php [ 27 ] in file:line
2015-08-30 04:31:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-30 04:32:05 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Admin\Regdata.php [ 27 ] in file:line
2015-08-30 04:32:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-30 04:32:57 --- CRITICAL: Database_Exception [ 1048 ]: Column 'admin' cannot be null [ INSERT INTO `user`
    VALUES (null, 'admin_17', 'admin_17', '1ea7ddd691a52f3504b577b1023f4cc7', null) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 04:32:57 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Regdata.php(27): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Adduser.php(55): Model_Admin_Regdata->set_new_user('admin_17', 'admin_17', '1ea7ddd691a52f3...')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Adduser->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adduser))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 04:33:10 --- CRITICAL: Database_Exception [ 1048 ]: Column 'admin' cannot be null [ INSERT INTO `user`
    VALUES (null, 'admin_17', 'admin_17', 'c4ca4238a0b923820dcc509a6f75849b', null) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 04:33:10 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Regdata.php(27): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Adduser.php(55): Model_Admin_Regdata->set_new_user('admin_17', 'admin_17', 'c4ca4238a0b9238...')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Adduser->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adduser))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 11:47:57 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE id_category=undefined LIMIT 0,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 11:47:57 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(39): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(22): Model_Site_Getdata->get_product(Array, '0', '12')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 11:49:03 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE id_category=undefined LIMIT 0,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 11:49:03 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(39): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(22): Model_Site_Getdata->get_product(Array, '0', '12')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 11:51:32 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE id_category=undefined LIMIT 0,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 11:51:32 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(39): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(22): Model_Site_Getdata->get_product(Array, '0', '12')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 11:54:49 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ SELECT p.id, p.product_code, p.name, p.price, p.description, p.quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id WHERE id_category=undefined LIMIT 0,12 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 11:54:49 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, p....', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(39): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(22): Model_Site_Getdata->get_product(Array, '0', '12')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 12:30:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH\views\admin\v_data.php [ 25 ] in Z:\home\localhost\kohana\application\views\admin\v_data.php:25
2015-08-30 12:30:10 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\admin\v_data.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 25, Array)
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
#14 {main} in Z:\home\localhost\kohana\application\views\admin\v_data.php:25
2015-08-30 12:53:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH\views\admin\v_data.php [ 56 ] in file:line
2015-08-30 12:53:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-30 13:26:36 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_Admin_Getdata::get_all(), called in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php on line 120 and defined ~ APPPATH\classes\Model\Admin\Getdata.php [ 18 ] in Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php:18
2015-08-30 13:26:36 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(18): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\localho...', 18, Array)
#1 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(120): Model_Admin_Getdata->get_all(' ORDER BY p.nam...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php:18
2015-08-30 13:26:40 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_Admin_Getdata::get_all(), called in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php on line 120 and defined ~ APPPATH\classes\Model\Admin\Getdata.php [ 18 ] in Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php:18
2015-08-30 13:26:40 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(18): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\localho...', 18, Array)
#1 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(120): Model_Admin_Getdata->get_all(' ORDER BY p.nam...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php:18
2015-08-30 13:27:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: and_where ~ APPPATH\classes\Controller\Admin\Index.php [ 120 ] in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php:120
2015-08-30 13:27:29 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(120): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 120, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php:120
2015-08-30 13:27:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: and_where ~ APPPATH\classes\Controller\Admin\Index.php [ 120 ] in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php:120
2015-08-30 13:27:38 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(120): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 120, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php:120
2015-08-30 13:31:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: and_where ~ APPPATH\classes\Controller\Admin\Index.php [ 121 ] in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php:121
2015-08-30 13:31:12 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(121): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 121, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php:121
2015-08-30 13:31:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: and_where ~ APPPATH\classes\Controller\Admin\Index.php [ 121 ] in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php:121
2015-08-30 13:31:18 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(121): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 121, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php:121
2015-08-30 13:31:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: and_where ~ APPPATH\classes\Controller\Admin\Index.php [ 121 ] in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php:121
2015-08-30 13:31:27 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(121): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 121, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php:121
2015-08-30 23:01:51 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'p.name' in 'where clause' [ SELECT  COUNT(*) AS COUNT
            FROM  product WHERE 1  AND  p.name LIKE '%%' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 23:01:51 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT  COUNT(*...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(14): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(112): Model_Admin_Getdata->get_count_elem(' AND  p.name LI...')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 23:11:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count_and_where ~ APPPATH\classes\Controller\Admin\Index.php [ 113 ] in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php:113
2015-08-30 23:11:16 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(113): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 113, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php:113
2015-08-30 23:13:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: image ~ APPPATH\views\admin\v_data_change.php [ 35 ] in Z:\home\localhost\kohana\application\views\admin\v_data_change.php:35
2015-08-30 23:13:44 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\admin\v_data_change.php(35): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 35, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\localhost\kohana\application\views\admin\v_index.php(36): Kohana_View->__toString()
#5 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#6 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#7 Z:\home\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#11 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\localhost\kohana\application\views\admin\v_data_change.php:35
2015-08-30 23:18:42 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1  AND name LIKE '%01%'' at line 2 [ SELECT  COUNT(*) AS COUNT
            FROM  product WHRE 1  AND name LIKE '%01%' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 23:18:42 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT  COUNT(*...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(14): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(115): Model_Admin_Getdata->get_count_elem(' AND name LIKE ...')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 23:19:26 --- CRITICAL: Database_Exception [ 1146 ]: Table 'p.product' doesn't exist [ SELECT  COUNT(*) AS COUNT
            FROM  p.product WHERE 1  AND  p.name LIKE '%01%' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 23:19:26 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT  COUNT(*...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(14): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(115): Model_Admin_Getdata->get_count_elem(' AND  p.name LI...')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-30 23:25:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: and_where_code ~ APPPATH\classes\Model\Admin\Getdata.php [ 22 ] in Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php:22
2015-08-30 23:25:12 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 22, Array)
#1 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(128): Model_Admin_Getdata->get_all(' ORDER BY p.nam...', ' AND  p.name LI...', ' AND  p.product...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php:22