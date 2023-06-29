<script type="text/javascript" language="javascript">
function check_valid()
{
    var expemail=/^[A-Za-z0-9]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
	var exppwd=/^[A-Za-z0-9]{6,8}$/;
    var email=document.form.em.value;
    var pwd=document.form.pass.value;
    if(email=="")
	{
		//alert("Enter Your E-mail");
		document.getElementById('message').innerHTML="Please Enter Your Email Id";
		document.form.em.focus();
		return false;
	}
	 else if(!expemail.test(email))
    {
		document.getElementById('message').innerHTML="Invalid Email Id";
		 document.form.em.focus();
		 return false;
	}
     if(pwd=="")
	{
		document.getElementById('message1').innerHTML="Enter Your Password";
		document.form.pass.focus();
		return false;
	}
	else if(!exppwd.test(pwd))
	{
		document.getElementById('message1').innerHTML="Enter Only Character & Numbers in password with length 8 or more";
		document.form.pass.focus();
		return false;
	}
}
</script>
<html>
    <head>
        <?php
        include("header.php");
        ?>
        <?php
        include("menu.php");
        ?>
         <link rel="stylesheet" type="text/css" href="mystyle.css">  
          <title> login form </title>
        </head>
        <body>
  	<div class="container">
		  <center>			 
        <form name="form" id="contact" method="post"   action="login_action.php" onsubmit="return check_valid();"><br>
               <h4 align="center">Login Here</h1>
			   <?php
					if(isset($_REQUEST["msg"]))
					{
						if($_REQUEST["msg"]==0)
						{
							echo "<font color='red'>Invalid Email or Password</font>";
						}
					}
			  ?>
                <fieldset><br>
                <input type="text" name="em" placeholder="Your Email" size="27">
				<label class="message" id="message" style="color:red"></label><br><br>
		</fieldset>
		<fieldset>
                <input type="password"  name="pass" placeholder="Your Password">
				<label class="message" id="message1" style="color:red"></label><br><br>
		</fieldset>
		<fieldset>
   		<button name="submit" type="submit" value="submit">submit </button>
    		</fieldset>
                <center> <a href ="reg1.php" class="btn btn-primary" style="width:240px;height:40px;padding-top:10px">New Registration</a></center>
</center>
            </div>
</form>
<?php
include("footer.php")
?>
</body>

</html>