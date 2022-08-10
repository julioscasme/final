<?php

include("conexion_con.php");

$Planta_id = $_REQUEST['id'];

$ncomun=$_POST["ncomun"];
$ncient=$_POST["ncient"];
$genero=$_POST["genero"];
$familia=$_POST["familia"];
$clase=$_POST["clase"];
$tam=$_POST["tam"];
$tipo=$_POST["tipo"];
$lugar=$_POST["lugar"];



$query = "update planta set  ncomun='$ncomun',ncient='$ncient',genero='$genero',familia='$familia',clase='$clase',tam=$tam,tipo='$tipo',lugar='$lugar'  where idPlanta=$Planta_id";

echo '<pre>' ;
  print_r($query);
  echo '</pre>' ;
$resultado=$conexion->query($query);

 

if($resultado){
	//echo "Se insertaron datos";
	header("Location: usuario.php");
}
else{
	echo "Error, no se guardaron los datos";
}

?>