<?php

require 'conexion.php';

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$insertar = "INSERT INTO usuarios VALUES (0, '$nombre','$usuario','$password') ";

$query = mysqli_query($conexion, $insertar);

if($query){
   echo "<script> alert('El usuario se registro correctamente');
    location.href = '../index.php';
   </script>";
}else{
    echo "<script> alert('Error el usuario no pudo registrarse');
    location.href = '../index.php';
    </script>";
}

?>