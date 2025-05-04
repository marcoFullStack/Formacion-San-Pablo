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
    <link href="css/stylesCursoDesempleado.css" rel="stylesheet">
</head>
<body>
    
    <?
    require_once("adminHead.php");
    ?>

    <section class="py-5">
    <section class="container-fluid">
    <form name="addCursoTrabajador" id="addCursoTrabajador" class="formularioCorporativo">
        <div class="row">
        <div class="col-sm-12 col-lg-4">
            <lable class="form-label">Curso</lable>
            <input type="text" name="curso" id="curso" maxlength="100" required class="form-control">
        </div>
        <div class="col-sm-12 col-lg-4">
            <label class="form-label">Horas</label>
            <input type="text" name="horas" id="horas" maxlength="100" required class="form-control">
        </div>
        <div class="col-sm-12 col-lg-4">
            <label class="form-label">Disponible</label>
            <input type="text" name="disponible" id="disponible" maxlength="100" required class="form-control">
        </div>
        <div class="col-sm-12 col-lg-4">
            <label class="form-label">Activo</label>
            <input type="text" name="activo" id="activo" maxlength="100" required class="form-control">
        </div>
        <div class="col-sm-12 col-lg-4">
            <label class="form-label">Link del curso</label>
            <input type="text" name="ver" id="ver" maxlength="255" required class="form-control">
        </div>
        <div class="col-sm-12 col-lg-4">
            <button type="submit" class="btn btn-dark text-white w-25 me-5 my-3">Grabar</button>
        </div>
        </div>
        
    </form>
    </section>
    </section>
    <div class="text-center py-5">
    <button id="listaCurso" class="btn btn-dark text-white w-25">Lista de Cursos</button>
    </div>

    <?
    require_once("footer.php");
    ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c2297f4102.js" crossorigin="anonymous"></script>
    <script src="js/scriptAddCursoTrabajador.js"></script>
</body>
</html>