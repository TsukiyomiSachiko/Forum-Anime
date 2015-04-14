<?php 
	session_start();
	$connection = new mysqli('localhost', 'root', '', 'anime');
	if(isset($_GET['action'])) {
		$action = $_GET['action'];
	} else {
		$action = "hello ";
	}




	 switch ($action) {

	 	case 'create':
	 		// Is this a post request?
	 		if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 			// Is any field empty?
		 		if(empty($_POST['reason']) or empty($_POST['title']) or empty($_POST['content'])) {
					echo "Not done";
		 		} else {
					$reason = $_POST["reason"];
					$title = $_POST["title"];
					$content = $_POST["content"];
					if(isset($_POST['login'])):
						$user_id = $_SESSION['login'];
					else:
						$user_id = 0;
					endif;
					$query_t = "insert into topics(reason, name, content, user_id) values
							  ('$reason', '$title', '$content', '$user_id');";
					$connection->query($query_t);
				}
			}
	 		break;
	 	
	 	case 'update':
	 		# code...
	 		break;

	 	case 'delete':
	 		# code...
	 		break;

	 	default:
			$query = "SELECT topics.name AS postname, users.username AS username, topics.date AS postdate, topics.reason AS reason, comments.contents AS content FROM topics LEFT JOIN users ON users.id = topics.user_id LEFT JOIN comments ON comments.topic_id = topics.id"; //anders uitlijnen indien nodig
			$result = $connection->query($query);
			$topics = $result->fetch_all(MYSQLI_ASSOC);
	 		break;
	 }




	// <?php 
	// 	$connection = new mysqli('localhost', 'root', '', 'anime');
	// 	$query = "SELECT contents FROM comments"; //anders uitlijnen indien nodig
	// 	$result = $connection->query($query);
	// 	$content = $result->fetch_all(MYSQLI_ASSOC);