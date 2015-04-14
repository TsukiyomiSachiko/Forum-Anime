<?php require'adminboard.action.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Anime</title>
	<link rel="icon" type="image/jpg" href="images/eye.png">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php require'small_codebehind/header.php' ?>
	<div class="create_pin_container">
		<div class="contact_form">
			<h1 class="create_pin_h1">create a pin here so that the admins can see it</h1><hr/><br>
			<form method="post" action="create_pin.php">
			
			<label class="create_pin_label">Title :</label><br>
			<input class="create_pin_input" type="text" name="title" value=""><br><br>

			<label class="create_pin_label">Comment :</label><br>
			<textarea class="create_pin_message_input" name="comment" value=""></textarea><br><br>

			<input class="create_pin_submit" type="submit" name="submit" value="submit"><br><br>
			</form>
		</div>
	</div>
<?php require'small_codebehind/footer.php' ?>
</body>
</html>