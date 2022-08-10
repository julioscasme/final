<?php
session_start();
include 'servidor.php';
include("conexion_con.php");
$query = "SELECT * FROM usuario WHERE usuario='".$_SESSION["usuario"]."'";
$resultado=mysql_query($query);
$row = mysql_fetch_array($resultado);


if(isset($_SESSION['usuario'])) {?>

<style type="text/css">
</style>

<html lang="es">
	<head>
        <link rel="icon" href="bot.png" >
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Botánicos del Perú</title>
		<link rel="stylesheet" type="text/css" href="style.css"> 
	</head>

<style type="text/css">

body{
    margin: 0;
    padding: 0;
    
    background-size: 50%;
    height: 90vh;

}

.menu{
    List-style: none;
    padding: 1px;
    background: #222222;
    width: 100%;
    max-width : 100%;
    margin: auto;
	text-align:left;
    position: absolute; top: 22%; left: 4%;
	border-top: 2px solid #424949;
	border-bottom: 2px solid ;
	
	
	
}

.menu li a{
    text-decoration : none;
    color: white;
    padding: 8px;
    display: block;
	
}

.menu li{
    display: inline-block;
    text-align: center;
}
    
.menu li a:hover{
    background: #ef8354;
    }

a:link {
	color: "#FF0000";
	text-decoration: none;
}

</style>
    
<style type="text/css">



    	
		@media (max-width: 991px) {
			.navbar-collapse.pull-left {
			    float: none!important;
			}
			.navbar-collapse.pull-left + .navbar-custom-menu {
			    display: block;
				position: absolute;
			    top: 0;
			    right: 40px;
			}
		}
		.media-left,
		.media > .pull-left {
		  	padding-right: 10px;
		}	
		.pull-left {
		  	float: right !important;
		}
		.image > img {
			width: 100%;
		  	max-width: 100px;
		  	height: auto;
			position: absolute; top:1%; right:1%;
		}

		.pull-right{
			position: absolute; top:23%; left:15%;
		}
		.pull-right input[type="submit"]{
			background: #F4D03F;
			border-radius: 5px;
			width: 60px;
			height: 20px;
		
		}
		.pull-right input[type="text"]{
			background: #FFDFC0;
			width: 200px;
			height: 20px;
			border-bottom: 1px solid #FF7628;
	
		}

	
		
		.salir input[type="button"]{
			border: none;
			outline: none;
			height: 22px;
			background: #D32C12;
			color: #FFFFFF;
			font-size: 12px;
			border-radius: 6px;
			font-weight: bold;
			position: absolute; top: 13.7%; right: 16.5%;

		}
		
		@font-face {
			font-family:floral;
			src: url(fuente.ttf);
		}

		#fuente{
			font-family: floral;
			color:  #417C43;
			font-size: 100px;
		
			
    		outline: none;
			
			position: absolute; top: 15px; left: 18%;
		}
	
		img#img_planta{
			height: auto;
			width: auto;
			max-width: 100px;
			max-height: 100px;
		}
    </style>


<body>

<?php date_default_timezone_set("America/Bogota"); ?>
	
	<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" >
		<tr>
	  		<td width="100%" height="100" valign="top" >
	  			<table width="60%" height="100%"  cellpadding="0" cellspacing="0" align="center">
		    		<tr>
			        	<td width="570" rowspan="4" valign="middle" nowrap class="blanco">
			        		<div align="center">
								
								<font id="fuente">Botánicos del Perú</font><br><br><br><br>
								
								<br>
			          			<h2 style="position: absolute; top: 5; right:150;" align="left"><?php echo $row['nombre'];?><br><?php echo $row['apellido'];?><br></h2>
								<img src="bot.png" width=115 height=110 style="position: absolute; top: 12; left: 10%;" >
                                <!-----------------IMAGENNN----------------------------->
							
                                <div class="pull-left image">
							        <?php
							        	//define( 'RUTA_HTTP', 'http://www.duanealiaga.com/cientifica/' );
							        	define( 'RUTA_HTTP', 'http://localhost/proyectos/final/login/' );
							            $fotoPerfil = RUTA_HTTP.'/fotos/'.$_SESSION['usuario'].'.jpg';
										
							            if (@getimagesize($fotoPerfil)) {
							              	$fotoPerfil=$fotoPerfil;
							            }else{
							              	$fotoPerfil = RUTA_HTTP.'/fotos/user-P.jpg';
							            }
							        ?>
							        <img src="<?php echo $fotoPerfil; ?>"  class="img-circle" alt="User Image">
							    </div>
								<!---------------------------------------------->

								<div class="pull-left image">
							        <form action="subir_foto.php" method=post enctype="multipart/form-data" class="aceptar">
							        	<input name="usuario" value="<?php echo $_SESSION["usuario"];?>" style="display: none;"><br>
										<br>
											<div id="div_file">
												<p id="texto"> Subir Foto</p>
												<input type="file" id="btn_enviar" name="imagen"><br>
											</div>
										<input type="submit" value="Aceptar"></div><br>
										
									</form>
							    </div>
							
                                <!------------------------------------------------>
								
								<br>
								
								<form class="salir"><a href="logout.php"><input type="button" style="width:65px" value="SALIR" ></a></form>
								
								
									
			       			</div>
			       		</td>   
		    		</tr>

                    
		    	</table>
			</td>
            
	    </tr>
	<br>
