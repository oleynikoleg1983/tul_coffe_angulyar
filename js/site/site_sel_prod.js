var productsSellObj;
//var sellCount = 1;

function get_coffee_menu() {
       userAdmin =  $("#admin").val();
      
       if (userAdmin && userAdmin == 1) {
           getUsers();
       } 
       
       var dataObj = {
            get_coffee_menu: true
        };
    console.log('statrt', dataObj);
    $.ajax({
        type: "POST",
        url: "/site/Getajax",
        dataType: "JSON",
        data: dataObj,
        success: function (json) {
            {
                if (json.length > 0)
                {   productsSellObj = json;
                    
                    if (userAdmin != 1) {
                        addReportButton();
                        haveConnect();
                        addCalculator();
                        
                        for (var i = 0; i < (json.length); i++){
                            var name = json[i]['name'];
                            var description = json[i]['description'];
                            var price = json[i]['price'];// class="adv_div_img"
                            var element = $('<div style="margin:20px" class="col-xs-3 col-sm-3 col-md-3 col-lg-3" >\n\
                                                <button onclick="product_basket(' + json[i]['id']+')" \n\
                                                style="" type="button" class="btn btn-info btn-lg">\n\
                                                <h2 style="width:210px; margin-bottom: 5px;"><span>'+name+ '<span></h2>\n\
                                                <span>'+description+'</span></br>\n\
                                                <span> Цена:'+price+'</span></button>\n\
                                               </div>');
                        $('#menu_place').append(element);
                        }
                    }
                    
                  
                    console.log('json', json);
                  
                }
            }
        }
    });
}


function product_basket(item) {
    var sellProduct = null; 
    var sellCount = 1;
  
      for (var i = 0; i < (productsSellObj.length); i++) {
          if(productsSellObj[i]['id'] == item){
              console.log('productsSellObj', productsSellObj[i]);
              sellProduct = productsSellObj[i];
          }
      }
        
       var element = $('<div class="sell-menu-coffe"><div\n\
                     class="col-xs-10 col-sm-10 col-md-10 col-lg-10" >\n\
                    <h1 class="text-center"><span class="label label-info">'+sellProduct.name+'</span></h1>\n\
                    <button onclick="addCountPr('+sellProduct.price+')" \n\
                    style="" type="button" class="btn btn-info btn-lg sell-coffe-btn-add"><span style="font-size:40px;" ><span style="margin-top: 5px;" class="glyphicon glyphicon-plus"></span></span></button>\n\
                    <input class="sell-count-element btn" style="font-size:46px;" id="sell-count" value=' + sellCount + '></input>\n\
                    <button id="sell-product-button" onclick="sell_product(' + sellProduct.id +')" \n\
                    style="" type="button" class="btn btn-success btn-lg sell-coffe-btn"><span><span  style="font-size: 55px; width:80px" class="glyphicon glyphicon-ok"></span></button>\n\
                    <button  onclick="close_sell_product(' + sellProduct.id +')" \n\
                    style="" type="button" class="btn btn-default btn-lg sell-coffe-btn"><span><span  style=" font-size: 55px; width:80px" class="glyphicon glyphicon-remove"></span></button><hr style="width:0.1px;">\n\
                    <button style="margin-top: -15px;" onclick="minusCountPr('+sellProduct.price+')" type="button"  class="btn btn-info btn-lg sell-coffe-btn-add">\n\
                    <span style="font-size:40px;" ><span  style="margin-top: 5px;" class="glyphicon glyphicon-minus"></span></span></button>\n\
                   \n\
                    <span class="label label-warning" style="font-size:46px;"><span>Загалом: </span>\n\
                    <span   id="sell-sum-money"></span>\n\
                    <span style="margin-left:10px"> грн.</span></span>\n\</div></div>');
                    
                    $('#menu_place').append(element); 
                    $("#sell-sum-money").text(sellCount*sellProduct.price);
    
}

function addCountPr(price) {
    sellCount = $("#sell-count").val();
    sellCount ++;
    $("#sell-count").val(sellCount);
    $("#sell-sum-money").text(sellCount*price);
    //$("#sell-sum-money").val(sellCount*price);
}

