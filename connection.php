<?php
  $server ="localhost";
  $db= "SEweb";
  $user="root";
  $password="";

  $conn = mysqli_connect("localhost","root","","SEweb");
  if(mysqli_connect_error())
  {
    die('databse connection failed '. mysqli_connect_error());
  }
  // else {
  //   echo "success";
  // }

 ?>
