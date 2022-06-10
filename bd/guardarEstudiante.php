<?php

require 'conexion.php';

$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$matricula = $_POST['matricula'];
$campus = $_POST['campus'];
$modalidad = $_POST['modalidad'];
$periodo = $_POST['periodo'];

$insertar = "INSERT INTO datos VALUES (0, '$nombre','$apellidoPaterno','$apellidoMaterno', '$matricula', '$campus', '$modalidad', '$periodo') ";

$query = mysqli_query($conexion, $insertar);

if($query){
   echo "<script> alert('Los datos del estudiante se guardaron correctamente');
    location.href = '../formularioRegistroEstudiante.php';
   </script>";
}else{
    echo "<script> alert('Error los datos del estudiante no se guardaron');
    location.href = '../formularioRegistroEstudiante.php';
    </script>";
}

?>