<h1>Ejercicios</h1>

<form method="post">
    <label>Código </label><br>
	<input type="text" placeholder="Código" name="codigoRegistro" required>
    <label>Nombre: </label><br>
	<input type="text" placeholder="Nombre" name="nombreRegistro" required>
    <label>Repeticiones: </label><br>
	<input type="text" placeholder="Repetaciones" name="repeticionesRegistro" required>
    <label>Tiempo: </label><br>
	<input type="text" placeholder="Tiempo" name="tiempoRegistro" required>
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

$regEjercicio = new MvcController();
$regEjercicio -> registroEjercicioController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>