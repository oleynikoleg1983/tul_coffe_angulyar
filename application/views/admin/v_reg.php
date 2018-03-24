<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>   
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?=__($title) ?></title>
</head>
<body>
	<div id="contaner">
            <div id="header">
                    <h1> <?= __($header); ?></h1>
            </div>
            <div id="content">
                <div id="head_inf">
                      <div id="langv">
                         <?=$languages ?>
                         <?=__($data['mes1']) ?>
                         <?=__($data['mes2']) ?>
                      </div>                      
                      <hr>
                </div>
                 <?=$content ?>    
                <p><?php if (isset($ahref)) echo $ahref;  ?></p>                
            </div>           
            <div style="clear:both"></div>
            <div id="empty"></div>
	</div>
             
	<div id="footer">
            <hr>
            <p><?=__($footer) ?></p>
	</div>
</body>
</html>