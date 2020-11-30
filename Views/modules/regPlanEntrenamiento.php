<h1>Plan Entrenamiento</h1>

<form method="post">
	<label>Código: </label><br>
	<input type="text" placeholder="Código" name="codigoRegistro" required>
	<div id="fechas">
		<label>Fecha Inicio: </label>
		<input type="date" name="fechaInicioRegistro" required >

		<label>Fecha Fin: </label>
		<input type="date" name="fechaFinRegistro" required>

	</div>
	<label>Introducción: </label>
	<select id="iRegistro" name="introduccionRegistro" selected="">	
		<?php         
			$vistaIntro = new MvcController();
            $vistaIntro -> vistaIntroduccionSelectController();
		?>
	</select><br><br>	
	<label>Preparación Fisica: </label>
	<select id="pRegistro" name="prepFisicaRegistro" selected="">	
		<?php            
			$vistaPrepFis = new MvcController();
            $vistaPrepFis -> vistaPrepFisicaSelectController();
		?>
	</select><br><br>
	<label>Adaptación Bicicleta: </label>
	<select id="aRegistro" name="adapBiciRegistro" selected="">	
		<?php            
			$vistaAdapBici = new MvcController();
            $vistaAdapBici -> vistaAdapBicicletaSelectController();
		?>
	</select><br><br>
	<label>Test: </label>
	<select id="tRegistro" name="testRegistro" selected="">	
		<?php            
			$vistaTest = new MvcController();
            $vistaTest -> vistaTestSelectController();
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

$regPlanEntre = new MvcController();
$regPlanEntre -> registroPlanEntreController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>