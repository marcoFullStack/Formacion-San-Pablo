<?php
extract($_POST);
    require_once("errores.php");
    require_once("conectar.php");
    $data = $cnx->prepare("INSERT INTO marco_contacto (nombre,apellidos,mail,tlf,mensaje) VALUES (?,?,?,?,?)");
    $data->bind_param("sssss",$nombre,$apellidos,$mail,$tlf,$mensaje);
    $data->execute();
        if ($data->error) {
            echo $data->error;
        }
        else {
            echo "REGISTRO GUARDADO";
        }
        $cnx->close();
        ?>