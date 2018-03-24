<div style="text-align: center; padding: 20px;"><h2> Таблица добавления категорий товаров</h2></div>

<div id="cat_goods">
<hr>
    <form method="POST">         
            <select name="put_parent_id">
                 <option value="">Главная</option>
              <?php for($i=0; $i<count($array); $i++)
                       {?>               
                        <option value="<?=$array[$i]['id'];?>"><?=$array[$i]['name_category'];?></option>
              <?php     }?>   
            </select> Входящую в катигорию<br />
            <hr>
            <input type="text" name="put_category"/> добавить катигорию <br />
            <hr> 
            <hr>
        <input type="submit" name="submit_cat" value="Добавить" id="add_but"/>
    </form>
</div>
