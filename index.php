<?php

include_once './controladores/funciones.php';

$bd = conexion('localhost','cine_isil','root','');

$arrayDePeliculas = buscarUsuario($bd,'movies');


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registra tus películas favoritas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
  </head>
  <body>
    <header>
        <nav class="navbar bg-body-tertiary pb-0">
            <div class="container-fluid navbar--up ">
              <a class="navbar-rand" href="#">
                <img src="./img/logo.png" alt="Logo" width="100"  class="d-inline-block align-text-top">
              </a>
              <p>Crud de Películas</p>
            </div>
            <div class="container-fluid navbar--down">
                <a class="navbar--donw__enlace" href="./regitroPelicula.php" target="_blank">
                    <i class="bi bi-plus-square-fill"></i>
                    Agregar Película
                </a>
            </div>
        </nav>
    </header>
    <main>
        <section class="movies--list--section container-fluid">
            <h1 class="movies--list--section__title text-center fs-3 text-uppercase pt-3">Listado de Películas</h1>
            <form class="row g-3 mt-3">
                <div class="col-auto">
                    <button type="submit" class="btn btn-secondary mb-3 movies--list--section__button">
                        <i class="bi bi-search"></i>

                        Buscar</button>
                  </div>
                <div class="col-auto">
                  <label for="inputPassword2" class="visually-hidden">Password</label>
                  <input type="text" class="form-control" id="inputPassword2" placeholder="Nombre de Película">
                </div>

              </form>

              <div class="table--container container">
                <table class="table text-center movie--list table-striped"">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Ver</th>
                        <th scope="col" class="movie--list__edit-column">Editar</th>
                        <th scope="col">Eliminar</th>
    
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        foreach ($arrayDePeliculas as $nrofila => $pelicula): ?>
                      <tr>
                        <th scope="row"><?= $pelicula['id'] ?></th>
                        <td><?= $pelicula['titulo'] ?></td>
                        <td>
                            <a href=""><i class="bi bi-eye-fill movie--list__see-icon"></i></a>
                        </td>
                        <td>
                            <a href=""><i class="bi bi-pencil-square movie--list__edit-icon"></i></a>
                        </td>
                        <td>
                            <a href=""><i class="bi bi-trash3-fill movie--list__delete-icon"></i></a>
                        </td>
                      </tr>
                      <?php endforeach; ?>  
                    </tbody>
                  </table>
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>