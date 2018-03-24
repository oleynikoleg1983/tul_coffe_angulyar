<form method="GET"> 
    <table id="news_table">
        <thead>
            <tr>
                <th> </th>
                <th><a href="/admin/index/index?find_name_show=<?=$find_name_show;?>&find_cod_show=<?=$find_cod_show;?>&sortby=name">Название</a><img class="img_sort" src="/s_img/sort.jpg"/></th>
                <th>Код продукта</th>
                <th><a href="/admin/index/index?find_name_show=<?=$find_name_show;?>&find_cod_show=<?=$find_cod_show;?>&sortby=first_price">Закупка</a><img class="img_sort" src="/s_img/sort.jpg"/></th>
                <th><a href="/admin/index/index?find_name_show=<?=$find_name_show;?>&find_cod_show=<?=$find_cod_show;?>&sortby=price">Цена</a><img class="img_sort" src="/s_img/sort.jpg"/></th>
                <th><a href="/admin/index/index?find_name_show=<?=$find_name_show;?>&find_cod_show=<?=$find_cod_show;?>&sortby=quantity">Количество</a><img class="img_sort" src="/s_img/sort.jpg"/></th>
                <th>Категория</th>
                <th>description</th>
                <th>images</th>
            </tr>
        </thead>
        <tbody> 
            <tr>
                <td><input class="find_product" type="submit" name="go_find" value="Поиск"></td>
                <td><input class="find_product" type="text" name="find_name_show"></td>
                <td><input class="find_product" type="text" name="find_cod_show"></td>           
                <td>-//-</td>
                <td>-//-</td>
                <td>-//-</td>
                <td>-//-</td>
                <td>-//-</td>
                <td>-//-</td>
              </tr>
          <?php for($i=0; $i<count($array); $i++)
                    {?>
                    <tr>
                        <td> <a href="/admin/index/index?change=<?=$array[$i]['id'];?>&find_name_show=<?=$find_name_show;?>&find_cod_show=<?=$find_cod_show;?>&page=<?=$num_page; ?>"> изменить </a></td>
                        <td><?=$array[$i]['name'];           ?></td>
                        <td><?=$array[$i]['product_code'];   ?></td>
                        <td><?=$array[$i]['first_price'];    ?></td>
                        <td><?=$array[$i]['price'];          ?></td>
                        <td><?=$array[$i]['quantity'];       ?></td>
                        <td><?=$array[$i]['name_category'];  ?></td>
                        <td><?=$array[$i]['description'];    ?></td>
                        <td> <img id="new_table_img" src="/<?=$img=($array[$i]['url'])?$array[$i]['url']:"s_img/NIAva.gif"; ?>" />   </td>
                    </tr>
          <?php     }?>   
                    <tr>  
                          <td  colspan="9"><div class="show_page_new_table">страницы
                     <a href="/admin/index/index?sortby=<?=$sortby;?>&find_name_show=<?=$find_name_show;?>&find_cod_show=<?=$find_cod_show;?>&page=<?=(($this_page*$num_page_in_display-$num_page_in_display)>0)?($this_page*$num_page_in_display-$num_page_in_display):(0); ?>"><?php if($this_page)echo "<<<"; ?>   </a>            
                    <?php for ($i = $this_page; $i<($this_page+$num_page_in_display); $i++) 
                          { if($i>$count_in_array){break;} ?>
                          <a href="/admin/index/index?sortby=<?=$sortby;?>&find_name_show=<?=$find_name_show;?>&find_cod_show=<?=$find_cod_show;?>&page=<?php echo($i*$num_page_in_display); ?>"><?php echo " [".($num_page_in_display*$i)."-".($num_page_in_display*$i+$num_page_in_display)."] "; ?> </a>  
                    <?php } ?>
                        </div></td>
                     </tr>
        </tbody>
     </table>
</form>


         