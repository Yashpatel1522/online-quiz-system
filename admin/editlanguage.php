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
<?php
    include("../connection.php");
    $id=$_GET['id'];
    $query="SELECT *FROM langunge WHERE l_id=".$id;
    $result=mysqli_query($con,$query);
?>
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
        while($row=mysqli_fetch_array($result))
		{
			
        ?>
     <div class="content">
    <form name="form" method="post" action="update_language.php?id=<?php echo $row['l_id']?>" enctype="multipart/form-data" onsubmit="return check_valid();">
    <center>
    <table border=0 height="300px">
        <th colspan=2><h2>Edit Language</h2></th>
        <tr>
            <td>Language Name</td>
            <td><input type="text" name="lname" value="<?php echo $row['l_name']?>"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><label class="message" id="message" style="color:red"></label></td>
        </tr>
        <tr>
            <td style="vertical-align:top">Language Logo</td>
            <td><img src="../upload/<?php echo $row['l_logo']?>" height="100px" width="100px"><br><br>
            <input type="file" name="limage">
            <input type="hidden" name="hidden"required value="<?php echo $row['l_logo']?>"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><label class="message1" id="message" style="color:red"></label></td>
        </tr>
        <tr>
            <td colspan=2 align="center"><input type="submit" value="UPDATE" name="submit">
            <input type="RESET" value="CANCEL" name="reset"></td>
        </tr>
    </table>
</center>
</div> 
<?php
        }
        include("foot.php");
        ?>