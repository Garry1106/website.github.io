<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$email_from='info@yourwebsite.com';
$email_subject='New From Submission';
$email_body="User name:$name.\n".
            "User email:$email.\n".
            "Subject:$subject.\n".
            "User Message:$message.\n";
$to='xyz@gmail.com';

$header="From: $email \n";

$header .="reply-to:$email\r\n";
mail($to,$subject,$email_body,$header);
header("Location:contact.html");
?>