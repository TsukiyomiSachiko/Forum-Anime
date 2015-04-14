<?php  $page = 'create';
	require'small_codebehind/header.php';
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Topics</title>
		<link rel="icon" type="image/jpg" href="images/eye.png">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<form class="topic_create" action="topic_read.php">
			<h2>What is your topic about?</h2>
			<span class="topic_create_reason">
				<input type="hidden" value="<?=$_SESSION['login']?>">
				<input class="topic_create_reason" type="radio" name="reason" value="1"><label>A story</label>
				<input class="topic_create_reason" type="radio" name="reason" value="2"><label>A question</label>
				<input class="topic_create_reason" type="radio" name="reason" value="3"><label>A discussion</label>
				<input class="topic_create_reason" type="radio" name="reason" value="4"><label>Anything different</label>
			</span>
			<div class="topic_title"><h2 class="topic_create_title">Title:</h2><textarea class="topic_create_title" name="title"></textarea></div>
			<div class="topic_content"><h2>Content:</h2><textarea class="topic_create_content" name="content"></textarea></div>
			<input class="confirm" type="submit" name="confirm">
		</form>
	<?php require'small_codebehind/footer.php' ?>
	</body>
</html>