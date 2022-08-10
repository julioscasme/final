<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        background: url(./bt.jpg);
        background-size: 100%;
        height: 90vh;
    }
</style>
<body>

    <div class="login">
    <img class="logo" src="bot.png" alt="logo">
    <h1>Inicio de sesión</h1>

    <form class="form" action="validar.php" method="post">
    <p>Usuario institucional<input type="text" placeholder="Ingrese su usuario" name="usuario"> </p>

    <p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="clave"> </p>
    <br>
    <input type="submit" value="Ingresar"></p>
    <a href="registro.php">REGISTRARSE</a>
    </form>  

    </form>
    </div>


</body>
</html>