<?php

// error_reporting(E_ALL | E_WARNING | E_NOTICE);
// ini_set('display_errors', TRUE);

// error_reporting(-1);
// ini_set('display_errors', 'On');
// set_error_handler("var_dump");

$emailto = 'developer@harryw.co.uk';
$toname = 'To Ronnie';
$emailfrom = $_POST['email'];
$fromname = $_POST['name'];
$subject = $_POST['subject'];
$txt = $_POST['message'];
$headers = 
	'Return-Path: ' . $emailfrom . "\r\n" . 
	'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" . 
	'X-Priority: 3' . "\r\n" . 
	'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
	'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
	'MIME-Version: 1.0' . "\r\n" . 
	'Content-Transfer-Encoding: 8bit' . "\r\n" . 
	'Content-Type: text/plain; charset=UTF-8' . "\r\n";
$params = '-f ' . $emailfrom;

if (mail($emailto, $subject, $txt, $headers, $params)) {
  echo "Mail Sent.";
}
else {
  echo "failed";
}
header('Location: https://www.google.com');

?> 