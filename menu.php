<html>
  <head>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
        <ul>
           <li><a href="aboutus.php">About us</a></li>
           <?php 
                if(isset($_SESSION["unm"]))
                {
                  echo "<li><a href='language.php'>Language</a></li>";
                  echo "<li><a href='logout.php'>Logout</a></li>";
                }
                else
                {
                  echo "<li><a href='login.php'>Login</a></li>";
                }
           ?>
           
           <li><a href="contact1.php">Contact us</a></li>
           <li><a href="ranking.php">Ranking</a></li>          
           <li><a href="home.php">Home</a></li>
     </ul>
 
</body>

</html>