<tr>
<td height="100%" valign="top">
<ul class="menu">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Tabla</a></li>
        <li><a href="#">Investigadores</a></li>
</ul>
    <center>

        <table  width="1400">
		
            <thead>
                <td><form class="nueva-planta"><a  href="agregar.php">
				<img src = "bagregar.png" width ="120" height ="45" style="position: absolute; top: 30.2%; left:2%;">
				</a></td>
                <tr bgcolor="gold">
                    <th  colspan="12">REGISTRO DE PLANTAS</th>
                </tr>
            </thead>
			<br><br>
            <tbody>
                <tr bgcolor="greenyellow" align="center">
                	
					<th>ID</th>			
                    <th>Nombre Común</th>
                    <th>Nombre Científico</th>
                    <th>Género</th>
                    <th>Familia</th>
                    <th>Clase</th>
                    <th width="10">Tamaño <i>cm</i> </th>
                    <th>Tipo</th>
                    <th>Ubicación</th>
					<th>Imagen</th>
					<th></th>
                    
			
                </tr>
                
            <?php
                include("conexion_con.php");

                $query="SELECT * from planta ";

                $resultado=$conexion->query($query);
                while($row=$resultado->fetch_assoc()){
            ?>
                <tr bgcolor="white" align="center" >
                    
					<td><?php echo $row['idPlanta']?></td>
                    <td><?php echo $row['ncomun']?></td>
                    <td><i><?php echo $row['ncient']?></i></td>
                    <td><i><?php echo $row['genero']?></i></td>
                    <td><?php echo $row['familia']?></td>
                    <td><?php echo $row['clase']?></td>
                    <td><?php echo $row['tam']?></td>    
                    <td><?php echo $row['tipo']?></td>
                    <td><?php echo $row['lugar']?></td>
					
					
      				<td>
					  <div id="imagenp">
							        <?php
							        //var_dump()
							            $fotoPlanta = RUTA_HTTP.'/fotosp/'.$row["idPlanta"].'.jpg';
										
							            if (@getimagesize($fotoPlanta)) {
							              	$fotoPlanta=$fotoPlanta;
							            }else{
							              	$fotoPlanta = RUTA_HTTP.'/fotosp/planta-P.jpg';
							            }
							        ?>
							        <img src="<?php echo $fotoPlanta; ?>"  id="img_planta" alt="Planta Image">
						</div>
								<!---------------------------------------------->

								<div class="boton-imagen-planta">
							        <form action="subir_foto-planta.php" method=post enctype="multipart/form-data" class="aceptar_planta">
							        	<input name="idPlanta" value="<?php echo $row["idPlanta"];?>" style="display: none;"><br>
										<br>
											<div id="div_filep">
												<p id="textop"> Subir Foto</p>
												<input type="file" id="btn_enviarp" name="imagen"><br>
											</div>
										<input type="submit" value="OK"></div><br>
										
									</form>
							    </div>
					</td>	

					  <td><form><a  href="editar.php?value=<?php echo $row['idPlanta']?>">
					  	<img src = "beditar.png" width ="25" height ="25">
						</a></form>

					  	<ttr> <form><a  href="lista.usuario.php?value=<?php echo $row['idPlanta']?>">
						<img src = "bregistro.png" width ="30" height ="30">
						</a></form></ttr>

					  	<ttr> <form><a  href="eliminar.php?value=<?php echo $row['idPlanta']?>">
						<img src = "beliminar.png" width ="20" height ="25">
						</a></form> </tttr>

			
						
					</td>
					
				</tr>	
            <?php			
                }
            ?>			
            </tbody>
        </table>
    </center>	
</body>

</html>

<?php
}