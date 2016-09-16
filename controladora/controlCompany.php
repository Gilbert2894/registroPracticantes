<?php	
	include ("../data/dtCompany.php");
	include ("../data/dtConexion.php");
	include ("../dominio/company.php");
	
	
	class controlCompany {
		
		function controlCompany(){
		}
	
		function insertar(){
		
			
			
			$nameCom= $_POST['nameCom'];
			$addressCom= $_POST['addressCom'];
			$phoneCom= $_POST['phoneCom'];
			$emailCom= $_POST['emailCom'];
			
			$company = new company(0,$nameCom, $addressCom, $phoneCom, $emailCom);			
			
			
			$dtcompany = new dtcompany;
			
			if($dtcompany->insertar($company)==true){	
				echo "true";	
			}else{
				echo "false";
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
				echo "true";
			}else{
				echo "false";
			}
		}
		
		function eliminar(){
			
			$idCom= $_POST['idCom'];
			$dtcompany = new dtcompany;
			
			if($dtcompany->eliminar($idCom)==true){		
				echo "true";
			}else{
				echo "false";
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