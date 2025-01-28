<?php 

// include './connect.php';

$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From:Mohammed <info@address.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$to="mohammedhisham1999.3.1@gmail.com";
$subject="No subject"; 
$body="Goood work";
mail($to, $subject, $body, $headers);
