<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="Views/css/styles.css">
	<div style="height: 100px">
	<img class="w-30 h-100 d-inline-block" src="Views/img/logo.jpg">
	<h1 class="d-inline-block"> Team Sachica</h1>
	</div>
	
	

<nav class="nav bg-success text-white">
		<ul class="nav nav-tabs justify-content-center">
			<li><a href="index.php">Inicio</a></li>
			  <li class="nav-item dropdown">
        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Consultar Bicicletas
        		</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="index.php?action=bicicletaDeportista">Bicicletas</a>
				<a class="dropdown-item" href="index.php?action=adaptacionBicicletaDep">Adaptacion</a>
				</div>
      		</li>
			  <li class="nav-item dropdown">
        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Consultar Plan Entrenamiento
        		</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="index.php?action=planEntrenamientoDep">Plan Entrenamiento</a>
				<a class="dropdown-item" href="index.php?action=ejerciciosDep">Ejercicios</a>
				<a class="dropdown-item" href="index.php?action=testDep">Test</a>
                <a class="dropdown-item" href="index.php?action=preparacionFisicaDep">Preparación Física</a>
				<a class="dropdown-item" href="index.php?action=rutinaDep">Rutina</a>
				</div>
      		</li>
			  <li class="nav-item dropdown">
        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Consultar Introducción
        		</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="index.php?action=introduccionDep">Introducción</a>
				</div>
      		</li>
		</ul>
</nav>
</div>

<script>$('.dropdown').collapse("show")</script>
