<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-31 23:06:01 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be an array, string given, called in Z:\home\localhost\kohana\system\classes\Kohana\Route.php on line 330 and defined ~ SYSPATH\classes\Kohana\Route.php [ 240 ] in Z:\home\localhost\kohana\system\classes\Kohana\Route.php:240
2015-08-31 23:06:01 --- DEBUG: #0 Z:\home\localhost\kohana\system\classes\Kohana\Route.php(240): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\localho...', 240, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Route.php(330): Kohana_Route::compile('site(/<controll...', '<path>.html')
#2 Z:\home\localhost\kohana\system\classes\Kohana\Route.php(93): Kohana_Route->__construct('site(/<controll...', '<path>.html')
#3 Z:\home\localhost\kohana\application\bootstrap.php(163): Kohana_Route::set('Authorization', 'site(/<controll...', '<path>.html')
#4 Z:\home\localhost\kohana\index.php(102): require('Z:\home\localho...')
#5 {main} in Z:\home\localhost\kohana\system\classes\Kohana\Route.php:240
2015-08-31 23:06:15 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be an array, string given, called in Z:\home\localhost\kohana\system\classes\Kohana\Route.php on line 330 and defined ~ SYSPATH\classes\Kohana\Route.php [ 240 ] in Z:\home\localhost\kohana\system\classes\Kohana\Route.php:240
2015-08-31 23:06:15 --- DEBUG: #0 Z:\home\localhost\kohana\system\classes\Kohana\Route.php(240): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\localho...', 240, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Route.php(330): Kohana_Route::compile('<path>.html', 'site(/<controll...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\Route.php(93): Kohana_Route->__construct('<path>.html', 'site(/<controll...')
#3 Z:\home\localhost\kohana\application\bootstrap.php(163): Kohana_Route::set('Authorization', '<path>.html', 'site(/<controll...')
#4 Z:\home\localhost\kohana\index.php(102): require('Z:\home\localho...')
#5 {main} in Z:\home\localhost\kohana\system\classes\Kohana\Route.php:240
2015-08-31 23:06:19 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be an array, string given, called in Z:\home\localhost\kohana\system\classes\Kohana\Route.php on line 330 and defined ~ SYSPATH\classes\Kohana\Route.php [ 240 ] in Z:\home\localhost\kohana\system\classes\Kohana\Route.php:240
2015-08-31 23:06:19 --- DEBUG: #0 Z:\home\localhost\kohana\system\classes\Kohana\Route.php(240): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\localho...', 240, Array)
#1 Z:\home\localhost\kohana\system\classes\Kohana\Route.php(330): Kohana_Route::compile('<path>.html', 'site(/<controll...')
#2 Z:\home\localhost\kohana\system\classes\Kohana\Route.php(93): Kohana_Route->__construct('<path>.html', 'site(/<controll...')
#3 Z:\home\localhost\kohana\application\bootstrap.php(163): Kohana_Route::set('Authorization', '<path>.html', 'site(/<controll...')
#4 Z:\home\localhost\kohana\index.php(102): require('Z:\home\localho...')
#5 {main} in Z:\home\localhost\kohana\system\classes\Kohana\Route.php:240