<?php
extract($_POST);
    require_once("errores.php");
    require_once("conectar.php");
    $data = $cnx->prepare("INSERT INTO marco_profesor (nombre,apellidos,numero,mail,tlf,aula,curso) VALUES (?,?,?,?,?,?,?)");
    $data->bind_param("sssssss",$nombre,$apellidos,$numero,$mail,$tlf,$aula,$curso);
    $data->execute();
        if ($data->error) {
            echo $data->error;
        }
        else {
            echo "REGISTRO GUARDADO";
        }
        $cnx->close();
        ?>