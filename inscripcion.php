<html>
<head>
	<title>Proyecto</title>
	<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="style/bootstrap-3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/bootstrap-3/css/helen.css">

</head>
<body>
		<?php include('encabezado.php');?>
		
		
		<?php 
			//if($_SERVER['REQUEST_METHOD']=='POST') var_dump($_POST) ;
			if($_SERVER['REQUEST_METHOD']=='POST') {
				include('validacion.php');
				echo $msjError;
			}

		?> 
		<div class="container">

			<h1>Inscripci&oacute;n</h1>
			<form method="POST" action="">
			<table>
					<tr>
						<td>Usuario:</td>
						<td><input type="text" name="usuario"></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="psw"></td>
						<td>Reingrese Password:</td>
						<td><input type="password" name="psw2"></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td colspan=4><hr/></td>
					</tr>
					<tr>
						<td>Nombre:</td>
						<td><input type="text" name="nombre"></td>
						<td>Apellido:</td>
						<td><input type="text" name="apellido"></td>
						
					</tr>
					<tr>
						<td>Edad:</td>
						<td><input type="text" name="edad"></td>
						<td>Pais:</td>
						<td><select name="pais">
								<option value="ar">Argentina</option>
								<option value="br">Brasil</option>
								<option value="py">Paraguay</option>
								<option value="uy">Uruguay</option>
								
						</select>
						</td>
						
					</tr>
					<tr>
						<td >Sexo:</td>
						<td>
							<input type="radio" value="m" name="sexo"/>Masculino
							<input type="radio" value="f" name="sexo"/>Femenino
						</td>
					</tr>
					<tr>
						<td >Documento:</td>
						<td><input type="text" name="documento"></td>
						<td >Fumador?:</td>
						<td><input type="checkbox" value="false" name="fuma"></td>
					</tr>
					<tr>
						<td colspan="4">
							<input type="reset" value="Eliminiar Datos">
							<input type="submit" value="Envia Datos">
						</td>
					</tr>

			</table>	
	
		</div>
		



		</form>



		<br/>
		<br/>
		<?php include('pie.php');?>

<script src="style/bootstrap-3/js/jquery.js"></script>
<script src="style/bootstrap-3/js/bootstrap.min.js"></script>
</body>