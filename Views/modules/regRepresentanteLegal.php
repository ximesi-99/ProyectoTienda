<h1>Representante Legal</h1>

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
	<input type="password" placeholder="Contraseña" name="passwordRegistro" required>
    <label>Edad: </label><br>
	<input type="text" placeholder="Edad" name="edadRegistro" required>
	<label>Sexo: </label><br>
	<input type="text" placeholder="Sexo" name="sexoRegistro" required>
	<label>Teléfono: </label><br>
	<input type="text" placeholder="Teléfono" name="telefonoRegistro" required>
    <label>Profesión: </label><br>
	<input type="text" placeholder="Profesión" name="profesionRegistro" required>
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

$regRepreLegal = new MvcController();
$regRepreLegal -> registroRepreLegalController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>