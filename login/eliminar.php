<?php

include("conexion_con.php");

$Planta_id = $_REQUEST['value'];


$query = "DELETE FROM planta WHERE idPlanta=$Planta_id ";

$resultado=$conexion->query($query);

if($resultado){
	//echo "Se insertaron datos";
	header("Location: usuario.php");
}
else{
	echo "Error, no se guardaron los datos";
}

?>