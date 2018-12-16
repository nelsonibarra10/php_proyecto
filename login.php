<?php
session_start();

function validarUsuario($username, $password) {
	$conexion = mysqli_connect("localhost", "root", "", "proyectutn");
	//select * from usuario where username='admin' and password='admin4322'
	$password2 =($password);
	$query = "select * from usuario where username='$username' and password='$password2'";
	
	$rtaConsulta = mysqli_query($conexion, $query);
	$cantidadRegistrosEncontrados = mysqli_num_rows($rtaConsulta);
	if ($cantidadRegistrosEncontrados==1) {
		return true;
	} else {
		return false;
	}

}

//$_SESSION["cantidadLoginsErroneos"] = 0;

/*if (!isset($_SESSION["cantidadLoginsErroneos"])) {
	$_SESSION["cantidadLoginsErroneos"] = 0;
}

if ($_SESSION["cantidadLoginsErroneos"]==3) {
	echo "Demasiados intentos erroneos de login";
	exit();
}*/

if (validarUsuario($_POST["username"], $_POST["password"])) {
	$_SESSION["username"] = "admin";
	$_SESSION["cantidadLoginsErroneos"] = 0;
	header("Location: segura.php");

} else {

	$_SESSION["cantidadLoginsErroneos"]++ ;
	echo "Usuario/Contraseña inválidos";
}


?>