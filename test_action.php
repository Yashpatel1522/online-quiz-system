<?php
include ('connection.php');
$i=$_REQUEST['id'];
if(isset($_POST["back"]))
{
	$_SESSION['q_id']=$i-1;
	$answer=$_REQUEST['a'];
	if(isset($_SESSION["unasr"]))
	{
		$_SESSION["unasr"]=$_SESSION["unasr"]-1;
	}	

$_SESSION["count"]=$_SESSION["count"]-1;
//$_SESSION['q_id']=$i+1;
 $query="select* from test where t_id='$i'";
 $result=mysqli_query($con,$query);
 $row=mysqli_fetch_array($result);
 	if($answer==$row[7])
	{
		if(isset($_SESSION["r_answer"]))
		{
			$_SESSION["r_answer"]=$_SESSION["r_answer"]-1;
		}
		else
		{
			$_SESSION["r_answer"]=1;
		}	
	}

header("location:../user_test.php");
exit();
}
else
{
$answer=$_REQUEST['a'];
if(isset($_REQUEST["a"]))
{
	if(isset($_SESSION["unasr"]))
	{
		$_SESSION["unasr"]=$_SESSION["unasr"]+1;
	}
	else
	{
		$_SESSION["unasr"]=1;
	}
}

$_SESSION["count"]=$_SESSION["count"]+1;
$_SESSION['q_id']=$i+1;
 $query="select* from question where q_id='$i'";
 $result=mysqli_query($con,$query);
 $row=mysqli_fetch_array($result);
 if($answer==$row[7])
{
	if(isset($_SESSION["r_answer"]))
	{
		$_SESSION["r_answer"]=$_SESSION["r_answer"]+1;
	}
	else
	{
		$_SESSION["r_answer"]=1;
	}	
}
header("location:test.php");
exit();
}

?>
