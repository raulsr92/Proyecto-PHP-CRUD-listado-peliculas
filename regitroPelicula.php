<?php

include_once './controladores/funciones.php';

$bd = conexion('localhost','cine_isil','root','');

if ($_POST) {
  guardarUsuario($bd,'movies',$_POST);
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/estilosRegistro.css">

  
</head>
  <body>
    <header>
        <nav class="navbar bg-body-tertiary pb-0">
            <div class="container-fluid navbar--up ">
              <a class="navbar-rand" href="#">
                <img src="./img/logo.png" alt="Logo" width="100"  class="d-inline-block align-text-top logo-isil">
              </a>
              <p>Crud de Películas</p>
            </div>
            
            <div class="container-fluid navbar--down">
                <!--
                <a class="navbar--donw__enlace" href="">
                    <i class="bi bi-plus-square-fill"></i>
                    Agregar Película
                </a>
                -->
            </div>
        </nav>
    </header>
    <main>
        <section class="register--section container-fluid">
            <h1 class="register--section__title text-center fs-3 text-uppercase pt-3">Agregue una película</h1>
            <div class="row justify-content-center register--section__container">
                <form action="#" method="POST" class="register--section__form col-5 needs-validation" novalidate>
                    <div class="mb-2">
                      <label for="nombre" class="form-label text--label">Nombre</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" required>
                      <div class="valid-feedback">
                            !Validación exitosa!.
                        </div>
                        <div class="invalid-feedback">
                            !El campo de nombre está vacío!
                        </div>
                    </div>
                   
                    <div class="mb-2">
                        <label for="director" class="form-label text--label">Director</label>
                        <input type="text" class="form-control" id="director" name="director" required>
                        <div class="valid-feedback">
                            !Validación exitosa!.
                        </div>
                        <div class="invalid-feedback">
                            !El campo del Director está vacío!
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="calificacion" class="form-label text--label">Calificación</label>
                        <input type="number" class="form-control" id="calificacion" name="calificacion" required>
                        <div class="valid-feedback">
                            !Validación exitosa!.
                        </div>
                        <div class="invalid-feedback">
                            Ingrese una califiación.
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="premios" class="form-label text--label">Cantidad de Premios</label>
                        <input type="number" class="form-control" id="premios" name="premios" required>
                        <div class="valid-feedback">
                            !Validación exitosa!.
                        </div>
                        <div class="invalid-feedback">
                            Ingrese la cantidad de premios.
                        </div>
                    </div>  
                    <div class="mb-2">
                        <label for="fe-creacion" class="form-label text--label">Fecha de creación</label>
                        <input type="date" class="form-control" id="fe-creacion" name="fe-creacion" required>
                        <div class="valid-feedback">
                            !Validación exitosa!.
                        </div>
                        <div class="invalid-feedback">
                            Ingrese la fecha de creación del registro.
                        </div>
                    </div>          
                    <div class="mb-2">
                        <label for="duracion" class="form-label text--label">Duración</label>
                        <input type="number" class="form-control" id="duracion" name="duracion" required>
                        <div class="valid-feedback">
                            !Validación exitosa!.
                        </div>
                        <div class="invalid-feedback">
                            !El campo de duración de la película está vacío!
                        </div>
                    </div>   
                    <div class="mb-2">
                        <label for="director" class="form-label text--label">Género</label>
                        <input type="text" class="form-control" id="director" name="genero" required>
                        <div class="valid-feedback">
                            !Validación exitosa!.
                        </div>
                        <div class="invalid-feedback">
                            !El campo del género de la película está vacío!
                        </div>
                    </div>  

                    <fieldset class="mb-2">
                        <div class="radios--section">
                            <legend class="fs-5 fw-medium text--label mb-1">¿Te gustó?</legend>

                            <div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="preferencia-si" name="preferencia" value="1" required>
                                    <label class="form-check-label text--label" for="preferencia-si">SI</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="preferencia-no" name="preferencia" value="0" required>
                                    <label class="form-check-label text--label" for="preferencia-no">NO</label>
                                    <div class="valid-feedback"> <!--Para poner la validación en una opcion de radio buttons, el contenedor de cada uno dedebe tener clase "form-check" y dentro cada input y label deben tener las clases "form-check-input" y "form-check-label" respectivamente. Finalmente las opciones de valid e invalid feedback van en la última opción-->
                                        !Validación exitosa!.
                                    </div>
                                    <div class="invalid-feedback">
                                        !Debes indicar si te gustó o no la película!
                                    </div>
                                </div>
                            </div>



                        </div>
                    </fieldset>


                    <button type="submit" class="btn btn-primary register--btn">Registrar Película</button>
                    <a href="./index.php" class="btn btn-danger return--btn">Volver</a>

                  </form>
            </div>

        </section>
    </main>

    <footer>
        <section class="footer--icons container">
            <a class="footer-icons-link" href="https://www.linkedin.com/in/raulsanchezrod/" target="_blank">
                <i class="bi bi-linkedin icon--media--footer"></i>
            </a>
            <a class="footer-icons-link" href="https://github.com/raulsr92" target="_blank">
                <i class="bi bi-github icon--media--footer"></i>
            </a>
            <a class="footer-icons-link" href="https://www.youtube.com/channel/UCmhay--zEeXPKo2hNAUmb3g" target="_blank">
                <i class="bi bi-youtube icon--media--footer"></i>
            </a>

            <a class="footer-icons-link" href="https://www.tiktok.com/@raulsanchezcode" target="_blank">
                <i class="bi bi-tiktok icon--media--footer"></i>
            </a>
        </section>
        <section class="footer--creator container">
            <div class="row text-center">
                <div class="col text-center">
                    <p>Elaborado por Raúl Sánchez <i class="bi bi-c-circle"></i> 2024</p>
                </div>

            </div>
        </section>
    </footer>
    <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>