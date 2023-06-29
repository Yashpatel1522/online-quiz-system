<?php
    include("../connection.php");
    $qid=$_REQUEST['qid'];
    $lid=$_POST['l_id'];
    $question=$_POST['quw'];
    $option1=$_POST['a'];
    $option2=$_POST['b'];
    $option3=$_POST['c'];
    $option4=$_POST['d'];
    $ans=$_POST['answer'];

 echo $query="UPDATE `question` SET `l_id`='$lid',`q_name`='$question',`q_opt1`='$option1',`q_opt2`='$option2',`q_opt3`='$option3',`q_opt4`='$option4',`q_ans`='$ans' WHERE q_id='$qid'";
   // echo $query;
    $result=mysqli_query($con,$query);
    if($result)
    {
        header("location:view_question.php?msg=1");
    }
    else
    {
        header("location:view_question.php?msg=0");
    }

?>