<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-08 00:14:59 --- CRITICAL: Database_Exception [ 1048 ]: Column 'id_category' cannot be null [ INSERT INTO `product`
    VALUES (null, null, 'новый товар', '2', 'описание', NULL, '3', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-08 00:14:59 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(63): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(49): Model_Admin_Getdata->set_new_product('?????????? ????...', '2', '1', '???????????????...', NULL, '3')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-08 00:16:39 --- CRITICAL: Database_Exception [ 1048 ]: Column 'id_category' cannot be null [ INSERT INTO `product`
    VALUES (null, null, 'новый товар', '2', 'описание', NULL, '3', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-08 00:16:39 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(63): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(51): Model_Admin_Getdata->set_new_product('?????????? ????...', '2', '1', '???????????????...', NULL, '3')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-08 00:38:41 --- CRITICAL: Database_Exception [ 1048 ]: Column 'id_category' cannot be null [ INSERT INTO `product`
    VALUES (null, null, 'пустое поле', 'пустое поле', 'пустое поле', NULL, 'пустое поле', 'пустое поле') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-08 00:38:41 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(63): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(49): Model_Admin_Getdata->set_new_product('???????????? ??...', '???????????? ??...', '???????????? ??...', '???????????? ??...', NULL, '???????????? ??...')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-08 00:38:47 --- CRITICAL: Database_Exception [ 1048 ]: Column 'id_category' cannot be null [ INSERT INTO `product`
    VALUES (null, null, 'пустое поле', 'пустое поле', 'пустое поле', NULL, 'пустое поле', 'пустое поле') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-08 00:38:47 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(63): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(49): Model_Admin_Getdata->set_new_product('???????????? ??...', '???????????? ??...', '???????????? ??...', '???????????? ??...', NULL, '???????????? ??...')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-08 02:14:31 --- CRITICAL: Database_Exception [ 1048 ]: Column 'id_category' cannot be null [ INSERT INTO `product`
    VALUES (null, null, 'пустое поле', 'пустое поле', 'пустое поле', NULL, 'пустое поле', 'пустое поле') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-08 02:14:31 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(63): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(49): Model_Admin_Getdata->set_new_product('???????????? ??...', '???????????? ??...', '???????????? ??...', '???????????? ??...', NULL, '???????????? ??...')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-08 02:17:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\admin\v_index.php [ 17 ] in Z:\home\localhost\kohana\application\views\admin\v_index.php:17
2015-08-08 02:17:24 --- DEBUG: #0 Z:\home\localhost\kohana\application\views\admin\v_index.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\localho...', 17, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\View.php(62): include('Z:\home\localho...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\home\localho...', Array)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana\application\views\admin\v_index.php:17
2015-08-08 02:17:58 --- CRITICAL: Database_Exception [ 1048 ]: Column 'id_category' cannot be null [ INSERT INTO `product`
    VALUES (null, null, 'пустое поле', 'пустое поле', 'пустое поле', NULL, 'пустое поле', 'пустое поле') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-08 02:17:58 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(63): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(52): Model_Admin_Getdata->set_new_product('???????????? ??...', '???????????? ??...', '???????????? ??...', '???????????? ??...', NULL, '???????????? ??...')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-08 02:18:23 --- CRITICAL: Database_Exception [ 1048 ]: Column 'id_category' cannot be null [ INSERT INTO `product`
    VALUES (null, null, 'пустое поле', 'пустое поле', 'пустое поле', NULL, 'пустое поле', 'пустое поле') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-08 02:18:23 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Admin\Getdata.php(63): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Admin\Index.php(52): Model_Admin_Getdata->set_new_product('???????????? ??...', '???????????? ??...', '???????????? ??...', '???????????? ??...', NULL, '???????????? ??...')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251