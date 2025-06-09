<?php
$to = 'alguien@example.com';
$subject = 'Correo de prueba';
$message = '<h1>Hola</h1><p>Este correo fue enviado usando mail().</p>';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: tu-email@example.com' . "\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo 'Correo enviado correctamente.';
} else {
    echo 'Error al enviar el correo.';
}