<html>
<head>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<?php
    error_reporting(0);
    session_start();
	if(!isset($_SESSION["aid"]))
	{
	 	header("location:login.php");
	}
?>
   <div class="header">
	<div id="logo">
        <img src="../images/6.png" width="200px" height="150px">
	</div>
</div>
</body>
</html>