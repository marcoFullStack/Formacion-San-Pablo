<?php
extract($_POST);
    require_once("errores.php");
    require_once("conectar.php");
    $data = $cnx->prepare("INSERT INTO marco_cursosdesempleados (codcertificado,certificado,nivel,horas,practicas,disponible,activo,ver) VALUES (?,?,?,?,?,?,?,?)");
    $data->bind_param("ssssssss",$codcertificado,$certificado,$nivel,$horas,$practicas,$disponible,$activo,$ver,);
    $data->execute();
        if ($data->error) {
            echo $data->error;
        }
        else {
            echo "REGISTRO GUARDADO";
        }
        $cnx->close();
        ?>