<?php
	$titleError = "";
	$commentError = "";

	$connection = new mysqli('localhost', 'root', '', 'anime');
	session_start();
	$user_id = "1";

	if(isset($_SESSION['login'])):
		$user_id = $_SESSION['login'];
	endif;

	if($_SERVER['REQUEST_METHOD']=="POST"):
 		if(isset($_POST['submit'])):
 			if(empty($_POST['title'])):
    			$titleError = "Title is required";
   			else:
					$title = $connection->escape_string ($_POST['title']);
			endif;
			if(empty($_POST['comment'])):
    			$commentError = "Comment is required";
   			else:
					$comment = $connection->escape_string ($_POST['comment']);
			endif;
			if(!empty($_POST['title']) and !empty($_POST['comment'])):
			 	$query = "insert into adminboard(title, comment, user_id) values
				('$title', '$comment', $user_id)";
				mysqli_query($connection, $query);
			endif;
		endif;
	else:
			$query = "select date, title, comment from adminboard";
			$result = $connection->query($query);
			$pins = $result->fetch_all(MYSQLI_ASSOC);
 	endif;