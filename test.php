<?php 
session_start();
require_once("header.php");
require_once("menu.php");
require_once("connection.php");
/*if(!isset($_SESSION["uid"]))
{
	header("location:login.php");
}*/
?>
<script type="text/javascript"> 
var seconds = 60;
var time=0;
      function secondPassed() {
          var minutes = Math.round((seconds - 30)/60),
              remainingSeconds = seconds % 60;
          if (remainingSeconds < 10) {
              remainingSeconds = "0" + remainingSeconds;
          }
          document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;		  
		  localStorage.setItem("timer", time);
          if (seconds == 0) {
              clearInterval(countdownTimer);
              document.frm.submit();
          } else {
          seconds--;
          }
      }
      var countdownTimer = setInterval('secondPassed()', 1000);
</script>
<script type="text/css">
.timer {
    width: 100px;
    font-size: 2.5em;
    text-align: center;
}
</script>
<div class="container">
<?php
if(isset($_REQUEST['id']))
{
$_SESSION['i']=1;
$_SESSION['unans']=-1;
$_SESSION['ans']=0;
$_SESSION['wrong']=0;
$_SESSION['answered']=0;
$cid=$_REQUEST['id'];
$_SESSION['cid']=$cid;
$_SESSION['w']=" ";
$_SESSION["a"]=" ";
$_SESSION["qid"]=0;
}
$que="select *from langunge where l_id='".$_SESSION['cid']."'";
$r=mysqli_query($con,$que);
while($row=mysqli_fetch_array($r))
{
echo"<h1 align='center'>".$row['l_name']."</h1>";
}
$query="";
echo "<form name='frm' action='test.php'>";
	if(isset($_REQUEST["q_id"]))
	{
		$_SESSION["qid"]=$_SESSION["qid"]." ".$_REQUEST["q_id"]; echo "<br>";
		$arr=explode(" ",$_SESSION["qid"]); 
		$arr1=implode(",",$arr);
		$where="where q_id NOT IN (". $arr1.") and l_id='".$_SESSION['cid']."' ORDER BY RAND() LIMIT 1";
		$query="SELECT * FROM question ".$where;		
	}
	else
	{
		$query="SELECT * FROM question where l_id='".$_SESSION['cid']."' order by rand() LIMIT ".$_SESSION['i'].",1";
	}
$result=mysqli_query($con,$query);
while($row1=mysqli_fetch_array($result))
{
if(isset($_REQUEST['op']))
	{
			$ans=$_REQUEST['op'];
			$ans1=$_REQUEST['ans'];
			$_SESSION["a"]=$_SESSION["a"]." ".$ans;
			if($ans1==$ans)
			{
				$_SESSION["ans"]=$_SESSION['ans'] + 1;
			}
			else
			{
				$_SESSION['wrong']=$_SESSION['wrong']+1;
				if(isset($_REQUEST["q_id"]))
				{
					$_SESSION["w"]=$_SESSION["w"]." ".$_REQUEST["q_id"];
				}				
			}		
	   	$_SESSION['answered']=$_SESSION['answered']+1;		
	}
	else
	{
	 	$_SESSION['unans']=$_SESSION['unans']+1;	
	}
	if($_SESSION['i']=="11")
    {
	    echo"<tr><td><h2><center><a href='res.php' style='color:black;'>Click On Below Link To View Your Result</a></center></h2></td></tr>";	     
		unset($_SESSION['i']);
   }
   else
   {	
   echo "<div class='timer' style='font-weight:bold;font-size:large;float:right;margin-right:50px;'><time id='countdown'>1:00</time></div><br>";
   echo"<div class='center'>";
   echo"<center><div class='contain1'><table width='80%' style='border:solid 2px black;background:black'>";
   echo"<tr><td><h2 style='color:tomato;'>".$_SESSION['i'].". ".htmlentities($row1[2])."</h2></td></tr>";
   echo"<tr><td><h3 style='color:tomato;'>A <input type='radio' value='A' name='op'>".htmlentities($row1[3])."</h3></td></tr>";
   echo"<tr><td><h3 style='color:tomato;'>B <input type='radio' value='B' name='op'>".htmlentities($row1[4])."</h3></td></tr>";
   echo"<tr><td><h3 style='color:tomato;'>C <input type='radio' value='C' name='op'>".htmlentities($row1[5])."</h3></td></tr>";
   echo"<tr><td><h3 style='color:tomato;'>D <input type='radio' value='D' name='op'>".htmlentities($row1[6])."</h3></td></tr>";
   echo "<input type='hidden' name='q_id' value='".$row1['q_id']."'>";
   echo "<input type='hidden' name='ans' value='".htmlentities($row1[7])."'>";
   echo"<tr><td align='center' colspan='2'>&nbsp;<input type='submit' value='  NEXT  ' name='next' style='background:tomato;color:black;font-weight:bold;border:none;padding:10px 20px 10px 20px;width:100px'></td></tr>";
   $_SESSION['i']=$_SESSION['i']+1;   
   echo"</table></div></center>"; 
   echo"</div>";
   }
}
?>
</div>
<?php
include('footer.php');
?>