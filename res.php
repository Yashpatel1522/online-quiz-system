<?php
include('header.php');
include('menu.php');
include('connection.php');
?>
<?php
 $query="insert into res (r_id,l_id,type,marks) values ('".$_SESSION["uid"]."','".$_SESSION["cid"]."','".$_REQUEST["type"]."','".$_SESSION["ans"]."')";
$res=mysqli_query($con,$query);
?>
<div class="container">
	<h1 align="Center">Result</h1>
	<h2 align="center" style="color:green"><?php echo $_SESSION["unm"]. " Your Score is as under"; ?><br>
<table align="center" width="430px" height="300px" style="font-size:25px;border:solid 2px tomato;box-shadow:black 5px 5px 5px">
<?php
$select="select * from register where r_id='".$_SESSION["uid"]."'";
$result=mysqli_query($con,$select);
if($row=mysqli_fetch_array($result))
{	
	echo"<tr><td colspan='2' align='center'><img src='upload/$row[8]' height='100px' width='100px'></img></td></tr>";	
	echo"<tr><td><b>Name:</td><td>".$row[1]."</b></td></tr>";
}
$select1="select * from category where co_id='".$_SESSION["cid"]."'";
$result1=mysqli_query($con,$select1);
if($row=mysqli_fetch_array($result1))
{
	echo"<tr><td><b>Subject:</td><td>".$row[1]."</b></td></tr>";
}
?>
	
	<tr><td><b>correct answers:</b></td>
	<td><?php echo $_SESSION["ans"];?></td>
	</tr>
	
	<tr><td><b>wrong answers:</b></td>
	<td><?php echo $_SESSION["wrong"];?></td>
	</tr>
	
	<tr><td><b>unanswered questions:</b></td>
	<td><?php echo $_SESSION["unans"];?></td>
	</tr>
	
	
	<tr><td><b>answered questions</b></td>
	<td><?php echo $_SESSION["answered"];?></td>
	</tr>		
	
	</table><br><br>
	<center>
	<table width="50%">
	<tr>
		<td colspan="4" align="center"><h1>Test Review</h1></td>
	</tr>
	<?php
		$que=explode(" ",$_SESSION["w"]);
		$a=explode(" ",$_SESSION["a"]);
		for($i=0;$i<=sizeof($que)-1;$i++)
		{
			$type="test_".$_REQUEST["type"];
			$query="SELECT * FROM question where q_id='".$que[$i]."'";
			$result=mysqli_query($con,$query);
			while($row1=mysqli_fetch_array($result))
			{
		    	echo"<tr><td colspan='4'><h3>".$row1[2]."</h3></td></tr>";
        	    echo"<tr><td ><h4 style='color:black;'>A :".htmlentities($row1[3])."</h3></td>";
				echo"<td><h4 style='color:black;'>B :".htmlentities($row1[4])."</h3></td>";
				echo"<td><h4 style='color:black;'>C :".htmlentities($row1[5])."</h3></td>";
				echo"<td><h4 style='color:black;'>D :".htmlentities($row1[6])."</h3></td></tr>"; 				
				echo"<tr><td><h4 style='color:red;'>You Selected ".htmlentities($a[$i])."</h3></td></tr>"; 				
				echo"<tr><td><h4 style='color:green;'>Answer ".htmlentities($row1[7])."</h3></td></tr>"; 				
			}
		}	
	?>	
	</table>
	</center>
</font>	
</table>
</div>
<?php
include('footer.php');
?>