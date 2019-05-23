<?php
  $server ="localhost";
  $db= "SEweb";
  $user="root";
  $password="";

  $conn = mysqli_connect("localhost","root","","$db");
  if(mysqli_connect_errno())
  {
    die('databse connection failed '. mysqli_connect_error());
  }
  // else {
  //   echo "success";
  // }

 ?>
