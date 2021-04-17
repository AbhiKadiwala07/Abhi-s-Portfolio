<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$to = "abhikadiwalacom@gmail.com";
$subject = "Mail From abhishek07portfolio.netlify.app";
$txt ="Name = ". $name . "\r\n  Email = " . $email ."\r\n Subject= " . $subject . "\r\n Message =" . $message;
$headers = "From: noreply@abhishek07portfolio.netlify.app" . "\r\n";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>