<script type="text/javascript" language="javascript">
function check_valid()
{
	var expname=/^[A-Za-z]{1,20}$/;
	var expmno=/^\d{10}$/;
	var expemail=/^[A-Za-z0-9]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
	var exppwd=/^[A-Za-z0-9]{4,10}$/;
    var expcpwd=/^[A-Za-z0-9]{4,10}$/;
	var fname=document.form.firstname.value;  
	var lname=document.form.lastname.value;
    var mno=document.form.mobileno.value;
	var email=document.form.em.value;
    var pwd=document.form.pass.value;
    var cpwd=document.form.cpass.value;

	if(fname=="")
	{
		document.getElementById('message').innerHTML="Please Enter Your Firstname";
		document.form.firstname.focus();
		return false;
	}
	else if(!expname.test(fname))
	{
		document.getElementById('message').innerHTML="Enter only character in firstname";
		document.form.firstname.focus();
		return false;
	}
	if(lname=="")
	{
		document.getElementById('message1').innerHTML="Please Enter Your Lastname";
		document.form.lastname.focus();
		return false;
	}
	else if(!expname.test(lname))
	{
		document.getElementById('message1').innerHTML="Enter only character in Lastname";
		document.form.lastname.focus();
		return false;
    }
    if(mno=="")
	{
		document.getElementById('message2').innerHTML="Enter your mobile no.";
		document.form.mobileno.focus();
		return false;
	}
	else if(!expmno.test(mno))
	{
		document.getElementById('message2').innerHTML="Invalid mobile no.";
		 document.form.mobileno.focus();
		 return false;
	}
    if(email=="")
	{
		document.getElementById('message3').innerHTML="Enter your email id";
		document.form.em.focus();
		return false;
	}
	else if(!expemail.test(email))
    {
		document.getElementById('message3').innerHTML="Invalid Email Id";
		 document.form.em.focus();
		 return false;
	}
    if(pwd=="")
	{
		document.getElementById('message4').innerHTML="Enter your password";
		document.form.pass.focus();
		return false;
	}
	else if(!exppwd.test(pwd))
	{
		document.getElementById('message4').innerHTML="Enter Only Character & Numbers in password with length 8 or more";
		document.form.cpass.focus();
		return false;
	}
    if(cpwd=="")
	{
		document.getElementById('message5').innerHTML="Retype your password";
		document.form.cpass.focus();
		return false;
	}
	else if(!expcpwd.test(cpwd))
	{
		document.getElementById('message5').innerHTML="Enter Only Character & Numbers in password with length 8 or more";
		document.form.cpass.focus();
		return false;
	}
	
}
</script>

<html>
<head>
      
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <title>
        registration form 
    </title>
    </link>
</head>
<body>

<?php
        include("header.php");
        ?>
        <?php
        include("menu.php");
        ?>
  	<div class="container">
    	<form name="form" method="post" id="contact"  action="reg1_action.php" onsubmit="return check_valid();"><br>
        <h4 align="center">Registration</h4>
        <fieldset>
        <input type="text" name="firstname"size="25" placeholder="Firstname">
		<label class="message" id="message" style="color:red"></label><br><br>
        </fieldset>
		<fieldset>
        <input type="text" name="lastname"size="25" placeholder="Lastname">
		<label class="message" id="message1" style="color:red"></label><br><br>
        <fieldset>
        <select name="language">`
            <option vaule="HTML">HTML</option>
            <option vaule="PHP">PHP</option>
            <option vaule="JAVA">JAVA</option>
            <option vaule="CPP">CPP</option>
        </select></fieldset>
        <fieldset><font color="white"> Gender
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female</font></fieldset>
		<fieldset>
        <input type="text" name="mobileno" size="25" placeholder="Mobile number">
		<label class="message" id="message2" style="color:red"></label><br><br>
        </fieldset>
	<fieldset>
        <input type="text" name="em" size="32" placeholder="Email">
		<label class="message" id="message3" style="color:red"></label><br><br>
        </fieldset>
	<fieldset>
        <input type="password"  name="pass" size="22" placeholder="Password">
		<label class="message" id="message4" style="color:red"></label><br><br>
        </fieldset>
	<fieldset>
        <input type="password"  name="cpass" size="22" placeholder="Confirm Password">
		<label class="message" id="message5" style="color:red"></label><br>
        <br>
        <fieldset>
   		<button name="submit" type="submit" value="submit">submit </button>
    		</fieldset>
        </div>
</form>
<?php
   if(isset($_GET["msg"]))
    {
        if($_GET["msg"] =="1")
            echo '<script>alert("record inserted sucessfully")</script>';
        else if($_GET["msg"] == "0")
            echo "<font color='red'>Record Not Inserted</font>";
    }
    ?>

        <?php
        include("footer.php")
        ?>

    </body>

</form>       
</html>


