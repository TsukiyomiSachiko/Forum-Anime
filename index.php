<?php require'index.action.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Anime</title>
	<link rel="icon" type="image/jpg" href="images/eye.png">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php require'small_codebehind/header.php';
foreach($news as $item):?>
	<h2><?= $item['title'] ?></h2>
	<p><?= $item['comment'] ?></p>
<?php endforeach;
require'small_codebehind/footer.php'; ?>
</body>
</html>