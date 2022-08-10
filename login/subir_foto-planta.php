<?php
session_start();
$imagen_planta = $_REQUEST['idPlanta'];
$nameimagen = "$imagen_planta.jpg";
$tmpimagen = $_FILES["imagen"] ["tmp_name"];
$extimagen = pathinfo($nameimagen);
$ext =array("png","gif","jpg");
$urlnueva="fotosp/".$nameimagen;


if(is_uploaded_file($tmpimagen)) {
	if(array_search($extimagen["extension"],$ext)){
		copy($tmpimagen,$urlnueva);
		echo "Se ha guardado correctamente";
		echo '<script> window.location="usuario.php"; </script>';
		
	}else{
		echo "Error: solo imagenes con formato (jpg, png o gif)";
	}

}else{
	echo "Elija una imagen";
	echo '<script> window.location="usuario.php"; </script>';
}

?>