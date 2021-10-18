<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

if(!empty($_POST)) {

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'antoine.sueur17@gmail.com';                 // SMTP username
        $mail->Password = '************';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom($_POST['email'], $_POST['nom']);
        $mail->addReplyTo($_POST['email'], $_POST['nom']);
        $mail->addAddress('antoine.sueur17@gmail.com', 'Antoine Sueur');

        //Content
        $mail->isHTML(true);
        $mail->Subject = $_POST['objet'];
        $mail->Body = $_POST['message'];
        $mail->AltBody = $_POST['message'];
        $mail->SMTPDebug = 0;
        if($mail->send()) {
            $message =  '<div class="alert alert-success">Mail envoyé ! Merci pour votre interêt.</div>';
        };

    } catch (Exception $e) {
        $message =  '<div class="alert alert-danger">Echec dans l\'envoi du mail</div>';
    }
}