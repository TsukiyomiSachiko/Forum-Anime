<!DOCTYPE html>
<html>
<head>
	<title>Topics</title>
	<link rel="icon" type="image/jpg" href="images/eye.png">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php require'small_codebehind/header.php' ?>
	<form class="topic_topicchange">
		<div class="topic_balkje"><div class="createtopic">
		<a href="topic_change.php" class="topic_href">Create Topic</a>
		<a href="topic_change.php" class="topic_href">Edit Topic</a>
		<a href="topic_change.php" class="topic_href">Delete Topic</a></div></div>
	</form>
	<div class="topic_alltopics">
		<?php require "topic.action.php" ?>
		<ul class="topic_topics">
		<?php foreach ($topics as $topic): ?>
			<li class="topic_postname"> <?= $topic["postname"] ?></li>
			<li class="topic_username"> <?= $topic["username"] ?> </li>
			<li class="topic_postdate"> <?= $topic["postdate"] ?> </li>
		<?php endforeach; ?>
		</ul>
	</div>
<?php require'small_codebehind/footer.php' ?>
</body>
</html>