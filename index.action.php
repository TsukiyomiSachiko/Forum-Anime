<?php 
	$connection = new mysqli('localhost', 'root', '', 'anime');
	$query = "select * from users";
	$result = $connection->query($query);
	$games = $result->fetch_all(MYSQLI_ASSOC);	
?>