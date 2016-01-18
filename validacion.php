<?php

//tomar variables del post

$usuario = $_POST['usuario'];
$psw = $_POST['psw'];
$psw2 = $_POST['psw2'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$pais = $_POST['pais'];
$sexo = $_POST['sexo'];
$documento = $_POST['documento'];
$fuma = isset( $_POST['fuma']) ? true : false;
//$ = $_POST[''];
$msjError='';

if($usuario=='') $msjError=$msjError."Debe ingresar un usuario <br/>";
if($psw=='') $msjError= $msjError."Debe ingresar un password <br/>";
if($psw2=='') $msjError= $msjError."Debe ingresar el segundo password <br/>";
if($nombre=='') $msjError= $msjError."Debe ingresar nombre <br/>";
if($apellido=='') $msjError= $msjError."Debe ingresar apellido <br/>";
if($documento=='') $msjError= $msjError."Debe ingresar documento <br/>";
//valido psw
if(!validarPass($psw, $psw2)) $msjError=$msjError."Deben coincidir los passwords <br/>";
if(validarPass($psw, $psw2) && (strlen($psw)< 4)) $msjError=$msjError."El password debe tener mas de 4 caracteres. <br/>";
//validar edad
if(!is_numeric($edad)) $msjError=$msjError."La edad debe ser numerica <br/>";
if(!is_numeric($documento)) $msjError=$msjError."El documento debe ser numerico. <br/>";

//echo $msjError;

function validarPass($pass1, $pass2){
	return ($pass1==$pass2);

}
	function pre($arg1, $tipo=1){
		if($tipo1){
			echo "<pre>";
			var_dump($arg1);
			echo '</pre>';
		}else{
			echo '<br/>'.$arg1;

		}
		
	}

?>