<h1>Preparación Física</h1>

<form method="post">
	<label>Código: </label><br>
	<input type="text" placeholder="Código" name="codigoRegistro" required>
	<div id="fechas">
		<label>Fecha Inicio: </label>
		<input type="date" name="fechaInicioRegistro" required >

		<label>Fecha Fin: </label>
		<input type="date" name="fechaFinRegistro" required>

	</div>
    <label>Ejercicio: </label>
	<select id="ejRegistro" name="ejercicioRegistro" selected="">	
		<?php
            
			$vistaEjer = new MvcController();
            $vistaEjer -> vistaEjercicioSelectController();
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

$regPrepFisica = new MvcController();
$regPrepFisica -> registroPrepFisicaController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>