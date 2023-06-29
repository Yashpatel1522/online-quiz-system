<?php
    include("../connection.php");
    $id=$_REQUEST['id'];
    $lname=$_POST['lname'];
    $hidden=$_POST['hidden'];
    $limage=$_FILES['limage']['name'];
    $filename=$_FILES['limage']['tmp_name']; 

    if(isset($_FILES['limage']['name']))
    {    
	move_uploaded_file($filename,"../upload/".$limage);
    //$query="INSERT INTO langunge(l_name,l_logo) VALUES('".$lname."','".$limage."')";
 echo   $query="update langunge set l_name='".$lname."',l_logo='".$limage."' where l_id='".$id."'";
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
}
?>