<h1>Exámen Médico</h1>

<form method="post">
    <label>Código </label><br>
	<input type="text" placeholder="Código" name="codigoRegistro" required>
    <label>Médico: </label><br>
	<select id="mRegistro" name="medicoRegistro" selected="">	
		<?php
            
			$vistaMed = new MvcController();
            $vistaMed -> vistaMedicoSelectController();
		?>
	</select><br><br>
    <label>Electrocardiograma: </label><br>
	<select id="elRegistro" name="electroRegistro" selected="">	
		<?php
            
			$vistaElectro = new MvcController();
            $vistaElectro -> vistaElectroSelectController();
		?>
	</select><br><br>
    <label>Laboratorio: </label><br>
	<<select id="lRegistro" name="laboratorioRegistro" selected="">	
		<?php
            
			$vistaLab = new MvcController();
            $vistaLab -> vistaLaboratorioSelectController();
		?>
	</select><br><br>
    <label>Nutrición: </label><br>
	<select id="nRegistro" name="nutricionRegistro" selected="">	
		<?php
            
			$vistaNutri = new MvcController();
            $vistaNutri -> vistaNutricionSelectController();
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

$regExamenMed = new MvcController();
$regExamenMed -> registroExamenMedController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>