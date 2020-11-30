<h1>Técnicos</h1>

    <?php

	$editarTec = new MvcController();
	$editarTec -> editarTecniController();
	?>

<form method="post">
	<label>Cédula: </label><br>
	<input type="text" placeholder="Cédula" name="cedula" required>
	<label>Nombre: </label><br>
	<input type="text" placeholder="Nombre" name="nombre" required>
    <label>Apellido: </label><br>
	<input type="text" placeholder="Apellido" name="apellido" required>
	<label>Usuario: </label><br>
	<input type="text" placeholder="Usuario" name="usuario" required>
    <label>Contraseña: </label><br>
	<input type="password" placeholder="Contraseña" name="password" required>
    <label>Edad: </label><br>
	<input type="text" placeholder="Edad" name="edad" required>
	<label>Sexo: </label><br>
	<input type="text" placeholder="Sexo" name="sexo" required>
	<label>Teléfono: </label><br>
	<input type="text" placeholder="Teléfono" name="telefono" required>
    <label>Profesión: </label><br>
	<input type="text" placeholder="Profesión" name="profesion" required>
    <label>Cargo: </label><br>
	<input type="text" placeholder="Cargo" name="cargo" required>
	<label>Plan de entrenamiento: </label>
	<select id="pRegistro" name="planEntre" selected="">	
		<?php
            
			$vistaPlanEntre = new MvcController();
            $vistaPlanEntre -> vistaPlanEntreSelectController();
		?>
	</select><br><br>
	<label>Estado: </label>
	<select id="eRegistro" name="estado" selected="">	
		<?php
            
			$vistaEst = new MvcController();
            $vistaEst -> vistaEstadoSelectController();
		?>
	</select><br><br>

		
	<input class="btn btn-success" type="submit" value="Enviar">

	<script type="text/javascript">
		

	</script>    
</form>
<?php

$editarTec -> actualizarTecniController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>