
<?php
  session_start();
?>

<html>
<head>
  <style>
  div.header{
    font-family:poppins;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0px 120px;
    background-color:tomato;
  }
    </style>
</head>
<body>
  <div class="header">
  <h1>welcome to admin panel</h1>
  <form method="post">
  <button name="Logout">Logout</button>
</form>
</div>

<?php
    if(isset($_POST['Logout']))
    {
      session_destroy();
      header("Location:login.php");
    }
  ?>
</body>
</html>