<?php
	$connection = new mysqli('localhost', 'root', 'usbw', 'anime');
	$query = '';
	$result = $connection -> query($query);
	$row = $result -> fetch_all(MYSQLI_ASSOC);