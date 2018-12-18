<?php
   

   // Nombre original del archivo
// $_FILES["imagen"]["name"]

$conexion = mysqli_connect("localhost", "root", "", "proyectutn");
/*if (!$conexion) {
       echo 'Error al conectar a la base de datos';
   }else{
       echo 'conectado a la base de datos';
   }*/

$producto = $_POST["producto"];
$imagen = $_FILES["imagen"]["tmp_name"];
$fecha = $_POST["fecha"];
$descripcion = $_POST["descripcion"];

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
$insertar = "INSERT INTO archivo (producto, imagen, fecha, descripcion) VALUES ('$producto', '$nombreArchivoDestino', '$fecha', '$descripcion')";

mysqli_query($conexion, $insertar);
 ?>
