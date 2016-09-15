<?php
	include ("../../../data/dtcompany_student.php");
	include ("../../../dominio/company_student.php");
	include ("../../../data/dtConexion.php");


	class controlObtenerCompany_student{
		
		function controlObtenerCompany_student(){
		}
	
		function obtenerCompany_students(){
		
			$dtcompany_student = new dtcompany_student;
			
			$lista =$dtcompany_student->consultas();
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
		
		function obtenerCompany_student($id){
		
			$dtcompany_student = new dtcompany_student;

			$lista =$dtcompany_student->consulta($id);
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
	}

?>