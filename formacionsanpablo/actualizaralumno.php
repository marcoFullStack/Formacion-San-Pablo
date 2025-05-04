<?php
require_once("conectar.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'] ?? '';
    $apellidos = $_POST['apellidos'] ?? '';
    $dni = $_POST['dni'] ?? '';
    $mail = $_POST['mail'] ?? '';
    $tlf = $_POST['tlf'] ?? '';
    $localidad = $_POST['localidad'] ?? '';
    $curso = $_POST['curso'] ?? '';

    if (empty($dni)) {
        echo "DNI/NIE es requerido.";
        exit;
    }

    $data = $cnx->prepare("UPDATE marco_alumno SET nombre = ?, apellidos = ?, mail = ?, tlf = ?, localidad = ?, curso = ? WHERE dni = ?");
    $data->bind_param("sssssss", $nombre, $apellidos, $mail, $tlf, $localidad, $curso, $dni);
    $data->execute();

    if ($data->error) {
        echo $data->error;
    } else {
        echo 0;
    }

    $data->close();
    $cnx->close();
} else {
    echo "Solicitud inválida.";
}
?>