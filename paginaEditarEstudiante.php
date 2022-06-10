<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosListaEstudiantes.css">
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
                <h1>Editar de estudiantes</h1>
                <h2>Lista de estudiantes</h2>
                <hr>
            </div>

            <div class="tabla">
                <?php

                include("bd/conexion.php");
                $consulta = "SELECT * from datos";
                $resultado = mysqli_query($conexion, $consulta) or die("Error en la consulta a la base de datos");

                //Mostrar el resultado de los registros de la base de datos
                //Encabezado de la tabla
                echo "<table class='tablaRegistros' border='2'>";
                echo "<div>";
                echo "<th>Id</th>";
                echo "<th>Nombre (s)</th>";
                echo "<th>Apellido Paterno</th>";
                echo "<th>Apellido Materno</th>";
                echo "<th>Matricula</th>";
                echo "<th>Campus</th>";
                echo "<th>Modalidad</th>";
                echo "<th>Periodo</th>";
                echo "</div>";

                while ($columna = mysqli_fetch_array($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $columna['id'] . "</td><td>" . $columna['nombre'] . "</td><td>" . $columna['apellidoPaterno'] . "</td><td>" . $columna['apellidoMaterno'] . "</td><td>" . $columna['matricula'] . "</td><td>" . $columna['campus'] . "</td><td>" . $columna['modalidad'] . "</td><td>" . $columna['periodo'] . "</td>";
                    echo "</tr>";
                }

                echo "</table>"; //Fin de la tabla

                //Cerrar conexión de base de datos
                mysqli_close($conexion);

                ?>
            </div>

            <div class="formulario">
                <form action="formularioEditarEstudiante.php" method="post">
                    <h3>Ingresa el id del estudiante que deseas editar</h3>
                    <p><label for="">Id</label></p>
                    <p><input type="text" class="input" name="id" required></p>
                    <p><input type="submit" class="button" value="Editar"></p>
                </form>
            </div>

        </div>
    </div>
</body>

</html>