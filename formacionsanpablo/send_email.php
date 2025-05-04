<?php
require_once("errores.php");




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['mail']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $dni = htmlspecialchars($_POST['dni']);
    $curso = htmlspecialchars($_POST['curso']);
    $comentarios = htmlspecialchars($_POST['comentarios']);

    $to = "mgz5489@hotmail.com";
    $subject = "Nueva Preinscripción - Escuela San Pablo";
    $message = "Nombre y Apellidos: $nombre\n";
    $message .= "Email: $email\n";
    $message .= "Teléfono: $telefono\n";
    $message .= "NIF/NIE: $dni\n";
    $message .= "Curso: $curso\n";
    $message .= "Comentarios: $comentarios\n";

    $headers = "From: mgz5489@hotmail.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "El formulario ha sido enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el formulario.";
    }
} else {
    header("Location: index.html");
    exit();
}
?>