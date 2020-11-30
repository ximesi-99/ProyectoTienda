<h1>Lección</h1>

<form method="post">
    <label>Lección </label><br>
	<input type="text" placeholder="Lección" name="leccionRegistro" required>
	<input class="btn btn-success" type="submit" value="Guardar">

</form>

<?php

$regLeccion = new MvcController();
$regLeccion -> registroLeccionController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>