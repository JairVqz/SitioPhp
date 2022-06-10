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
                <h1>Crear cuenta</h1>
                <h2>Estás a unos pasos de formar parte de nuestra familia</h2>
                <hr>
            </div>

            <div class="formulario">
                <form action="bd/guardarUsuario.php" method="post">
                    <h3>Por favor ingresa los siguientes datos</h3>
                    <p><label for="">Nombre(s)</label></p>
                    <p><input type="text" class="input" name="nombre" required></p>
                    <p><label for="">Nombre de Usuario</label></p>
                    <p><input type="text" class="input" name="usuario" required></p>
                    <p><label for="">Contraseña</label></p>
                    <p><input type="password" class="input" name="password" required></p>
                    <p><input type="submit" class="button" value="Registrar"></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>