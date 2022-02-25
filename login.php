<?php
include_once 'header.php';
?>
    <section class="signup-form">
      <form action="/projekt/Inlämning Loginpage/includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Enter name/email..." />
        <input type="password" name="pwd" placeholder="Enter password..." />
        <button type="submit" name="submit">Submit</button>
      </form>
      <?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput"){
      echo "<p>Fill in fields</p>";
    }
    else if ($_GET["error"] == "wronglogin"){
      echo "<p>incorrect login</p>";
    }
  }
  ?>
      </section>
