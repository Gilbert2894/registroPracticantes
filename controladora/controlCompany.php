<?php	
	include ("../data/dtCompany.php");
	include ("../data/dtConexion.php");
	include ("../dominio/company.php");
	
	
	class controlCompany {
		
		function controlCompany(){
		}
	
		function insertar(){
		
			
			
			$idCom= $_POST['idCom'];
			$nameCom= $_POST['nameCom'];
			$addressCom= $_POST['addressCom'];
			$phoneCom= $_POST['phoneCom'];
			$emailCom= $_POST['emailCom'];
			
			$company = new company($idCom, $nameCom, $addressCom, $phoneCom, $emailCom);			
			
			
			$dtcompany = new dtcompany;
			
			if($dtcompany->insertar($company)==true){	
				echo "<div class='alert alert-success' role='alert'>Registro grabado correctamente</div>";	
			}else{
				echo "</p>Error al guardar ".$idCom."</p><br>";
			}
		}
		
		function modificar(){
					
			$idCom= $_POST['idCom'];
			$nameCom= $_POST['nameCom'];
			$addressCom= $_POST['addressCom'];
			$phoneCom= $_POST['phoneCom'];
			$emailCom= $_POST['emailCom'];
			
			$company = new company($idCom, $nameCom, $addressCom, $phoneCom, $emailCom);
			
			
			
			$dtcompany = new dtcompany;
			
			if($dtcompany->modificar($company)==true){		
				echo "Registro modificado correctamente<br>";
			}else{
				echo "</p>Error al modificar</p><br>";
			}
		}
		
		function eliminar(){
			
			$idCom= $_POST['idCom'];
			$dtcompany = new dtcompany;
			
			if($dtcompany->eliminar($idCom)==true){		
				echo "<div class='alert alert-success' role='alert'>Registro elimado correctamente</div>";
			}else{
				echo "</p>Error al eliminar</p><br>";
			}
		}
	}
	
	$op = $_POST['accion'];
	$control = new controlcompany;
	
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