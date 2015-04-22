<?php 
	//base
	session_start();
	$connection = new mysqli('localhost', 'root', '', 'anime');


	//functions()
	function loginsession() {
	if (isset($_SESSION["login"])) { ?>
		<input type="hidden" value="<?=$_SESSION['login']?>">
	<?php }
		}

	function maxtitle($title) {
	  if (isset($title)):
	    $title = (string) $title;
	    $textarr = str_split($title);
	    $count = 0;
	    foreach ($textarr as $letter) :
	      $count++;
	      if (empty($output)):
	        $output = $letter;
	      else :
	        $output = $output.$letter;
	      endif;
	      if ($count == 145) :
	        $output = $output."...";
	        break;
	      endif;
	    endforeach;
	    return $output;
	  else:
	    return 'No string given!';
	  endif;
	}

	function short_border() { ?>
				<div class="border"></div>
				<?php
	}


	//operators
	if(isset($_GET['action'])) {
		$action = $_GET['action'];
	} else {
		$action = "hello ";
	}

	 switch ($action) {
	 	case 'create':
	 		
	 		break;
	 	
	 	case 'update':

	 		break;

	 	case 'delete':

	 		break;

	 	default:
			$query = "SELECT topics.name AS postname, users.username AS username, topics.date AS postdate, topics.reason AS reason, comments.contents AS content FROM topics LEFT JOIN users ON users.id = topics.user_id LEFT JOIN comments ON comments.topic_id = topics.id"; //anders uitlijnen indien nodig
			$result = $connection->query($query);
			$topics = $result->fetch_all(MYSQLI_ASSOC);
	 		break;
	 }

	 //comments / later stuff
	// <?php 
	// 	$connection = new mysqli('localhost', 'root', '', 'anime');
	// 	$query = "SELECT contents FROM comments"; //anders uitlijnen indien nodig
	// 	$result = $connection->query($query);
	// 	$content = $result->fetch_all(MYSQLI_ASSOC);