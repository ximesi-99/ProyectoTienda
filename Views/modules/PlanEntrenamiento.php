<h1>Plan Entrenamiento</h1>

<a href="index.php?action=regPlanEntrenamiento" ><input class="btn btn-success" type="button" value="Agregar Plan Entrenamiento"></a>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombres..">
<br><br>
<table border="1" id="myTable">
    
    <thead>
        
    <tr class="table-success">
            <th>Código</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Introducción</th>
            <th>Preparación Física</th>
            <th>Adaptación Bicicleta</th>
            <th>Test</th>
            <th>Estado</th>
            <th>Acciones</th>

        </tr>

    </thead>
    <tbody id="p">
			
			<?php

			$vistaPlanEntre = new MvcController();
            $vistaPlanEntre -> vistaPlanEntreController();

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