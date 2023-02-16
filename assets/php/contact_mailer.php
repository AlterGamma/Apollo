<?php

require './vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST["submit"])){
    $formMail = $_POST['email'];
    $formSubject = $_POST['subject'];
    $formMessage = $_POST['message'];
    
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '95802d02995791';
        $mail->Password = '3b138e5ae361d5';
        
        //Recipients
        $mail->setFrom($formMail, 'Sender Name');
        $mail->addAddress('ludovic.tougas@gmail.com');
        $mail->addReplyTo($formMail, 'Reply-to Name');
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $formSubject;
        $mail->Body    = $formMessage;
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}