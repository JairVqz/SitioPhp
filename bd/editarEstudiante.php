<?php

require 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$matricula = $_POST['matricula'];
$campus = $_POST['campus'];
$modalidad = $_POST['modalidad'];
$periodo = $_POST['periodo'];

$actualizar = "UPDATE datos SET nombre = '$nombre', apellidoPaterno = '$apellidoPaterno', apellidoMaterno = '$apellidoMaterno', matricula = '$matricula', campus = '$campus', modalidad = '$modalidad', periodo = '$periodo' WHERE id = '$id'";

$query = mysqli_query($conexion, $actualizar);

if($query){
   echo "<script> alert('Los datos del estudiante se actualizaron correctamente');
    location.href = '../paginaEditarEstudiante.php';
   </script>";
}else{
    echo "<script> alert('Error los datos del estudiante no se actualizaron');
    location.href = '../paginaEditarEstudiante.php';
    </script>";
}

?>