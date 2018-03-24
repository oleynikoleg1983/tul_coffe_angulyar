<div id="f_repurts">
    <form method="GET">
        <table class="reports_table">
            <tr>
                <th colspan="2">Отчет<hr></th> 
            </tr>
            <tr>
                <td>Начальная дата</td> 
                <td><input type="date" name="date1"  value="<?=($choose_start_date)?$choose_start_date:$this_date;?>"/></td>
            </tr>
            <tr>
                <td>Конечная дата</td>
                <td><input type="date" name="date2" value="<?=($choose_finish_date)?$choose_finish_date:$this_date;?>"/></td>
            </tr>
            <tr>
                <td>Имя продавца</td>
                <td>
                    <select name="id_user" >
                        <option value="<?=($chose_id_user)?$chose_id_user:0?>" selected><?=($chose_name_user)?$chose_name_user:''?></option>
                        <?php for ($i = 0; $i < count($array); $i++) {
                            ?>   
                            <option value="<?= $array[$i]['id_user']; ?>"><?= $array[$i]['user']; ?></option>
                        <?php } ?> 
                    </select>
                </td>
            </tr>
            <td colspan="2"  style="text-align:right"><input name="go_reports" class="button_repurts" type="submit" value="Отчет"><br /><br /></td>
             <tr>
                <td colspan="2" style="text-align:center"><b>Сума товаров</b><hr /></td>
              
            </tr>
            <tr>
                <td><?=($sum_all_product)?"Закупка ".$sum_all_product_first." грн."
                                . "<br />Продажа ".$sum_all_product." грн.":"";?></td>
                <td><input class="button_repurts" type="submit" name="go_sum_product" value="Отчет"/></td>
            </tr>
        </table>
    </form>
</div>