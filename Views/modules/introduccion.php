<h1>Introducción</h1>

<a href="index.php?action=regIntroduccion" ><input class="btn btn-success" type="button" value="Agregar Introducción"></a>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombres..">
<br><br>
<table border="1" id="myTable">
    
    <thead>
        
    <tr class="table-success">
            <th>Código</th>
            <th>Fecha Realización</th>
            <th>Lección</th>
            <th>Estado</th>
            <th>Acciones</th>
    </tr>

    </thead>
    <tbody id="p">
			
			<?php

			$vistaIntroduccion = new MvcController();
            $vistaIntroduccion -> vistaIntroduccionController();

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