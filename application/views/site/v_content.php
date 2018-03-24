<div class="autoriset_in_mag"><input id="aut_user" type="hidden" value="<?php if(isset($user))echo $user; ?>">
    <?php echo(isset($user))?"Продавец $user<br /><a class='btn btn-danger' href='?exit_admin=true'> выйти </a>":
        "<br /><a class='a_autoriset_in_mag' href='/site/authorization/authorization'>ВОЙТИ</a>";?>
    <input id="id_user" type="hidden" value="<?=$id_user?>"/>
    <input id="admin" type="hidden" value="<?=$admin?>"/>
</div>
<!--
<div id="report_place"></div>
<div id="menu_place"></div>
<div>            
    <script>
        $(document).ready(function () {
            get_coffee_menu();
        });
    </script>
</div>
<!--
-->
<style>
.menu-sell-coffee-element{width:230px;margin-bottom:20px}
</style>
<div>
    <app-root></app-root>
	<script src="/js/site/all.js"></script>
</div>
