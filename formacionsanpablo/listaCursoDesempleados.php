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

<nav aria-label="breadcrumb" class="container-lg">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none ">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Cursos para Desempleados</li>
  </ol>
</nav>

    <div class="negro">
        <div class="text-center fondo">
            <h1 class="text-uppercase color py-5">certificados de profesionalidad</h1>
        </div>
    </div>
    <section class="container-lg my-5">
        <div class="row tabla">
            <table class="table" id="listatabla">
                <thead>
                    <tr class="text-center">
                        <th class="bg-body-secondary">Codido Certificado</th>
                        <th class="bg-body-secondary">Certificado</th>
                        <th class="bg-body-secondary">Nivel</th>
                        <th class="bg-body-secondary">Horas</th>
                        <th class="bg-body-secondary">Practicas</th>
                        <th class="bg-body-secondary">Disponible</th>
                        <th class="bg-body-secondary">Activo</th>
                        <th class="bg-body-secondary">Ver</th>
                        <th class="bg-body-secondary">Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once("conectar.php");
                        $data = $cnx->query("SELECT codcertificado,certificado,nivel,horas,practicas,disponible,activo,ver FROM marco_cursosdesempleados ORDER BY codcertificado");
                        while ($row = $data->fetch_assoc()) {
                            extract($row);
                            echo "<tr class='text-center align-middle'><td>$codcertificado</td><td>$certificado</td><td>$nivel</td><td>$horas</td><td>$practicas</td><td>$disponible</td><td>$activo</td><td><a href='$ver' class='text-decoration-none text-white'><button type='button' class='btn btn-dark text-white'>más detalles</button></a></td><td><button type='button' class='btn btn-danger btnEliminar'>Eliminar</button></td></tr>";
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
    <script src="js/listaCursoDesempleados.js"></script>
</body>
</html>