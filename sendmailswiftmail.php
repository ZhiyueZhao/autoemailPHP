<?php
require_once './vendor/autoload.php';

// Create the Transport
// $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'TLS'))
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'SSL'))
  ->setUsername('Username@gmail.com')
  ->setPassword('Password')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
  ->setFrom(['george880131@gmail.com' => 'George Zhao'])
  ->setTo(['zzy880131@163.com', 'georgezhaowork@gmail.com' => 'Work use'])
  ->setBody('Here is the message itself')
  ;

// Send the message
$result = $mailer->send($message);
?>