<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inlämning Loginpage</title>
  </head>
  <body>
    <h1>Welcome</h1>
    <li><a href="index.php"> home</a></li>
    <li><a href="/nedrakning_2.php"> about</a></li>
    <li><a href="/nedrakning_3.php"> find blog</a></li>


    
     
    <?php 
    if (isset($_SESSION['useruid'])){
      echo "<li><a href='profile.php'> Profile</a></li>";
      echo "<li><a href='/includes/logout.inc.php'> log out </a></li>";
    }
    else 
    echo "<li><a href='signup.php'> sign up</a></li>";
    echo "<li><a href='login.php'> log in </a></li>";
    ?>
  </body>
</html>