<html>
<head>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<?php
       include("header.php");
        ?>
        <?php
        include("menu.php");
        ?>

<script>
function check_valid()
{

    var name=/^[A-Za-z]{3,20}$/;
	var cname=document.cont.name.value;
	
	var email=/^[A-Za-z0-9]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
	var cemail=document.cont.em.value;
	
	var mobile=/^[0-9]{10}$/;
	var cmo=document.cont.mno.value;
	var msg=document.cont.msg.value;
	if(cname=="")
	{
	  document.getElementById('message').innerHTML="Enter your fullname";
	  document.cont.name.focus();
	 return false;
	}
	if(!name.test(cname))
	{
	  document.getElementById('message').innerHTML="only alphabet useed in name";
	  document.cont.name.focus();
	 return false;
	}
  if(cemail=="")
	{
	  document.getElementById('message1').innerHTML="Please enter your email id";
	  document.cont.em.focus();
	 return false;
	}
	if(!email.test(cemail))
	{
	  document.getElementById('message1').innerHTML="only email address add";
	  document.cont.em.focus();
	 return false;
	}
  if(msg=="")
	{
	  document.getElementById('message3').innerHTML="Please write your descriptive message";
	  document.cont.msg.focus();
	 return false;
	}
	 return true;	
}	
</script>         

<div class="container">  
  <form id="contact" name="cont" action="c_action.php" method="post" onsubmit="return check_valid();">
    <h4 align="center">Contact us</h4>
    <?php
					if(isset($_REQUEST["msg"]))
					{
						if($_REQUEST["msg"]==1)
						{
							echo "<font color='red'>Thank You For Writing Us</font>";
						}
            else
            {
              echo "<font color='red'>Error while submitting your message</font>";
            }
					}
			  ?>
     <fieldset>
      <input placeholder="Your name" type="text" name="name" autofocus>
      <label class="message" id="message" style="color:red"></label>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" name="em">
      <label class="message" id="message1" style="color:red"></label>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...."  name="msg"></textarea>
      <label class="message" id="message3" style="color:red"></label>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" value="submit">submit </button>
    </fieldset>
    </form>
</div>
  <?php
        include("footer.php")
        ?>
</body>
</html>

