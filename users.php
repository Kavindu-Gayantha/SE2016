<?php session_start(); ?>
<?php require_once('connection.php'); ?>
<?php require_once('includes/displaygreetings.php'); ?>
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
  <title><?php echo $_SESSION['username'];?></title>
  <link rel="stylesheet" href="main.css">
  <script>
//    function myFunction() {
//         var time = prompt("Please enter current time in 24 hour clock", "8.00");
//         if (time != null) {
//           // document.getElementById("displayGreetings").innerHTML ="Hello " + person + "! How are you today?";
//           if(time<=11.59 && time>00.00)
//           {
//             document.getElementById("displayGreetings").innerHTML = "Good Morning!";
//           }
//           else 
//           {
//             document.getElementById("displayGreetings").innerHTML = "Good Afternoon!";
//           }
//         }
// }
      window.alert("welcome to SE 2016 unofficial site");
      // window.alert("")

   </script>
</head>
<body>
  <header>
    <div class="appname">SE management system</div>
    <div class="loggedin" style="color:white; font-size:22px;">welcome <?php echo $_SESSION['first_name']; ?>,  <a href="logout.php" style="color:gold; font-weight:bold; font-size:20px;">logout</a></div>
  </header>




</body>
</html>
