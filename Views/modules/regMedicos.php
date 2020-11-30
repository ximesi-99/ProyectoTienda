<h1>Médicos</h1>

<form method="post">
    <label>Cédula: </label><br>
	<input type="text" placeholder="Cédula" name="cedulaRegistro" required>
    <label>Nombre: </label><br>
	<input type="text" placeholder="Nombre" name="nombreRegistro" required>
    <label>Apellido: </label><br>
	<input type="text" placeholder="Apellido" name="apellidoRegistro" required>
	<label>Usuario: </label><br>
	<input type="text" placeholder="Usuario" name="usuarioRegistro" required>
	<label>Contraseña: </label><br>
	<input type="text" placeholder="Contraseña" name="passwordRegistro" required>
    <label>Edad: </label><br>
	<input type="text" placeholder="Edad" name="edadRegistro" required>
    <label>Sexo: </label><br>
	<input type="text" placeholder="Sexo" name="sexoRegistro" required>
    <label>Teléfono: </label><br>
	<input type="text" placeholder="Teléfono" name="telefonoRegistro" required>
    <label>Especialidad: </label><br>
	<input type="text" placeholder="Especialidad" name="especialidadRegistro" required>
	<label>Estado: </label>
	<select id="eRegistro" name="estadoRegistro" selected="">	
		<?php
            
			$vistaEst = new MvcController();
            $vistaEst -> vistaEstadoSelectController();
		?>
	</select><br><br>
		
	<input class="btn btn-success" type="submit" value="Enviar">

</form>

<?php

$regMedico = new MvcController();
$regMedico -> registroMedicoController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>