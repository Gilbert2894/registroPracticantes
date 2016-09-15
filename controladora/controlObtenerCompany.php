<?php
	include ("../../../data/dtCompany.php");
	include ("../../../dominio/company.php");
	include ("../../../data/dtConexion.php");


	class controlObtenerCompany{
		
		function controlObtenerCompany(){
		}
	
		function obtenerCompanys(){
		
			$dtCompany = new dtCompany;
			
			$lista =$dtCompany->consultas();
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
		
		function obtenerCompany($idCom){
		
			$dtCompany = new dtCompany;

			$lista =$dtCompany->consulta($idCom);
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
	}

?>