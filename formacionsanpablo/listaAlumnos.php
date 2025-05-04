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

<div class="negro">
        <div class="text-center fondo">
            <h1 class="text-uppercase color py-5">Alumnos de la Escuela San Pablo</h1>
        </div>
    </div>
    <section class="container-lg my-5">
        <div class="row tabla">
            <table class="table" id="listatabla">
                <thead>
                    <tr class="text-center">
                        <th class="bg-body-secondary">Nombre</th>
                        <th class="bg-body-secondary">Apellidos</th>
                        <th class="bg-body-secondary">DNI/NIE</th>
                        <th class="bg-body-secondary">Email</th>
                        <th class="bg-body-secondary">Teléfono</th>
                        <th class="bg-body-secondary">Localidad</th>
                        <th class="bg-body-secondary">Curso</th>
                        <th class="bg-body-secondary">Editar</th>
                        <th class="bg-body-secondary">Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once("conectar.php");
                        $data = $cnx->query("SELECT nombre,apellidos,dni,mail,tlf,localidad,curso FROM marco_alumno ORDER BY nombre");
                        while ($row = $data->fetch_assoc()) {
                            extract($row);
                            echo "<tr class='text-center align-middle'><td>$nombre</td><td>$apellidos</td><td>$dni</td><td>$mail</td><td>$tlf</td><td>$localidad</td><td>$curso</td><td><a href='editarAlumno.php' class='text-decoration-none text-white'><button type='button' class='btn btn-success text-white'>Editar</button></a></td><td><button type='button' class='btn btn-danger btnEliminar'>Eliminar</button></td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
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