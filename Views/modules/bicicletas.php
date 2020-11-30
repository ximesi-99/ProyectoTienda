<h1>Bicicletas</h1>

<a href="index.php?action=regBicicletas" ><input class="btn btn-success" type="button" value="Agregar Bicicleta"></a>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombres..">
<br><br>
<table border="1" id="myTable">
    
    <thead>
        
    <tr class="table-success">
            <th>Marca</th>
            <th>Modelo</th>
            <th>Talla</th>
            <th>Peso</th>
            <th>Grupo</th>
            <th>Estado</th>
            <th>Acciones</th>

        </tr>

    </thead>
    <tbody id="p">
			
			<?php

			$vistaBicicleta = new MvcController();
            $vistaBicicleta -> vistaBicicletaController();

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