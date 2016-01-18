<?php 

	define('ARCH', 'comentarios.txt');
	if($_SERVER['REQUEST_METHOD']=='POST'){
		//var_dump($_REQUEST); die();

		$nombre = $_POST['nombre']!=''? $_POST['nombre']: 'Anonimo';
		$titulo = $_POST['titulo'];
		$comentario = $_POST['comentario'];

		if (file_exists(ARCH) && filesize(ARCH)>0) {
			$modo='a';
		} else {
			$modo='w';
		}

		$contenido="
			<b>Nombre:</b> $nombre<br/>
			<b>Titulo:</b> $titulo<br/>
			<b>Comentario:</b> $comentario<br/>
			<hr/><br/> \n
		";

		$fp = fopen(ARCH, $modo);
		fwrite($fp, $contenido);		
		fclose($fp);
		$mensaje="<b>Comentario exitoso</b><br/>";
	}

?>
<html>
<head>
	<title>Proyecto</title>
	<link rel="stylesheet" type="text/css" href="style/bootstrap-3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/bootstrap-3/css/helen.css">
</head>
<body>
		<?php include('encabezado.php');?>
		<br/>
		<h1>Comentarios</h1>
		<?php if(isset($mensaje)) echo $mensaje; ?>
		<form method="post" name="frmComentario" action="">
			<label>Nombre:</label><input type="text" name="nombre"><br/>
			<label>Titulo:</label><input type="text" name="titulo"><br/>
			<label>Comentario:</label><textarea name="comentario" rows="10" cols ="20"></textarea> <br/>
			<input type="submit" name="enviar" value="enviar comentario"><br/>
		</form>

		<br/>
		<br/>
		<?php include('pie.php');?>

</body>