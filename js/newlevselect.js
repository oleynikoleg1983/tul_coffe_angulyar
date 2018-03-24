function new_lev_select(selected_type_lev1) {
    var dataObj = {
        selected_l1: selected_type_lev1
    };
    $.ajax({
        type: "POST",
        url: "http://kohana.localhost/admin/Getajax",
        dataType: "JSON",
        data: dataObj,
        success: function (json) {
            if (json.length > 0)
            {
                var selectList = $('<SELECT id="last">');
                $('#div_sel1').append(selectList);
                selectList[0].onchange = getnewNextSelect;// baind on jqury обработчик событий
                var option = $('<option value="">ВЫБРАТЬ</option>');
                selectList.append(option);
                for (var i = 0; i < (json.length); i++)
                {
                    var option = $('<option value=' + json[i]['id'] + '>' + json[i]['name_category'] + '</option>');
                    selectList.append(option);
                }
                selectList.focus();
            }
            else
            {
                var div_sel1 = document.getElementById("div_sel1");
                div_sel1.lastChild.name = "selected";
            }
        }
    });
}