<?php
session_start();
include 'servidor.php';
include("conexion_con.php");
$query = "SELECT * FROM usuario WHERE usuario='".$_SESSION["usuario"]."'";
$resultado=mysql_query($query);
$row = mysql_fetch_array($resultado);

if(isset($_SESSION['usuario'])) {?>


<html>
	<head>
		<link rel="icon" href="bot.png" >
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
		<title>Registrar</title>
		<link rel="stylesheet" type="text/css" href="style.css"> 
	</head>

<style type="text/css">
body{
    margin: 0;
    padding: 0;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background: url(./agregar.jpg);
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

    padding: 0px;
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
    height: 50px;
    color: black;
}
.error{
    color: #D13621;
    font-weight: bold;
    margin: 40px;
    text-align: center;
}

</style>


<body>
<?php date_default_timezone_set("America/Bogota"); ?>
	<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
	  		<td width="100%" height="100" valign="top">
	  			<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
		    		<tr>
			        	<td width="570" rowspan="4" valign="middle" nowrap class="blanco">
			        		<div align="center">
			          			
			          			<img src="bot.png"  width=115 height=110 style="position: absolute; top: 10; left: 10;" >
			       			</div>
			       		</td>   
		    		</tr>
		    	</table>
			</td>
	    </tr>

		<tr>
	    	<td height="100%" valign="top">
				<center>
					<div class="col" >
						
						<hr>
					    <p>REGISTRAR PLANTA</p>
						<hr><br>
						<form method="post" action="guardar.php"  class="register" enctype="multipart/form-data">
					        <div>
					        	<label>Nombre Común: </label>
					        	<input style="border-radius: 5px" type="text" name="ncomun" autocomplete="on" required>
					        </div>
							<div>
					        	<label>Nombre Científico: </label>
					        	<input style="border-radius: 5px" type="text" name="ncient" autocomplete="on" required>
					        </div>

					        <div>
					        	<label>Género: </label>
					        	<input style="border-radius: 5px" type="text" name="genero" autocomplete="on" required>
					        </div>
							<div>
					        	<label>Familia: </label>
					        	<input style="border-radius: 5px" type="text" name="familia" autocomplete="on" required>
					        </div>
							<div>
					        	<label>Clase: </label>
					        	<input style="border-radius: 5px" type="text" name="clase" autocomplete="on" required>
					        </div>
					        <div>
					        	<label>Tamaño: </label>
					        	<input style="border-radius: 5px" type="text" name="tam" autocomplete="on" required>
					        </div>
							<div>
					        	<label>Tipo: </label>
					        	<input style="border-radius: 5px" type="text" name="tipo" autocomplete="on" required>
					        </div>
							<div>
					        	<label>Ubicación: </label>
					        	<input style="border-radius: 5px" type="text" name="lugar" autocomplete="on" required>
					        </div>
					       
							<br>

					        <div><input type="submit" style="border-radius: 5px; font-size:15px ;height: 30px; background: #E87911;"  align="center" class="btn btn-success" name="register" value="Agregar"></div>
							
							
						</form>
					
					</div>
				</center>
			</td>
	    </tr> 
	</table>
</body>
</html>


<?php
}
else{
	echo '<script> window.location="index.php"; </script>';
}
?>	