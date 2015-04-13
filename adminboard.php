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
<?= foreach ($pins as $pin): ?>
	<div class="">
		
	</div>
<?= endforeach; ?>
<?php require'small_codebehind/footer.php' ?>
</body>
</html>