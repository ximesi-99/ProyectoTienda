<h1>Rutina</h1>

<form method="post">
	<label>Código: </label><br>
	<input type="text" placeholder="Código" name="codigoRegistro" required>
    <label>Recorrido: </label><br>
	<input type="text" placeholder="Recorrido" name="recorridoRegistro" required>
    <label>Terreno: </label><br>
	<input type="text" placeholder="Terreno" name="terrenoRegistro" required>
    <label>Intensidad: </label><br>
	<input type="text" placeholder="Intensidad" name="intensidadRegistro" required>
	<label>Tiempo Aproximado: </label><br>
	<input type="text" placeholder="Tiempo Aproximado" name="tiempoAproximadoRegistro" required>
	<label>Tiempo Duración: </label><br>
	<input type="text" placeholder="Tiempo Duración" name="tiempoDuracionRegistro" required>
	<div id="fechas">
		<label>Fecha Realización: </label>
		<input type="date" name="fechaRealRegistro" required >

	</div>
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

$regRutina = new MvcController();
$regRutina -> registroRutinaController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>