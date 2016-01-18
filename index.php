<html>
<head>
	<title>Proyecto</title>
	<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="style/bootstrap-3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/bootstrap-3/css/helen.css">

</head>
<body>

		<?php include('encabezado.php');
			include('visita.php');
		?>
		<div class="container">
			<br/>
			<h1>Proyecto Integrador PHP</h1>
			<br/>
			<br/>
			<h2>Usuario xxxx<br/> Fecha yyyy</h2>
			<br/>
			<br/>
			<h3>Usted es el visitante numero <?php echo $visita; ?></h3>
			<br/>
			<button class="btn btn-primary">Boton</button>

		</div>
			

		
		
		<?php include('pie.php');?>

<script src="style/bootstrap-3/js/jquery.js"></script>
<script src="style/bootstrap-3/js/bootstrap.min.js"></script>
</body>