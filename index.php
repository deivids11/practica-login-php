<?php
	session_start();
?>
<?php
if (isset($_SESSION['nombre'])){
	echo "<p> Hola usuario:(" . $_SESSION['nombre']. ") [<a href='logout.php'>Salir</a>]</p>";
}else{
?>
<form action = "login.php" method = "post">
   <p>Nombre: <input type = "text" name = "nombre"/> </p>
   <p> <input type = "submit" value = "enviar"/></p>
</form>
<?php } ?>
