<?php

include("conexion_con.php");

$usuario=$_POST["Usuario_id"];
$planta=$_POST["Planta_id"];
$query = "INSERT INTO asignacion(Usuario_id,Planta_id) VALUES('$usuario','$planta')";
$resultado=$conexion->query($query);

?>