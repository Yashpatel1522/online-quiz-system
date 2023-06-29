<?php
include("../connection.php");
	$id=$_REQUEST['id'];
	$sql="delete from reg where r_id='$id'";
	if(mysqli_query($con,$sql))
	{
		header("Location:view_user.php");
	}
?>