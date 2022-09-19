<?php
if (isset($_POST['submit'])){
$mailto= "casto@mswakinisafaris.com";
$fname= $_POST['name'];
$email = $_POST['email'];
$adult = $_POST['emai'];
$teen = $_POST['num'];
$date = $_POST['date'];
$message = $_POST['message'];


$messageOwn = "Client : ".$fname."\n"."Have make a booking\n On".$date."\nWith ".$adult." Adults and ".$teen." children \n  with Plan : ".$message;
$client = "Dear ".$fname."\n\nThank you for making Tour safari with us\n Asante Sana";
$header= "From: ".$email;
$header2 ="From: ".$mailto;

$result = mail($mailto, "client Book", $messageOwn, $header );
$result1 = mail($email, "Thanks For Book with us", $client, $header2 );


