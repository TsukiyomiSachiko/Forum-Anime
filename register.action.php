<?php
	$connection = new mysqli('localhost', 'root', '', 'anime');
	$query = '';
	$result = $connection -> query($query);
	$row = $result -> fetch_all(MYSQLI_ASSOC);