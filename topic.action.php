<?php 
	$connection = new mysqli('localhost', 'root', 'usbw', 'anime');
	$query = "SELECT topics.name, users.username, topics.date FROM topics LEFT JOIN users on users.id = topics.user_id"; //anders uitlijnen indien nodig
	$result = $connection->query($query);
	$topic = $result->fetch_all(MYSQLI_ASSOC);	
?>