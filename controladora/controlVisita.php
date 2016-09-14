<?php
include ("../data/dtVisita.php");
include ("../data/dtConexion.php");

class controlVisita{

	function controlVisita(){
	}
	function modificar(){
				
		$dtVisita = new dtVisita;
		
		if($dtVisita->modificar()==true){		
			echo "Registro modificado correctamente<br>";
		}else{
			echo "</p>Error al modificar</p><br>";
		}
	}
}
	$op = $_POST['opcion'];
	$control = new controlVisita;
	
	if($op=="modificar"){
	$control->modificar();
	}
?>