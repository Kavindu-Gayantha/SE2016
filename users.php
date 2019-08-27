<?php session_start(); ?>
<?php require_once('connection.php'); ?>
<?php require_once('includes/displaygreetings.php'); ?>
<?php require_once('includes/functions.php');?>
<?php
  // cheking if a user is logged in
  if(!isset($_SESSION['user_id']))
  {
    header('Location: index.php');
  }
  $user_list = '';
  // getting the list of users
  $query = " SELECT * FROM user WHERE is_deleted = 0 ORDER BY first_name";
  $users = mysqli_query($conn, $query);

    verify_function($user);
    while($user = mysqli_fetch_assoc($users))
    {
      $user_list .= "<tr>"; 
      $user_list .= "<td> {$user['first_name']}</td>";
      $user_list .= "<td>{$user['last_name']}</td>";
      $user_list .= "<td>{$user['last_login']}</td>";
      $user_list .= "<td> <a href=\"modify-user.php?user_id={$user['id']}\">Edit</a></td>";
      $user_list .= "<td> <a href=\"delete-user.php?user_id={$user['id']}\">Delete</a></td>";
      $user_list .= "</tr>";
    }

 ?>
<!doctype html>
<html lang="en">
<head>

<title><?php  echo $_SESSION['first_name']; ?></title>
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <link rel="stylesheet" href="main.css">
  <script>

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
<header>
    <div class="appname">SE management system</div>
    <div class="loggedin" style="color:white; font-size:22px;">welcome <?php echo $_SESSION['first_name']; ?>,  <a href="logout.php" style="color:gold; font-weight:bold; font-size:20px;">logout</a></div>
</header>
<div class="container" style="margin-left:50%; margin-right:50%;">
<div class="students">

</div>

</div>

<!-- Optional JavaScri••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••pt -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div class="details">

</div>

<main> 
  <h1>Users <span> <a href="add-user.php"> + add user </a></span></h1>
  <table class="masterlist">
  
  <tr>
    <th>First name</th>
    <th>Last name</th>
    <th>Last login</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>

    <?php echo $user_list; ?>
  </table>
</main>
</body>
</html>
