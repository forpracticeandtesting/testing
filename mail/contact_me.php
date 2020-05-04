<?php
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	

$to = 'forpracticeandtesting@gmail.com'; 
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";

$headers = "From:Testing Web Form <webform@google.com>". "\r"."\n";
$headers .= "Reply-to: <$email_address>"."\r"."\n";

$headers .= "MIME-Version: 1.0\n" . "Content-type: text/html; charset=utf-8\n";
	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>