<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-16 23:09:35 --- CRITICAL: Database_Exception [ 1048 ]: Column 'id_category' cannot be null [ INSERT INTO `product` VALUES (null, ((SELECT max(id) FROM `images`)+1), '1', '2', '3', NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-16 23:09:35 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\admin\getdata.php(66): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(77): Model_Admin_Getdata->set_new_product('1', '2', '3', NULL)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251