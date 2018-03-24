<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2018-03-22 12:45:08 --- CRITICAL: View_Exception [ 0 ]: The requested view /site/v_content could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\localhost\coffeSite\system\classes\Kohana\View.php:145
2018-03-22 12:45:08 --- DEBUG: #0 Z:\home\localhost\coffeSite\system\classes\Kohana\View.php(145): Kohana_View->set_filename('/site/v_content')
#1 Z:\home\localhost\coffeSite\system\classes\Kohana\View.php(30): Kohana_View->__construct('/site/v_content', NULL)
#2 Z:\home\localhost\coffeSite\application\classes\Controller\Site\Index.php(27): Kohana_View::factory('/site/v_content')
#3 Z:\home\localhost\coffeSite\system\classes\Kohana\Controller.php(84): Controller_Site_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#6 Z:\home\localhost\coffeSite\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\coffeSite\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\coffeSite\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\coffeSite\system\classes\Kohana\View.php:145