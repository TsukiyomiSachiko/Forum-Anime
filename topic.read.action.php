<?php 
		$connection = new mysqli('localhost', 'root', '', 'anime');
		$query = "SELECT contents FROM comments"; //anders uitlijnen indien nodig
		$result = $connection->query($query);
		$content = $result->fetch_all(MYSQLI_ASSOC);