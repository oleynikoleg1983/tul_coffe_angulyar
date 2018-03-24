var id_elem = (function(){
        var num =1;
        return function(new_num)
        {   
            if(new_num) 
            {
              return num=new_num; 
            }
            return num++;	
        }
    }());
       
function add_next_image(){
    var size; 
    var add_id = id_elem();
    add_id=parseInt(add_id);
    var id_del_elem ='id_'+add_id;
    
    if(add_id>1)
    {  
        add_id=parseInt(add_id)
        var id_check = "id_"+(add_id-1);
        var value = $('#'+id_check).find('input').val();
        if(value)
        {   
            size = parseInt($('#'+id_check).find('input')[0].files[0].size);
            var value = value.split('.');
            var type_file = value[(value.length-1)];
            if(type_file=='jpg' || type_file=='png' || type_file=='bmp' ||type_file=='jpeg')
            {
                $("#_title_form").html('<h3>Картинка добавлена</h3>');
            }
            else
            {
                $("#_title_form").html('<h3>Добавлять только картинки</h3>');
                $("#_title_form").css("color", "red");
                $('#'+id_check).find('input').val(null);
                id_elem(add_id);
                return false; 
            }  
            
        }
        if(size>25000)
        {
        $("#_title_form").html('<h4>Фаил должен быть меньше 2.5 мб</h4>');
        $("#_title_form").css("color", "red");
        $("#"+id_check).find('input').val(null);
        id_elem(add_id);
        return false;  
        }
    }
    else
    {   
        size = parseInt($('form input[name="file[]"]')[0].files[0].size);
        var value = $('form input[name="file[]"]').val();
        var value = value.split('.');
        var type_file = value[(value.length-1)];
        if(type_file=='jpg' || type_file=='png' || type_file=='bmp' || type_file=='jpeg')
        {
            $("#_title_form").html('<h3>Картинка добавлена</h3>');
        }
        else
        {
            $("#_title_form").html('<h3>Добавлять только картинки</h3>');
            $("#_title_form").css("color", "red");
            $("#id_img_0").val(null);
            id_elem(add_id); 
            return false;  
        } 
        if(size>25000)
        {
        $("#_title_form").html('<h4>Фаил должен быть меньше 2.5 мб</h4>');
        $("#_title_form").css("color", "red");
        $("#id_img_0").val(null);
        id_elem(add_id);
        return false;  
        }
    }
    
       
    $('#load_image').find('.del_img').css('display', 'block');
    var new_image =$('<div id='+id_del_elem+'><input type="file" name="file[]" onchange="add_next_image()"/>\n\
                      <img style="display:none" onclick="dell_this_images('+id_del_elem+')" class="del_img" src="/s_img/delete_img.png"/></div>');
    $('#load_image').append(new_image);
}

function dell_this_images(id_del_elem){
   if(id_del_elem==undefined)
   {   
       var num = id_elem()-1;
       id_elem(1);
       $("#id_img_0").val(null);
       $("#id_"+num).remove();
   }
   else
   {    
        id_del_elem.remove();   
   } 
}



