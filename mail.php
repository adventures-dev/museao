<?php


$name = $_POST["name"];
$email = $_POST["email"];
$interst = $_POST["interest"];
$message = $_POST["message"];

$to = "lindsey@museao.com";
$subject = "New Contact from Museao.com";
$message = 'Name: '.$name.' <br>
		    Email: '.$email.' <br>
		    Interest: '.$interst.' <br>
		    Message: '.$message.' <br>';
		    
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Contact Museao <contact@museao.com>' . "\r\n";


mail($to, $subject, $message, $headers);


echo true;
?>