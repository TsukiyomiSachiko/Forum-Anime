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
		<a href="topic_change.php" class="href">Creat Topic</a>
		<a href="topic_change.php" class="href">Edit Topic</a>
		<a href="topic_change.php" class="href">Delete Topic</a></div></div>
	</form>
	<div class="alltopics">
		<?php require "topic.action.php" ?>
		<ul class="topics">
			<li><div class="postname"> Hello World1 </div></li>
			<li><div class="username"> Hello World2 </div></li>
			<li><div class="postdate"> Hello World3 </div></li>
		</ul>
	</div>
<?php require'small_codebehind/footer.php' ?>
</body>
</html>