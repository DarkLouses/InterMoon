<?php

include_once('./basedatos.php');

    foreach($_POST as $valor=>$campo) {
        $GLOBALS[$valor] = $campo;
    }

    //for($i=0; $i<1000; $i++){

   $queryInsert = "INSERT INTO $tabla VALUES ('$nombre' , '$apellido' , '$usuario' , '$email' , '$constraseña' , '$telefono');";

   $resultInsert = mysqli_query($link, $queryInsert); 

//}

// CODIGO VIEJO POCO VIABLE //
   /*$nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contraseña = $_POST['constraseña'];
    $telefono = $_POST['telefono'];*/
?>
