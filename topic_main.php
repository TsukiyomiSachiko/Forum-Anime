<?php $page = "main"; 
	require "topic.action.php";
	$debounce = "true";
?>

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
			<h2><a href="topic_create.php?action=create" class="topic_create"><font color="#FF5789">Create Topic</font></a></h2>
		</div></div>
	</form>
	<div class="topic_alltopics">
		<ul class="topic_topics">
		<?php foreach ($topics as $topic): if($debounce == "true") { short_border(); $debounce = "false"; } ?>
			<li class="topic_postname"><a href="#" class="link_name"><?= maxtitle($topic["postname"]) ?></a></li>
			<li class="topic_username"><a href="#" class="link_name"><?= $topic["username"] ?></a></li>
			<li class="topic_reason"><?= $topic["reason"] ?></li>			
			<li class="topic_edit"><a href="#" class="link_name">Edit Topic</a></li>
			<li class="topic_remove"><a href="#" class="link_name">Delete Topic</a></li>
		<?php endforeach; ?>
		</ul>
	</div>
<?php require'small_codebehind/footer.php' ?>
</body>
</html>