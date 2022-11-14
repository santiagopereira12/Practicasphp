<?php
require("C:/Windows/System32/vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

function envioCorreo($subject, $body, $email, $name, $html = false){

    //configuracion servidor de correo
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->Port = 465;
    $phpmailer->Username = 'santiagopereira2001.09@gmail.com';
    $phpmailer->Password = 'drcgmmiqvtskjahu';

    //configuracion destinatario
    $phpmailer->setFrom('santiago@proyecto.co.es', 'Proyecto Santiago');
    $phpmailer->addAddress($email, $name);

    //contenido del email
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body = $body;

    //enviar correo
    $phpmailer->send();
}
?>