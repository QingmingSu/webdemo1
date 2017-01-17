<?php
require_once dirname(__FILE__) . '/vars.php';
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><?php echo $siteName; ?></a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!--
        <li class="active"><a href="home.php">Home</a></li>
        -->
        <li><a href="home.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
      <?php
      if ( isset($_SESSION['user']) ) {
      ?>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $userRow['userEmail']; ?> &nbsp;<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
          </ul>
          </li>
      <?php
      } else {
      ?>
          <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <?php
      }
      ?>
      </ul>
    </div>
  </div>
</nav>
