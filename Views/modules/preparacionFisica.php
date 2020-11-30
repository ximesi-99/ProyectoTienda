<h1>Preparación Física</h1>

<a href="index.php?action=regPreparacionFisica" ><input class="btn btn-success" type="button" value="Agregar Preparación Física"></a>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombres..">
<br><br>
<table border="1" id="myTable">
    
    <thead>
        
    <tr class="table-success">
            <th>Código</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Ejercicio</th>
            <th>Estado</th>
            <th>Acciones</th>

        </tr>

    </thead>
    <tbody id="p">
			
			<?php

			$vistaPrepFisica = new MvcController();
            $vistaPrepFisica -> vistaPrepFisicaController();

			?>

		</tbody>

</table>

<?php

if(isset($_GET["action"])){

if($_GET["action"] == "cambio"){

    echo "Cambio Exitoso";

}

}

?>