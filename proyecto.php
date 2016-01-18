<?php

//Proyecto integrador
/*
	diseño: 
		archivo index.php donde vamos a inclui los archivos encabezado.php y pie.php
		de esta forma lograremos separar esas areas de todas las otras paginas de l sitio

		La estructura del sitio sera una tabla con 3 filas


*/


//header('"Content-Type:text/xml"')

$user= isset($_GET['user']) ? $_GET['user'] : '';
$pass= isset($_GET['pass']) ? $_GET['pass'] : '';

$txt=isset($_GET['user'])? "Bienvenido $user !" :"";
//$user=$_Get['user'];$_POSt['user']
?>


<!DOCTYPE html>
<html>
<head>
	<title>Clase1.Lab2</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
</head>
<body>
	<div id="contenedor">
		<!--p><?php echo $txt; ?></p> -->
		
		<p><b> <?php echo $txt; ?> </b></p>
		<form name="clase2Form" method="GET" action="">
			<div class="form-group">
				<label>User:</label>
				<input type="text" name="user" class="form-control"  ><br>
			</div>
			<div class="form-group">
  				<label>Pass:</label> 
  				<input type="text" name="pass" class="form-control" ><br>
  			</div>
  			<input type="submit" value="Enviar" class="btn btn-default"><br>

		</form>
		
		
	</div>
</body>
</html>