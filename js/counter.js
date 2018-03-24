var counter = (function(){
    var count =1;
    return function(num)
        {
        if(num==undefined)
            return count++;	
        else
            {
            return count=0;	
            }
        }
}());