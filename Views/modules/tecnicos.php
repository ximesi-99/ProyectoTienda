

<h1>TÉCNICOS</h1>
<div class="inline-block">
<a href="index.php?action=regTecnicos" ><input class="btn btn-success" type="button" value="Agregar Técnico"></a>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombres..">
</div>
<br><br>
<table id="myTable">
    
    <thead>
        
    <tr class="table-success">
            <th>Cédula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Usuario</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Teléfono</th>
            <th>Profesión</th>
            <th>Cargo</th>
            <th>Estado</th>
            <th>Plan Entrenamiento</th>
            <th>Acciones</th>

        </tr>

    </thead>
    <tbody id="p">
			
			<?php

			$vistaTecnico = new MvcController();
            $vistaTecnico -> vistaTecnicoController();

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