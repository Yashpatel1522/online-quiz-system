<script type="text/javascript" language="javascript">
function check_valid()
{
    var expemail=/^[A-Za-z0-9?]{10,100}$/;
    var quw=document.form.quw.value;
    var a=document.form.a.value;
    var b=document.form.b.value;
    var c=document.form.c.value;
    var d=document.form.d.value;
    var ans=document.form.answer.value;
    if(quw=="")
	{
		document.getElementById('message').innerHTML="Write your question here";
		document.form.quw.focus();
		return false;
	}
	 else if(!expemail.test(quw))
    {
		document.getElementById('message').innerHTML="Question should be atleast 10 character long";
		 document.form.quw.focus();
		 return false;
	}
     if(a=="")
	{
		document.getElementById('message1').innerHTML="Please write something";
		document.form.a.focus();
		return false;
	}	
    if(b=="")
	{
		document.getElementById('message2').innerHTML="Please write something";
		document.form.b.focus();
		return false;
	}	
    if(c=="")
	{
		document.getElementById('message3').innerHTML="Please write something";
		document.form.c.focus();
		return false;
	}	
    if(d=="")
	{
		document.getElementById('message4').innerHTML="Please write something";
		document.form.d.focus();
		return false;
	}   	
}
</script>
<?php 
    include("../connection.php");   
?>
<html>
<head> <title>question</title>
</head>
<body>
<?php
        include("hea.php")
        ?>
        <?php
        include("menu1.php")
        ?>
<div class="content">
<form name="form" method="post" action="question_action.php" enctype="multipart/form-data" onsubmit="return check_valid();">
<center>  
<table border=0>
        <th colspan=2>Question</th>
        <tr>
        <td>Language</td>
            <td><select name="l_id" required>
            <?php
                $query="SELECT *FROM langunge";
                $result=mysqli_query($con,$query);
		while($row=mysqli_fetch_object($result))
                {?>
                	<option value="<?php echo "$row->l_id"; ?>"><?php echo "$row->l_name"; ?></option>   
		<?php 
			}
            ?>         
</td>
</tr>
<tr>    
            <td>question</td>
            <td><textarea name="quw" rows="5" cols="50"></textarea><br>
        </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><label class="message" id="message" style="color:red"></label></td>
        </tr>
        <tr>
            <td>option1</td>
            <td><input type="text" name="a" size="30"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><label class="message" id="message1" style="color:red"></label></td>
        </tr>
        <tr> 
            <td>option2</td>
            <td><input type="text" name="b" size="30"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><label class="message" id="message2" style="color:red"></label></td>
        </tr>
        <tr> 
            <td>option3</td>
            <td><input type="text" name="c" size="30"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><label class="message" id="message3" style="color:red"></label></td>
        </tr>
        <tr> 
            <td>option4</td>
            <td><input type="text" name="d" size="30"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><label class="message" id="message4" style="color:red"></label></td>
        </tr>
            <tr>
                <td></td><Td>
                    <select name="answer" required>
                        <option value="">Select Answer</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
    </td>
    </tr>
    <tr>
        <td colspan="2" align="center"><label class="message" id="message4" style="color:red"></label></td>
    </tr>
    <tr>
     <td colspan=2 align="center"><input type="submit" value="ADD" name="submit"></td>
    </tr>
    </table>
    </center>
<?php
        if(isset($_GET["msg"]))
        {
            if($_GET["msg"]==1)
            {
                echo '<script>alert("Add successfully")</script>';
            }
            else if($_GET["msg"]==0)
            {
                echo '<script>alert("Failed to insert")</script>';
            }
        }
    ?>

</form>
</div>
<?php
        include("foot.php")
        ?>

</body>
</html>
