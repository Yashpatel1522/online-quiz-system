<?php
session_start();
include("../connection.php");
if(isset($_POST['submit']))
{
    $query="SELECT * FROM `admin_login` WHERE `a_email`='$_POST[em]' and `a_password`='$_POST[pass]'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION['aid']=$_POST['em'];
        header("location:index.php");
    }
    else{
        echo "<script> alert('incorrect password');</script>"; 
           }
 }
 ?>

