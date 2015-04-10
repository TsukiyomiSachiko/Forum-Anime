<?php //require'register.action.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="icon" type="image/jpg" href="images/eye.png">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php require'small_codebehind/header.php' ?>
	<div class="register_register">
		<form method="post" action="confirm.php">
			<span class="register_span"><div class="register_namepass"> Username: </div><input class="register_input" type="text" name="username"></span><br>
			<span class="register_span"><div class="register_namepass">Password: </div><input class="register_input" type="password" name="password"></span><br>
			<span class="register_span"><div class="register_namepass">Email adress: </div><input class="register_input" type="text" name="email"></span><br>
			<span class="register_span"><div class="register_namepass">First name: </div><input class="register_input" type="text" name="first_name"></span><br>
			<span class="register_span"><div class="register_namepass">Last name: </div><input class="register_input" type="text" name="last_name"></span><br>
			<span class="register_span"><div class="register_namepass">Age: </div><select class="register_select" name="age">
					<option>Under 13</option>
					<option>Between 13 and 18</option>
					<option>18 or above</option>
				</select>
			</span><br><br>
			<span class="register_span"><input class="register_button" type="submit" value="Send"/></span>
	</form>
<?php require'small_codebehind/footer.php' ?>
</div>
</body>
</html>