<h1>Nutrición</h1>

<a href="index.php?action=regNutricion" ><input class="btn btn-success" type="button" value="Agregar Nutrición"></a>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombres..">
<br><br>
<table border="1" id="myTable">
    
    <thead>
        
    <tr class="table-success">
            <th>Código</th>
            <th>Resultado</th>
            <th>Recomendaciones</th>
            <th>Acciones</th>

        </tr>

    </thead>
    <tbody id="p">
			
			<?php

			$vistaNutricion = new MvcController();
            $vistaNutricion -> vistaNutricionController();

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