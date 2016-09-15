<?php
	include ("../../../data/dtstudent.php");
	include ("../../../dominio/student.php");
	include ("../../../data/dtConexion.php");


	class controlObtenerStudent{
		
		function controlObtenerStudent(){
		}
	
		function obtenerStudents(){
		
			$dtstudent = new dtstudent;
			
			$lista =$dtstudent->consultas();
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
		
		function obtenerStudent($carnet){
		
			$dtstudent = new dtstudent;

			$lista =$dtstudent->consulta($carnet);
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
	}

?>