function minusCountPr(price) {
    sellCount = $("#sell-count").val()
     if (sellCount > 1) {
        sellCount --;
    }
    $("#sell-count").val(sellCount);
    $("#sell-sum-money").text(sellCount*price);
    //$("#sell-sum-money").val(sellCount*price);
   
}

function sell_product(data){
    //123456
    sellCount = $("#sell-count").val();
   // $("#sell-product-button").disabled=true;
    $( "#sell-product-button" ).prop( "disabled", true );
    var userId =  $("#id_user").val(); 
  //  console.log('data', data);
    //console.log('sellCount', sellCount);
    
    var dataObj = {
        sell_product: true,
        product_id:data,
        product_count:sellCount,
        user_id: userId
    };
    
     //console.log('statrt', dataObj);
    $.ajax({
        type: "POST",
        url: "/site/Getajax",
        dataType: "JSON",
        data: dataObj,
        success: function (json) {
            {
               //=1 
               var numberInCalc =  ($("#sum_calculator").text()) ? parseInt($("#sum_calculator").text(), 10) : 0;
               var addNumber = parseInt($("#sell-sum-money").text(), 10);
               $("#sum_calculator").text((numberInCalc + addNumber));
               //=3
               close_sell_product();
            }
        }
    });
    //addReportButton();
    //setTimeout('showReportForUser();', 2000)
     setTimeout('drowSellCount();', 1000)

      
   //  close_sell_product(null);
}

function close_sell_product(data){
      $(".sell-menu-coffe").remove();
}

function getUsers () {
    
    var dataObj = {
        get_users: true
    };
    
     $.ajax({
        type: "POST",
        url: "/site/Getajax",
        dataType: "JSON",
        data: dataObj,
        success: function (json) {
            {
                if (json.length > 0)
                { 
                  //  console.log('json', json);
                    getReportMenu(json);
                }
            }
        }
    });
}

function getReportMenu(user) {
   
   if (user) {
        var divElement = $('<br><input type="hidden" id="select_user_id"></div><div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>');
        
        var selectList = $('<SELECT  onchange="setUserIdForReport(value)" class="form-control" name="select_user_id" class="">');
     //   divElement.append(selectList);
        
        var option = $('<option value="0">все</option>');
        selectList.append(option);
        for (var i = 0; i < (user.length); i++)
        {
            var option = $('<option value=' + user[i]['id_user'] + '>' + user[i]['user'] + '</option>');
            selectList.append(option);
        }
        
        divElement.append(selectList);
   }
   
                   // $('#name_cat').focus();
                    
    var date = new Date();
    //var nowDAte = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
   
    var nowMonth = ((date.getMonth()+1) < 10) ? '0'+(date.getMonth()+1) : (date.getMonth()+1);
    var nowDateNumber = ((date.getDate()) < 10) ? '0'+(date.getDate()) : (date.getDate());

    var nowDAte = date.getFullYear()+'-'+ nowMonth +'-'+nowDateNumber;
    console.log('nowDAte v1-', nowDAte);
   
    var element = $('<div style="margin:20px" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >\n\
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" >\n\
    <label>Начало:<input  value="'+nowDAte+'" class="form-control" type="date" id="report_date1" name="date1"></label></div>\n\
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" >\n\
    <label>Конец:<input value="'+nowDAte+'" class="form-control" type="date" id="report_date2" name="date1"></label></div>\n\
    </div>');
    //Имя:<input  class="form-control" type="text" id="report_text" name="date1"></label></div>
    if (divElement) {
          element.append(divElement);
    }
    
    var button_element = $('<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" ><button onclick="showReport()" \n\
                      style="" type="button" class="btn btn-info">ОТЧЕТ</button></div>');
    
    element.append(button_element);
    
    $('#report_place').append(element);
   
   
  
   
}

function setUserIdForReport(data) {
   // console.log('data', data);
    $("#select_user_id").val(data);
}

