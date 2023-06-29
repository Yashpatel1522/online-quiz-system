<?php
    include("../connection.php");
    $lname=$_POST['lname'];




    $limage=$_FILES['limage']['name'];
    $filename=$_FILES['limage']['tmp_name'];

  

	move_uploaded_file($filename,"../upload/".$limage);
    $query="INSERT INTO langunge(l_name,l_logo) VALUES('".$lname."','".$limage."')";
   // echo $query;
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
