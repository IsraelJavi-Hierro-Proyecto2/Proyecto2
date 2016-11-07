<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<a href="">Botón de prueba(No funciona)</a><br/><br/>
	<?php

		//realizamos la conexión
//		$conexion = mysqli_connect ("mysql.hostinger.es", "u133561794_usu", "asdASD123", "u133561794_fe");
		$conexion = mysqli_connect ("localhost", "root", "", "bd_hierro");

		if (!$conexion) {
		    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
		    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
		    exit;
		}
		echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos u133561794_fe es genial." . PHP_EOL;
		//echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL;

		mysqli_close($conexion);
	?>
	</body>
</html>