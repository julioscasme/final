<?php
	$conexion = @mysql_connect("localhost","root","") or die("No se encontrĂ³ el servidor");
	mysql_select_db("botanica",$conexion)or die("No se encontrĂ³ la base de datos");
?>