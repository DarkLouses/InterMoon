<?php
include_once('./basedatos.php');

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

//$conexion = mysqli_connect("localhost" , "root" , "" , "prueba");

$consulta="SELECT * FROM persona where usuario ='$usuario' and constraseña='$contraseña'";
$resultado=mysqli_query($link,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas) {

    echo "bienvenido";
}

else {

    echo "no registrado";
}

?>