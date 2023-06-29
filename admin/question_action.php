<?php
    include("../connection.php");
    $lid=$_POST['l_id'];
    $question=$_POST['quw'];
    $option1=$_POST['a'];
    $option2=$_POST['b'];
    $option3=$_POST['c'];
    $option4=$_POST['d'];
    $ans=$_POST['answer'];

    $query="INSERT INTO `question`(`l_id`, `q_name`, `q_opt1`, `q_opt2`, `q_opt3`, `q_opt4`, `q_ans`) VALUES
 ('$lid','$question','$option1','$option2','$option3','$option4','$ans')";
//echo $query
    $result=mysqli_query($con,$query);
    if($result)
    {
       header("location:view_question.php?msg=1");
    }
    else
    {
       header("location:question.php?msg=0");
       echo mysqli_error($con);
    }
?>
