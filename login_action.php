<?php
session_start();
include("connection.php");
 echo   $query="SELECT * FROM `reg` WHERE `emailid`='$_POST[em]' and `password`='$_POST[pass]'";
    $result=mysqli_query($con,$query);
    if($row=mysqli_fetch_array($result))
  //  if(mysqli_num_rows($result)==1)
    {
        $_SESSION['uid']=$row[0];
        $_SESSION['unm']=$row[1];
        header("location:home.php");        
    }
    else
    {
      header("location:login.php?msg=0");
    }
 ?>

