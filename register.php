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
	<div class="account_container">
		<div class="account_form">
		<h1 class="account_h1">Make your account here</h1><hr/><br>
			<form method="post" action="confirm.php">
				<label class="account_label">Username: </label><br>
				<input class="account_input" type="text" name="username"><br>

				<label class="account_label">Password: </label><br>
				<input class="account_input" type="password" name="password"><br>

				<label class="account_label">Email adress: </label><br>
				<input class="account_input" type="text" name="email"><br>

				<label class="account_label">First name: </label><br>
				<input class="account_input" type="text" name="first_name"><br>

				<label class="account_label">Last name: </label><br>
				<input class="account_input" type="text" name="last_name"><br>

				<label class="account_label">Age: </label><br>
				<select class="account_select" name="age">
					<option>Under 13</option>
					<option>Between 13 and 18</option>
					<option>18 or above</option>
				</select>

				<br><br>
				<input class="account_submit" type="submit" value="Send"/>
			</form>
		</div>
	</div>
<?php require'small_codebehind/footer.php' ?>
</body>
</html>