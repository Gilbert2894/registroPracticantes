<?php
	include ("../../../data/dtProducto.php");
	include ("../../../data/dtCategoria.php");
	include ("../../../data/dtConexion.php");

	include ("../../../dominio/categoria.php");
	include ("../../../dominio/producto.php");

	class controlObtenerProducto{
		
		function controlObtenerProducto(){
		}
	
		function obtenerProductos(){
		
			$dtProducto = new dtProducto;
			
			$lista =$dtProducto->getProductos();
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
		
		function obtenerProducto($codigoProducto){
		
			$dtProducto = new dtProducto;

			$lista =$dtProducto->consulta($codigoProducto);
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}

		function obtenerProductoModificar($codigoProducto){
		
			$dtProducto = new dtProducto;

			$producto =$dtProducto->consultaModificar($codigoProducto);
			
			if(!$producto){
				return false;
			}else{
				return $producto;
			}
		}

		

		function obtenerProductoCompartir($codigoProducto){
		
			$dtProducto = new dtProducto;

			$producto =$dtProducto->consultaCompartir($codigoProducto);
			
			if(!$producto){
				return false;
			}else{
				return $producto;
			}
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

		function obtenerGaleria(){		
			$dtProducto = new dtProducto;			
			$lista =$dtProducto->galeria();			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}

		function obtenerGaleriaCategoria($id){		
			$dtProducto = new dtProducto;			
			$lista =$dtProducto->galeriaCategoria($id);			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
		function obtenerProductosCotizar(){
		
			$dtProducto = new dtProducto;
			
			$lista =$dtProducto->consultaCotizar();
			
			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}


	}//class




?>