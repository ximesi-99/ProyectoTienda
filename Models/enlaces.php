<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){

		if($enlaces == "tecnicos" ||$enlaces == "regTecnicos" ||$enlaces == "editarTecnico"
		||$enlaces == "deportistas" ||$enlaces == "regDeportistas"
		||$enlaces == "medicos" ||$enlaces == "regMedicos"
		||$enlaces == "representanteLegal" ||$enlaces == "regRepresentanteLegal"
		||$enlaces == "bicicletas" ||$enlaces == "regBicicletas"
		||$enlaces == "adaptacionBicicleta" ||$enlaces == "regAdaptacionBicicleta"
		||$enlaces == "planEntrenamiento" ||$enlaces == "regPlanEntrenamiento"
		||$enlaces == "ejercicios" ||$enlaces == "regEjercicios"
		||$enlaces == "test" ||$enlaces == "regTest"
		||$enlaces == "preparacionFisica" ||$enlaces == "regPreparacionFisica"
		||$enlaces == "rutina" ||$enlaces == "regRutina"
		||$enlaces == "examenesMedicos" ||$enlaces == "regExamenesMedicos"
		||$enlaces == "electrocardiograma" ||$enlaces == "regElectrocardiograma"
		||$enlaces == "laboratorio" ||$enlaces == "regLaboratorio"
		||$enlaces == "nutricion" ||$enlaces == "regNutricion"
		||$enlaces == "introduccion" ||$enlaces == "regIntroduccion"
		||$enlaces == "leccion" ||$enlaces == "regLeccion"
		||$enlaces == "contrato" ||$enlaces == "regContrato"
		||$enlaces == "clausula" ||$enlaces == "regClausula"
		||$enlaces == "informes"
		){
			$module =  "views/modules/".$enlaces.".php";
		}
		else if($enlaces == "index"){
			$module =  "views/modules/inicio.php";
		}
		else if($enlaces == "ok"){
			$module =  "views/modules/inicio.php";
		}
		else if($enlaces == "fallo"){
			$module =  "views/modules/inicio.php";
		}else{
			$module =  "views/modules/inicio.php";
		}
		return $module;
	}

}

?>