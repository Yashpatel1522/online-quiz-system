<?php 
require_once("hea.php");
require_once("menu1.php");
?>		 
    <div class="content">
	<font size=+3 color= "#002366">
         <h4 align="center">RESULT</h4>
         </font>
		 <?php
			if(isset($_REQUEST["del"]))
			{
				echo "<center><div id='flag' style='color:'#002366'; font-size:small; font-weight:bold;'> Result Deleted Successfully</div></center>";
			}
			?>
		<form method="get" action="view_result.php">		  
		<center>
        <table><tr><td class="t_heading">
		<strong>Select Category</strong> <select name="cat">
		</br>
		<?php
		include("../connection.php");
		if(isset($_REQUEST['cat']))
		{
			$c=$_REQUEST['cat'];
		}
		$query="select* from langunge";				
		$result=mysqli_query($con,$query);
		while($row=mysqli_fetch_array($result))
		{
			if($row['l_id']==$c)
				echo "<strong><option value='".$row['l_id']."' selected>".$row['l_name']."</option></strong>";
			else
				echo "<strong><option value='".$row['l_id']."'>".$row['l_name']."</option></strong>";
		}
		?>
		</select>
		<input type="submit" value ="View Result" style="width:100px">
    </td></tr></table>
		</center>
		</br>
		<table border="0" align="center" width="400px"  >
		    <tr class="t_heading">
		     <th>Id</th>
			 <th>Name</th>
			 <th>Marks</th>
             <th>Action</th>  
		</tr>
		<?php
	
			$cat=$_REQUEST['cat'];
			$type=$_REQUEST['r1'];
			
	
				$query="select* from res where l_id='$cat'";
				$result=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($result))
				{
					echo"<tr>
					<td class='td_heading'><strong>".htmlentities($row["re_id"])."</strong></td>";
					
							$select2="select * from reg where r_id='$row[r_id]'";
							$result2=mysqli_query($con,$select2);
							if($row2=mysqli_fetch_array($result2))
							{
								echo"<td class='td_heading'><strong>".$row2[1]."</strong></td>";
							}
					echo"<td class='td_heading'><strong>".htmlentities($row["marks"])."</strong></td>
			        <td style='width:100px' class='td_heading'><a class='link' href='../admin/delete_result.php?f_id=".$row["re_id"]."'>Delete</a></td>
		    </tr>";
				}
		
		?>
		</table>
		 </div>
		 <?php
include("foot.php");
?>
