<?php
    include("../connection.php");
    $id=$_GET['id'];
    $query="DELETE FROM langunge WHERE l_id=".$id;
    $result=mysqli_query($con,$query);
    if($result)
    {
        header("location:language.php?msg=1");     
    }
    else
    {
        header("location:language.php?msg=0");
    }
?>