<h1>Adaptación Bicicleta</h1>

<form method="post">
    <label>Código </label><br>
	<input type="text" placeholder="Código" name="codigoRegistro" required>
    <div id="fechas">
		<label>Fecha Inicio: </label>
		<input type="date" name="fechaInicioRegistro" required >

		<label>Fecha Fin: </label>
		<input type="date" name="fechaFinRegistro" required>

	</div>
    <label>Rutina </label>
	<select id="ruRegistro" name="rutinaRegistro" selected="">	
		<?php
            
			$vistaRut = new MvcController();
            $vistaRut -> vistaRutinaSelectController();
		?>
	</select><br>
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
$regAdapBici = new MvcController();
$regAdapBici -> registroAdapBiciController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>