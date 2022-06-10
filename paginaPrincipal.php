<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosPaginaPrincipal.css">
    <title>Universidad Veracruzana</title>
</head>

<body>
    <div class="usuario">
        <?php
        session_start();
        $usuario = $_SESSION['usuario'];
        echo "<p><h3>$usuario</h3></p>";
        ?>
        <figure>
            <button type="button" onclick="document.location='logout.php'"> <img src="imgs/logout.png" height="50px" width="50px"> </button>
            <figcaption>Cerrar Sesión</figcaption>
        </figure>
    </div>
    <div class="container" role="main">
        <div class="c1">
            <div class="encabezado">
                <h1>Bienvenid@</h1>
                <h2>¿Qué operación deseas realizar?</h2>
                <hr>
            </div>

            <div class="menu">
                <figure>
                    <button type="button" onclick="document.location='formularioRegistroEstudiante.php'"> <img src="imgs/add_estudent.png" height="100px" width="100px"> </button>
                    <figcaption>Agregar estudiante</figcaption>
                </figure>

                <figure>
                    <button type="button" onclick="document.location='paginaListaEstudiantes.php'"> <img src="imgs/list_student.png" height="100px" width="100px"> </button>
                    <figcaption>Ver lista de estudiante</figcaption>
                </figure>

                <figure>
                    <button type="button" onclick="document.location='paginaEditarEstudiante.php'"> <img src="imgs/edit_student.png" height="100px" width="100px"> </button>
                    <figcaption>Editar estudiante</figcaption>
                </figure>

                <figure>
                    <button type="button" onclick="document.location='paginaEliminarEstudiante.php'"> <img src="imgs/delete_student.png" height="100px" width="100px"> </button>
                    <figcaption>Eliminar estudiante</figcaption>
                </figure>

            </div>
        </div>
    </div>
</body>

</html>