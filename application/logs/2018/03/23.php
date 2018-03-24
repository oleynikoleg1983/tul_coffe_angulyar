<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2018-03-23 14:41:08 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\MySQL.php:75
2018-03-23 14:41:08 --- DEBUG: #0 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT password...', false, Array)
#3 Z:\home\localhost\coffeSite\application\classes\Model\Admin\Regdata.php(10): Kohana_Database_Query->execute()
#4 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Authorization.php(22): Model_Admin_Regdata->aut_entry('admin')
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Authorization->action_authorization()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Authorization))
#8 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\MySQL.php:75
2018-03-23 14:49:16 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\MySQL.php:75
2018-03-23 14:49:16 --- DEBUG: #0 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT password...', false, Array)
#3 Z:\home\localhost\coffeSite\application\classes\Model\Admin\Regdata.php(10): Kohana_Database_Query->execute()
#4 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Authorization.php(22): Model_Admin_Regdata->aut_entry('admin')
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Authorization->action_authorization()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Authorization))
#8 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\MySQL.php:75
2018-03-23 14:49:23 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\MySQL.php:75
2018-03-23 14:49:23 --- DEBUG: #0 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT password...', false, Array)
#3 Z:\home\localhost\coffeSite\application\classes\Model\Admin\Regdata.php(10): Kohana_Database_Query->execute()
#4 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Authorization.php(22): Model_Admin_Regdata->aut_entry('admin')
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Authorization->action_authorization()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Authorization))
#8 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\localhost\coffeSite\modules\database\classes\Kohana\Database\MySQL.php:75
2018-03-23 16:47:52 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 95 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2018-03-23 16:47:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\localho...', 423, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Route.php(423): preg_match('#^site(?:/(?P<c...', 'coffee', NULL)
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2018-03-23 16:47:55 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 95 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2018-03-23 16:47:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\localho...', 423, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Route.php(423): preg_match('#^site(?:/(?P<c...', 'coffee', NULL)
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2018-03-23 16:48:08 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 96 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2018-03-23 16:48:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\localho...', 423, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Route.php(423): preg_match('#^/site(?:/(?P<...', 'coffee', NULL)
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2018-03-23 16:48:21 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 95 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2018-03-23 16:48:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\localho...', 423, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Route.php(423): preg_match('#^site(?:/(?P<c...', 'coffee', NULL)
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2018-03-23 16:48:27 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 95 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2018-03-23 16:48:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\localho...', 423, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Route.php(423): preg_match('#^site(?:/(?P<c...', 'coffee', NULL)
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2018-03-23 16:48:30 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 95 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2018-03-23 16:48:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\localho...', 423, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Route.php(423): preg_match('#^site(?:/(?P<c...', 'coffee', NULL)
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2018-03-23 16:50:49 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\localhost\coffeSite\system\classes\Kohana\View.php:145
2018-03-23 16:50:49 --- DEBUG: #0 Z:\home\localhost\coffeSite\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\coffeSite\system\classes\Kohana\View.php:145
2018-03-23 16:53:04 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2018-03-23 16:53:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\localho...', 423, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Route.php(423): preg_match('', 'coffee', NULL)
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2018-03-23 16:53:18 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2018-03-23 16:53:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\localho...', 423, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Route.php(423): preg_match('', 'coffee', NULL)
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2018-03-23 16:53:20 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2018-03-23 16:53:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\localho...', 423, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Route.php(423): preg_match('', 'coffee', NULL)
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2018-03-23 16:53:36 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2018-03-23 16:53:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\localho...', 423, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Route.php(423): preg_match('', 'coffee', NULL)
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2018-03-23 16:53:58 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2018-03-23 16:53:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\localho...', 423, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Route.php(423): preg_match('', 'coffee', NULL)
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2018-03-23 16:54:04 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2018-03-23 16:54:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\localho...', 423, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Route.php(423): preg_match('', 'coffee', NULL)
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2018-03-23 16:54:16 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2018-03-23 16:54:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\localho...', 423, Array)
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\Route.php(423): preg_match('', 'coffee', NULL)
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2018-03-23 16:55:53 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\localhost\coffeSite\system\classes\Kohana\View.php:145
2018-03-23 16:55:53 --- DEBUG: #0 Z:\home\localhost\coffeSite\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\coffeSite\system\classes\Kohana\View.php:145
2018-03-23 16:55:59 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\localhost\coffeSite\system\classes\Kohana\View.php:145
2018-03-23 16:55:59 --- DEBUG: #0 Z:\home\localhost\coffeSite\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\coffeSite\system\classes\Kohana\View.php:145
2018-03-23 16:56:02 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\localhost\coffeSite\system\classes\Kohana\View.php:145
2018-03-23 16:56:02 --- DEBUG: #0 Z:\home\localhost\coffeSite\system\classes\Kohana\View.php(145): Kohana_View->set_filename('template')
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\coffeSite\system\classes\Kohana\View.php:145