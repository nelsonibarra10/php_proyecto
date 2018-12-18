<?php
session_start();

if (!isset($_SESSION["username"])) {
	
	echo "No podes ingresar porque no estas logeado";
	exit();
}

?>
<!DOCTYPE html>
<html lang="es">
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
            <div class="texto-principal">
                <h1>Bienvenido!!!</h1>
				<a id="boton" href="logout.php">Salir del sistema</a>
            </div>
		</header>
		<div class="texto-principal">
                <form action="carga.php" method="POST" enctype="multipart/form-data">
                    <h2>Cargar archivos</h2>
                        <p>Nombre de Articulo:</p><input type="text"id=nombre name="producto" placeholder="articulo">
                        <p>Fecha de subida:</p><input type="text"id=apellido name="fecha" placeholder="fecha">
                        <p>imagen</p><input type="file"id=correo name="imagen" accept="image/*">
                        <p>Mensaje:</p><textarea id=mensajes name="descripcion" placeholder="Escriba aqui la descripcion del articulo..."></textarea>
                        <input type="submit" value="Subir" id="boton">
                </form>
            </div>
		<section class="section interno">
            <div class="articulos">
                <article class="article"><img src="imagenes/3.jpg" alt="">
                <h3>12 de octubre de 2018</h3>
                <h2>grabado de copas..</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt iure enim a eligendi, aspernatur atque accusamus saepe soluta numquam impedit eius excepturi aliquam ipsum asperiores.</p>
                <a href="diseños.html">Leer más...</a>
				</article>
			</div>	
		</section>
			
		</div>
		</div>
        	<footer class="footer interno">
            	<nav class="pie">
                	<a href="index.html">Acrilicos, Vinilos Adhesivos.</a>
           		</nav>
        	</footer>
    </div>	
	</body>
</html>