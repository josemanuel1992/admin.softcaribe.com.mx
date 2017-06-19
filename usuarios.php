<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>Usuarios</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-success" role="alert" id="register_form" style="display:none;">
				  <strong>Bien Hecho!</strong> Tus datos se guardaron correctamente.
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 consultar">
				
			</div>
			<div class="col-md-6 formulario">
				<form action="#" id="frmDatos">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" id="nombre" class="form-control" name="nombre">
					</div>
					<div class="form-group">
						<label for="aPaterno">Apellido Paterno</label>
						<input type="text" id="aPaterno" class="form-control" name="aPaterno">
					</div>
					<div class="form-group">
						<label for="aMaterno">Apellido Materno</label>
						<input type="text" id="aMaterno" class="form-control" name="aMaterno">
					</div>
					<div class="form-group">
						<label for="telefono">Teléfono</label>
						<input type="tel" id="telefono" class="form-control" name="telefono">
					</div>
					<div class="form-group">
						<label for="email">Correo Electrónico</label>
						<input type="mail" id="email" class="form-control" name="email">
					</div>
					<div class="form-group">
						<label for="usuario">Usuario</label>
						<input type="text" id="usuario" class="form-control" name="usuario">
					</div>
					<div class="form-group">
						<label for="pass">Contraseña</label>
						<input type="password" id="pass" name="pass" class="form-control">
					</div>
					<div class="form-group">
						<label for="git">Github</label>
						<input type="text" id="git" name="git" class="form-control">
					</div>
					<div class="form-group">
						<button class="btn btn-primary" id="btnInsertar">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
			recargar();
		});

		function recargar(){
			$(".consultar").load("views/usuarios.php");
		}
		$("#btnInsertar").click(function(e){
			e.preventDefault();
			var datos = $("#frmDatos").serialize();
			$.ajax({
				type: "POST",
				url: "actions/insertarUsuario.php",
				data: datos,
				success: function() {
			    	$('#register_form').html();
			    	$('#register_form').removeClass("alert-info");
					$('#register_form').addClass("alert-success");
			    	$('#register_form').html('<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p>Tus datos han sido guardados correctamente!</p>').slideDown("slow", function(){$("#register_form").delay(3000).slideUp("slow");});
			        recargar();
			        $('#frmDatos').trigger("reset");
			    }
			});

		});







	</script>
</body>
</html>