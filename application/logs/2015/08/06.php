<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-06 03:01:05 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 96 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2015-08-06 03:01:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\localho...', 423, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Route.php(423): preg_match('#^admin(?:/(?P<...', 'admin/index/ind...', NULL)
#2 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-08-06 03:02:05 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 96 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2015-08-06 03:02:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\localho...', 423, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Route.php(423): preg_match('#^admin(?:/(?P<...', 'admin/index/ind...', NULL)
#2 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 Z:\home\localhost\kohana\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\localhost\kohana\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-08-06 10:40:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\views\admin\v_add_usform.php [ 28 ] in file:line
2015-08-06 10:40:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-06 10:40:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\views\admin\v_add_usform.php [ 28 ] in file:line
2015-08-06 10:40:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-06 10:41:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\views\admin\v_add_usform.php [ 28 ] in file:line
2015-08-06 10:41:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-06 10:45:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\classes\Controller\Admin\Adduser.php [ 45 ] in file:line
2015-08-06 10:45:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line