<h1>Ejercicios</h1>

<a href="index.php?action=regEjercicios" ><input class="btn btn-success" type="button" value="Agregar Ejercicios"></a>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombres..">
<br><br>
<table border="1" id="myTable">
    
    <thead>
        
    <tr class="table-success">
            <th>Código</th>
            <th>Nombre</th>
            <th>Repeticiones</th>
            <th>Tiempo</th>
            <th>Fecha Realización</th>
            <th>Estado</th>
            <th>Acciones</th>

        </tr>

    </thead>
    <tbody id="p">
			
			<?php

			$vistaEjercicio = new MvcController();
            $vistaEjercicio -> vistaEjercicioController();

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