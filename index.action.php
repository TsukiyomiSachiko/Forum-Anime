<?php 
	$connection = new mysqli('localhost', 'root', 'usbw', 'anime');
	$query = "select * from users";
	$result = $connection->query($query);
	$games = $result->fetch_all(MYSQLI_ASSOC);	
?>