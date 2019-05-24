<?php session_start(); ?>
<?php require_once('connection.php'); ?>
<!doctype html>
<html lang="en">
<head>
  <title>students</title>
  <link rel="st
  ylesheet" href="main.css">
</head>
<body>
  <header>
    <div class="appname">SE management system</div>
    <div class="loggedin">Welcome<?php echo "$_SESSION['first_name'];"  ?> ! <a href="index.php">logout</a></div>
  </header>



</body>
</html>
