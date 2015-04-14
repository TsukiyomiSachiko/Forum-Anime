<?php 
	session_start();
	$connection = new mysqli('localhost', 'root', '', 'anime');
	$query = "select * from users";
	$result = $connection->query($query);
	$news = $result->fetch_all(MYSQLI_ASSOC);

	if(isset($_GET['log'])):
		if($_GET['log'] == "out"):
			unset($_SESSION['login']);
		endif;
	endif;
