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
    <div class="container" role="main">
        <div class="c1">
            <div class="encabezado">
                <h1>Tu sesión ha finalizado correctamente</h1>
                <h2>Gracias por visitar el sitio</h2>
                <hr>
            </div>

            <h3>¿Deseas iniciar una nueva sesión?</h3>
            <p><button type="button" class="button" onclick="document.location='index.php'">Iniciar Sesión</button></p>

            <?php
            session_start();

            session_destroy();
            ?>
        </div>
    </div>
</body>

</html>