function showReport() {
    
    $(".report-inf-class").remove();
    $("#report-inf").remove();
    $("#detail_report_btn").remove();
    var report_date1 = $("#report_date1").val();
    var report_date2 = $("#report_date2").val();
    var select_user_id = $("#select_user_id").val();
    
     var dataObj = {
        report_product: true,
        report_date1:report_date1,
        report_date2:report_date2,
        user_id: select_user_id
    };
    
     //console.log('statrt', dataObj);
    $.ajax({
        type: "POST",
        url: "/site/Getajax",
        dataType: "JSON",
        data: dataObj,
        success: function (json) {
            {
                if (json.length > 0)
                { 
                     var productCount = 0;
                     var userSalary = 0;
                     var moneyOborot = 0;
                     
                     var saecoCoffeMachine = 0;
                     var profesionalCoffeMachine = 0;
                     objForBonus = getBonusForReportAdmin(json);
                     useCupsHtml = getUseOfCups(json);
                     for (var i = 0; i < (json.length); i++) {
                      
                        thisProductCount = parseInt(json[i]['product_count'], 10);
                        if (json[i]['type_coffee_machine'] == 'saeco') {
                            saecoCoffeMachine += thisProductCount;
                        }
                        
                        if (json[i]['type_coffee_machine'] == 'professional') {
                            profesionalCoffeMachine += thisProductCount;
                        }
                        
                        productCount += parseInt(json[i]['product_count'], 10);
                        userSalary += parseFloat(json[i]['user_salary']);
                        moneyOborot += (parseInt(json[i]['product_count'], 10)) * (parseInt(json[i]['product_price'], 10)); //.product_count
                    }
                    
                    //for (var)
                    console.log('objForBonus--', objForBonus);
                    var salaryWithBonus = objForBonus.sum + userSalary;
                    var element = $('<div id="report-inf" style="margin:20px" class="report-inf-class col-xs-12 col-sm-12 col-md-12 col-lg-12" >\n\
                                    <table><tr><td><span class="bg-info"><h3>Продано  товаров:  </h3></span></td><td><h3 style="margin-left: 20px;"><strong>'+productCount+         '</strong></h3></td> </tr>\n\
                                           <tr><td><span class="bg-info"><h3>Процент от продаж: </h3></span></td><td><h3 style="margin-left: 20px;"><strong>'+userSalary.toFixed(2)+'</strong></h3></td></tr>\n\
                                           <tr><td><span class="bg-info"><h3>Сумма     продаж:  </h3></span></td><td><h3 style="margin-left: 20px;"><strong>'+moneyOborot+          '</strong></h3></td></tr>\n\
                                                \n\
                                           <tr><td><span class="bg-info"><h3>Saeco:  </h3></span></td><td><h3 style="margin-left: 20px;"><strong>'+saecoCoffeMachine+          '</strong></h3></td></tr>\n\
                                           <tr><td><span class="bg-info"><h3>Profesional:  </h3></span></td><td><h3 style="margin-left: 20px;"><strong>'+profesionalCoffeMachine+          '</strong></h3></td></tr>\n\
                                    </table>\n\
                                    <br><br><span><button class="btn btn-info" id="detail_salary_btn">Бонусы и зарплата</button><br><br><div  id="bonus_detail_inf">'+objForBonus.html+'</span>\n\
                                    <br><h2 style="color:red">Зарплата:'+(salaryWithBonus.toFixed(2))+'</h2></div>\n\
                                    <span><button class="btn btn-info" id="use_сups_detail_btn">Стаканчики</button><br><dev id="use_сups_detail_inf">'+useCupsHtml+'</div></span></div>\n\
                                    <div style="margin-left:34px;"><button id="detail_report_btn" \n\
                      style="" type="button" class="btn btn-info">Детальный ОТЧЕТ</button></div>');
                    
                    $('#report_place').append(element);
                     
                    $('#detail_report_btn').bind('click', function(){
                        drowTableReport(json);
                    });
                      
                    $("#bonus_detail_inf").hide();

                    $('#detail_salary_btn').bind('click', function(){
                      $("#bonus_detail_inf").slideToggle("slow");
                    });
                    //
                    $("#use_сups_detail_inf").hide();

                    $('#use_сups_detail_btn').bind('click', function(){
                      $("#use_сups_detail_inf").slideToggle("slow");
                    })
                      
                     
                }
            }
        }
    });
    
}

