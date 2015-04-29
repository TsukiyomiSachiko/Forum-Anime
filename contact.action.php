<?php
  $name ="";
  $email ="";
  $title ="";
  $message ="";

  $Tempname ="";
  $Tempemail ="";
  $Temptitle ="";
  $Tempmessage ="";

  $nameError ="";
  $emailError ="";
  $titleError ="";
  $messageError ="";
  $successMessage ="";
  
  if(isset($_POST['submit'])){
  	if(empty($_POST['name'])){
  		$nameError = "Name is required";
  		$successMessage = "Please fill in all the forms correctly.";
  	}
  	else{
  		$name = test_input($_POST['name']);
  		$Tempname = $_POST['name'];
  		if(!preg_match('/^[a-zA-Z ]*$/',$name)){
            $nameError = "Only letters and white space allowed";
  			$successMessage = "Please fill in all the forms correctly.";
  			$Tempname = $_POST['name'];
         }
  	}

  	if(empty($_POST['email'])){
       	$emailError = "Email is required";
  		$successMessage = "Please fill in all the forms correctly.";
    }
	else{
	    	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
	  			$email = test_input($_POST['email']);
  				$Tempemail = $_POST['email'];
			}
			else {
	  			$emailError = "This is not a valid email adress";
  				$successMessage = "Please fill in all the forms correctly.";
  				$Tempemail = $_POST['email'];
			}
    }

    if(empty($_POST['title'])){
      	$titleError = "Title is required";
  		$successMessage = "Please fill in all the forms correctly.";
    }
   	else{ 
	  	$title = test_input($_POST['title']);
  		$Temptitle = $_POST['title'];  
	}
   if(empty($_POST['message'])){
      	$messageError = "Message is required";
  		$successMessage = "Please fill in all the forms correctly.";
    } 
   	else{ 
	  	$message = test_input($_POST['message']);
  		$Tempmessage = $_POST['message'];  
	}

	if(!($name=='')&&!($email=='')&&!($title=='')&&!($message=='')){

    if(preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
      
		$header= $name."<". $email .">";
        $headers = "Anime Forum";
		$msg = "Hello! $name

 Thank you...! For Contacting Us.

 Name: $name
 E-mail: $email
 Purpose: $title
 Message: $message 
  
 This is a Contact Confirmation mail.
 We Will contact You as soon as possible.";

$msg1 = " $name Contacted Us.

 Here are some information about $name.

 Name: $name
 E-mail: $email
 Purpose: $title
 Message: $message ";

if(mail($email, $headers, $msg ) && mail("animeforum.stajl@gmail.com", $header, $msg1 ))
    {
		$successMessage = "Message sent successfully.";
		$Tempname ="";
		$Tempemail ="";
		$Temptitle ="";
		$Tempmessage ="";
    }
  }
else { $emailError = "Invalid Email"; }

 }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }
?>