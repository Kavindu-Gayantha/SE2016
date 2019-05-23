<?php require_once('connection.php'); ?>
<!doctype html>
<html lang="en">
<head><title>log in</title>
  <meta charset="utf-8">
</head>
<body>
  <div class="login">
    <form action="index.php" method="post">
      <fieldset>
        <legend><h1>Log In</h1></legend>

        <p>
          <label for="">Username:</label> <!--user name-->
          <input type="text" name="email" id="" placeholder="Email Address">
        </p>

        <p>
          <label for="">Password</label><!-- password-->
          <input type="password" name="password" id="" placeholder="Password">
        </p>
          <button type="submit" name="submit">Log in</button>
        <p>

        </p>
      </fieldset>
    </form>

  </div><!--login-->


</body>
</html>
<?php mysqli_close($conn); ?>