function drowTableReport(data) {
    
    var products = [];
    for (var i = 0; i < (productsSellObj.length); i++) {
        products[productsSellObj[i]['id']] = productsSellObj[i]['name']+ ' '  + productsSellObj[i]['description']+''; //1234567
    }
    
    console.log('products', products);
    var tmpReport  = '';
    for (var i = 0; i < (data.length); i++) {
         tmpReport += '<tr><td>Тип:</td><td><strong style="margin:20px">'+products[data[i]['product_id']]+'</strong></td> <td>Время:</td><td><strong style="margin:20px">'+data[i]['sell_date']+'</strong></td><td>Количество:</td><td><strong style="margin:20px">'+data[i]['product_count']+'</strong></td></tr>';
    }
   
   var element = $('<div id="report-inf" style="margin:20px" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" ><table>'+tmpReport+'</table></div>'); 
   $('#report_place').append(element);

}


///===============
function showReportForUser() {
    console.log('---')
    $(".report-inf-class").remove();
    $("#report-inf").remove();
    // $("#detail_report_btn").remove();
    var date = new Date();
    // var nowDAte = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
    // var nowDAte = date.getDate() +'-'+  (date.getMonth()+1) +'-'+date.getFullYear();
    var nowMonth = ((date.getMonth()+1) < 10) ? '0'+(date.getMonth()+1) : (date.getMonth()+1);
    var nowDateNumber = ((date.getDate()) < 10) ? '0'+(date.getDate()) : (date.getDate());

    var nowDAte = date.getFullYear()+'-'+ nowMonth +'-'+nowDateNumber;
    console.log('nowDAte v1-', nowDAte); 
    
    var report_date1 = nowDAte;
    var report_date2 = nowDAte;
    var select_user_id =  $("#id_user").val(); 
    
    var dataObj = {
        report_product: true,
        report_date1:report_date1,
        report_date2:report_date2,
        user_id: select_user_id
    };
    
     console.log('statrt----', dataObj);
    $.ajax({
        type: "POST",
        url: "/site/Getajax",
        dataType: "JSON",
        data: dataObj,
        success: function (json) {
            {
                if (json.length > 0)
                { 
                     var productCount = 0;
                     var userSalary = 0;
                     var moneyOborot = 0;
                     
                     var saecoCoffeMachine = 0;
                     var profesionalCoffeMachine = 0;
                     
                     var hasBonus = 0;
                     var bonus = 0;
                     
                      for (var i = 0; i < (json.length); i++) {
                          
                        thisProductCount = parseInt(json[i]['product_count'], 10);
                        console.log('v5---', productCount);
                        if (json[i]['type_coffee_machine'] == 'saeco') {
                            saecoCoffeMachine += thisProductCount;
                        }
                        
                        if (json[i]['type_coffee_machine'] == 'professional') {
                            profesionalCoffeMachine += thisProductCount;
                        }
                        
                        if (json[i]['has_bonus'] && json[i]['has_bonus'] == 1) {
                           hasBonus +=thisProductCount;  
                        }
                        
                        productCount += parseInt(json[i]['product_count'], 10);
                        userSalary += parseFloat(json[i]['user_salary']);
                        moneyOborot += (parseInt(json[i]['product_count'], 10)) * (parseInt(json[i]['product_price'], 10)); //.product_count
                    }
                        //console.log('hasBonus', hasBonus);
                     var summa = userSalary;// + parseFloat(bonus);
                     
                    if (hasBonus > 20) {
                        bonus = hasBonus*0.5;
                        summa = userSalary + parseFloat(bonus);
                    }
                    
                    // userSalary += parseFloat(json[i]['user_salary']); 
                    var element = $('<div id="report-inf" class="report-inf-class-user" ><div class="label label-warning">\n\
                                    <span class="">Продано  товаров: </span><strong>'+productCount+         '.</strong>\n\
                                    <span class="">Процент от продаж: </span><strong>'+userSalary.toFixed(2)+'.</strong>\n\
                                    <span class="">Сумма продаж: </span><strong>'+moneyOborot+          '. </strong><br>\n\
                                    <span> Saeco: <b>' + saecoCoffeMachine + '.</b></span>\n\
                                    <span>Professional: ' + profesionalCoffeMachine + '.</span>\n\
                                    <span>Bonus: ' + bonus + '. Cумма: '+summa.toFixed(2)+'</span> \n\
                                  </div></div></div>');
                     $('#report_place').append(element);
                     
                     
                }
            }
        }
    });
    
}


