<?php require'contact.action.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Anime</title>
	<link rel="icon" type="image/jpg" href="images/eye.png">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php require'small_codebehind/header.php' ?>
	<div class="contact_container">
		<div class="contact_form">
			<h1 class="contact_h1">Contact one of the admins and we'll try to respond as soon as possible</h1><hr/><br>
			<form method="post" action="contact.php">
			<label class="contact_label">Name: </label><br>
			<input class="contact_input" type="text" name="name" value="<?= $Tempname ?>">
			<span class="contact_error"><?php echo $nameError; ?></span><br><br>

			<label class="contact_label">Email :</label><br>
			<input class="contact_input" type="text" name="email" value="<?= $Tempemail ?>">
			<span class="contact_error"><?php echo $emailError; ?></span><br><br>
			
			<label class="contact_label">Title :</label><br>
			<input class="contact_input" type="text" name="title" value="<?= $Temptitle ?>">
			<span class="contact_error"><?php echo $titleError; ?></span><br><br>

			<label class="contact_label">Message :</label><br>
			<textarea class="contact_message_input" placeholder="Enter your message to the admin here" name="message" value=""><?= $Tempmessage ?></textarea>
			<span class="contact_error"><?php echo $messageError; ?></span><br><br>

			<input class="contact_submit" type="submit" name="submit" value="submit">
			<span class="contact_succes"><?php echo $successMessage; ?></span><br><br>
			</form>
		</div>
	</div>
<?php require'small_codebehind/footer.php' ?>
</body>
</html>