<?php

/*<?php include("articulos.php");?>*/


$conexion = mysqli_connect("localhost", "root", "", "proyectutn");
$consulta = mysqli_query($conexion, "select * from archivo");

 while ($unRegistro = mysqli_fetch_array($consulta)) {
    /*echo "<tr>";
    echo "<td>$unRegistro[producto]</td>";
    echo "<td>$unRegistro[fecha]</td>";
    echo "<td>$unRegistro[imagen]</td>";
    echo "<td>$unRegistro[descripcion]</td>";
    echo "</tr>";*/




    echo "
            <section class='section interno'>
            <div class='articulos'>
            <article class='article'><img src='imagenes/$unRegistro[imagen]' alt=''>
            <h3>$unRegistro[fecha]</h3>
            <h2>$unRegistro[producto]</h2>
            <p>$unRegistro[descripcion]</p>
            <a href='diseños.html'>Leer más...</a>
            </article>
            
        </div>	
    </section>";}
     echo "    <nav class='navegacion'>
            <a href='#'>Inicio</a>
            <a href='#'>1</a>
            <a href='#'>2</a>
            <a href='#'>3</a>
            <a href='#'>4</a>
            <a href='#'>Final</a>
        </nav>";


?>