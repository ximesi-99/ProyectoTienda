<h1>Introducción</h1>

<form method="post">
    <label>Código </label><br>
	<input type="text" placeholder="Código" name="codigoRegistro" required>
    <div id="fechas">
		<label>Fecha Realización: </label>
		<input type="date" name="fechaRealRegistro" required >

	</div>
	<label>Lección: </label>
	<select id="lRegistro" name="leccionRegistro" selected="">	
		<?php
            
			$vistaLeccion = new MvcController();
            $vistaLeccion -> vistaLeccionSelectController();
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

$regIntroduccion = new MvcController();
$regIntroduccion -> registroIntroduccionController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>