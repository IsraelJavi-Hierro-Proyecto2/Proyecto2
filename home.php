<?php
include_once "conexion.php";
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<head>
  <meta charset="UTF-8">
  <title>Reserva de recursos</title>
  <link rel="stylesheet" href="css/style.css" TYPE="text/css" MEDIA=screen> 
</head>
	</head>
	<body>
	<?php
	echo "Conexión correcta, bienvenido ";
	echo $_SESSION['username'];
	?>
	<div>
		<h1 align="center" >Productos disponibles:</h1>
	</div>
	<div class="login">
	<div align="left">
		Recurso <br/>
		Descripción <br/>
		Estado <br/>		
	</div>
	</body>
</html>