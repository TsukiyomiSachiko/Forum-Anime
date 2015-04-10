<?php 
	$connection = new mysqli('localhost', 'root', '', 'anime');
	$query = "SELECT topics.name AS postname, users.username AS username, topics.date AS postdate FROM topics LEFT JOIN users ON users.id = topics.user_id"; //anders uitlijnen indien nodig
	$result = $connection->query($query);
	$topics = $result->fetch_all(MYSQLI_ASSOC);