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
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Registro</title>
		<link rel="stylesheet" type="text/css" href="style.css"> 
	</head>

<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}

a:link {
	color: #FF0000;
	text-decoration: none;
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
					<table border="3" >
						<thead>
							<tr bgcolor= "gold">
								<th colspan="12">LISTA DE USUARIOS</th>
							</tr>
						</thead>	
						<tbody>
							<tr bgcolor= "palegreen">
								<th>ID</th>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>E.A.P.</th>
							</tr>

						<?php
							include("conexion_con.php");

							$query="SELECT * from asignacion 
							inner join usuario on usuario.idUsuario=asignacion.Usuario_id
							where Planta_id='".$_GET['value']."'; ";

							$resultado=$conexion->query($query);
							while($row=$resultado->fetch_assoc()){
						?>
							<tr bgcolor='white'>
								<td><?php echo $row['idUsuario']?></td>
								<td><?php echo $row['nombre']?></td>
								<td><?php echo $row['apellido']?></td>
								<td><?php echo $row['eap']?></td>
						<?php			
							}
						?>		
						</tbody>
					</table>
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