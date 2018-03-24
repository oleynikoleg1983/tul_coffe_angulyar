function getnewSelect(){    
    var selected_type_lev1 = $('#sel1').val();
    selected_type_lev1=parseInt(selected_type_lev1);
    console.log(selected_type_lev1);
    var nextid = counter();
    remove_unnecessary(nextid);
    if(selected_type_lev1)
      {
       new_lev_select(selected_type_lev1);
      }
} 
   
  
   
