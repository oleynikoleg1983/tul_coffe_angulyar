<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-13 08:52:56 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =312 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 08:52:56 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('312', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 08:53:02 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =312 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 08:53:02 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('312', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 08:54:41 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =314 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 08:54:41 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('314', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 08:55:18 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =398 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 08:55:18 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('398', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 08:55:20 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =398 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 08:55:20 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('398', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 08:56:35 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =398 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 08:56:35 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('398', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 08:56:47 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =312 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 08:56:47 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('312', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 08:57:33 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =398 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 08:57:33 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('398', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 08:59:58 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =314 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 08:59:58 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('314', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:00:29 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =398 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:00:29 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('398', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:00:58 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =312 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:00:58 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('312', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:01:07 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =314 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:01:07 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('314', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:01:54 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =312 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:01:54 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('312', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:03:17 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =398 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:03:17 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('398', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:04:14 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =398 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:04:14 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('398', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:04:16 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =398 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:04:16 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('398', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:05:35 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =323 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:05:35 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('323', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:06:09 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =314 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:06:09 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('314', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:06:12 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =314 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:06:12 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('314', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:08:00 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =314 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:08:00 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(44): Model_Site_Getdata->sell_product('314', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:08:14 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =337 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:08:14 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(44): Model_Site_Getdata->sell_product('337', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:08:34 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =398 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:08:34 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(44): Model_Site_Getdata->sell_product('398', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:15:04 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =312 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:15:04 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('312', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:15:41 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =312 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:15:41 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('312', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:16:32 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =304 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:16:32 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('304', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:16:37 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =304 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:16:37 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('304', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:16:37 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =304 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:16:37 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('304', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:16:37 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =304 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:16:37 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('304', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:16:38 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =304 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:16:38 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('304', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:16:38 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =304 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:16:38 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('304', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:16:39 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =304 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:16:39 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('304', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:16:47 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =312 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:16:47 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('312', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:16:58 --- CRITICAL: Database_Exception [ 1690 ]: BIGINT UNSIGNED value is out of range in '(`kohana`.`product`.`quantity` - 1)' [ UPDATE `product`  SET quantity=quantity-1                    
            WHERE id =312 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 09:16:58 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(37): Model_Site_Getdata->sell_product('312', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 12:47:45 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Controller\Site\Getajax.php [ 40 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:40
2015-08-13 12:47:45 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(40): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 40, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:40
2015-08-13 12:47:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Controller\Site\Getajax.php [ 40 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:40
2015-08-13 12:47:50 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(40): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 40, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:40
2015-08-13 12:47:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Controller\Site\Getajax.php [ 40 ] in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:40
2015-08-13 12:47:52 --- DEBUG: #0 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(40): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\localho...', 40, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#4 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php:40
2015-08-13 12:49:00 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 60 ] in file:line
2015-08-13 12:49:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 12:49:05 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 60 ] in file:line
2015-08-13 12:49:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 12:50:15 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 60 ] in file:line
2015-08-13 12:50:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 12:52:59 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `sell_product`
        VALUES (null, '5', '233', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 12:52:59 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `se...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(62): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(38): Model_Site_Getdata->seve_data_sell_product('233', '1', '5')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 12:53:38 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `sell_product`
        VALUES (null, '5', '233', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 12:53:38 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `se...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(62): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(38): Model_Site_Getdata->seve_data_sell_product('233', '1', '5')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 12:53:42 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `sell_product`
        VALUES (null, '5', '233', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 12:53:42 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `se...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(62): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(38): Model_Site_Getdata->seve_data_sell_product('233', '1', '5')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 12:55:42 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `sell_product`
        VALUES (null, NULL, NULL, NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 12:55:42 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `se...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(62): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(40): Model_Site_Getdata->seve_data_sell_product(NULL, NULL, NULL)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 12:55:45 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `sell_product`
        VALUES (null, NULL, NULL, NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 12:55:45 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `se...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(62): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(40): Model_Site_Getdata->seve_data_sell_product(NULL, NULL, NULL)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 12:55:50 --- CRITICAL: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `sell_product`
        VALUES (null, NULL, NULL, NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 12:55:50 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `se...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(62): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(40): Model_Site_Getdata->seve_data_sell_product(NULL, NULL, NULL)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 13:00:24 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:00:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:00:28 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:00:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:05:50 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 59 ] in file:line
2015-08-13 13:05:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:05:53 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 59 ] in file:line
2015-08-13 13:05:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:08:44 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''1'')' at line 1 [ INSERT INTO sell_product VALUES (null, '1', '1','1','1','1','1'') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 13:08:44 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO sel...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(58): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(48): Model_Site_Getdata->seve_data_sell_product()
#3 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(39): Model_Site_Getdata->sell_product('233', '1')
#4 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 13:08:46 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''1'')' at line 1 [ INSERT INTO sell_product VALUES (null, '1', '1','1','1','1','1'') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 13:08:46 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO sel...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(58): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(48): Model_Site_Getdata->seve_data_sell_product()
#3 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(39): Model_Site_Getdata->sell_product('233', '1')
#4 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 13:16:03 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:16:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:16:05 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:16:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:16:10 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:16:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:18:23 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:18:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:18:25 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:18:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:20:05 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:20:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:21:08 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:21:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:21:37 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:21:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:23:59 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 51 ] in file:line
2015-08-13 13:23:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:24:56 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 51 ] in file:line
2015-08-13 13:24:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:26:46 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 51 ] in file:line
2015-08-13 13:26:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:31:36 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:31:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:31:41 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:31:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:32:43 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:32:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:32:48 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:32:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:33:12 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:33:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:33:15 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:33:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:36:45 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:36:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:38:01 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:38:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:38:03 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:38:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:38:09 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:38:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:39:56 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:39:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:39:58 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Model\Site\Getdata.php [ 58 ] in file:line
2015-08-13 13:39:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-13 13:56:22 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'proc_sell(233)' at line 1 [ proc_sell(233) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 13:56:22 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'proc_sell(233)', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(50): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(39): Model_Site_Getdata->sell_product('233', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 13:56:26 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'proc_sell(233)' at line 1 [ proc_sell(233) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 13:56:26 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'proc_sell(233)', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(50): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(39): Model_Site_Getdata->sell_product('233', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 13:57:16 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'proc_sell(233)' at line 1 [ proc_sell(233) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 13:57:16 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'proc_sell(233)', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(50): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(39): Model_Site_Getdata->sell_product('233', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 13:57:19 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'proc_sell(233)' at line 1 [ proc_sell(233) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 13:57:19 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'proc_sell(233)', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(50): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(39): Model_Site_Getdata->sell_product('233', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 13:59:27 --- CRITICAL: Database_Exception [ 1318 ]: Incorrect number of arguments for PROCEDURE kohana.proc_sell; expected 2, got 1 [ CALL  proc_sell(233) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 13:59:27 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(39): Model_Site_Getdata->sell_product('233', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 13:59:29 --- CRITICAL: Database_Exception [ 1318 ]: Incorrect number of arguments for PROCEDURE kohana.proc_sell; expected 2, got 1 [ CALL  proc_sell(233) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 13:59:29 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(39): Model_Site_Getdata->sell_product('233', '1')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 14:07:35 --- CRITICAL: Database_Exception [ 1318 ]: Incorrect number of arguments for PROCEDURE kohana.proc_sell; expected 3, got 2 [ CALL  proc_sell(1, 233) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 14:07:35 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(39): Model_Site_Getdata->sell_product('233', '1', '5')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 14:35:41 --- CRITICAL: Database_Exception [ 1318 ]: Incorrect number of arguments for PROCEDURE kohana.proc_sell; expected 4, got 3 [ CALL  proc_sell(1, 233, 5) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-13 14:35:41 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL  proc_sell...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\Site\Getdata.php(51): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\Site\Getajax.php(39): Model_Site_Getdata->sell_product('233', '1', '5', 1439494540)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Site_Getajax->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Getajax))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251