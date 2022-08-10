<?php
$conexion= new mysqli("localhost","root","","botanica");
mysqli_set_charset($conexion,"utf8");

	if ($conexion)
		{
		//echo "Conexion exitosa";
		}
	else
		{
		//echo "Conexion fallida";
		}
$conexion->set_charset("utf-8");
?> 