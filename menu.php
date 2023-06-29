<html>
  <head>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
        <ul>
           <li><a href="Aboutus">About us</a></li>
           <?php 
                if(isset($_SESSION["unm"]))
                {
                  echo "<li><a href='language.php'>Language</a></li>";
                  echo "<li><a href='Logout'>Logout</a></li>";
                }
                else
                {
                  echo "<li><a href='Login'>Login</a></li>";
                }
           ?>
           
           <li><a href="Contact1">Contact us</a></li>
           <li><a href="ranking.php">Ranking</a></li>          
           <li><a href="home">Home</a></li>
     </ul>
 
</body>

</html>