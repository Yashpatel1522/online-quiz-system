<html>
<head>    
</head>
<body>
<?php
        include("header.php")
        ?>
        <?php
        include("menu.php")
        ?>
<div class="container"><br>
	<center>
                <h1>Choose Any Language To Start Test</h1>
		<p>
        <?php
      echo "<table border=0 width='700px'><tr class='t_heading'><tr>";
         include("connection.php");
      $query="SELECT *FROM langunge";
      $result=mysqli_query($con,$query);
      while($row=mysqli_fetch_array($result))
      {
        echo "<td align='center' style='background:black;color:tomato;padding:10px 10px 10px 10px'><a href='test.php?id=".$row[0]."' style='padding-top:20px'><img src='upload/$row[2]' width='200px' height='150px'><br>".$row[1]."</a></td>";
    }
 ?>
 </tr>
 </table>       
		</p>
	</center>
</div>

<br>
<?php
        include("footer.php")
        ?>
</body>
</html>	