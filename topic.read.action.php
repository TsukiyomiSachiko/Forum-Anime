<?php 
	session_start();

	if(isset($_GET['content'])):
		$content = $_GET['content'];
	endif;

	// uit de database halen (renoveren)