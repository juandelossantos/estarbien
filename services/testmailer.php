<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'personal133.conain.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'yoquiero@estarbien.co';                 // SMTP username
$mail->Password = 'Desp2006!';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'info@tuclubdenutricionps.com';
$mail->FromName = 'yo quiero estar bien';
$mail->addAddress('sierra.emilio@gmail.com');     // Add a recipient
$mail->addAddress('david_sierra57@hotmail.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'esta es una prueba';
$mail->Body    = 'vamos a ver si ahora si funciona <b>todo ok</b>';
$mail->AltBody = 'vamos a ver si ahora si funciona todo ok';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}