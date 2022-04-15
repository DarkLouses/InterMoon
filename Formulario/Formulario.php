<?php

include_once('./basedatos.php');

$queryInsert = "INSERT INTO $tabla ('nombre') VALUES ('gabriel');";
$resultInsert = mysqli_query($link, $queryInsert); 

if($_POST['enviar']) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $telefono = $_POST['telefono'];

   $queryInsert = "INSERT INTO $tabla VALUES ('$nombre , $apellido , $usuario , $email , $contraseña , $telefono');";

   $resultInsert = mysqli_query($link, $queryInsert); 

   if($resultInsert)
   {
      echo "<strong>Se ingresaron los registros con exito</strong>. <br>";
   }
   else
   {
      echo "No se ingresaron los registros. <br>";
   }

}



echo $nombre.  "<br>";
echo $apellido. "<br>";
echo $usuario.  "<br>";
echo $email.  "<br>";
echo $contraseña. "<br>";
echo $telefono;
?>