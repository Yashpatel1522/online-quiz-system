<?php
	include("../connection.php");
	$query="select * from contect";
	$result=mysqli_query($con,$query);
	include('hea.php');
    include('menu1.php');
?>
<br />

<div class="content">

	
<center><h1>View User Feedback</h1></center>
<br />
<center><table border="0" width="80%">
	<tr class="t_heading">
		<td>Id</td>
		<td>Name</td>
		<td style="width:250px">Email</td>
        <td>message</td>
		<td style="width:100px">Action</td>
		
	</tr>
<?php
	while($row=mysqli_fetch_array($result))
	{
		echo"<tr>";
		echo"<td class='td_heading'>$row[0]</td>";
		echo"<td class='td_heading'>$row[1]</td>";
		echo"<td class='td_heading'>$row[2]</td>";
		echo"<td class='td_heading'>$row[3]</td>";
		echo"<td style='width:100px' class='td_heading'><a class='link' href='delete_feedback.php?id=$row[0]'>Delete</a></td>";	
		echo"</tr>";
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