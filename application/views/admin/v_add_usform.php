<div id="add_us_form">
    <form action="" method="post">
        <table class="add_us">
            <tr>
                <th colspan="2"><div id="add_us"><?php echo((isset($log_no_empty))?$log_no_empty:"Добавление пользователя"); ?></div></th>
            </tr>
            <tr>
                <td><?php echo  __('Login'); ?>:</td>  
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td>Mail:</td> 
                <td><input type="text" name="mail"></td>
            </tr>
            <tr>
                <td><?php echo  __('Password'); ?>:</td>
                <td><input type="password" name="password"></td>
            </tr>
             <tr>
                <td> Again:</td>
                <td><input type="password" name="re_password"></td>
            </tr>
            <th colspan="2"  style="text-align:right"><input name="btnsubmit" id="button_f" type="submit" value="Зарегистрировать"></th>
        </table>
    </form>
</div>
    




 
	
	
 