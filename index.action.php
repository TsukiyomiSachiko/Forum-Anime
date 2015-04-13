<?php 
	$connection = new mysqli('localhost', 'root', '', 'anime');
	$query = "select * from users";
	$result = $connection->query($query);
<<<<<<< HEAD
	$news = $result->fetch_all(MYSQLI_ASSOC);
=======
	$news = $result->fetch_all(MYSQLI_ASSOC);	
>>>>>>> origin/master
?>