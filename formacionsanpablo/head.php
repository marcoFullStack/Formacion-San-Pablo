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
    <link href="css/stylesHead.css" rel="stylesheet">
</head>
<body>
    <header>
        <section class="container-fluid colorCorporativo1 py-2">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <a href="mailto:cursos@sanpabloformación.com" class="text-white text-decoration-none mx-3"><i class="fa-solid fa-envelope"></i> cursos@sanpabloformación.com</a>
                    <a href="tel:+34618259441" class="text-white text-decoration-none mx-3"><i class="fa-solid fa-phone"></i> 618259441</a>
                    <button class="open-button colorCorporativo1 border-0 text-white mx-2" onclick="openForm()"><i class="fa-regular fa-comment-dots"></i> ¿Tienes dudas?</button>
                </div>
                <div class="col-sm-12 col-md-6 text-end px-5">
                    <button id="sesion" class="botonCorporativo">Iniciar Sesión</button>
                </div>
                <div class="form-popup" id="dudas">
                    <form action="dudas" class="form-container">
                      <div class="row">
                        <div class="col-9">
                        <h5 class="text-decoration-underline">Solicita información</h5>
                        </div>
                        <div class="col-3 text-end">
                        <button type="button" onclick="closeForm()"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                      </div>
                      <label class="form-label fw-bold mt-3">Nombre</label>
                      <input type="text" name="nombre" id="nombre" maxlength="100" class="form-control" placeholder="Escriba su nombre" required>
                  
                      <label class="form-label fw-bold mt-3">Teléfono</label>
                      <input type="number" name="telefono" id="telefono" maxlength="11" placeholder="Escriba su teléfono" class="form-control" required>

                      <label class="form-label fw-bold mt-3">Mail</label>
                      <input type="mail" name="mail" id="mail" maxlength="100" class="form-control" placeholder="Escriba su Mail" required>

                      <label class="form-label fw-bold mt-3">¿Que le interesa?</label>
                      <select name="preferencia" id="preferencia" class="form-select">
                        <option value="fija" selected disabled>Elija una opcion</option>
                        <option value="cursosTrabajadores">Cursos para trabajadores</option>
                        <option value="cursosDesempleados">Cursos para Desempleados</option>
                      </select>
                      
                      <button type="submit" class="btn">Solicitar</button>  
                    </form>
                </div>
            </div>
        </section>
        
        <section class="container-fluid colorCorporativo1">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-3 text-center">
                    <a href="index.php"><img src="images/LOGO SP TRANSP.png" alt="Logo Escuela" class="w-25"></a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-9">
                    <h2 class="text-white">ESCUELA DE ESTUDIOS SUPERIORES SAN PABLO</h2>
                </div>
            </div>
        </section>
    </header>
    <section class="navegador">
        <nav class="navbar navbar-expand-lg colorCorporativo2">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link text-white fw-bold px-3 mx-3" href="index.php">Inicio</a>
                  <div class="hr"></div>
                  <a class="nav-link text-white fw-bold px-3 mx-3" href="index.php#centro">El centro</a>
                  <div class="hr"></div>
                  <a class="nav-link text-white fw-bold px-3 mx-3" href="extraerCursosDesempleados.php">Cursos para Desempleados</a>
                  <div class="hr"></div>
                  <a class="nav-link text-white fw-bold px-3 mx-3" href="extraerCursosTrabajadores.php">Cursos para Trabajadores</a>
                  <div class="hr"></div>
                  <a class="nav-link text-white fw-bold px-3 mx-3" href="contactar.php">Contactar</a>
                  <div class="hr"></div>
                </div>
              </div>
            </div>
          </nav>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c2297f4102.js" crossorigin="anonymous"></script>
    <script src="js/scripthead.js"></script>
</body>
</html>