<?php
	$website = "confirm.php";
	$connection = new mysqli('localhost', 'root', '', 'anime');
	$get_query = 'select username, email from users';
	$row = $connection -> query($get_query);
	$results = $row -> fetch_all(MYSQLI_ASSOC);
	if(empty($_POST['username']) and empty($_POST['password']) and empty($_POST['email']) and empty($_POST['age']) and empty($_POST['first_name']) and empty($_POST['last_name'])):
		echo'Not done';
	else:
		foreach($results as $result):
			if($result['username'] == $username):
				header('location:register.php?false=usertaken');
				break;
			elseif($result['email'] == $email):
				header('location:register.php?false=mailtaken');
				break;
			else:
				if($_POST['age'] == 'Under 13'):
					$age = 1;
				elseif($_POST['age'] == 'Between 13 and 18'):
					$age = 2;
				elseif($_POST['age'] == '18 or above'):
					$age = 3;
				endif;
			endif;
		endforeach;
	$username = $_POST['username'];
	$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	$email = $_POST['email'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$query = "insert into users(username, password, email, age, first_name, last_name, phonenumber) values
				('$username', '$password', '$email', '$age', '$first_name', '$last_name', 1111111111);";
	mysqli_query($connection, $query);
	endif;
