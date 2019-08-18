<?php
  session_start();
  if (!isset($_SESSION['username'])) {
      header('login.php');
  }
?>
<div class="header">
  <div class="topnav" id="myTopnav">
    <a href="index.php" class="logo-name"><img src="img/logo.png" height="24px" /> MAERSK LINE</a>
    <a href="index.php" class="active"><i class="fas fa-home"></i> HOME</a>
    <a href="about.php"><i class="fas fa-info-circle"></i> ABOUT</a>
    <a href="contact.php"><i class="fas fa-envelope"></i> CONTACT</a>
    <?php
    if (!isset($_SESSION['username'])) {
        echo '<a href="login.php" id="btn"><i class="fas fa-sign-in-alt"></i> LOGIN</a>';
    }else {
      echo '
      <div class="dropdown" id="btn">
      <button class="dropbtn"><i class="fas fa-user"></i> '.$_SESSION["username"].'
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="mybookings.php"><i class="fas fa-book"></i> MY BOOKINGS</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> SIGN OUT</a>
      </div>
    </div>
      ';
    }
    ?>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  </div>
</div>
<script type="text/javascript">
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
</script>
