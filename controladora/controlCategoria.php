<?php	
	include ("../data/dtCategoria.php");
	include ("../data/dtConexion.php");
	include ("../dominio/categoria.php");
	
	
	class controlCategoria {
		
		function controlCategoria(){
		}
	
		function insertar(){
		
			
			
			$idCategoria= $_POST['idCategoria'];
			$nombreCategoria= $_POST['nombreCategoria'];
			$descripcionCategoria= $_POST['descripcionCategoria'];
			
			$categoria = new categoria($idCategoria, $nombreCategoria, $descripcionCategoria);
			
			
			
			$dtCategoria = new dtCategoria;
			
			if($dtCategoria->insertar($categoria)==true){	
				echo "<div class='alert alert-success' role='alert'>Registro grabado correctamente</div>";	
			}else{
				echo "</p>Error al guardar ".$idCategoria."</p><br>";
			}
		}
		
		function modificar(){
					
			$idCategoria= $_POST['idCategoria'];
			$nombreCategoria= $_POST['nombreCategoria'];
			$descripcionCategoria= $_POST['descripcionCategoria'];
			
			$categoria = new categoria($idCategoria, $nombreCategoria, $descripcionCategoria);
			
			
			
			$dtCategoria = new dtCategoria;
			
			if($dtCategoria->modificar($categoria)==true){		
				echo "Registro modificado correctamente<br>";
			}else{
				echo "</p>Error al modificar</p><br>";
			}
		}
		
		function eliminar(){
			
			$idCategoria= $_POST['idCategoria'];
			$dtCategoria = new dtCategoria;
			
			if($dtCategoria->eliminar($idCategoria)==true){		
				echo "<div class='alert alert-success' role='alert'>Registro elimado correctamente</div>";
			}else{
				echo "</p>Error al eliminar</p><br>";
			}
		}
	}
	
	$op = $_POST['accion'];
	$control = new controlCategoria;
	
	if($op=="insertar"){
	$control->insertar();
	}
	if($op=="eliminar"){
	$control->eliminar();
	}
	if($op=="modificar"){
	$control->modificar();
	}
?>