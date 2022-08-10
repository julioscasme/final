<?php 

$usuario=$_POST["usuario"];
$clave=$_POST["clave"];

session_start();
$_SESSION["usuario"]=$usuario;

include('conexion_con.php');

$consulta="SELECT*FROM usuario where usuario='$usuario' and contra='$clave'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location: usuario.php");
}else{

    echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
    echo '<script> window.location="index.php"; </script>';
}
mysqli_free_result($resultado);
mysqli_close($conexion);