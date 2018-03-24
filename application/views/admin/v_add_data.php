<div id="new_news">
<div id="_title_form"><h2> <?php echo (isset($_GET['add_data']))?"<h3><div style='color:black'>Товар \"".$_GET['add_data']."\" добавлен</div></h3>":"Добавить товар"; ?></h2></div>
<hr><br />
    <p>Выберете категорию товара *</p>
    <form id="form1_add_data" method="POST" enctype='multipart/form-data'>  
         <div id="div_sel1">    
            <select onChange='getnewSelect()' id="sel1">
                <option value="0">ВЫБРАТЬ</option> 
             <?php for($i=0; $i<count($arraycat); $i++)
                   {?>   
                    <option value="<?=$arraycat[$i]['id'];?>"><?=$arraycat[$i]['name_category']; ?></option>
              <?php }?> 
            </select>
        </div>
        <input type="text" name="put_name"/> Название товара *<br />
        <hr>
        <input type="text" name="put_product_code"/> Код товара *<br />
        <hr>
        <input type="text" name="put_first_price"/> Цена (закупочная) *<br />
        <hr>
        <input type="text" name="put_price"/> Цена (розница) *<br />
        <hr>
        <input type="text" name="put_quantity"/> Количество *<br />
        <hr>
        <div id="load_image">
            <div><input id="id_img_0" name="file[]" type="file" onChange="add_next_image()"/>
                 <img onclick="dell_this_images()" class="del_img" src="/s_img/delete_img.png"/></div>
        </div>
        <hr>Описание
        <textarea rows="5" cols="33" name="text"></textarea> <br />
        <input type="submit" name="submit" value="Добавить" id="add_but"/>
        <hr> <br />* Обязательные поля формы
    </form>
</div>

<script>
      
</script>