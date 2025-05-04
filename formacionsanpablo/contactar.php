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
    <link href="css/stylescontactar.css" rel="stylesheet">
</head>
<body>
    
    <?php
    require_once("head.php");
    ?>
    <nav aria-label="breadcrumb" class="container-lg">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none ">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contactar</li>
  </ol>
</nav>
    <section class="container fluid my-5">
    <form name="contacto" id="contacto" class="formularioCorporativo" >
        <div class="row">
            <div class="m-2 col-4">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" required class="form-control">
            </div>
            <div class="m-2 col-4">
                <label class="form-label">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" requiered class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="m-2 col-4">
                <label class="form-label">Mail</label>
                <input type="email" name="mail" id="mail" require class="form-control">
            </div>
            <div class="m-2 col-4">
                <label class="form-label">Teléfono</label>
                <input type="numer" name="tlf" id="tlf" require class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="mb-3">
            <label for="contacto" class="form-label">Mensaje</label>
            <textarea class="form-control" id="mensaje" rows="3"></textarea>
        </div>
        </div> 
        <div class="text-center">
        <button type="submit" class="btn btn-dark text-white w-25 me-5 my-3">Enviar</button>
        </div>              
    </form>
    </section>

    <?php
    require_once("footer.php");
    ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c2297f4102.js" crossorigin="anonymous"></script>
    <script src="js/scriptContactar.js"></script>
</body>
</html>