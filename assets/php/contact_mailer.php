<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
// action='index_done.php#afterform'

if(isset($_POST["submit"])){
    $formMail = $_POST['email'];
    $formSubject = $_POST['subject'];
    $formMessage = $_POST['message'];
    
    $mail = new PHPMailer(true);
    
    try {
        $mail->CharSet = 'UTF-8';
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
        $mail->isHTML(true);
        $mail->Subject = $formSubject;
        $mail->Body    = $formMessage;
        $mail->AltBody = $formMessage;
        $mail->send();
        echo 'Message has been sent';

        header('Location: index_done.php#afterform');

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>
