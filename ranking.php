<?php
include('connection.php');
include('header.php');
include('menu.php');
	if(isset($_REQUEST['cat']))
		{
			$c=$_REQUEST['cat'];
		}
	echo "<div class='container'>
	
	<center><font color='black'><h1>OUR TOP THREE</h1><form  action='' ></font><br><br>
	<div class='cent1'>
	<table><tr><td align='center'><b>Select Category</b><select name='cat' style='width:170px;height:30px'>";
	
	$select1="select * from langunge";
$result1=mysqli_query($con,$select1);

while($row=mysqli_fetch_array($result1))
{
	if($row['co_id']==$c)
	
		
		echo "<strong><option value='".$row['l_id']."' selected>".$row['l_name']."</option></strong>";
	
	
	else
		echo "<strong><option value='".$row['l_id']."'>".$row['l_name']."</option></strong>";
}
		echo "</select></td>";
		echo "<td><input type='submit' value='view' style='height:30px;width:100px;background:black;color:tomato;font-size:medium'></td></table></form></center>";
		
		
		echo"<center><h1 align='center'>".$row['l_name']."</h1>";
					echo"<table border='0' width='30%'><tr>";
					echo"<td><b>Name</td></b>";
					echo"<td align='right'><b>Marks</td></b></b>";
					echo"</tr>";
					echo "<tr><td colspan='4'><hr></td></tr>";
		$select2="";
		if(isset($_REQUEST['cat']))
		{
			$select2="select * from res where l_id='".$_REQUEST['cat']."' order by marks desc limit 3";
		}
		else
		{
			$select2="select * from res order by marks desc limit 3";
		}
		$result2=mysqli_query($con,$select2);
				while($row1=mysqli_fetch_array($result2))
				{		
                    if($row1[4]!="0")
                    {			
				$select3="select * from reg where r_id='$row1[1]'";
				$result3=mysqli_query($con,$select3);
					while($row2=mysqli_fetch_array($result3))
					{
						echo"<tr>";
						echo "<td>".$row2[1];
								
									echo"</td>";	
					}
					echo"<td align='right'>";
						echo $row1[4]."</td>";
						echo "<tr><td colspan='4'><hr></td></tr>";						
				}
            }
	
		echo "</div></table></center></div>";	
        include("footer.php");	
?>