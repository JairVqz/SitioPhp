<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosFormulario.css">
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

    <div class="menu">
        <figure>
            <button type="button" onclick="document.location='formularioRegistroEstudiante.php'"> <img src="imgs/add_estudent.png" height="50px" width="50px"> </button>
            <figcaption>Agregar estudiante</figcaption>
        </figure>

        <figure>
            <button type="button" onclick="document.location='paginaListaEstudiantes.php'"> <img src="imgs/list_student.png" height="50px" width="50px"> </button>
            <figcaption>Ver lista de estudiante</figcaption>
        </figure>

        <figure>
            <button type="button" onclick="document.location='paginaEditarEstudiante.php'"> <img src="imgs/edit_student.png" height="50px" width="50px"> </button>
            <figcaption>Editar estudiante</figcaption>
        </figure>

        <figure>
            <button type="button" onclick="document.location='paginaEliminarEstudiante.php'"> <img src="imgs/delete_student.png" height="50px" width="50px"> </button>
            <figcaption>Eliminar estudiante</figcaption>
        </figure>

    </div>

    <div class="container" role="main">
        <div class="c1">
            <div class="encabezado">
                <h1>Editar estudiante</h1>
                <?php
                $idEstudiante = $_POST['id'];
                echo "<h2>Estudiante $idEstudiante</h2>";
                ?>
                <hr>
            </div>

            <div class="formulario">
                <form action="bd/editarEstudiante.php" method="post">
                    <h3>Ingresa los datos que se solicitan a continuación</h3>
                    <p><label for="">Ingresa nuevamente el id</label></p>
                    <p><input type="text" class="input" name="id" required></p>
                    <p><label for="">Nombre(s)</label></p>
                    <p><input type="text" class="input" name="nombre" required></p>
                    <p><label for="">Apellido Paterno</label></p>
                    <p><input type="text" class="input" name="apellidoPaterno" required></p>
                    <p><label for="">Apellido Materno</label></p>
                    <p><input type="text" class="input" name="apellidoMaterno" required></p>
                    <p><label for="">Matricula</label></p>
                    <p><input type="text" class="input" name="matricula" required></p>
                    <p><label for="">Campus</label></p>
                    <p><input type="text" class="input" name="campus" required></p>
                    <p><label for="">Modalidad</label></p>
                    <p><input type="text" class="input" name="modalidad" required></p>
                    <p><label for="">Periodo</label></p>
                    <p><input type="text" class="input" name="periodo" required></p>
                    <p><input type="submit" class="button" value="Editar"></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>