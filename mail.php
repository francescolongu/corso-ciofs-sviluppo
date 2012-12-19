<?php
$to = "longufrancesco@hotmail.it";
$subject = "test mail php5";
$message = "hello";
$headers = "From: longufrancesco@hotmail.it" ."\r\n" .
"X-Mailer: PHP/" . phpversion ();
"Reply-To: longufrancesco@hotmail.it" . "\r\n" .

var_dump($headers);
var_dump($to);

if (mail ($to, $subject, $message, $headers) ) { echo "messaggio spedito";} 
else echo "messaggio non spedito";
?>
