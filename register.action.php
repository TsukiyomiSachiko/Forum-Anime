<?php

	if(isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email']) and isset($_POST['age']) and isset($_POST['first_name']) and isset($_POST['last_name'])):
		$connection = new mysqli('localhost', 'root', '', 'anime');
		$query = '';
		$result = $connection -> query($query);
		$row = $result -> fetch_all(MYSQLI_ASSOC);
	endif;

