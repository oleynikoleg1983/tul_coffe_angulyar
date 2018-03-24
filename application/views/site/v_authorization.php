<div id="button_back"><?php if(isset($ahref)) echo $ahref;  ?></div>
<div id="aut_admin">
    <form action="" method="post">
        <table class="login">
            <tr>
                <th colspan="2"><div class="form-group text-center"><h3>Авторизация</h3></div></th>
            </tr>
            <tr>
                <td><div class="form-group text-center"><span>Логин:<span></div></td> 
                <td><div class="form-group"><input class="form-control" type="text" name="login"></div></td>
            </tr>
            <tr>
                <td><div class="form-group text-center"><span>Пароль:</span></div></td>
                <td><div class="form-group"><input class="form-control" type="password" name="password"></div></td>
            </tr>
            <tr>
                <td></td>
                 <td><input class="btn btn-info pull-left" name="btnsubmit" id="button_aut" type="submit" value="Войти"></td>
            </tr>
            <th colspan="2" class="">
                <br>
            </th>
        </table>    
    </form>  
</div>

