
	<h2> <div class="container py-md-2"> 	
	<div style="float:right">
	    <input type="button" style="color:#333399"  size="13" name="d2" readonly="readonly"  disabled="disabled ">
    </div>
	<br/>
	</div></h2>
	<br/>
    <script> 
    <!-- 
    // 
	if(sessionStorage.getItem("min"))
	{
		min=sessionStorage.getItem("min");
		seconds=sessionStorage.getItem("seconds");
	}
	document.counter.d2.value='5' 
    function display()
	{
	
		if (seconds<=0)
		{	 
			min-=1 
			seconds=60
		} 
		if (min<=-1)
		{ 
			seconds=0 
			min+=1 
		} 
		if(min==0 && seconds==0)
			{
				sessionStorage.removeItem("min");
				sessionStorage.removeItem("seconds");
				window.location="result.php"; 
			}
		else 
			seconds-=1 
			document.counter.d2.value="Time Left "+min+":"+seconds 
			sessionStorage.setItem("min",min);
			sessionStorage.setItem("seconds",seconds);		
			setTimeout("display()",1000) 
			
		} 
    display()
    --> 
    </script>
	    <SCRIPT LANGUAGE="JavaScript"><!--
    setTimeout('document.tform.submit()',300000);
    //--></SCRIPT>
	</div>