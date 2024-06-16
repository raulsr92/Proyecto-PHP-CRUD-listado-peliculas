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
    $apellido = $datos['apellido'];
    $correo = $datos['email'];
    $observaciones = $datos['observaciones'];

    // Armar la consulta 
    $sql = "insert into $tabla (nombre, apellido, correo, observaciones) 
    values(:nombre,:apellido,:correo,:observaciones )";

    // Preparar la consulta

    $query = $bd->prepare($sql);
    $query->bindValue(':nombre',$nombre);
    $query->bindValue(':apellido',$apellido);
    $query->bindValue(':correo',$correo);
    $query->bindValue(':observaciones',$observaciones);

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