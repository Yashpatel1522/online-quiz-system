<?php
include("../connection.php");
	$id=$_REQUEST['id'];
	$sql="delete from contect where c_id='$id'";
	if(mysqli_query($con,$sql))
	{
		header("Location:view_feedback.php");
	}
?>