<?php 
function select($tabla){
	$consulta="select * from $tabla";
	$resultado = mysql_query($consulta);
	return($resultado);
}

function insertarUsuarios($nombre,$aPaterno,$aMaterno,$email,$telefono,$usuario,$pass,$github){

	$consulta = "INSERT INTO usuarios VALUES ('', '$nombre', '$aPaterno', '$aMaterno', '$email', '$telefono', '$usuario', '$pass', '$github')";
	mysql_query($consulta);
}
 ?>