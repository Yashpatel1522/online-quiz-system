<html>
<head>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
	<?php 
	error_reporting(0);
	session_start(); ?>
    <div class="header">
	<div id="logo">
        <img src="images/logo1.png" width="200px" height="150px">
	</div>
	<div id="name">
	<font color="gold">O</font>nline
	<font color="gold">E</font>xam</font>
	<font color="gold">Q</font>uiz
	</div>
	<?php
		if(isset($_SESSION["unm"]))
		{
			echo "<b style='float:right;padding-top:20px;padding-right:20px;'>Welcome ".$_SESSION["unm"]."</b>";
		}
	?>
	</div>        
</div>
</body>
</html>