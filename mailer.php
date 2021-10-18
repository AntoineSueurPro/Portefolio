<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

if (!empty($_POST)) {

    $email = htmlspecialchars($_POST['email']);
    $nom = htmlspecialchars($_POST['nom']);
    $objet = htmlspecialchars($_POST['objet']);
    $messageMail = htmlspecialchars($_POST['message']);

    if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $erreur .= '<div class="alert alert-danger"> L\'email n\'est pas valide.</div>';
    }
    if (!isset($_POST['nom']) || strlen($_POST['nom']) < 2) {
        $erreur .= '<div class="alert alert-danger"> Le nom doit contenir au minimum 2 caractères.</div>';
    }
    if (!isset($_POST['message']) || strlen($_POST['message']) < 1) {
        $erreur .= '<div class="alert alert-danger"> Le message doit contenir ne doit pas être vide.</div>';
    }

    if (!isset($erreur)) {

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
            $mail->Body = $_POST['message'] . '<br>' . '/!\ Envoyé depuis portfolio - portfolio.antoine-sueur.com /!\ ';
            $mail->AltBody = $_POST['message'] . 'Envoyé depuis le portfolio - portfolio.antoine-sueur.com';
            $mail->SMTPDebug = 0;
            if ($mail->send()) {
                $message = '<div class="alert alert-success">Mail envoyé ! Merci pour votre interêt.</div>';
            };

        } catch (Exception $e) {
            $message = '<div class="alert alert-danger">Echec dans l\'envoi du mail</div>';
        }
    } else {
        $message = $erreur;
    }
}