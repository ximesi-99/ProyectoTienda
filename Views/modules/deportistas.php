<h1>Deportistas</h1>

<a href="index.php?action=regDeportistas" ><input class="btn btn-success" type="button" value="Agregar Deportista"></a>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombres..">
<br><br>
<table border="1" id="myTable">
    
    <thead>
        
    <tr class="table-success">
            <th>Cédula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Teléfono</th>
            <th>Estatura</th>
            <th>Peso</th>
            <th>Objetivo Preparación</th>
            <th>Técnico</th>
            <th>Bicicleta</th>
            <th>Plan Entrenamiento</th>
            <th>Estado</th>
            <th>Acciones</th>

        </tr>

    </thead>
    <tbody id="p">
			
			<?php

			$vistaDeportista = new MvcController();
            $vistaDeportista -> vistaDeportistaController();

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