<?php
session_start();

function validarUsuario($username, $password) {
	$conexion = mysqli_connect("localhost", "root", "", "proyectutn");
	//select * from usuario where username='admin' and password='admin1234'
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
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diseño proyecto 2</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="imagenes/favicon.png" type="image/x-icon">
    
</head>
<body>
    <div class="social-bar">
        <a href="http://www.facebook.com/Acrinel/" class="icon icon-facebook2" target="blank"></a>
        <a href="http://www.twitter.com" class="icon icon-twitter" target="blank"></a>
        <a href="http://www.youtube.com" class="icon icon-youtube" target="blank"></a>
        <a href="contacto.html" class="icon icon-whatsapp" target="blank"></a>

    </div>
    <div class="padre">
        <header class="header">
            <div class="menu interno">
                <div class="logo">
                    <a href="index.html">
                    <img src="imagenes/logo.png" alt=""></a>
                </div>
                <nav class="nav">
                        <a href="index.html"><i class="fas fa-home"></i><span class="off">inicio</span></a>
                        <a href="diseños.html"><i class="fas fa-comments"></i><span class="off">Diseños</span></a>
                        <a href="login.html"><i class="fas fa-user-tie"></i><span class="off">Ingresar</span></a>
                        <a href="contacto.html"><i class="fas fa-envelope"></i><span class="off">Contacto</span></a>
                </nav>
                <div class="social">
                    <div><a href="http://www.facebook.com/Acrinel/"><i class="fab fa-facebook-square"></i></a></div>
                    <div><a href="#"><i class="fab fa-instagram"></i></a></div>
                </div>
			</div>
			
			
			<?php
			if (validarUsuario($_POST["username"], $_POST["password"])) {
				$_SESSION["username"] = "admin";
				$_SESSION["cantidadLoginsErroneos"] = 0;
				header("Location: segura.php");
			
			} else {
			
				/*$_SESSION["cantidadLoginsErroneos"]++ ;*/
				echo '<div class="texto-principal">
				   <h1>Usuario o contraseña invalido</h1>
				   <a id="boton" href="logout.php">Volver</a>
			   </div> ';
			}
			
			?>
				
        </header>
			
		</div>
		</div>
        	<footer class="footer interno">
            	<nav class="pie">
                	<a href="index.html">Acrilicos, Vinilos Adhesivos.</a>
           		</nav>
        	</footer>
    </div>	
	</body>