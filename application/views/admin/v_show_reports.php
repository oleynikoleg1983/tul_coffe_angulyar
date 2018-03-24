<table id="repurts_table" >
    <tr>
        <th >Название товара</th> <th>Количество</th> <th>Закупка</th><th>Цена</th>
    </tr>
    <?php
    for ($i = 0; $i < ($num_in_page); $i++) {

        if (($this_page + $i) >= $count) {
            break;
        }
        ?> 
        <tr>
            <td> <?= $array_reports[$i]['product_name']; ?> </td> 
            <td> <?= $array_reports[$i]['quantity']; ?> </td> 
            <td> <?= $array_reports[$i]['first_price']; ?> </td>
            <td> <?= $array_reports[$i]['price']; ?> </td> 
        </tr>

    <?php } ?>
    <tr>
        <td colspan="4">страницы
                <?php if ($this_page > 0) { ?>
                    <a href="/admin/reports/index?date1=<?= ($choose_start_date) ? $choose_start_date : 0;
                ?>&go_reports=tye&date2=<?= ($choose_finish_date) ? $choose_finish_date : 0;
                    ?>&id_user=<?= ($chose_id_user) ? $chose_id_user : 0;
                    ?>&this_page=<?= $this_page - $num_in_page; ?>"><<<</a>
                   <?php } ?>
                   <?php
                   for ($i = $this_page / $num_in_page; $i < ($this_page / $num_in_page + $num_in_page / 2); $i++) {
                       if ($i >= $count / $num_in_page) {
                           break;
                       }
                       ?>
                    <a href="/admin/reports/index?date1=<?= ($choose_start_date) ? $choose_start_date : 0;
                   ?>&go_reports=tye&date2=<?= ($choose_finish_date) ? $choose_finish_date : 0;
                       ?>&id_user=<?= ($chose_id_user) ? $chose_id_user : 0;
                       ?>&this_page=<?= $i * $num_in_page ?>"><?php echo "[" . ($i * $num_in_page) . "-" . ($i * $num_in_page + $num_in_page) . "]";
                       ?> </a>
                    <?php } ?>
        </td>
    </tr>
    <tr>
        <td><b>Сума</b></td> <td> <?= $sum_quantity ?> </td><td> <?= $sum_first_sell ?> </td><td> <?= $sum_sell ?> </td> 

    </tr>
     <tr>
         <td colspan="2">Прибыль  на этой странице</td><td colspan="2"><b><?= $in_page_sum_zarobotok; ?></b></td>
    </tr>
    <tr>
        <td>Общая прибыль</td><td colspan="3"><b><?= $sum_zarobotok; ?></b></td>
    </tr>
</table>