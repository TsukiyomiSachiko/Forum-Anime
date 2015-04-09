<?php require'register.action.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="icon" type="image/jpg" href="images/eye.png">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/account.css">
</head>
<body>
<?php require'small_codebehind/header.php' ?>
	<div class="register">
		<form method="post">
			<span><div class="namepass"> Username: </div><input type="text" name="username"></span><br>
			<span><div class="namepass">Password: </div><input type="password" name="password"></span><br>
			<span><div class="namepass">Email adress: </div><input type="text" name="email"></span><br>
			<span><div class="namepass">First name: </div><input type="text" name="first_name"></span><br>
			<span><div class="namepass">Last name: </div><input type="text" name="last_name"></span><br>
			<span><div class="namepass">Age: </div><select name="age">
					<option>Under 13</option>
					<option>Between 13 and 18</option>
					<option>18 or above</option>
				</select>
			</span><br><br>
			<span><input class="button" type="submit" value="Send"/></span>
	</form>
</div>
</body>
</html>