<?php

	if(empty($_POST['username']) and empty($_POST['password']) and empty($_POST['email']) and empty($_POST['age']) and empty($_POST['first_name']) and empty($_POST['last_name'])):
		echo'Not done';
	else:
		if($_POST['age'] == 'Under 13'):
			$age = 1;
		elseif($_POST['age'] == 'Between 13 and 18'):
			$age = 2;
		elseif($_POST['age'] == '18 or above'):
			$age = 3;
		endif;
		$username = $_POST['username'];
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
		$email = $_POST['email'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$connection = new mysqli('localhost', 'root', '', 'anime');
		$query = "insert into users(username, password, email, age, first_name, last_name, phonenumber) values
				  ('$username', '$password', '$email', '$age', '$first_name', '$last_name', 1111111111);";
		mysqli_query($connection, $query);
	endif;