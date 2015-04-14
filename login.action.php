<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") :
	session_start();
	$connection = new mysqli('localhost', 'root', '', 'anime');
	$password = $_POST['password'];
	$query = 'SELECT * FROM users';
	$result = $connection->query($query);
	$alluser = $result->fetch_all(MYSQLI_ASSOC);
	foreach	($alluser as $quser) :
		if ($quser['username'] == $_POST['username'])
		{
			if (password_verify($password, $quser['password'])){
				$_SESSION['rank'] = $quser['rank'];
				$_SESSION['login'] = $quser['id'];
				$log = 'true';
				break ; }
				else {
					$log = 'passfalse';
				}
		} else
		{
			$log = 'userfalse';
		}
	endforeach;
header('location:index.php?log='.$log);
endif;
?>
