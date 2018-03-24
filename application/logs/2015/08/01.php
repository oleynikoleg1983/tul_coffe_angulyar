<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-01 03:22:41 --- CRITICAL: Database_Exception [ 1048 ]: Column 'id_category' cannot be null [ INSERT INTO `product`
    VALUES (null, null, '', '', '', NULL, '') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-08-01 03:22:41 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\admin\getdata.php(69): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(24): Model_Admin_Getdata->set_new_product('', '', '', NULL, '')
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251