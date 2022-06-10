<?php

include('bd/conexion.php');
$usuario = $_POST['usuario'];
$password = $_POST['password'];

session_start();
$_SESSION['usuario'] = $usuario;

$consulta = "SELECT*FROM usuarios where usuario='$usuario' and password='$password'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {

  header("location:paginaPrincipal.php");
} else {
?>
  <?php
  include("index.php");

  ?>
  <h1 class="bad">ERROR LOS DATOS SON INCORRECTOS</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>