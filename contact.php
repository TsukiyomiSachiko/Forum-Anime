<?php require'contact.action.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Anime</title>
	<link rel="icon" type="image/jpg" href="images/eye.png">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>
<?php require'small_codebehind/header.php' ?>
	<div class="form">
		<h1>Contact one of the admins and we'll try to respond as soon as possible</h1>
		<form method="post" action="contact.php">
		<label>Name: </label><br>
		<input class="input" type="text" name="name" value="">
		<span class"error"><?php echo $nameError; ?></span><br><br>

		<label>Email :</label><br>
		<input class="input" type="text" name="email" value="">
		<span class"error"><?php echo $emailError; ?></span><br><br>
		
		<label>Title :</label><br>
		<input class="input" type="text" name="title" value="">
		<span class"error"><?php echo $titleError; ?></span><br><br>

		<label>Message :</label><br>
		<input class="input" type="text" name="message" value="">
		<span class"error"><?php echo $messageError; ?></span><br><br>

		<input class="submit" type="submit" name="submit" value="submit">
		<span class"succes"><?php echo $successMessage; ?></span><br><br>

		</form>
	</div>
</body>
</html>