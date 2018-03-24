function getnewNextSelect(){
    
     var selected_type_lev1 = this.value;
     selected_type_lev1=parseInt(selected_type_lev1);
     var thisId = this.id;
     var nextid = counter();
     if(this.name!='selected')
        {
        this.name="sel1";
        if(thisId!='last')
           { 
            this.id="next"+nextid;
            remove_unnecessary(nextid);  
            if(selected_type_lev1)
             {
              new_lev_select(selected_type_lev1);
             }
           }
        else
           {
            this.id="next"+nextid;
            selected_type_lev1=parseInt(selected_type_lev1);
            if(selected_type_lev1)
               {
                new_lev_select(selected_type_lev1);
               }
           }
        }
 } 
   
