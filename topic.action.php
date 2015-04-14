<?php 
	session_start();
	 if ($page == "main"):
		$connection = new mysqli('localhost', 'root', '', 'anime');
		$query = "SELECT topics.name AS postname, users.username AS username, topics.date AS postdate, topics.reason AS reason, comments.contents AS content FROM topics LEFT JOIN users ON users.id = topics.user_id LEFT JOIN comments ON comments.topic_id = topics.id"; //anders uitlijnen indien nodig
		$result = $connection->query($query);
		$topics = $result->fetch_all(MYSQLI_ASSOC);
	else:
		if(empty($_POST['reason']) or empty($_POST['title']) or empty($_POST['content']) or empty($_POST['date']) or empty($_POST['user_id'])):
			echo"Not done";
		elseif ($page == "create"):
			foreach($results as $result):
				if($result["title"] == $title):
					echo"title is already taken";
					$website = "topic_create.php";
					break;
				else:
					$reason = $_POST["reason"];
					$title = $_POST["title"];
					$content = $_POST["content"];
					$date = $_POST["date"];
					$user_id = $_POST["user_id"];
					$quer_t = "insert into topics(reason, name, content, date, user_id) values
							  ('$reason', '$title', '$content', '$date', '$userid');";
					mysqli_query($connection, $query_t);
				endif;
			endforeach;
		endif;
	endif;