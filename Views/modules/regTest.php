<h1>Test</h1>

<form method="post">
	<label>Código: </label><br>
	<input type="text" placeholder="Código" name="codigoRegistro" required>
	<div id="fechas">
		<label>Fecha Realización: </label>
		<input type="date" name="fechaRealRegistro" required >

	</div>
    <label>Rutina: </label>
	<select id="rRegistro" name="rutinaRegistro" selected="">	
		<?php
            
			$vistaRut = new MvcController();
            $vistaRut -> vistaRutinaSelectController();
		?>
	</select><br><br>
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

$regTest = new MvcController();
$regTest -> registroTestController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>