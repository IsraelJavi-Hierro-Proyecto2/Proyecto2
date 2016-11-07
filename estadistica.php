<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
 	 	<title>Clean login form</title>
      	<link rel="stylesheet" href="css/style.css">
      	<link rel="stylesheet" href="css/estadistica.css">
      

	</head>
	<body>
		<div class="login">
	  	<div class="heading">
	    <h2>Estadística de uso</h2>
	    <div class="estadistica"></div>
	    	<div class="foto">iMAGEN:
	    	</div>
	    	Recurso:<br/>
	    	Nº de reservas:<br/>
	    	Personas que la han reservado:<br/>
	    </div>
		<?php
		$nombre_recursos = $_REQUEST["nombre_recursos"];
		$id_reserva = $_REQUEST["id_reserva"];
		$nombre_usuarios = $_REQUEST["nombre_usuarios"];
		$foto_recursos = $_REQUEST["foto_recursos"];
		if(mysqli_num_rows($id_reserva)>0){
			echo "Número de productos: " . mysqli_num_rows($id_reserva) . "<br/><br/>";
			while($producto = mysqli_fetch_array($productos)){
				echo "<div>";
				echo "Nombre: " . $producto['pro_nombre'] . "<br/>";
				echo "Precio: " . $producto['pro_precio'] . "<br/>";
				echo "Tipo: " . $producto['tip_nombre'] . "<br/>";
				$foto='img/'.$producto['pro_foto'];

				if (file_exists ($foto)){
					echo "<img src='" . $foto . "' width='100'/><br/><br/>";
				} else {
					echo "<img src='img/0.jpg' width='100'/><br/><br/>";
				}
				echo "<a href='161028_exercici1_modificar.php?pro_id=". $producto['pro_id'] ."'>Modificar</a><br/>";
				echo "<a href='161028_exercici1_eliminar.proc.php?pro_id=". $producto['pro_id'] ."'>Eliminar</a>";

				echo "</div>";
			}
		} else {
			echo "No hay datos que mostrar!";
		}

		mysqli_close($conexion);

		

		?>
	 	</div>
	 	</div>

	</body>
</html>