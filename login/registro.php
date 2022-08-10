<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
<div class="col" >
						<p>REGISTRATE</p>
						<form method="post" style="border-radius: 5px" action="registrar.php" class="register">
					        <div>
					        	<label>Usuario</label>
					        	<input style="border-radius: 5px" type="text" name="usuario" autocomplete="on"  required>
					        </div>
					        <div>
					        	<label>Nombre</label>
					        	<input style="border-radius: 5px" type="text" name="nombre" autocomplete="on" required>
					        </div>
					        <div>
					        	<label>Apellido</label>
					        	<input style="border-radius: 5px" type="text" name="apellido" autocomplete="on" required>
					        </div>

                            <div>
					        	<label>EAP</label>
					        	<input style="border-radius: 5px" type="text" name="eap" autocomplete="on" required>
					        </div>

                            <div>
					        	<label>Correo</label>
					        	<input style="border-radius: 5px" type="text" name="correo" autocomplete="on" required>
					        </div>

					        <div>
					        	<label>Contraseña</label>
					        	<input style="border-radius: 5px" type="password" name="clave" autocomplete="off" required>
					        </div><br>
					        <div><input type="submit" style="border-radius: 5px; font-size:15px;" class="btn btn-success" name="register" value="Registrar"></div>
					    </form>
					</div>

</body>
</html>