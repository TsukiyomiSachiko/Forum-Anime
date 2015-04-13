<!DOCTYPE html>
<html>
<head>
  <title>Log in</title>
  <link rel="icon" type="image/jpg" href="images/eye.png">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
  <?php require 'small_codebehind/header.php' ?>
  <div class="account_container">
    <div class="account_form">
      <h1 class="account_h1">Log in here</h1><hf/><br>
      <form action="login.action.php" method="post">
        <label class="account_label">Username: </label><br>
        <input class="account_input" type="text" name="username"><br>

        <label class="account_label">Password: </label><br>
        <input class="account_input" type="password" name="password"><br>

        <br><br>
        <input class="account_submit" type="submit" value="Send"/>
      </form>
    </div>
  </div>

  <?php require 'small_codebehind/footer.php' ?>
</body>
</html>
