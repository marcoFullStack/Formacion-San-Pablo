<?php
extract($_POST);
    require_once("errores.php");
    require_once("conectar.php");
    $data = $cnx->prepare("INSERT INTO marco_cursostrabajadores (curso,horas,disponible,activo,ver) VALUES (?,?,?,?,?)");
    $data->bind_param("sssss",$curso,$horas,$disponible,$activo,$ver);
    $data->execute();
        if ($data->error) {
            echo $data->error;
        }
        else {
            echo "REGISTRO GUARDADO";
        }
        $cnx->close();
        ?>