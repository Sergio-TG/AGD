<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Configura el correo electrónico
    $to = "sergiotorresguaymasi@gmail.com"; // Reemplaza "tu correo" con tu dirección de correo electrónico de Gmail
    $subject = "Mensaje de contacto desde tu sitio web";
    $message = "Nombre: " . $nombre . "\n";
    $message .= "Correo electrónico: " . $email . "\n";
    $message .= "Mensaje: " . $mensaje;

    // Envía el correo electrónico
    mail($to, $subject, $message);

    // Redirecciona a una página de agradecimiento o muestra un mensaje de éxito
    header("Location: gracias.html");
    exit;
}
?>