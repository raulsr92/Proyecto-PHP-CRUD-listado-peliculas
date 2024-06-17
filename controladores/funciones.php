<?php

function conexion($host, $bd, $usuario, $clave){
    try {
        $mbd = new PDO("mysql:host=$host;dbname=$bd", $usuario, $clave);

        return $mbd;

      } catch (PDOException $e) {
        echo "!Error!: ". $e->getMessage() ."<br/>";
        die();
      }
}

function guardarUsuario($bd, $tabla, $datos){

    // Almacenar los datos recibidos del formulario
    $nombre = $datos['nombre'];
    $director = $datos['director'];
    $calificacion = $datos['calificacion'];
    $premios = $datos['premios'];
    $fechaCreacion = $datos['fe-creacion'];
    $duracion = $datos['duracion'];
    $genero = $datos['genero'];
    $preferencia = $datos['preferencia'];

    // Armar la consulta 
    $sql = "insert into $tabla (titulo, director, calificacion, premios, fechaCreacion, duracion, genero, preferencia) 
    values(:titulo,:director,:calificacion,:premios,:fechaCreacion,:duracion,:genero,:preferencia )";

    // Preparar la consulta

    $query = $bd->prepare($sql);
    $query->bindValue(':titulo',$nombre);
    $query->bindValue(':director',$director);
    $query->bindValue(':calificacion',$calificacion);
    $query->bindValue(':premios',$premios);
    $query->bindValue(':fechaCreacion',$fechaCreacion);
    $query->bindValue(':duracion',$duracion);
    $query->bindValue(':genero',$genero);
    $query->bindValue(':preferencia',$preferencia);


    // Ejecutar la consulta
    $query->execute();

    // Redirigir a usuario
    header('location: index.php');

}

function buscarUsuario($bd, $tabla){

    // Armar la consulta 
    $sql = "Select * from $tabla";

    // Preparar la consulta
    $query = $bd->prepare($sql);

    // Ejecutar la consulta
    $query->execute(); 
    
    // Almacenar las filas resultantes de la consulta en un array

    $users = $query->fetchAll(PDO::FETCH_ASSOC);

    return $users;

}


function datos($datos){
  echo "<pre>";
  var_dump($datos);
  echo "</pre>";
  exit();
}

?>