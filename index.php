<?php require'index.action.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Anime</title>
	<link rel="icon" type="image/jpg" href="images/eye.png">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php require'small_codebehind/header.php'; ?>
<div class="index_container">
<?php foreach($news as $item):?>
	<div class="index_item_div">
		<h1 class="index_text"><?= $item['title'] ?></h1>
		<h2 class="index_text"><?= $item['comment'] ?></h2>
	</div>
<?php endforeach; ?>
</div>
<?php require'small_codebehind/footer.php'; ?>
</body>
</html>