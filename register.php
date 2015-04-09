<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="icon" type="image/jpg" href="images/eye.png">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<?php require'small_codebehind/header.php' ?>
<div class="register">
	<form method="post">
		<span>Username: <input type="text" name="username"></span><br>
		<span>Password: <input type="password" name="password"></span><br>
		<span>Email adress: <input type="text" name="email"></span><br>
		<span>Age: <select name="age">
					<option>Under 13</option>
					<option>Between 13 and 18</option>
					<option>18 or above</option>
				   </select>
		</span><br>
		<span>First name: <input type="text" name="first_name"></span><br>
		<span>Last name: <input type="text" name="last_name"></span><br>
		<span><input class="button" type="submit" value="Send"/></span>
	</form>
</div>
</body>
</html>