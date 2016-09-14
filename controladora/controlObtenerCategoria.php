<?php
	include ("../../../data/dtCategoria.php");
	include ("../../../dominio/categoria.php");
	include ("../../../data/dtConexion.php");


	class controlObtenerCategoria{
		
		function controlObtenerCategoria(){
		}
	
		function obtenerCategorias(){
		
			$dtCategoria = new dtCategoria;
			
			$lista =$dtCategoria->consultas();
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
		
		function obtenerCategoria($idCategoria){
		
			$dtCategoria = new dtCategoria;

			$lista =$dtCategoria->consulta($idCategoria);
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
	}

?>