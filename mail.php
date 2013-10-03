<?php


$name = $_POST["name"];
$email = $_POST["email"];
$interst = $_POST["interest"];
$message = $_POST["message"];


$to = "lindsey@museao.com";
$subject = "New Contact from Museao.com";
$message = 'Name: '.$name.' \n
		    Email: '.$email.' \n
		    Interest: '.$interst.' \n
		    Message: '.$message.' \n';
		    
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: DoNotReply <contact@museao.com>' . "\r\n";


mail($to, $subject, $message, $headers);


echo true;
?>