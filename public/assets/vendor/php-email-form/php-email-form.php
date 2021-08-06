<?php
require_once 'PHPMailer/PHPMailer.php';
require_once '/servicios/PHPMailer/SMTP.php';
require_once '/servicios/PHPMailer/Exception.php';

$mail = new \PHPMailer\PHPMailer\PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'correo@gmail.com';
    $mail->Password = 'contrasenia';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    // Recipients
    $mail->setFrom('correo@gmail.com', 'my name');
    $mail->addAddress('destination@correo.com');

    // Attachments
    $mail->addAttachment('optional file');         // Add files, is optional

    // Content
    $mail->isHTML(true);// Set email format to HTML
    $mail->Subject = utf8_decode("subject");
    $mail->Body    = utf8_decode("mail content");
    $mail->AltBody = '';
    $mail->send();
}
catch (Exception $e) {
    $error = $mail->ErrorInfo;
}