<h1>Bicicletas</h1>

<form method="post">
    <label>Marca: </label><br>
	<input type="text" placeholder="Marca" name="marcaRegistro" required>
    <label>Modelo: </label><br>
	<input type="text" placeholder="Modelo" name="modeloRegistro" required>
    <label>Talla: </label><br>
	<input type="text" placeholder="Talla" name="tallaRegistro" required>
    <label>Peso: </label><br>
	<input type="text" placeholder="Peso" name="pesoRegistro" required>
    <label>Grupo: </label><br>
	<input type="text" placeholder="Grupo" name="grupoRegistro" required>
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

$regBicicleta = new MvcController();
$regBicicleta -> registroBicicletaController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>