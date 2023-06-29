<?php
    $con=mysqli_connect("localhost","root","");
    if($con)
    {
       // echo "connection done";
    }
    else
    {
      //  echo "connection not done";
    }
    $db =mysqli_select_db($con,"quiz");   
    if($db)
    {
       // echo"database selected";
    }
    else
    {
       // echo"database not selected";
    }
?>
