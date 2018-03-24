<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>   
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        <script src="/js/getxmlhttp.js"></script>
        <script src="/js/getnewselect.js"></script>
        <script src="/js/newlevselect.js"></script>
        <script src="/js/getnewnextselect.js"></script>
        <script src="/js/addimage.js"></script>
        <script src="/js/remove_unnecessary.js"></script>
        <script src="/js/counter.js"></script>
        <script src="/js/jquery-1.11.2.min.js"></script>
        <script src="<?php if(isset($chec_script)) echo $chec_script;?>"></script>
    
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?= __($title) ?></title>
    </head>
    <body>
        <div id="contaner">
            <div id="header">
                <h1> <?= __($header); ?></h1>
            </div>
            <div id="content">
                <div id="head_inf">
                    <div id="langv">
                        <?= $languages ?>
                        <?= __($data['mes1']) ?>
                       Пользователь (<?= __($data['mes2']) ?>) <a href="/admin/index/index?exit_admin=true"> выйти </a>
                    </div>
                    <hr>
                </div>
                <p><?php if(isset($ahref)) echo $ahref;  ?></p>        
                <?php if(isset($add_data)) echo $add_data; ?> 
                <?php if(isset($data['mes3'])) echo $data['mes3'];?>
                <?php if(isset($data_change)) echo $data_change;  ?>
                <?php if(isset($content)) echo $content;  ?>
                <?php if(isset($show_reports)) echo $show_reports;  ?>
            </div>           
            <div style="clear:both"></div>
            <div id="empty"></div>
        </div>
        <div id="footer">
            <hr>
            <p><?= __($footer) ?></p>
        </div>
    </body>
</html>