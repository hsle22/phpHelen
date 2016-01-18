<html>
<head>
	<title>Proyecto</title>
	<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"-->
	<link rel="stylesheet" type="text/css" href="style/bootstrap-3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/bootstrap-3/css/helen.css">

</head>
<body>
		<?php include('encabezado.php');?>
		<br/>
		<h1>Foro</h1>
		<?php
			include( 'comentarios.txt');
		?>

		<?php
			define('ARCH', 'comentarios.txt');
			$fp = fopen(ARCH, 'r');
			$txt = fread($fp, filesize(ARCH));
			

			fclose($fp);
			echo "$txt";
		?>

		<br/>
		<br/>
		<?php include('pie.php');?>

</body>