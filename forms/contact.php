<?php

 
$name = $_POST['name'];
$email = $_POST['email'];
$sub = $_POST['sub'];
$message = $_POST['message'];
$to = "akhileshsantoshwarofficial.com";
$subject = "Mail from website";

$header = "From ".$name. "\r\n" .

$txt = "Name: ".$name."\r\nEmail: ".$email."\r\nsubject: ".$sub."\r\message: ".$message;

if($email!=NULL){
	mail($to, $sub, $txt, $header);
}


?>