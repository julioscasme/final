<?php
session_start();

include 'servidor.php';
include ("conexion_con.php");
$query = "SELECT * FROM usuario WHERE usuario='".$_SESSION["usuario"]."'";
$resultado=mysql_query($query);
$row = mysql_fetch_array($resultado);

if(isset($_SESSION['usuario'])) {?>

<html>
	<head>
		<link rel="icon" href="bot.png" >
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Editar</title>
		<link rel="stylesheet" type="text/css" href="style.css"> 
	</head>

<style type="text/css">
body{
    margin: 0;
    padding: 0;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background: url(./img/editar.jpg);
    background-size: 50%;
    height: 90vh;

}
a:link {
	color: #FF0000;
	text-decoration: none;
}
form.register {
    background: none repeat  0 0 ;
    font-family: sans-serif;

    padding: 20px;
    width: 300px;
    height: 450px;
}	
form.register div {
    margin-bottom: 20px;
    overflow: hidden;
}
form.register div label {
    display: block;
    float: center;
    line-height: 25px;
}
form.register div input[type="text"], form.register div input[type="password"] {
    border: 0.2px solid #DCDCDC;
    float: center;
    padding: 0px;
    height: 30px;
}
form.register div input[type="submit"] {
    background: none repeat scroll 0 0 #DEDEDE;
    border: 1px solid #C6C6C6;
    float: center;
    font-weight: bold;
    padding: 4px 20px;
    height: 30px;
    color: black;
}
.error{
    color: #D13621;
    font-weight: bold;
    margin: 10px;
    text-align: center;
}
</style>


<body>
<?php date_default_timezone_set("America/Bogota") ; ?>

	<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
	  		<td width="100%" height="100" valign="top">
	  			<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
		    		<tr>
			        	<td width="570" rowspan="4" valign="middle" nowrap class="blanco">
			        		<div align="center">
			          		
			          			<img src="bot.png" width=115 height=110 style="position: absolute; top: 10; left: 10;" >
			       			</div>
			       		</td>   
		    		</tr>
		    	</table>
			</td>
	    </tr>

		<tr>
	    	<td height="100%" valign="top">
				<center>
					<div class="cole" >
						<?php  
					    	$Planta = "SELECT * FROM planta WHERE idPlanta='".$_GET['value']."'";
							$resultado_Planta=mysql_query($Planta);
							$row_Planta = mysql_fetch_array($resultado_Planta);		
					    ?>
						<hr>
					    <p>EDITAR INFORMACIÓN</p>
						<hr>
						<form method="post" action="editar.guardar.php?id=<?php echo $row_Planta['idPlanta'];?>" enctype="multipart/form-data" class="register" >
					        
							<div>
					        	<label>Nombre Común: </label>
					        	<input style="border-radius: 5px" type="text" name="ncomun" autocomplete="on" value="<?php echo $row_Planta['ncomun']; ?>" required>
					        </div>
							<div>
					        	<label>Nombre Científico: </label>
					        	<input style="border-radius: 5px" type="text" name="ncient" autocomplete="on" value="<?php echo $row_Planta['ncient']; ?>" required>
					        </div>

					        <div>
					        	<label>Género: </label>
					        	<input style="border-radius: 5px" type="text" name="genero" autocomplete="on" value="<?php echo $row_Planta['genero']; ?>" required>
					        </div>
							<div>
					        	<label>Familia: </label>
					        	<input style="border-radius: 5px" type="text" name="familia" autocomplete="on" value="<?php echo $row_Planta['familia']; ?>" required>
					        </div>
							<div>
					        	<label>Clase: </label>
					        	<input style="border-radius: 5px" type="text" name="clase" autocomplete="on" value="<?php echo $row_Planta['clase']; ?>" required>
					        </div>
					        <div>
					        	<label>Tamaño: </label>
					        	<input style="border-radius: 5px" type="text" name="tam" autocomplete="on" value="<?php echo $row_Planta['tam']; ?>" required>
					        </div>
							<div>
					        	<label>Tipo: </label>
					        	<input style="border-radius: 5px" type="text" name="tipo" autocomplete="on" value="<?php echo $row_Planta['tipo']; ?>" required>
					        </div>
							<div>
					        	<label>Ubicación: </label>
					        	<input style="border-radius: 5px" type="text" name="lugar" autocomplete="on" value="<?php echo $row_Planta['lugar']; ?>" required>
					        </div>
							

					       	<br>
					        <div><input type="submit" style="border-radius: 5px; font-size:15px;" class="btn btn-success" name="register" value="Guardar"></div>
					    </form>
					</div>
				</center>
			</td>
	</table>
</body>
</html>


<?php
}
else{
	echo '<script> window.location="index.php"; </script>';
}
?>	