<h1>Adaptación Bicicleta</h1>

<a href="index.php?action=regAdaptacionBicicleta" ><input class="btn btn-success" type="button" value="Agregar Adaptación Bicicleta"></a>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombres..">
<br><br>
<table border="1" id="myTable">
    
    <thead>
        
    <tr class="table-success">
            <th>Código</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Rutina</th>
            <th>Estado</th>
            <th>Acciones</th>

        </tr>

    </thead>
    <tbody id="p">
			
			<?php

			$vistaAdapBicicleta = new MvcController();
            $vistaAdapBicicleta -> vistaAdapBicicletaController();

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