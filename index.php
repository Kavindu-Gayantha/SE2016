

<?php  session_start();
//if use session function we have to start session here.
?>
<?php require_once('connection.php'); ?>
<?php
//check for form subbmition button eka click krlada baalanna
if (isset($_POST['submit']))
{
  $errors = array(); // to save errors
  // print_r($errors);
  foreach($errors as $arritem)
  {
    echo "$arritem<br/>";
  }
  //check if the username and password has been entered
  if(!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1)
  {
    // save errors in an array
    $errors[] = 'Username is Missing / Invalid ';
  }
  if(!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1) // trim userd to check if whitespaces are available , avoid keeping spaces in username or password
  {
    $errors[] = 'Password is Missing / Invalid ';
  }


// check if there are any errors in the form
if(empty($errors))
{
  //save username and password into variables.
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  // $hashed_password = sha1($password);
  $password = $_POST['password'];
//if use session function we have //if use session f//if use session f//if use session function we have to start session here.unction we have to start session here.unction we have to start session here.to start session here.
  //prepare database query
  $query = "SELECT * FROM loginSE WHERE email = '{$email}' AND password = '{$password}' LIMIT 1";

  $result_set = mysqli_query($conn, $query);

  if($result_set)
  {
    //query successful
    if(mysqli_num_rows($result_set) == 1)
    {
      // vlaid user found
        // re<button class="logout">logout</button><button class="logout">logout</button><button class="logout">logout</button><button class="logout">logout</button><button class="logout">logout</button><button class="logout">logout</button><button class="logout">logout</button><button class="logout">logout</button><button class="logout">logout</button><button class="logout">logout</button><button class="logout">logout</button><button class="logout">logout</button><button class="logout">logout</ button><button class="logout">logout</button><button class="logout">logout</button><button class="logout">logout</button><button class="logout">logout</button><button class="logout">logout</button>direct to usre.php
        $user = mysqli_fetch_assoc($result_set);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['first_name'] = $user['first_name'];

            header('Location: users.php');
    }
    else
    {
      // username and password invalid
       $errors[] = 'Invalid Username / password';
    }
  }
  else
  {
    $errors[] = 'Database query failed';
  }
}
}

?>

<!doctype html>
<html lang="en">
<head><title>log in</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <div class="header">
    <h1 class="header_statement">SOFTWARE ENGINEERING <br>University of Kelaniya</h1>
  </div>
  <div class="login">
    <form action="index.php" method="post">
      <fieldset>
        <legend><h1>Log In</h1></legend>

       <!--<p class="error">Invalid Username / Password</p>-->
       <?php
       if(isset($errors) && !empty($errors))
       {
         echo '<p class="error">Invalid Username / Password</p>';
       }

        ?>
        <!-- show a massege that you have logeg out-->
        <?php
          if(isset($_GET['logout']))
          {
            echo '<p class="info">You have successfully logged out</p>';
          }
         ?>

        <p>
          <label for="">Username:</label> <!--user name-->
          <input type="text" name="email" id="" placeholder="Email Address">
        </p>

        <p>
          <label for="">Password</label><!-- password-->
          <input type="password" name="password" id="" placeholder="Password">
        </p>
        <p>
          <button type="submit" name="submit" id="loginbtn">Log in</button>
        </p>


      </fieldset>
    </form>

  </div><!--login-->


</body>
</html>
<?php mysqli_close($conn); ?>
