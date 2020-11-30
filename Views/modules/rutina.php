<h1>Rutina</h1>

<a href="index.php?action=regRutina" ><input class="btn btn-success" type="button" value="Agregar Rutina"></a>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombres..">
<br><br>
<table border="1" id="myTable">
    
    <thead>
        
    <tr class="table-success">
            <th>Código</th>
            <th>Recorrido</th>
            <th>Terreno</th>
            <th>Intensidad</th>
            <th>Tiempo Aproximado</th>
            <th>Tiempo Duración</th>
            <th>Fecha Aproximado</th>
            <th>Estado</th>
            <th>Acciones</th>

        </tr>

    </thead>
    <tbody id="p">
			
			<?php

			$vistaRutina = new MvcController();
            $vistaRutina -> vistaRutinaController();

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