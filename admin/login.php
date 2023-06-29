<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle1.css">  
</head> 
 <body background="../images/abg.jpg" style="background-size:cover"> 
 <form name="form" method="post" action="login_action.php"><br><br><br><br><br><br><br><br>
<br><br> <?php
      if(isset($_GET["msg"]))
      {
       if($_GET["msg"]==0)
          echo "<center><font color='red'>Invalid Username Or Password</font></center>";
      }  
      ?>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Admin Login</h1>
			</div>
			<div class="login-form">
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Email" name="em" required>
	                </div>
				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="Password" name="pass" required>
				</div>
               		<input type="submit" name="submit" value="LOGIN" class="btn" style="color:yellow">
                	</div>
		</div>
	</div>     
</form>
<br><br>
</body>
</html>




