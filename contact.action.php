<?php
  $name ="";
  $email ="";
  $title ="";
  $message ="";

  $nameError ="";
  $emailError ="";
  $titleError ="";
  $messageError ="";
  $successMessage ="";
  
  if(isset($_POST['submit'])){
  	if(empty($_POST['name'])){
  		$nameError = "Name is required";
  	}
  	else{
  		$name = test_input($_POST['name']);
  		if(!preg_match('/^[a-zA-Z ]*$/',$name)){
            $nameError = "Only letters and white space allowed"; 
         }
  	}

  	if(empty($_POST['email'])){
       $emailError = "Email is required";
    } 
   	else{
      $email = test_input($_POST['email']);
    }

    if(empty($_POST['title'])){
      $titleError = "Title is required";
    }
   	else{ 
	  $title = test_input($_POST['title']);  
	}
   if(empty($_POST['message'])){
      $messageError = "Message is required";
    } 
   	else{ 
	  $message = test_input($_POST['message']);  
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
	$successMessage = "Message sent successfully.......";
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