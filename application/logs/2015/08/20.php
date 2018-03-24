<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-20 13:47:51 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT id, parent_id, name_category FROM category_goods WHERE parent_id= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 13:47:51 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id, pare...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(21): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(12): Model_Site_Getdata->get_next('')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 13:47:52 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 3 [ SELECT p.id, id_image, name, price, description, quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id
                    WHERE id_category= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 13:47:52 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, id...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(33): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(20): Model_Site_Getdata->get_product('')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 13:47:52 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT id FROM category_goods WHERE parent_id= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 13:47:52 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id FROM ...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(42): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(28): Model_Site_Getdata->get_type_product('')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 13:48:00 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 3 [ SELECT p.id, id_image, name, price, description, quantity, i.url  
                FROM product p LEFT JOIN  images i ON p.id_image=i.id
                    WHERE id_category= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 13:48:00 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT p.id, id...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(33): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(20): Model_Site_Getdata->get_product('')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 13:48:01 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT id FROM category_goods WHERE parent_id= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 13:48:01 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id FROM ...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(42): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(28): Model_Site_Getdata->get_type_product('')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 13:48:06 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT id, parent_id, name_category FROM category_goods WHERE parent_id= ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 13:48:06 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT id, pare...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(21): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(12): Model_Site_Getdata->get_next('')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 15:43:15 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - sell_product@0)' [ CALL  proc_sell(1, 959, 1, 1440103394) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 15:43:15 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(41): Model_Site_Getdata->sell_product('959', '1', '1', 1440103394)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 15:43:16 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - sell_product@0)' [ CALL  proc_sell(1, 959, 1, 1440103395) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 15:43:16 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(41): Model_Site_Getdata->sell_product('959', '1', '1', 1440103395)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 15:43:16 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - sell_product@0)' [ CALL  proc_sell(1, 959, 1, 1440103396) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 15:43:16 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(41): Model_Site_Getdata->sell_product('959', '1', '1', 1440103396)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 15:43:17 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - sell_product@0)' [ CALL  proc_sell(1, 959, 1, 1440103397) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 15:43:17 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(41): Model_Site_Getdata->sell_product('959', '1', '1', 1440103397)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 15:43:18 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - sell_product@0)' [ CALL  proc_sell(1, 959, 1, 1440103397) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 15:43:18 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(41): Model_Site_Getdata->sell_product('959', '1', '1', 1440103397)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 15:43:19 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - sell_product@0)' [ CALL  proc_sell(1, 959, 1, 1440103398) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 15:43:19 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(41): Model_Site_Getdata->sell_product('959', '1', '1', 1440103398)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 15:43:19 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - sell_product@0)' [ CALL  proc_sell(1, 959, 1, 1440103399) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 15:43:19 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(41): Model_Site_Getdata->sell_product('959', '1', '1', 1440103399)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 15:43:23 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - sell_product@0)' [ CALL  proc_sell(1, 959, 1, 1440103403) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 15:43:23 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(41): Model_Site_Getdata->sell_product('959', '1', '1', 1440103403)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 15:43:30 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - sell_product@0)' [ CALL  proc_sell(1, 959, 1, 1440103409) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-20 15:43:30 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(41): Model_Site_Getdata->sell_product('959', '1', '1', 1440103409)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251