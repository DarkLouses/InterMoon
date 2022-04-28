<?php

include_once('./basedatos.php');

    $nombre = $_POST['nom'];
    $apellido = $_POST['ape'];
    $usuario = $_POST['usua'];
    $email = $_POST['ema'];
    $contraseña = $_POST['cons'];
    $telefono = $_POST['telef'];

    for($i = 0; $i < 10000; $i++){

   $queryInsert = "INSERT INTO $tabla VALUES ('$nombre' , '$apellido' , '$usuario' , '$email' , '$contraseña' , '$telefono');";

   $resultInsert = mysqli_query($link, $queryInsert); 

   
}
?>
