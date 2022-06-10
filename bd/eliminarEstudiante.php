<?php

require 'conexion.php';

$id = $_POST['id'];

$eliminar = "DELETE FROM datos WHERE id = '$id'";

$query = mysqli_query($conexion, $eliminar);

if($query){
   echo "<script> alert('El estudiante se eliminó correctamente');
    location.href = '../paginaEliminarEstudiante.php';
   </script>";
}else{
    echo "<script> alert('Error no se pudo eliminar el estudiante');
    location.href = '../paginaEliminarEstudiante.php';
    </script>";
}

?>