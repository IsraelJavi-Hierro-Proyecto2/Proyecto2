<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Clean login form</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>
<body>
	
	<div class="login">
	<div class="heading">
	<form action="estadistica.php">
		<div class="input-group input-group-lg">
		</div>
		<?php
		echo "<h2>".$_POST['username']."</h2>";
		echo '<br/>';
		echo "<h2>".$_POST['password']."</h2>"; 
		echo '<br/>';
		?>
		Hola
		<button type="submit" class="float" >Estadística de uso</button>
		</div>
	</form>
	
	  
</body>
</html>
