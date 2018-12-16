<?php
session_start();

if (!isset($_SESSION["username"])) {
	echo "No podes ingresar porque no estas logeado";
	exit();
}

?>
<html>
	<body>
		<h1>Bienvenido!!!</h1>
		<a href="logout.php">Salir del sistema</a>
	</body>
</html>