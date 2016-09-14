<?php
	include ("../../datos/dtUsuario.php");


	class controlObtenerUsuario{
		
		function controlObtenerUsuario(){
		}
	
		function obtenerUsuarios(){
		
			$dtUsuario = new dtUsuario;
			
			$lista =$dtUsuario->getUsuarios();
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
		
		function obtenerUsuario($idUsuario){
		
			$dtUsuario = new dtUsuario;

			$lista =$dtUsuario->getUsuario($idUsuario);
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
	}

?>