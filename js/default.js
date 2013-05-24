$(function(){
	$("input:text").each(function ()
	{	
	    var v = this.value;
	    $(this).blur(function ()
	    { 
	        if (this.value.length == 0)
	    	{
	    		this.value = v;
	    	}
	    }).focus(function ()
	    {
	    	if (this.value == v)
    		{
    			this.value = "";
    		}	        
	    }); 
	});
});