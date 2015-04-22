<?php  $page = 'create';
	require'topic.action.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Topics</title>
		<link rel="icon" type="image/jpg" href="images/eye.png">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
	<?php require'small_codebehind/header.php'; ?>
		<form class="topic_create" action="topic_read.php?action=create" method="post">
			<h2>What is your topic about?</h2>
			<span class="topic_create_reason">
				<?php loginsession(); ?>
				<input class="topic_create_reason" type="radio" name="reason" value="A story"><label>A story</label>
				<input class="topic_create_reason" type="radio" name="reason" value="A question"><label>A question</label>
				<input class="topic_create_reason" type="radio" name="reason" value="A discussion"><label>A discussion</label>
				<input class="topic_create_reason" type="radio" name="reason" value="Anything different"><label>Anything different</label>
			</span>
			<div class="topic_title"><h2 class="topic_create_title">Title:</h2><textarea class="topic_create_title" name="title"></textarea></div>
			<div class="topic_content"><h2>Content:</h2><textarea class="topic_create_content" name="content"></textarea></div>
			<input class="confirm" type="submit" value="confirm">
		</form>
	<?php require'small_codebehind/footer.php' ?>
	</body>
</html>