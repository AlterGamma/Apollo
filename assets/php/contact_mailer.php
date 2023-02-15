<?php

#commentaire

// require './vendor/autoload.php';

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// $mail = new PHPMailer(true);

// try {
//     //Server settings
//     $mail->CharSet = 'UTF-8';
//     $phpmailer->isSMTP();
//     $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
//     $phpmailer->SMTPAuth = true;
//     $phpmailer->Port = 2525;
//     $phpmailer->Username = '95802d02995791';
//     $phpmailer->Password = '3b138e5ae361d5';
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;    
  
//     //Recipients
//     $mail->setFrom('from@example.com', 'Mailer');
//     $mail->addAddress('202280148@cegepstfe.ca');
//     $mail->addReplyTo('info@example.com', 'Information');

//     //Content
//     $mail->isHTML(true);                                  //Set email format to HTML
//     $mail->Subject = 'Here is the subject';
//     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }