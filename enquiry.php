<?php
$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];
$phone=$_POST["phone"];
$sub="Request for new Client ".$name;
$to = "sriram@vinteksolution.com,aravind@vinteksolution.com,";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$email.'>' . "\r\n";
$message="name : ".$name.", <br> Email ID : ".$email.", <br>Phone Number : ".$phone.", <br> Message : ".$message;
mail($to,$sub,$message,$headers);
echo 1;
?>