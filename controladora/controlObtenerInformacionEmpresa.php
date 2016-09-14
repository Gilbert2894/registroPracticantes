<?php
	include ("../../../data/dtInformacionEmpresa.php");
	include ("../../../dominio/informacionEmpresa.php");
	include ("../../../data/dtConexion.php");


	class controlObtenerInformacionEmpresa{
		
		function controlObtenerInformacionEmpresa(){
		}
	
		function obtenerInformacionEmpresas(){
		
			$dtInformacionEmpresa = new dtInformacionEmpresa;
			
			$lista =$dtInformacionEmpresa->consultas();
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
		
		function obtenerInformacionEmpresa($idInformacionEmpresa){
		
			$dtInformacionEmpresa = new dtInformacionEmpresa;

			$lista =$dtInformacionEmpresa->getInformacionEmpresa($idInformacionEmpresa);
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
	}

?>