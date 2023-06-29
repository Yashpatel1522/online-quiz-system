<?php
include("../connection.php");
	$id=$_REQUEST['id'];
	$sql="delete from question where q_id='$id'";
	if(mysqli_query($con,$sql))
	{
		header("Location:view_question.php");
	}
?>