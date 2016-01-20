<?php
	sesion_start();
?>

<!doctype html>
<html lang="es">
<head>
        <title> PSW + Cookie pagina + nombre </title>
</head>
<body>
	 <?php 
        if (isset($_SESION['nombre'])){
		sesion_destroy();
                echo "se ha destruido la sesion exitosamente </br>";
		echo "<a href='index.php'>Volver</a>";
        }else{
       		echo "Error.. <br/> ";
        	echo "<a href='index.php'>Volver</a>";
     	} 
	?> <!--Aca se cierra el ELSE-->


</body>
</html>
