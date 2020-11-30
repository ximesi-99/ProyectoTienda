<h1>Representante Legal</h1>

<a href="index.php?action=regRepresentanteLegal" ><input class="btn btn-success" type="button" value="Agregar Representante Legal"></a>
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
            <th>Profesión</th>
            <th>Estado</th>
            <th>Acciones</th>

        </tr>

    </thead>
    <tbody id="p">
			
			<?php

			$vistaRepreLegal = new MvcController();
            $vistaRepreLegal -> vistaRepreLegalController();

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