function addReportButton() {
    var element = $('<span>\n\
                    <button id="user_detail_report_btn" \n\
                    style="" type="button" class="btn btn-success">ОТЧЕТ</button></span>');
                    $('.autoriset_in_mag').append(element);
    
    $('#user_detail_report_btn').bind('click', function(){
            setTimeout('showReportForUser();', 2000)
            setTimeout('dropReportForUser();', 12000)
    }) //http://oleg1983.testv1.testforhost.com	
}

function dropReportForUser() {
    $(".report-inf-class").remove();
    $("#report-inf").remove();
}


var SelProductCount = 0;

function drowSellCount() {
    console.log('drowSellCount start');
    $(".count-sell-inf-class").remove();
    $("#count-sell-inf-class").remove();

    var date = new Date();
    //var nowDAte = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
    //var nowDAte = date.getDate() +'-'+  (date.getMonth()+1) +'-'+date.getFullYear();
    
    var nowMonth = ((date.getMonth()+1) < 10) ? '0'+(date.getMonth()+1) : (date.getMonth()+1);
    var nowDateNumber = ((date.getDate()) < 10) ? '0'+(date.getDate()) : (date.getDate());

    var nowDAte = date.getFullYear()+'-'+ nowMonth +'-'+nowDateNumber;
    console.log('nowDAte v1-', nowDAte);


    var report_date1 = nowDAte;
    var report_date2 = nowDAte;
    var select_user_id =  $("#id_user").val(); 
    
     var dataObj = {
        report_product: true,
        report_date1:report_date1,
        report_date2:report_date2,
        user_id: select_user_id
    };
    console.log('drowSellCount dataObj v2- ', dataObj )
    $.ajax({
        type: "POST",
        url: "/site/Getajax",
        dataType: "JSON",
        data: dataObj,
        success: function (json) {
            {
                if (json.length > 0)
                { 
                     var productCount = 0;
                     var userSalary = 0;
                     var moneyOborot = 0;
                      for (var i = 0; i < (json.length); i++)
                    {
                        productCount += parseInt(json[i]['product_count'], 10);
                    }
                    
                    str = ' ';
                    if (SelProductCount  != productCount ) {
                        str = 'Продано ';
                    }
                    
                    SelProductCount   = productCount;
                    console.log('productCount -', productCount );
                    var element = $('<div style="position: fixed; top: 5px; left: 30%; font-size: 20px;"  id="count-sell-inf-class'+productCount+'" class="count-sell-inf-class'+productCount+'" >\n\
                                  <div class="label label-warning"><span>'+str +'</span>\n\
                                  <strong>'+productCount+ '</strong>\n\
                                  </div></div></div>');
                     $('#report_place').append(element);
					 
					setTimeout('dropCountSellInf('+productCount+');', 3000);
                     
                     
                }
            }
        }
    });
}


function dropCountSellInf(productCount){
   $(".count-sell-inf-class"+productCount).remove();
   $("#count-sell-inf-class"+productCount).remove();
} 
    
