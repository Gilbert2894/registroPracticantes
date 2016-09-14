<?php
	header('Content-Type: text/html; charset=ISO-8859-1');
	
	include ("../data/dtVisita.php");
	include ("../data/dtConexion.php");

	class controlObtenerVisita{
		
		function controlObtenerVisita(){
		}
	
		function obtenerVisitas(){
		
			$dtVisita = new dtVisita;
			
			$lista =$dtVisita->mostrarContador();
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
	}

?>