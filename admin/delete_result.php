<?php
include("../connection.php");
$reg=$_REQUEST["f_id"];
$query="delete from res where re_id='$reg'";
if(mysqli_query($con,$query))
{
	header("location:../admin/view_result.php?del=1");
	
}
else
{
 header("location:../admin/view_result.php.php?del=0");
}

?>