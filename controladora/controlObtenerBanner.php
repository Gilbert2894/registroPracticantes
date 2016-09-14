<?php
	include ("../../../data/dtConexion.php");
	include ("../../../data/dtBanner.php");
	include ("../../../dominio/banner.php");

	class controlObtenerBanner{
		
		function controlObtenerBanner(){
		}
	
		function obtenerBanners(){
		
			$dtBanner = new dtBanner;
			
			$lista =$dtBanner->consultas();
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
		
		function obtenerBanner($idBanner){
		
			$dtBanner = new dtBanner;

			$lista =$dtBanner->consulta($idBanner);
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
	}

?>