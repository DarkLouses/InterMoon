<?php

include_once('./basedatos.php');

$link = Conectarse(); 

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $telefono = $_POST['telefono'];

   $queryInsert = "INSERT INTO $tabla VALUES ('$nombre' , '$apellido' , '$usuario' , '$email' , '$contraseña' , '$telefono');";

   $resultInsert = mysqli_query($link, $queryInsert); 

echo $nombre.  "<br>";
echo $apellido. "<br>";
echo $usuario.  "<br>";
echo $email.  "<br>";
echo $contraseña. "<br>";
echo $telefono;
?>