<?php
	include("../connection.php");
	$query="select * from reg";
	$result=mysqli_query($con,$query);
	include('hea.php');
    include('menu1.php');
?>
<br />

<div class="content">

	
<center><h1>View User Details</h1></center>
<br />
<center><table border="0" width="80%">
	<tr class="t_heading">
		<td>Id</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Gender</td>
		<td>Email</td>
        <td>Mobile</td>
		<td style="width:100px;">Delete</td>
		
	</tr>
<?php
	while($row=mysqli_fetch_array($result))
	{
		echo"<tr>";
		echo"<td class='td_heading'>$row[0]</td>";
		echo"<td class='td_heading'>$row[1]</td>";
		echo"<td class='td_heading'>$row[2]</td>";
		echo"<td class='td_heading'>$row[3]</td>";
		echo"<td class='td_heading'>$row[5]</td>";
		echo"<td class='td_heading'>$row[6]</td>";
		echo"<td class='td_heading'><a class='link' href='delete_user.php?id=$row[0]'>Delete</a></td>";	
		echo"</tr>";
	}
?>
</table>
<br />
</center>
</div>
<br><br><br><br><br><br><br>
<?php
	include('foot.php');
?>