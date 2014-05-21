<?php


$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$event_type = $_POST["event_type"];
$guest_count = $_POST["guest_count"];
$time = $_POST["time"];
$date = $_POST["date"];
$catered = $_POST["catered"];
$notes = $_POST["notes"];


if($name && $email){
$to = "museaoevents@gmail.com";
	

$subject = $name." has contacted Museao Events!";
$message = 'Name: '.$name.' <br>
		    Email: '.$email.' <br>
		    Phone: '.$phone.' <br>
		    Event Type: '.$event_type.' <br>
		    Guest Count: '.$guest_count.' <br>
		    Date: '.$date.' <br>
		    Times: '.$time.' <br>
		    Catered? (+details): '.$catered.' <br>
		    Notes: '.$notes.' <br>';
		    
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$name.' <contact@museao.com>' . "\r\n";


mail($to, $subject, $message, $headers);


echo true;
}else{
	echo "Something went wrong.  Please try again later.";
}
?>