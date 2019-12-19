<?php

$Name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['number'];


$to='suryasurya903@gmail.com';
$subject='Aleef Enquiry Response';
$message = "<strong>Name: </strong>".$Name."<br><strong>E-mail ID: </strong>".$email."<br><strong>Mobile number: </strong>".$mobile;

echo "<script>alert('Thank you for the interest!');";
echo  "location.replace(\"http://66technos.com/aleef\");</script>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
echo mail($to, $subject, $message, $headers);


?>