	<header>
		<div class="main_balk">
			<h3 class="main_mark">AUTISME & CO</h3>
<?php session_start(); if(empty($_SESSION['login'])): ?>
			<h3><a href="register.php">register</a></h3>
			<h3><a href="login.php">login</a></h3>
<?php else: ?>
			<h3>Welcome user</h3>
<?php endif; ?>
		</div>
		<ul class="main_menu">
			<li><a href="index.php">HOME</a></li>
			<li><a href="topic_main.php">TOPICS</a></li>
			<li><a href="adminboard.php?case=read">ADMIN-BOARD</a></li>
			<li><a href="contact.php">CONTACT</a></li>
		</ul>
	</header>