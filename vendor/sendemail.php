<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require_once 'vendor/autoload.php';
 
$mail = new PHPMailer(true);
?>
$mail->isSMTP();
$mail->Host = 'smtp.googlemail.com';  //gmail SMTP server
$mail->SMTPAuth = true;
$mail->Username = 'GMAIL_USERNAME';   //username
$mail->Password = 'GMAIL_PASSWORD';   //password
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('FROM_EMAIL_ADDRESS', 'FROM_NAME');
$mail->addAddress('RECEPIENT_EMAIL_ADDRESS', 'RECEPIENT_NAME');
 
$mail->isHTML(true);
 
$mail->Subject = 'Email subject';
$mail->Body    = '<b>Email Body</b>';
 
$mail->send();
echo 'Message has been sent';