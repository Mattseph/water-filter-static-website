<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require './../vendor/autoload.php'; // Include PHPMailer library


if ($_POST) {

    $name = trim(stripslashes($_POST['name']));
    $email = trim(stripslashes($_POST['email']));
    $subject = trim(stripslashes($_POST['subject']));
    $message = trim(stripslashes($_POST['message']));

    try {
        // Create a PHPMailer object
        $mail = new PHPMailer(true);

        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Username = 'bilaos02311@gmail.com';
        $mail->Password = 'ilsfgvzzmlpiszzn';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('bilaos02311@gmail.com', 'Matthew');
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;


        $mail->send();
        header("location: ./success.php");
    } catch (Exception $e) {
        echo "Something went wrong. Please try again. Error: {$e->getMessage()}";
    }
}
