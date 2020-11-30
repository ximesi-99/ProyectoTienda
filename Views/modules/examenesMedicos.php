<h1>Exámen Médico</h1>

<a href="index.php?action=regExamenesMedicos" ><input class="btn btn-success" type="button" value="Agregar Exámen Médico"></a>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombres..">
<br><br>
<table border="1" id="myTable">
    
    <thead>
        
    <tr class="table-success">
            <th>Código</th>
            <th>Medico</th>
            <th>Electrocardiograma</th>
            <th>Laboratorio</th>
            <th>Nutrición</th>
            <th>Estado</th>
            <th>Acciones</th>

        </tr>

    </thead>
    <tbody id="p">
			
			<?php

			$vistaExamenMedico = new MvcController();
            $vistaExamenMedico -> vistaExamenMedicoController();

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