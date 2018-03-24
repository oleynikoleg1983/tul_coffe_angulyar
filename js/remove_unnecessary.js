function remove_unnecessary(nextid){
    var delElement = $('#last');
    if(delElement)
       {
       $(delElement).remove();
       }
    for(var i=(nextid-1); i>0; i--)
       {
       var delElement = $("#next"+(i)); 						
       if(delElement)
           {			
            while(delElement = delElement.lastChild)				   			
               {													
                $(delElement).remove();		
               }	
            var delElement = $("#next"+(i)); 
           $(delElement).remove();		
           }    
       }    
   
 }