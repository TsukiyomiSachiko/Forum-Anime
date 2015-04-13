<?php 
	$connection = new mysqli('localhost', 'root', '', 'anime');
	$query = "select name, date, user_id, title, comment from adminboard";
	$result = $connection->query($query);
	$pins = $result->fetch_all(MYSQLI_ASSOC);	
?>