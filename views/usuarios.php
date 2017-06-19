<?php 
	require_once("../lib/conectar.php");
	require_once("../lib/funciones.php");

	$datos = select('usuarios');
?>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Usuario</th>
				<th>Correo Electrónico</th>
				<th>Teléfono</th>
				<th>Github</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($fila = mysql_fetch_array($datos)){
			?>
				<tr>
					<td><?php echo $fila['Nombre']." ".$fila['Apellido_Paterno']." ".$fila['Apellido_Materno']; ?></td>
					<td><?php echo $fila['Usuario']; ?></td>
					<td><?php echo $fila['Email']; ?></td>
					<td><?php echo $fila['Telefono']; ?></td>
					<td><a href="http://www.github.com/<?php echo $fila['GitHub']; ?>" target="_BLANK"><?php echo $fila['GitHub']; ?></a></td>
				</tr>
			<?php
				}
			?>
		</tbody>
	</table>