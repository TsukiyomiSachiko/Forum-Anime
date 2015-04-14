<?php require'adminboard.action.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin-Board</title>
	<link rel="icon" type="image/jpg" href="images/eye.png">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php require'small_codebehind/header.php' ?>
<div class="adminboard_container">
<a class="adminboard_a" href="create_pin.php?case=create">create pin</a>
	<?php foreach ($pins as $pin): ?>
		<div class="adminboard_pin_div">
				<h1 class="adminboard_text"><?= $pin['title'] ?></h1>
				<h3 class="adminboard_text"><?= $pin['date'] ?></h3>
				<h2 class="adminboard_text"><?= $pin['comment'] ?></h2>
		</div>
	<?php endforeach; ?>
</div>
<?php require'small_codebehind/footer.php' ?>
</body>
</html>