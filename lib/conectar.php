<?php 
	$base ="softcari_plataforma";
	$u ="softcari_be";
	$p ="Softcaribe2017.";
	$server ="localhost";

	$conectar = mysql_connect($server,$u,$p)or die("No se conecto a la base de datos por: ". mysql_error());
	mysql_select_db($base, $conectar) or die("No se selecciono la base de datos por: ".mysql_error());
?>