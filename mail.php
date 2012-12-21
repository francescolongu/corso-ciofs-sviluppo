<?php
$to = $_POST['mittente'];
$subject = "test mail php5";
$message = "hello mundo cruelSS";
$headers = "From: francesco@Cagliari" ."\r\n" .
"X-Mailer: PHP/" . phpversion ();
"Reply-To: francesco@Cagliari" . "\r\n" .

var_dump($headers);
var_dump($to);

if (mail ($to, $subject, $message, $headers) ) { echo "messaggio spedito";} 
else echo "messaggio non spedito";
?>
