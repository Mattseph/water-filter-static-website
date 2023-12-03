<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './../vendor/autoload.php'; // Include PHPMailer library

// Replace this with your own email address
$to = 'bilaos02311@gmail.com';

function url()
{
    return sprintf(
        "%s://%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME']
    );
}

if ($_POST) {

    $name = trim(stripslashes($_POST['name']));
    $email = trim(stripslashes($_POST['email']));
    $subject = trim(stripslashes($_POST['subject']));
    $contact_message = trim(stripslashes($_POST['message']));

    if ($subject == '') {
        $subject = "Contact Form Submission";
    }

    // Initialize Message
    $message = "";

    // Set Message
    $message .= "Email from: " . $name . "<br />";
    $message .= "Email address: " . $email . "<br />";
    $message .= "Message: <br />";
    $message .= nl2br($contact_message);
    $message .= "<br /> ----- <br /> This email was sent from your site " . url() . " contact form. <br />";

    // Set From: header
    $from = $name . " <" . $email . ">";

    try {
        // Create a PHPMailer object
        $mail = new PHPMailer(true);

        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'bilaos02311@gmail.com';
        $mail->Password = 'rrmmmjg02311';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Additional options for SSL verification
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => true,
                'verify_peer_name' => true,
                'allow_self_signed' => false,
                'cafile' => './../cacert.pem', // Replace with the actual path
            ],
        ];

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress($to);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        // Enable debugging for more detailed output
        $mail->SMTPDebug = 2;
        $mail->Debugoutput = function ($str, $level) {
            echo "debug level $level; message: $str";
        };

        $mail->send();
        echo "OK";
    } catch (Exception $e) {
        echo "Something went wrong. Please try again. Error: {$e->getMessage()}";
    }
}
?>