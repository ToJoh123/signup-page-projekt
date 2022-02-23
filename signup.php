<?php
include_once 'header.php'
?>

    <h2>Signup here</h2>
    <section class="signup-form">
      <form action="/projekt/Inlämning Loginpage/includes/signup.inc.php" method="POST">
        <input type="text" name="name" placeholder="Enter name..." />
        <input type="text" name="email" placeholder="Enter email..." />
        <input type="text" name="uid" placeholder="Username..." />
        <input type="password" name="pwd" placeholder="Enter password..." />
        <input type="password" name="pwdrepeat" placeholder="Repeat password..."/>
        <button type="submit" name="submit">Submit</button>
      </form>
      <?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput"){
      echo "<p>Fill in fields</p>";
    }
    else if ($_GET["error"] == "invaliduid"){
      echo "<p>Wrong username</p>";
    }
    else if ($_GET["error"] == "invalidemail"){
      echo "<p>Not correct email</p>";
    }
    else if ($_GET["error"] == "passwordsdontmatch"){
      echo "<p>Passwords dont match</p>";
    }
    else if ($_GET["error"] == "stmtfailed"){
      echo "<p>oops something went wrong</p>";
    }
    else if ($_GET["error"] == "usernametaken"){
      echo "<p>try another username</p>";
    }
    else if ($_GET["error"] == "none"){
      echo "<p>Signup succesfull!</p>";
    }
  }
  ?>
    </section>



