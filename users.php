<?php session_start(); ?>
<?php require_once('connection.php'); ?>
<?php
  // cheking if a user is logged in
  if(!isset($_SESSION['user_id']))
  {
    header('Location: index.php');
  }
 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>students</title>
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <header>
    <div class="appname">SE management system</div>
    <div class="loggedin">Welcome <?php echo $_SESSION['first_name']; ?> ! <a href="logout.php">logout</a></div>
  </header>




</body>
</html>
