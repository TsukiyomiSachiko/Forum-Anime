<!DOCTYPE html>
<html>
<head>
	<title>Topics</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/topic.css">
	<link rel="icon" type="image/jpg" href="images/eye.png">
</head>
<body>
<?php require'small_codebehind/header.php' ?>
	<form class="topicchange">
		<div class="balkje"><div class="createtopic">
		<a href="topic_change.php" class="href">Create Topic</a>
		<a href="topic_change.php" class="href">Edit Topic</a>
		<a href="topic_change.php" class="href">Delete Topic</a></div></div>
	</form>
	<div class="alltopics">
		<?php require "topic.action.php" ?>
		<ul class="topics">
		<?php foreach ($topics as $topic): ?>
			<li class="postname"> <?= $topic["postname"] ?></li>
			<li class="username"> <?= $topic["username"] ?> </li>
			<li class="postdate"> <?= $topic["postdate"] ?> </li>
		<?php endforeach; ?>
		</ul>
	</div>
<?php require'small_codebehind/footer.php' ?>
</body>
</html>