<?php $page = 'main';
	require 'topic.action.php';
	require 'topic.read.action.php'; ?>
	
<!DOCTYPE html>
<html>
<head>
	<title>Topics</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="topic_row">
		<div class="profile_short">
			
		</div>
		<div class="content"> 
			<?php foreach ($content as $contents) :
				$contents['content'];	
			endforeach; ?>
		</div>
	</div>
</body>
</html>