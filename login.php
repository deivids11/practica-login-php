<?php 
	session_start();
?>
<?php
	$_SESSION['nombre'] = $_POST['nombre'];
	echo "variable:" .$_SESSION['nombre'];
	echo "<a href= 'index.php'>Volver</a>";
?>
