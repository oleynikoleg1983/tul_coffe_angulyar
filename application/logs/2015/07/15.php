<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-15 00:09:41 --- CRITICAL: Database_Exception [ 1048 ]: Column 'id_product' cannot be null [ INSERT INTO `images` VALUES (null,  'images/swkojods.jpg', (SELECT max(id) FROM `product`)) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-15 00:09:41 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `im...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\admin\getdata.php(74): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(109): Model_Admin_Getdata->set_images('images/swkojods...')
#3 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(81): Controller_Admin_Index->add_images('Z:\tmp\php34D5....', 'Z:/home/localho...', 'aaegowd.jpg')
#4 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-15 00:10:46 --- CRITICAL: Database_Exception [ 1048 ]: Column 'id_category' cannot be null [ INSERT INTO `product` VALUES (null, null, '1', '2', '3', NULL) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-15 00:10:46 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\admin\getdata.php(66): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(92): Model_Admin_Getdata->set_new_product('1', '2', '3', NULL)
#3 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-15 00:12:05 --- CRITICAL: Database_Exception [ 1048 ]: Column 'id_product' cannot be null [ INSERT INTO `images` VALUES (null,  'images/apkdkewr.jpg', (SELECT max(id) FROM `product`)) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-15 00:12:05 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `im...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\admin\getdata.php(74): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(109): Model_Admin_Getdata->set_images('images/apkdkewr...')
#3 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(81): Controller_Admin_Index->add_images('Z:\tmp\php6868....', 'Z:/home/localho...', 'aakgihw.jpg')
#4 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-15 00:12:26 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `images` VALUES (null,  'images/syjhotpy.jpg', 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-15 00:12:26 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `im...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\admin\getdata.php(74): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(109): Model_Admin_Getdata->set_images('images/syjhotpy...')
#3 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(81): Controller_Admin_Index->add_images('Z:\tmp\phpBAED....', 'Z:/home/localho...', 'aakgihw.jpg')
#4 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-15 22:09:12 --- CRITICAL: Database_Exception [ 1093 ]: You can't specify target table 'product' for update in FROM clause [ UPDATE `product`  SET id_image=(SELECT max(id) FROM `images`)                                 
              WHERE id =(SELECT max(id) FROM `product`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-15 22:09:12 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\admin\getdata.php(78): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(105): Model_Admin_Getdata->set_images('images/wepksuwd...')
#3 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(87): Controller_Admin_Index->add_images('Z:\tmp\php40F1....', 'Z:/home/localho...', 'eppytet.jpg')
#4 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-15 22:10:19 --- CRITICAL: Database_Exception [ 1093 ]: You can't specify target table 'product' for update in FROM clause [ UPDATE `product`  SET id_image=1                                 
              WHERE id =(SELECT max(id) FROM `product`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-15 22:10:19 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `product...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\admin\getdata.php(78): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(105): Model_Admin_Getdata->set_images('images/wajgrukh...')
#3 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(87): Controller_Admin_Index->add_images('Z:\tmp\php46CE....', 'Z:/home/localho...', 'eppytet.jpg')
#4 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-15 22:11:51 --- CRITICAL: Database_Exception [ 1093 ]: You can't specify target table 'p' for update in FROM clause [ UPDATE product p SET id_image=(SELECT max(id) FROM `images`)                                 
              WHERE p.id =(SELECT max(id) FROM `product`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-15 22:11:51 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE product ...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\admin\getdata.php(78): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(105): Model_Admin_Getdata->set_images('images/yteiuhdj...')
#3 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(87): Controller_Admin_Index->add_images('Z:\tmp\phpAD82....', 'Z:/home/localho...', 'eppytet.jpg')
#4 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-15 22:12:14 --- CRITICAL: Database_Exception [ 1093 ]: You can't specify target table 'p' for update in FROM clause [ UPDATE product p SET id_image=(SELECT max(id) FROM `images`)                                 
              WHERE p.id =(SELECT max(id) FROM product) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251
2015-07-15 22:12:14 --- DEBUG: #0 Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE product ...', false, Array)
#1 Z:\home\localhost\kohana\application\classes\Model\admin\getdata.php(78): Kohana_Database_Query->execute()
#2 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(105): Model_Admin_Getdata->set_images('images/eytahspt...')
#3 Z:\home\localhost\kohana\application\classes\Controller\admin\Index.php(87): Controller_Admin_Index->add_images('Z:\tmp\phpAB2.t...', 'Z:/home/localho...', 'eppytet.jpg')
#4 Z:\home\localhost\kohana\system\classes\Kohana\Controller.php(84): Controller_Admin_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 Z:\home\localhost\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\kohana\modules\database\classes\Kohana\Database\Query.php:251