function getBonusForReportAdmin(json) {
    var data = new Object;
    data.html = '';
    
    var objForBonus = [];
    var objDateForBounus = []
    var bounsIndex = null;
    var indexElement = 0;
                     
    for (var i = 0; i < (json.length); i++) {

       if (json[i]['has_bonus']) {
           var tmpIndex = json[i]['sell_date'].substring(0, 10);
           if (!bounsIndex || tmpIndex != bounsIndex) {
                indexElement = (!bounsIndex) ? (indexElement) : (indexElement+1);
                bounsIndex = tmpIndex
              
                objDateForBounus[indexElement] = bounsIndex;
           }

          if (!objForBonus[indexElement]){
              objForBonus[indexElement] = 0;
          }

          objForBonus[indexElement] = objForBonus[indexElement] + parseInt(json[i]['product_count'], 10) 
       }
   }
   
   data.bonus = objForBonus;
   data.date = objDateForBounus;
   
   var tmpReport  = '';
   var sumBonus = 0; 
   for (var i = 0; i < (data.bonus.length); i++) {
       if (data.bonus[i] >= 20){
          var thisBounus = data.bonus[i]*0.5;
          sumBonus = sumBonus + thisBounus;
          tmpReport += '<span> Дата:'+data.date[i]+'. Бонус: <strong>'+thisBounus+'</strong></span><br>'; 
       } 
   }
   tmpReport += '<span>Cумма бонусов: <strong>' +sumBonus +'</strong></span>'
   data.sum = sumBonus;
   data.html = '<div>'+tmpReport+'</div>';
  
   
   return data;
   
}

function getUseOfCups(json) {
    
    var data = new Object;  
    
    data.type110 = 0; 
    data.type175 = 0;
    data.type250 = 0;
    data.type330 = 0;
     console.log('iii---', json);
    for (var i = 0; i < (json.length); i++) {
       
        if (json[i]['product_id'] == 5 || 
            json[i]['product_id'] == 6 ||
            json[i]['product_id'] == 7 ||
            json[i]['product_id'] == 8) {
              data.type110 = data.type110 + parseInt(json[i]['product_count'], 10);
            }
            
        if (json[i]['product_id'] == 1  || 
            json[i]['product_id'] == 2  ||
            json[i]['product_id'] == 3  ||
            json[i]['product_id'] == 4  ||
            json[i]['product_id'] == 9  ||
            json[i]['product_id'] == 10 || 
            json[i]['product_id'] == 13) {
              data.type175 = data.type175 + parseInt(json[i]['product_count'], 10);
            }
            
        if (json[i]['product_id'] == 11  || 
            json[i]['product_id'] == 12) {
              data.type250 = data.type250 + parseInt(json[i]['product_count'], 10);
            }
            
         if (json[i]['product_id'] == 14) {
             data.type330 = data.type330 + parseInt(json[i]['product_count'], 10);
            }
              
              
      }
      
      html = '<span><h3>Использовано стаканчиков:</h3>\n\
                    110 ст. <b>' + data.type110 +' шт.</b><br>\n\
                    175 ст. <b>' + data.type175 +' шт.</b><br>\n\
                    250 ст. <b>' + data.type250 +' шт.</b><br>\n\
                    330 ст. <b>' + data.type330 +' шт.</b><br></span>'
    return html;
}

function haveConnect() {
    console.log('haveConnect v 1.5'); //id="have_connect_indicator'+json+'"
     var element =  $('<div id="have_connect_indicator" style="position: fixed; font-size: 22px; color: red;" class="pull-left"><span class="glyphicon glyphicon-record"></span></div>');
                    $('#report_place').append(element);
                    
     setInterval(function() {
         isConnect();
      }, 3000);               
 
}

function isConnect () {
    
     var dataObj = {
        is_connect: true
    };
    
    $.ajax({
        type: "POST",
        url: "/site/Getajax",
        dataType: "JSON",
        data: dataObj,
        success: function (json) {
            {
                console.log('json-. connect v4.-', json)
               if (json) {
                   connectId = json;
                   $("#have_connect_indicator").find('.glyphicon-record').css("color", "#57b257");
               }
            }
        },
        error: function() {
            $("#have_connect_indicator").find('.glyphicon-record').css("color", "red");
            console.log("Ошибка выполнения"); 
        }
    });
}
////=================>
function addCalculator() {
    var element = $('<div id="calculator">\n\
                    <div id="sum_calculator"></div>\n\
                    <button style="" onclick="clearCalc()" type="button" class="btn btn-default">Обнулить</button></span>');
    //class="report-inf-class-user"
    $('#report_place').append(element);
    $("#sum_calculator").text(0);
}

function clearCalc() {
     $("#sum_calculator").text(0);
}