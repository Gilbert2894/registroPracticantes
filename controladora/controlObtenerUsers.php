<?php
	include ("../../../data/dtusers.php");
	include ("../../../dominio/users.php");
	include ("../../../data/dtConexion.php");


	class controlObtenerUsers{
		
		function controlObtenerUsers(){
		}
	
		function obtenerUserss(){
		
			$dtusers = new dtusers;
			
			$lista =$dtusers->consultas();
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
		
		function obtenerUsers($id){
		
			$dtusers = new dtusers;

			$lista =$dtusers->consulta($id);
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
	}

?>