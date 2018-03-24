 $(window).load(function () {
        
        $('input').change(function () {
            $(this).css("color", "black");
            });
        
        $("#new_news").click(function () {         
            $("#_title_form").html('<h2>Добавить товар</h2>');
            $("#_title_form").css("color", "black");
            });
     
        $("#form1_add_data").submit(function () {
            var sel1 = $("select[name='sel1']").val();
            var selected = $("select[name='selected']").val();
            if(!sel1 && !selected)
            {
                $("#_title_form").html('<h2>Выберете категорию</h2>');
                $("#_title_form").css("color", "red");
                $("#div_sel1").click(function () {         
                   $("#_title_form").html('<h2>Добавить товар</h2>');
                   $("#_title_form").css("color", "black");
                 });
                return false;
            }
            
            var put_name = $("input[name='put_name']").val();
            if (!put_name)
            {
                 $("input[name='put_name']").val('пустое поле');
                 $("input[name='put_name']").css("color", "red");
                 $("input[name='put_name']").click(function () {
                     $("input[name='put_name']").val('');
                     $("input[name='put_name']").css("color", "black");
                 });
                 return false;
            }
            
            var put_product_code = $("input[name='put_product_code']").val();
            if (!put_product_code)
            {
                 $("input[name='put_product_code']").val('пустое поле');
                 $("input[name='put_product_code']").css("color", "red");
                 $("input[name='put_product_code']").click(function () {
                     $("input[name='put_product_code']").val('');
                     $("input[name='put_product_code']").css("color", "black");
                 });
                 return false;
            }  
            

            var put_first_price = $("input[name='put_first_price']").val();
            if (!put_first_price)
            {   
                 $("input[name='put_first_price']").css("color", "red");   
                 $("input[name='put_first_price']").val('пустое поле');
                 $("input[name='put_first_price']").click(function () {
                     $("input[name='put_first_price']").val('');
                     $("input[name='put_first_price']").css("color", "black");
                 });
                 return false;
            }

            var put_price = $("input[name='put_price']").val();
            if (!put_price)
            {   
                 $("input[name='put_price']").css("color", "red");
                 $("input[name='put_price']").val('пустое поле');
                 $("input[name='put_price']").click(function () {
                     $("input[name='put_price']").val('');
                     $("input[name='put_price']").css("color", "black");
                 });
                 return false;
            }

            var put_quantity = $("input[name='put_quantity']").val();
            if (!put_quantity)
            {   
                 $("input[name='put_quantity']").css("color", "red");
                 $("input[name='put_quantity']").val('пустое поле');
                 $("input[name='put_quantity']").click(function () {
                     $("input[name='put_quantity']").val('');
                     $("input[name='put_quantity']").css("color", "black");
                 });
                 return false;
            }

            if(put_name=='пустое поле' ||
               put_first_price=='пустое поле' ||
               put_price=='пустое поле' ||
               put_quantity=='пустое поле')
            {   
                $("#_title_form").html('<h3>Заполните поля \'пустое поле\'</h3>');
                $("#_title_form").css("color", "red");
                return false;
            }          
        })    
    }); 