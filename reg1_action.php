<?php
    include("connection.php");
    $fname=$_POST["firstname"];
    $lname=$_POST["lastname"];
    $gender=$_POST["gender"];
    $mobileno=$_POST["mobileno"];
    $emailid=$_POST["em"];
    $password=$_POST["pass"];
   
    $select="SELECT *FROM reg WHERE email='".$emailid."'";
    $result=mysqli_query($con,$select);
    if(mysqli_num_rows($result)==0)
    {
   echo   $query="INSERT INTO reg(fname,lname,gender,mobileno,emailid,password) VALUES('".$fname."','".$lname."','".$gender."','".$mobileno."','".$emailid."','".$password."')";
      $result=mysqli_query($con,$query);
      if($result)
      {
        header("Location:login.php");

      }      
      else
      {
        header("Location:reg1.php?msg=0");
      }  
    }
?>


