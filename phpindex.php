<?php
   $conexion = mysqli_connect("localhost", "root", "", "proyectutn");
   /*if (!$conexion) {
       echo 'Error al conectar a la base de datos';
   }else{
       echo 'conectado a la base de datos';
   }*/
   $nombre = $_POST["nombre"];
   $apellido = $_POST["apellido"];
   $correo = $_POST["correo"];
   $telefono = $_POST["telefono"];
   $mensaje = $_POST["mensajes"];


   ///////Envio de correo///////////////////////////////////////////////////////////////////
/*

   $destino = "nelsonaibarra@hotmail.com";
   $contenido = "Nombre:" . $nombre . "\nCorreo:" .$correo. "\nTelefono:" . $telefono. "\Mensaje:" . $mensaje;

   mail($destino,"contacto", $contenido);*/


   //////////////////////////////////////////////////////////

//consulta para insertar
   $insertar = "INSERT INTO datos (nombre, apellido, correo, telefono, mensaje) VALUES ('$nombre', '$apellido', '$correo', '$telefono', '$mensaje')";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contacto</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="imagenes/favicon.png" type="image/x-icon">
</head>
<body>
    <div class="padre">
        <div class="social-bar">
                <a href="http://www.facebook.com" class="icon icon-facebook2" target="blank"></a>
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
                    <div><a href="#"><i class="fab fa-facebook-square"></i></a></div>
                    <div><a href="#"><i class="fab fa-instagram"></i></a></div>
                </div>
           
            </div>
            
            <?php
    if ($nombre=='' || $apellido=='' || $correo=='' || $telefono=='' || $mensaje==''){
        echo '<div class="texto-principal">
        <h1>Tenes que comletar todos los campos.</h1>
        </div>';
        exit(); 
        }

                //ejecutar consulta
   $resultado = mysqli_query($conexion, $insertar);
   if (!$resultado) {
       echo '<div class="texto-principal">
       <h1>error al registrar</h1>
       </div>';
   }else{
       echo '<div class="texto-principal">
       <h1>Datos registrados exitosamente</h1>
   </div> ';
   //cerrar conexion
   mysqli_close($conexion);
   }
?>
        </header>
    </div>
        <footer class="footer interno">
            <nav class="pie">
                <a href="index.html">Acrilicos, Vinilos Adhesivos.</a>
            </nav>
        </footer>
    </div>
    
    
</body>
   
</html>
