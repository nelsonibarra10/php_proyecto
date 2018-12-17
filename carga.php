<?php
   

   // Nombre original del archivo
// $_FILES["imagen"]["name"]

$carpetaDestino = "./imagenes"; // Subcarpeta con nombre subidas
$nombreArchivoDestino = $_FILES["imagen"]["name"];

if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $carpetaDestino."/".$nombreArchivoDestino)) {
	// El archivo se subio ok
	echo "Subido ok";
	echo "El nombre original del archivo es ".$_FILES["imagen"]["name"];
} else {
	// Hubo un error en el upload
	echo "Error en la subida del archivo";
}

 ?>
