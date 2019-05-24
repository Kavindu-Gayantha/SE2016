<?php require_once('connection.php'); ?>
<?php
//check for form subbmition button eka click krlada baalanna
if (isset($_POST['submit']))
{
  $errors = array(); // to save errors
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
if(empty ($errors))
{
  //save username and password into variables.
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  $hashed_password = sha1($password);

  //prepare database query
  $query = "SELECT * FROM loginSE WHERE email = '{$email}' AND password = '{$hashed_password}' LIMIT 1";

  $result_set = mysqli_query($conn, $query);

  if($result_set)
  {
    //query successful
    if(mysqli_num_rows($result_set) == 1)
    {
      // vlaid user found
        // redirect to usre.php
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
    <h1 class="header_statement">SOFTWARE ENGINEERING <br>university of Kelaniya</h1>
  </div>
  <div class="login">
    <form action="index.php" method="post">
      <fieldset>
        <legend><h1>Log In</h1></legend>

       <!--<p class="error">Invalid Username / Password</p>-->
       <?php
       if( isset($errors) && !empty($errors))
       {
         echo '<p class="error">Invalid Username / Password</p>';
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
          <button type="submit" name="submit">Log in</button>
        </p>


      </fieldset>
    </form>

  </div><!--login-->


</body>
</html>
<?php mysqli_close($conn); ?>
