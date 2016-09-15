<?php	
	include ("../data/dtcompany_student.php");
	include ("../data/dtConexion.php");
	include ("../dominio/company_student.php");
	
	
	class controlCompany_student {
		
		function controlCompany_student(){
		}
	
		function insertar(){	
						
			$id= $_POST['id'];
			$carnet= $_POST['carnet'];
			$idCom= $_POST['idCom'];
			$id_user= $_POST['id_user'];
			
			$company_student = new company_student($id, $carnet, $idCom, $id_user);
			
			
			
			$dtcompany_student = new dtcompany_student;
			
			if($dtcompany_student->insertar($company_student)==true){	
				echo "<div class='alert alert-success' role='alert'>Registro grabado correctamente</div>";	
			}else{
				echo "</p>Error al guardar ".$id."</p><br>";
			}
		}
		
		function modificar(){
					
			$id= $_POST['id'];
			$carnet= $_POST['carnet'];
			$idCom= $_POST['idCom'];
			$id_user= $_POST['id_user'];
			
			$company_student = new company_student($id, $carnet, $idCom, $id_user);
			
			
			
			$dtcompany_student = new dtcompany_student;
			
			if($dtcompany_student->modificar($company_student)==true){		
				echo "Registro modificado correctamente<br>";
			}else{
				echo "</p>Error al modificar</p><br>";
			}
		}
		
		function eliminar(){
			
			$id= $_POST['id'];
			$dtcompany_student = new dtcompany_student;
			
			if($dtcompany_student->eliminar($id)==true){		
				echo "<div class='alert alert-success' role='alert'>Registro elimado correctamente</div>";
			}else{
				echo "</p>Error al eliminar</p><br>";
			}
		}
	}
	
	$op = $_POST['accion'];
	$control = new controlcompany_student;
	
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