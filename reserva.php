<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<?php
	if($estado_recursos==0){

        $SQL = "UPDATE tbl_recursos (id_recursos, nombre_recursos, estado_recursos) VALUES ('id_recursos','','1')";

        $result = mysql_query($SQL);
    }


	?>
	</body>
</html>