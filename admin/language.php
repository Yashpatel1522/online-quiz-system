<script type="text/javascript" language="javascript">
function check_valid()
{
    var expemail=/^[A-Za-z0-9]{2,10}$/;
    var name=document.form.lname.value;
    var image=document.form.limage.value;
    if(name=="")
	{
		document.getElementById('message').innerHTML="Please Enter Language Name";
		document.form.lname.focus();
		return false;
	}
	 else if(!expemail.test(name))
    {
		document.getElementById('message').innerHTML="Only alphabet and numbers allowed";
		 document.form.lname.focus();
		 return false;
	}
     if(image=="")
	{
		document.getElementById('message1').innerHTML="Select any image to upload";
		document.form.limage.focus();
		return false;
	}	
}
</script>
<html>
<head>
    <title>LANGUAGE</title>
</head>
<body>
<?php
        include("hea.php");
        ?>
        <?php
        include("menu1.php");
        ?>
 <div class="content">
     <br><br>
    <form name="form" method="post" action="language_action.php" enctype="multipart/form-data" onsubmit="return check_valid();">
   <center>
    <table border=0 height="200px">
        <th colspan=2>Add Language</th>
        <tr>
            <td>Language Name</td>
            <td><input type="text" name="lname"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><label class="message" id="message" style="color:red"></label></td>
        </tr>
        <tr>
            <td>Language Logo</td>
            <td><input type="file" name="limage"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><label class="message" id="message1" style="color:red"></label></td>
        </tr>
        <tr>
            <td colspan=2 align="center"><input type="submit" value="ADD" name="submit">
            <input type="reset" value="CANCEL" name="reset"></td>
        </tr>
    </table>
   </form>
 <?php
      echo "<table border=0 width='700px'><tr class='t_heading'>";
      echo "<td>Language Id</td>";
      echo "<td>Language Name</td>";
      echo "<td>Logo</td>";
      echo "<td>Edit</td>";
      echo "<td>Delete</td>";  
      include("../connection.php");
      $query="SELECT *FROM langunge";
      $result=mysqli_query($con,$query);
      while($row=mysqli_fetch_array($result))
      {
        echo "<tr>";
        echo "<td class='td_heading'>".$row[0]."</td>";
        echo "<td class='td_heading'>".$row[1]."</td>";
        //echo "<td>".$row[2]."</td>";
        echo '<td class="td_heading"><img src="../upload/'.$row[2].'" width="100px" height="50px"></td>';
        echo '<td class="td_heading"><a href="editlanguage.php?id='.$row[0].'" class="link" >Edit</a></td>';
        echo '<td class="td_heading"><a href="deletelanguage.php?id='.$row[0].'" class="link">Delete</a></td>';
     
        echo "</tr>";
    }
 ?>
 </table>
 </div>
 <?php
        include("foot.php")
        ?>


</body>
</html>

 


