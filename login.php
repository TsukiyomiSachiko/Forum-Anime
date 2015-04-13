<!DOCTYPE html>
<html>
<head>
  <title>Log in</title>
  <link rel="icon" type="image/jpg" href="images/eye.png">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
  <?php require 'small_codebehind/header.php' ?>
  <div class="register_container">
    <div class="register_form">
      <form action="login.action.php" method="post">
        <label class="register_label">Username: </label><br>
        <input class="register_input" type="text" name="username"><br>

        <label class="register_label">Password: </label><br>
        <input class="register_input" type="password" name="password"><br>

        <br><br>
        <input class="register_submit" type="submit" value="Send"/>
      </form>
    </div>
  </div>

  <?php require 'small_codebehind/footer.php' ?>
</body>
</html>
