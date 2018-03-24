$(window).load(function () {
    $("#add_us_form").click(function () {
        $("#add_us").html("Добавление пользователя");
        $("#add_us").css("color", "black");
    });
    
    /*
    $("input[name='user']").click(function () {
        $("input[name='user']").val('');
    });
    */
    $("form").submit(function () {
        var user = $("input[name='user']").val();
        if (!user)
        {
            $("input[name='user']").val('пустое поле');
            $("input[name='user']").css("color", "red");
            $("input[name='user']").click(function () {
                $("input[name='user']").val('');
                $("input[name='user']").css("color", "");
            });
            return false;
        }

        var mail = $("input[name='mail']").val();
        if (!mail)
        {   
            $("input[name='mail']").css("color", "red");
            $("input[name='mail']").val('пустое поле');
            $("input[name='mail']").click(function () {
                $("input[name='mail']").val('');
                $("input[name='mail']").css("color", "");
            });
            return false;
        }
        var password = $("input[name='password']").val();
        if (!password)
        {   
            $("input[name='password']").css("color", "red");
            $("input[name='password']").val('пустое поле');
            $("input[name='password']").attr("type", "text");
            $("input[name='password']").click(function () {
                $("input[name='password']").attr("type", "password");
                $("input[name='password']").val('');
                $("input[name='password']").css("color", "");
            });
            return false;
        }
        var re_password = $("input[name='re_password']").val();
        if (!re_password)
        {   
            $("input[name='re_password']").css("color", "red");
            $("input[name='re_password']").val('пустое поле');
            $("input[name='re_password']").attr("type", "text");
            $("input[name='re_password']").click(function () {
                $("input[name='re_password']").attr("type", "password");
                $("input[name='re_password']").val('');
                $("input[name='re_password']").css("color", "");
            });
            return false;
        }
        if (password != re_password) {
            $("input[name='password']").css("color", "red");
            $("input[name='password']").val('пароли не совпадают');
            $("input[name='password']").attr("type", "text");
            $("input[name='password']").click(function () {
                $("input[name='password']").attr("type", "password");
                $("input[name='password']").val('');
                $("input[name='re_password']").val('');
                $("input[name='password']").css("color", "");
            });
            return false;
        }

        $("#add_us").text('Проверка');
        $("form").click(function () {
            $("#add_us").text('Добавление пользователя');
        });
    })
});

