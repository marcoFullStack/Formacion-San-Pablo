<?php
require_once("errores.php")
?>




<?
extract($_POST);
require_once("conectar.php");
$query = "SELECT nombre, apellidos, dni, mail, tlf, localidad, curso FROM marco_alumno";
$data = $cnx->query($query);
while ($row = $data->fetch_assoc())
    extract($row);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Escuela San Pablo - Valladolid | Cursos Gratuitos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/faviconsite.webmanifest">
    <link rel="mask-icon" href="/images/faviconsafari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="css/stylesaddAlumno.css" rel="stylesheet">
</head>
<body>
    
    <?
    require_once("adminHead.php");
    ?>

<section class="py-5">
    <section class="container-fluid">
    <form name="editAlumno" id="editAlumno" class="formularioCorporativo" >
        <div class="row">
            <div class="m-2 col-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" required class="form-control" value="<?php echo $nombre; ?>">
            </div>
            <div class="m-2 col-3">
                <label class="form-label">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" requiered class="form-control" value="<?php echo $apellidos; ?>">
            </div>
            <div class="m-2 col-3">
                <label class="form-label">DNI/NIE</label>
                <input type="text" name="dni" id="dni" required class="form-control" value="<?php echo $dni; ?>">
            </div>
        </div>
        <div class="row">
            <div class="m-2 col-4">
                <label class="form-label">Mail</label>
                <input type="email" name="mail" id="mail" require class="form-control" value="<?php echo $mail; ?>">
            </div>
            <div class="m-2 col-4">
                <label class="form-label">Teléfono</label>
                <input type="numer" name="tlf" id="tlf" require class="form-control" value="<?php echo $tlf; ?>">
            </div>
        </div>
        <div class="row">
            <div class="m-2 col-4">
                <label class="form-label">Localidad</label>
                <input type="text" name="localidad" id="localidad" require class="form-control" value="<?php echo $localidad; ?>">
            </div>
            <div class="m-2 col-4">
                <label class="form-label">Curso</label>
                <input type="text" name="curso" id="curso" require class="form-control" value="<?php echo $curso; ?>">
            </div>
        </div> 
        <div class="text-center">
        <button type="submit" class="btn btn-dark text-white w-25 me-5 my-3">Editar</button>
        </div>              
    </form>
    </section>
    </section>

    <?
    require_once("footer.php");
    ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c2297f4102.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/scriptListaAlumno.js"></script>
</body>
</html>