<?php
define('ARCH', 'visita.txt');

if (file_exists(ARCH) && filesize(ARCH) ){
	
	$fp = fopen(ARCH, 'r');
	$visita = fread($fp, filesize(ARCH));
	fclose($fp);
}else{
	$fp = fopen(ARCH, 'w');
	fclose($fp);
	$visita ="0";

}
 $visita++;
 $fp = fopen(ARCH, 'w');
 fwrite($fp, $visita);
 fclose($fp);


?>