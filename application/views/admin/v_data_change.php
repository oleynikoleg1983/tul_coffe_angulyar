<form method="POST">
    <table id="change_table">
        <thead>
            <tr>
                <th> <a href="/admin/index/index" style="color:red"> закрыть </a> </th>
                <th>  </th>
                <th>Название</th>
                <th>Код продукта </th>
                <th>Закупочная</th>
                <th>Цена</th>
                <th>Количество</th>
            </tr>
        </thead>
        <tbody> 

            <?php for ($i = 0; $i < count($array_change); $i++) {
                ?>
                <tr>
                    <td><a href="/admin/index/index?delete=<?= $array_change[$i]['id']; ?>"> удалить </a></td>
                    <td><input type="submit" name="change_data_p" value="изменить">  
                        <input type="hidden" name="cha_id_t" value="<?= $array_change[$i]['id']; ?>">  </td>
                    <td><input type="text"   name="cha_Name_product_t" value="<?= $array_change[$i]['name']; ?>">  </td>
                    <td><input type="text"   name="cha_product_code" value="<?= $array_change[$i]['product_code']; ?>">  </td>
                    <td><input type="text"   name="cha_first_price_product" value="<?= $array_change[$i]['first_price']; ?>"> </td>
                    <td><input type="text"   name="cha_price_product" value="<?= $array_change[$i]['price']; ?>"> </td>
                    <td><input type="text"   name="cha_quantity_product" value="<?= $array_change[$i]['quantity']; ?>"> </td>
                    
                </tr>
                <tr>
                    <td>Описание</td>
                    <td colspan="6"><textarea rows="4"   name="cha_description_product"  cols="33" name="text"> <?= $array_change[$i]['description']; ?> </textarea></td>
                </tr>
            <?php } ?>   
        </tbody>
    </table>
</form>

<!-- 1) Добавить проверку полей на правильность ввода! 
     2) При вводе ' __' неправильных даных выдайот ошыбку! 
     3) Зделать регулярку на ввод и изменение даных!!!
-->