<?php
// Verificamos que se haya enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $email_amigo = filter_var($_POST['email_amigo'], FILTER_VALIDATE_EMAIL);

    if ($nombre && $email && $email_amigo) {
        // Asunto y mensaje del correo
        $asunto = "$nombre te recomienda este sitio web";
        $mensaje = "Hola,\n\nTu amigo $nombre ($email) quiere recomendarte este sitio web : https://www.ejemplo.com";

        // Encabezados del correo
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Enviamos el correo
        if (mail($email_amigo, $asunto, $mensaje, $headers)) {
            echo "<p>Gracias, $nombre. Se ha enviado la recomendación a $email_amigo.</p>";
        } else {
            echo "<p>Error al enviar el correo. Intenta nuevamente más tarde.</p>";
        }
    } else {
        echo "<p>Por favor, asegurate de ingresar direcciones de correo válidas.</p>";
    }
} else {
    echo "<p>Acceso inválido.</p>";
}
?>