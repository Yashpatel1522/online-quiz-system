<?php
	include("../connection.php");
	$query="select * from question";
	$result=mysqli_query($con,$query);
	include('hea.php');
    include('menu1.php');
    $c="";
?>
<br />

<div class="content">
<center><h1>List Of All Questions</h1></center>
<br />
<form method="post" action="view_question.php">
		  
          <center>
          <table height="50px"><tr class="t_heading"><td>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Category</strong><select name="cat" style="height:30px;width:150px">
          </br>
         
          <?php
          include("../connection.php");
          if(isset($_REQUEST['cat']))
          {
              $c=$_REQUEST['cat'];
          }
          $query1="select* from langunge";				
          $result1=mysqli_query($con,$query1);
          while($row1=mysqli_fetch_array($result1))
          {
              if($row1['l_id']==$c)
                  echo "<strong><option value='".$row1['l_id']."' selected>".$row1['l_name']."</option></strong>";
              else
                  echo "<strong><option value='".$row1['l_id']."'>".$row1['l_name']."</option></strong>";
          }
          ?>
          </select>
          <input type="submit" value ="View Test"><br><br> <a href="question.php">ADD NEW QUESTION</a><br>
          </center>
        </td></tr></table>
        <br>
<center><table border="0" width="80%">
	<tr class="t_heading">
		<td>Id</td>
		<td>Question</td>
		<td>Option A</td>
        <td>Option B</td>
        <td>Option C</td>
        <td>Option D</td>
        <td>Answer</td>
		<td style="width:100px" colspan="2">Action</td>
		
	</tr>
<?php
if(isset($_REQUEST['cat']))
{
    $cat=$_REQUEST['cat'];
 $i=1;
       $query="select* from question where l_id='$cat'";
        $result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		echo"<tr>";
		echo"<td class='td_heading'>$row[0]</td>";
		echo"<td class='td_heading'>$row[2]</td>";
		echo"<td class='td_heading'>$row[3]</td>";
		echo"<td class='td_heading'>$row[4]</td>";
        echo"<td class='td_heading'>$row[5]</td>";
		echo"<td class='td_heading'>$row[6]</td>";
        echo"<td class='td_heading'>$row[7]</td>";
        echo"<td style='width:100px' class='td_heading'><a class='link' href='edit_que.php?id=$row[0]'>Edit</a></td>";
		echo"<td style='width:100px' class='td_heading'><a class='link' href='delete_question.php?id=$row[0]'>Delete</a></td>";	
		echo"</tr>";
	}
}
?>
</table>
<br />
</center>
</div>
<br><br><br><br><br><br>
<?php
	include('foot.php');
?>