<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") :
$connection = new mysqli('localhost', 'root', '', 'anime');
	$password = $_POST['pass'];
	$query = 'SELECT * FROM users';
	$result = $connection->query($query);
	$alluser = $result->fetch_all(MYSQLI_ASSOC);
	foreach	($alluser as $quser) :
		if ($quser['username'] == $_POST['user'])
		{
			if (password_verify($_POST['pass'], $quser['password'])){
				$_SESSION['rank'] = $quser['rank'];
				$_SESSION['login'] = $quser['login'];
				$log = true;
				break ; }
		} else
		{
			$log = false;
		}
	endforeach;
header('location:index.php?log='.$log);
endif;
?>
