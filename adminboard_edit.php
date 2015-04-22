<?php
	require'adminboard_edit.action.php';
	foreach ($pins as $pin):
?>
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
			<h1 class="create_pin_h1">edit your pin here</h1><hr/><br>
			<form method="post">
			
			<label class="create_pin_label">Title :</label><br>
			<input class="create_pin_input" type="text" name="title" value="<?= $pin['title'] ?>"><br>
			<span class="create_pin_error"><?php echo $titleError; ?></span><br><br>

			<label class="create_pin_label">Comment :</label><br>
			<textarea class="create_pin_message_input" name="comment" value=""><?= $pin['comment'] ?></textarea><br>
			<span class="create_pin_error"><?php echo $commentError ?></span><br><br>

			<input type="hidden" name="id" value="<?= $_GET['id'] ?>">

			<input class="create_pin_submit" type="submit" name="confirmed" value="save"><br><br>
			</form>
		</div>
	</div>
<?php
	require'small_codebehind/footer.php';
	endforeach;
?>
</body>
</html>