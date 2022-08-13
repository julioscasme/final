<?php
include("conexion_con.php");
$ncomun=$_POST["ncomun"];
$ncient=$_POST["ncient"];
$genero=$_POST["genero"];
$familia=$_POST["familia"];
$clase=$_POST["clase"];
$tam=$_POST["tam"];
$tipo=$_POST["tipo"];
$lugar=$_POST["lugar"];


$query = "INSERT INTO planta(ncomun,ncient,genero,familia,clase,tam,tipo,lugar) VALUES('$ncomun','$ncient','$genero','$familia','$clase',$tam,'$tipo','$lugar')";
$resultado=$conexion->query($query);

if($resultado){
	//echo "Se insertaron datos";
	header("Location: usuario.php");
}
else{
	echo "Error, no se guardaron los datos";
}
?>

