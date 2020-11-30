<h1>Electrocardiograma</h1>

<form method="post">
    <label>Código </label><br>
	<input type="text" placeholder="Código" name="codigoRegistro" required>

	<!--<script type="text/javascript">
		function mostrar(){
	 		document.getElementById('dRegistro').innerHTML='<?php
            /*
			$vista = new MvcController();
            $vista -> vistaDepenAdminSelectController("0");*/
		?>';
		
			document.getElementById('fechas').innerHTML='<input type="date" name="autoRegistro" style="display:none"> <input type="date" name="proxAutoRegistro" style="display:none">';

		}

	</script>
-->
    <label>Resultado: </label><br>
	<input type="text" placeholder="Resultado" name="resultadoRegistro" required>
    <label>Recomendaciones: </label><br>
	<input type="text" placeholder="Recomendaciones" name="recomendacionesRegistro" required>
		
	<input class="btn btn-success" type="submit" value="Enviar">

</form>

<?php
/*
$registro = new MvcController();
$registro -> registroProcesoController();
*/
if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>