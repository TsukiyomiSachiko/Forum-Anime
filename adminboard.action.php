<?php
	$connection = new mysqli('localhost', 'root', '', 'anime');
	session_start();
	$user_id = "7";

	if(isset($_SESSION['login'])):
		$user_id = $_SESSION['login'];
	endif;
	if(isset($_POST['title'])):
		$title = $connection->escape_string ($_POST['title']);
	else:
		$title = $connection->escape_string ("I am empty");
	endif;
	if(isset($_POST['comment'])):
		$comment = $connection->escape_string ($_POST['comment']);
	else:
		$comment = $connection->escape_string ("I am probably empty");
	endif;
 	if($_GET['case'] == "create"):
 		$query = "insert into adminboard(title, comment, user_id) values
		('$title', '$comment', $user_id)";
		mysqli_query($connection, $query);
	else:
		$query = "select date, user_id, title, comment from adminboard";
		$result = $connection->query($query);
		$pins = $result->fetch_all(MYSQLI_ASSOC);
 	endif;	