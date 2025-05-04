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
<section class="formulario container-lg">
        <h6>PRE INSCRIPCIÓN</h6>
        <form name="inscripcion" id="inscripcion" method="post" action="send_email.php" enctype="multipart/form-data" class="form">
            <label class="form-label pt-2">Nombre y Apellidos<span class="text-danger">(*)</span></label>
            <input type="text" name="nombre" id="nombre" maxlength="100" required class="form-control">
            <label class="form-label pt-2">Email<span class="text-danger">(*)</span></label>
            <input type="email" name="mail" id="mail" maxlength="100" required class="form-control">
            <label class="form-label pt-2">Teléfono<span class="text-danger">(*)</span></label>
            <input type="text" name="telefono" id="telefono" maxlength="12" required class="form-control">
            <label class="form-label pt-2">NIF/NIE<span class="text-danger">(*)</span></label>
            <input type="text" name="dni" id="dni" maxlength="10" required class="form-control">
            <label class="form-label pt-2">Seleccione provincia y modalidad<span class="text-danger">(*)</span></label>
            <select name="curso" id="curso" class="form-select pt-2">
                <option value="no" selected disabled>Selecciona una opción</option>
                <option value="VP">Valladolid - Presencial</option>
                <option value="VO">Valladolid - Online</option>
                <option value="Burgos">Burgos - Presencial</option>
            </select>
            <label class="form-label pt-2">Copia del NIE/NIF y de la tarjeta de desempleo</label>
            <input type="file" name="file" id="file" class="form-control">
            <label for="comentarios" class="form-label pt-2">Comentarios - Observaciones</label>
            <textarea class="form-control" id="comentarios" name="comentarios" rows="3"></textarea>
            <div class="row">
                <div class="col-sm-12 col-lg-6 pt-2">
                <input type="submit" value="Enviar" name="enviar" id="enviar" class="btn btn-dark text-white">
                </div>
                <div class="col-sm-12 col-lg-6 pt-2 boton">
                    <a href="politicaDePrivacidad.php" target="_blank" class="text-decoration-none text-danger nohover">Política de privacidad</a>
                </div>
            </div>
        </form>
    </section> 
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c2297f4102.js" crossorigin="anonymous"></script>
    <script src="js/scriptAddAlumno.js"></script>
</body>
</html>