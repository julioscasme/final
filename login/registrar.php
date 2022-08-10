<?php

include("conexion_con.php");

$usuario=$_POST["usuario"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$clave=$_POST["clave"];
$eap=$_POST["eap"];
$correo=$_POST["correo"];

$query = "INSERT INTO usuario(nombre,apellido,correo,eap,contra,usuario) VALUES('$nombre','$apellido','$correo','$eap','$clave',$usuario)";

//verificar que el correo no se repita
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo='$correo'");

if (mysqli_num_rows($verificar_correo) > 0){
		echo '<script> alert("Este correo ya se encuentra en uso.");</script>';
    	echo '<script> window.location="registro.php"; </script>';
		
		exit();
}

//verificar que el usuario no se repita
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario='$usuario'");

if (mysqli_num_rows($verificar_usuario) > 0){
		echo '<script> alert("Este usuario ya se encuentra en uso.");</script>';
    	echo '<script> window.location="registro.php"; </script>';
		
		exit();
}

$resultado=$conexion->query($query);


if($resultado){
	//echo "Se insertaron datos";
	header("Location: index.php");
}
else{
	echo "Error, no se pudieron guardar los datos";
}

?>