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
                <h1>Iniciar Sesión</h1>
                <h2>Universidad Veracruzana</h2>
                <hr>
            </div>

            <div class="formulario">
                <form action="validarUsuario.php" method="post">
                    <h3>Datos del usuario</h3>
                    <p><label for="">Usuario</label></p>
                    <p><input type="text" class="input" name="usuario" required></p>
                    <p><label for="">Contraseña</label></p>
                    <p><input type="password" class="input" name="password" required></p>
                    <p><input type="submit" class="button" value="Iniciar Sesión"></p>
                </form>
                <p>¿No tienes una cuenta?, Registrate aquí</p>
                <p><button type="button" class="button" onclick="document.location='formularioRegistroUsuario.php'">Crear Cuenta</button></p>
            </div>
        </div>
    </div>
</body>

</html>