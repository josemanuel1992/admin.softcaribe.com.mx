<?php
	require_once("../lib/conectar.php");
	require_once("../lib/funciones.php");

	$nombre = $_POST['nombre'];
	$aPaterno = $_POST['aPaterno'];
	$aMaterno = $_POST['aMaterno'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	$github = $_POST['git'];

	insertarUsuarios($nombre,$aPaterno,$aMaterno,$email,$telefono,$usuario,$pass,$github);
?>