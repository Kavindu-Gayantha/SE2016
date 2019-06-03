
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
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <header>
    <div class="appname">SE management system</div>
    <div class="loggedin" style="color:white; font-size:22px;">welcome <?php echo $_SESSION['first_name']; ?>,  <a href="logout.php" style="color:gold; font-weight:bold; font-size:20px;">logout</a></div>
  </header>
