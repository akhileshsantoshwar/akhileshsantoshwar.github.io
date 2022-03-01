<?php

 
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "akhileshsantoshwarofficial.com";
$subject = "Mail from website";

$header = "From ".$name. "\r\n" .

$txt = "Name: ".$name."\r\nEmail: ".$email."\r\nMobile: ".$phone."\r\message: ".$message;

if($email!=NULL){
	mail($to, $phone, $txt, $header);
}


?>