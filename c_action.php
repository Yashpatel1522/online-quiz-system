<?php
    include("connection.php");
    $c_name=$_POST["name"];
    $c_email=$_POST["em"];
    $c_mno=$_POST["mno"];
    $c_message=$_POST["msg"];
   
    $select="SELECT *FROM contact WHERE em='".$c_email."'";
    $result=mysqli_query($con,$select);
    if(mysqli_num_rows($result)==0)
    {
      $query="INSERT INTO contect(c_name,c_email,c_message) VALUES('".$c_name."','".$c_email."','".$c_message."')";
      $result=mysqli_query($con,$query);
      if($result)
      {
         header("Location:contact1.php?msg=1");

      }      
      else
      {
        header("Location:contact1.php?msg=0");
      }  
    }
    else
    {
        header("Location:contact1.php?msg=2");
    }
?>

