<?php
// datos para la conexion a mysql
define('DB_SERVER','localhost');
define('DB_NAME','bd_hierro');
define('DB_USER','root');
define('DB_PASS','');
$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
mysql_select_db(DB_NAME,$con);
if (!$con) {
		    $message = "Error: No se pudo conectar a MySQL.";
		    echo "<script type='text/javascript'>alert('$message');</script>";
		    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
		    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
		    exit;
		}
		$message2 = "Éxito: Se realizó una conexión apropiada a MySQL!";
		echo "<script language='javascript'>alert('$message2');</script>";
		//echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL;
?>